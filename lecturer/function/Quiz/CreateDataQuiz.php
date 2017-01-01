<?php
session_start();
require_once '../../vendor/autoload.php';

use Elearn\Quiz\Quiz;
use Elearn\Auth\Redirect;


$lecturer = new Quiz;

if (isset($_COOKIE['tutors'],
          $_POST['courses_id'],
          $_POST['question'],
          $_POST['answer_a'],
          $_POST['answer_a'],
          $_POST['answer_c'],
          $_POST['answer']
)) {
    $courses_id = $_POST['courses_id'];
    $question   = $_POST['question'];
    $answer_a   = $_POST['answer_a'];
    $answer_b   = $_POST['answer_b'];
    $answer_c   = $_POST['answer_c'];
    $answer_d   = $_POST['answer_d'];
    $answer     = $_POST['answer'];
    $response   = $lecturer->createDataQuestion($question, $answer_a, $answer_b, $answer_c, $answer_d, $answer, $courses_id);

    if ($response == true){
        $result['success'] = 'success';
    } else {
        $result['failed'] = 'failed';
    }

    echo json_encode($result);
} else {
    Redirect::to('index.php'); // for direct acces to this file
}

// var_dump($_POST);
