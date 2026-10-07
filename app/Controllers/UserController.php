<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();
        
        // Retrieve the single demo user row
        $data['user'] = $userModel->first();
        $data['title'] = "User Profile View";

        return view('profile', $data);
    }
}
