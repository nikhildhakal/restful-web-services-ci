<?php

use Restserver\Libraries\REST_Controller;
require(APPPATH.'/libraries/REST_Controller.php');

/**
 *
 */
class QuestionApi extends REST_Controller
{

  function __construct()
  {

    parent::__construct();

    $this->load->model('question_model');

  }

  //Fetch all questions
  function questions_get()
  {

    $result = $this->question_model->getallquestions();

    if ($result) {

      $this->response($result, 200);
    }
    else
    {

      $this->response("No record found", 404);
    }

  }

}
