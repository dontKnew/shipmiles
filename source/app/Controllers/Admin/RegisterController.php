<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

use App\Models\AdminModel;

class RegisterController extends BaseController
{
    public function index()
    {

        $data = [
            "email"=>"admin@shipmiles.com",
            "password"=>password_hash("admin@shipmiles.com", PASSWORD_ARGON2ID),
            "name"=>"Private Admin",
            "profile"=>"download_1677585592_4ba1e04837ae85f83662.jpg"
        ];
        (new AdminModel)->save($data);
        return "registered admin";
    }
}
