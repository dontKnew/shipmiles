<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CountryModel;
use App\Models\ServiceModel;


class CountryController extends BaseController
{
    public function index()
    {
        $result_number  = 15;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $countryModel = new CountryModel();
        $country = $countryModel->orderBy("name","asc")->paginate($result_number);

        $pager['pagination'] = $countryModel->pager->getDetails();
        $pager['pagination']['path'] = $countryModel->pager->getPageURI();
        $pager['pagination']['get_last_page'] = $countryModel->pager->getLastPage();

        $data = array(
            "country"=>"active",
            "data"=>$country,
            "pager"=>$pager,
            'countryCount'=>count($countryModel->findAll())
        );

        return view("admin/country/index", $data);
    }

    public function add(){

        if($this->request->getPostGet()){
            $session = session();
            try {

                $data = $this->request->getVar();
                $data['flag'] = $this->uploadFile("flag", "backend/flag/");

                $country = new CountryModel();
                $country->save($data);
                $session->setFlashdata("msg","Country add successfully");
                return redirect()->route("admin/country");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
                return redirect()->back();
            }
            return redirect()->route("admin/country");
        }

        return view("admin/country/add");
    }

    public function update($id){
            $session = session();
            $country = new CountryModel();
            $countryData= $country->where("deleted_at", null)->find($id);
            if($this->request->getPostGet()){
                try {
                    $data = $this->request->getVar();
                    $data['id'] = $id;

                    $data['flag'] = $this->uploadFile("flag", "backend/flag/", $countryData['flag']);

                    $country->save($data);
                    $session->setFlashdata("msg","Country updated successfully");
                    return redirect()->route("admin/country");
                }catch (\Exception $e){
                    $session->setFlashdata("err","Error : ".$e->getMessage());
                    return redirect()->back();
                }
                return redirect()->route("admin/country");
            }else {
                $data = array(
                    "country"=>"active",
                    "data"=>$countryData
                );
                return view("admin/country/edit", $data);
            }
    }

    public function delete($id){
        $session = session();
        try {
            $country = new CountryModel();
            $country->delete($id);
            $session->setFlashdata("err","Country has been Deleted");
            return redirect()->route("admin/country");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/country");
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
