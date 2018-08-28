<?php

/**
 *
 */
class Question_model extends CI_Model
{

  public function __construct()
  {
    $this->load->database();
  }

  public function getallquestions(){

    $this->db->from('tbl_questions');

    $query = $this->db->get();

    if($query->num_rows() > 0){

      return $query->result_array();

    }else{

      return 0;

    }

  }

}
