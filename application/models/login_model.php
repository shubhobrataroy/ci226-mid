<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function validate($username, $password)
  {
  	$sql = "select * from user_list where username='" . $username . "' and password='".$password."'";

  	$this->load->database();
  	$result=$this->db->query($sql);
    $i=0;
    foreach ($result->result() as $row )
      {
         $i++;
      }

    if($i>0) return true;

    return false;

  }
}                             