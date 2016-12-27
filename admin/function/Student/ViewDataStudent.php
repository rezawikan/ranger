<?php
session_start();
require_once '../../vendor/autoload.php';

use Elearn\Student\Student;
use Elearn\Auth\Redirect;


$admin = new Student;

if (isset($_COOKIE['admin'])) {
    $response  = $admin->ViewDataStudent();
} else {
    Redirect::to('index.php'); // for direct acces to this file
}
