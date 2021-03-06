<?php
session_start();
require_once '../../vendor/autoload.php';

use Elearn\Auth\Authentication as Auth;
use Elearn\Auth\Redirect;

$student   = new Auth;
$home_url = '../../../index.php'; // redirect link
$result = array();

if (isset($_POST['password'])){
  $password 	  = $_POST['password'];
  $id 		    = $_COOKIE['student'];

  if ($student->updatePassword($password, $id))	{
      $result['valid'] = 'success';
      echo json_encode($result);
  }
} else {
		Redirect::to($home_url); // for direct acces to this file
}
