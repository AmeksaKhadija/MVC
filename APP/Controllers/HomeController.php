<?php

include '../Controller.php';
include '../Models/User.php';

class HomeController extends Controller
{

    public function index()
    {
        $users =new User('firstname','lastname');
        $this->render('index', ['users' => $users]);
    }
}