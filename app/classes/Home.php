<?php


namespace App\classes;
use App\classes\Database;

class Home
{
    public function index()
    {
        header('Location:action.php?page=home');
    }
}