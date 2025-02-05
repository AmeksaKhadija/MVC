<?php

include '../Controller.php';
include '../Models/User.php';

class HomeController extends Controller
{

    public function index()
    {
        $users =new User('ameksa','khadija');
        $this->render('index', ['users' => $users]);
    }
}