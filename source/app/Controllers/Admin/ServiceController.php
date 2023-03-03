<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ServiceModel;


class ServiceController extends BaseController
{
    public function index()
    {
        $result_number  = 15;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $serviceModel = new ServiceModel();
        $service = $serviceModel->orderBy("id","desc")->paginate($result_number);

        $pager['pagination'] = $serviceModel->pager->getDetails();
        $pager['pagination']['path'] = $serviceModel->pager->getPageURI();
        $pager['pagination']['get_last_page'] = $serviceModel->pager->getLastPage();

        $data = array(
            "service"=>"active",
            "data"=>$service,
            "pager"=>$pager,
            'serviceCount'=>count($serviceModel->findAll())
        );

        return view("admin/service/index", $data);
    }

    public function add(){

        if($this->request->getPostGet()){
            $session = session();
            try {

                $data = $this->request->getVar();
                $data['logo'] = $this->uploadFile("logo", "backend/img/service/");
                $service = new ServiceModel();
                $service->save($data);
                $session->setFlashdata("msg","Service add successfully");
                return redirect()->route("admin/service");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
                return redirect()->back();
            }
            return redirect()->route("admin/service");
        }
        return view("admin/service/add");
    }

    public function update($id){
            $session = session();
            $service = new ServiceModel();
            $serviceData= $service->where("deleted_at", null)->find($id);
            if($this->request->getPostGet()){
                try {
                    $data = $this->request->getVar();
                    $data['id'] = $id;

                    $data['logo'] = $this->uploadFile("logo", "backend/img/service/", $serviceData['logo']);

                    $service->save($data);
                    $session->setFlashdata("msg","Service updated successfully");
                    return redirect()->route("admin/service");
                }catch (\Exception $e){
                    $session->setFlashdata("err","Error : ".$e->getMessage());
                    return redirect()->back();
                }
                return redirect()->route("admin/service");
            }else {
                $data = array(
                    "service"=>"active",
                    "data"=>$serviceData
                );
                return view("admin/service/edit", $data);
            }
    }

    public function delete($id){
        $session = session();
        try {
            $service = new ServiceModel();
            $service->delete($id);
            $session->setFlashdata("err","Service has been Deleted");
            return redirect()->route("admin/service");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/service");
        }
    }

    public function uploadFile(string $input_name, $path, $old_image_name=null)
    {

        if (isset($_FILES[$input_name]['name']) && $_FILES[$input_name]['name'] !== "") {
            /*check image is valid or not*/
            $validationRule = [
                $input_name => [
                    'rules' => 'uploaded[' . $input_name . ']'
                        . '|is_image[' . $input_name . ']'
                        . '|mime_in[' . $input_name . ',image/jpg,image/jpeg,image/gif,image/png,image/webp, image/svg]'
                ],
            ];
            if (!$this->validate($validationRule)) {
                echo "Please uploaded valid logo of service";
                exit;
            } else {
                $file = $this->request->getFile($input_name);
                $randomName = $file->getRandomName();
                $name = $this->request->getVar("iso2"). "_" . $randomName;
                $file->move($path, $name);
                @unlink($path . "/" . $old_image_name);
                return $name;
            }
        } else {
            return $old_image_name;
        }
    }


}
