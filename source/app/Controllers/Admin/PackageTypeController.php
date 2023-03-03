<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PackageTypeModel;


class PackageTypeController extends BaseController
{
    public function index()
    {
        $result_number  = 15;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $packageTypeModel = new PackageTypeModel();
        $packageType = $packageTypeModel->orderBy("id","desc")->paginate($result_number);

        $pager['pagination'] = $packageTypeModel->pager->getDetails();
        $pager['pagination']['path'] = $packageTypeModel->pager->getPageURI();
        $pager['pagination']['get_last_page'] = $packageTypeModel->pager->getLastPage();

        $data = array(
            "packageType"=>"active",
            "data"=>$packageType,
            "pager"=>$pager,
            'countryCount'=>count($packageTypeModel->findAll())
        );

        return view("admin/package-type/index", $data);
    }

    public function add(){

        if($this->request->getPostGet()){
            $session = session();
            try {

                $data = $this->request->getVar();


                $packageTypeModel = new PackageTypeModel();
                $packageTypeModel->save($data);
                $session->setFlashdata("msg","Package Type add successfully");
                return redirect()->route("admin/package-type");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
                return redirect()->back();
            }
            return redirect()->route("admin/package-type");
        }
//        dd("get");
        return view("admin/package-type/add");
    }

    public function update($id){
            $session = session();
            $packageTypeModel = new PackageTypeModel();
            $packageTypeModelData= $packageTypeModel->where("deleted_at", null)->find($id);
            if($this->request->getPostGet()){
                try {
                    $data = $this->request->getVar();
                    $data['id'] = $id;

                    $packageTypeModel->save($data);
                    $session->setFlashdata("msg","Package Type updated successfully");
                    return redirect()->route("admin/package-type");
                }catch (\Exception $e){
                    $session->setFlashdata("err","Error : ".$e->getMessage());
                    return redirect()->back();
                }
                return redirect()->route("admin/package-type");
            }else {
                $data = array(
                    "packageType"=>"active",
                    "data"=>$packageTypeModelData
                );
                return view("admin/package-type/edit", $data);
            }
    }

    public function delete($id){
        $session = session();
        try {
            $packageTypeModel = new PackageTypeModel();
            $packageTypeModel->delete($id);
            $session->setFlashdata("err","Package Type has been Deleted");
            return redirect()->route("admin/package-type");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/package-type");
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
                echo "Please uploaded valid flag of country";
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
