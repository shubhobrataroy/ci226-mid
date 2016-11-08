<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
  public function validate($username, $password)
  {
  	$sql = "select * from user_list where username='" + $username + "' and password='"+$password+"'";
  	$this->load->database();
  	if(sizeof($this->db->query($sql))>=0)
  		return true;

  	else
  	   return false;	
  }
}                             