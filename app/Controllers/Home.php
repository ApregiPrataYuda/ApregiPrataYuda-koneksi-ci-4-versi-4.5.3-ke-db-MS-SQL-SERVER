<?php

namespace App\Controllers;
use App\Models\UserModel;
class Home extends BaseController
{
    protected $UserModel;
    public function __construct() {
        $this->UserModel = new UserModel();
    }
    public function index()
    {
     
       $x = $this->UserModel->find();
       dd($x);
        // return view('welcome_message');
        
    }
}
