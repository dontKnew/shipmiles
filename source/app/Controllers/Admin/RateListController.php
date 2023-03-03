<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CountryModel;
use App\Models\RateListModel;
use App\Models\ServiceModel;


class RateListController extends BaseController
{
    public function index()
    {
        $result_number  = 15;
        if($this->request->getPostGet()){
            $result_number = $this->request->getVar("result_number");
        }
        $RateListModel = new RateListModel();
        $rateList = $RateListModel->select("ratelist.*, csc_country.name as country, service.name as service")
            ->join("csc_country", "csc_country.id=ratelist.country")
            ->join("service", "service.id=ratelist.service")
            ->orderBy("id","desc")->paginate($result_number);

        $pager['pagination'] = $RateListModel->pager->getDetails();
        $pager['pagination']['path'] = $RateListModel->pager->getPageURI();
        $pager['pagination']['get_last_page'] = $RateListModel->pager->getLastPage();

        $data = array(
            "rateList"=>"active",
            "data"=>$rateList,
            "pager"=>$pager,
            'RateListCount'=>count($RateListModel->findAll())
        );

        return view("admin/ratelist/index", $data);
    }

    public function add(){

        if($this->request->getPostGet()){
            $session = session();
            try {

                $data = $this->request->getVar();
                $data['charge'] = $this->chargeToJson($data['charge']);
                $RateListModel = new RateListModel();
                $RateListModel->save($data);
                $session->setFlashdata("msg","Ratelist add successfully");
                return redirect()->route("admin/ratelist");
            }catch (\Exception $e){
                $session->setFlashdata("err","Error : ".$e->getMessage());
                return redirect()->back();
            }
            return redirect()->route("admin/ratelist");
        }
        $data['country_list'] = (new CountryModel)->orderBy("name", 'asc')->findAll();
        $data['service_list'] = (new ServiceModel)->orderBy("name", 'asc')->findAll();
        return view("admin/ratelist/add", $data);
    }

    public function update($id){
            $session = session();
            $RateListModel = new RateListModel();
            $RateListModelData= $RateListModel->where("deleted_at", null)->find($id);
            if($this->request->getPostGet()){
                try {
                    $data = $this->request->getVar();
                    $data['id'] = $id;
                    $data['charge'] = $this->chargeToJson($data['charge']);
                    $RateListModel->save($data);
                    $session->setFlashdata("msg","Ratelist updated successfully");
                    return redirect()->route("admin/ratelist");
                }catch (\Exception $e){
                    $session->setFlashdata("err","Error : ".$e->getMessage());
                    return redirect()->back();
                }
                return redirect()->route("admin/ratelist");
            }else {
                $data['data'] = $RateListModelData;
                $data['data']['charge'] = $this->jsonToCharge($data['data']['charge']);

                $data['country_list'] = (new CountryModel)->orderBy("name", 'asc')->findAll();
                $data['service_list'] = (new ServiceModel)->orderBy("name", 'asc')->findAll();
                return view("admin/ratelist/edit", $data);
            }
    }

    public function view($id){
        $RateListModel = new RateListModel();
        $data = $RateListModel->select("charge")->find($id);

        $data['data']['charge'] = json_decode($data['charge'], true);
        return view("admin/ratelist/view", $data);
    }

    public function delete($id){
        $session = session();
        try {
            $RateListModel = new RateListModel();
            $RateListModel->delete($id);
            $session->setFlashdata("err","Ratelist has been Deleted");
            return redirect()->route("admin/ratelist");
        }catch(\Exception $e){
            $session->setFlashdata("err","Error : ".$e->getMessage());
            return redirect()->route("admin/ratelist");
        }
    }

    private function chargeToJson($input){
        $parts = explode(",", $input);
        $output = array();
        foreach ($parts as $part) {
            $keyValue = explode("=", $part);
            $output[$keyValue[0]] = $keyValue[1];
        }
        return json_encode($output);
    }

    private function jsonToCharge($json){
        $data = json_decode($json, true);
        $output = array();
        foreach ($data as $key => $value) {
            $key = $key;
            $output[] = "$key=$value";
        }
        return implode(",", $output);
    }

}
