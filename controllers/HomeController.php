<?php

require_once "BaseController.php";
require_once "models/User.php";

class HomeController extends BaseController
{
    public function index()
    {
        header("location:./books");
    }
}
