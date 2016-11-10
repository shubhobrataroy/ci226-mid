<?php

class Transaction_model extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      $this->load->database();
  }

    public function getHistory()
  {
      $sql = "select * from user_list transaction";

      $result=$this->db->query($sql);

      return $result->result();
  }

  public function insert($transaction_to,$amount,$transaction_recieved_by,$description)
  {
    $sql= "INSERT INTO transaction VALUES ('".$transaction_to."',".$amount.",'".$transaction_recieved_by."','".$description."',null)";
    $this->db->query($sql);
    $balance = $this->get_balance();
    $this->update_balance($balance-$amount);

  }

  public function update($column_name , $value, $id )
  {
    if(gettype($value)!="integer")
      $sql= "UPDATE transaction SET ".$column_name."='". $value."' WHERE id=".$id;
    else
        $sql= "UPDATE transaction SET ".$column_name."=". $value." WHERE id=".$id;
      $this->db->query($sql);
  }

  public function update_balance($value)
  {
      $this->load->library('session');
      $sql= "UPDATE account SET balance=". $value.",Last_Updated=now()".",Updated_By='".$this->session->userdata('username')."' WHERE id=1";
      $this->db->query($sql);
  }

  public function balance_check($ammount)
  {
      $sql="select balance from account where id=1";

      $result=$this->db->query($sql);

      foreach ($result->result() as $row)
      {
         $balance = (integer) $row->balance;
         if(($balance-$ammount)>=0)
             return true;
          else
              return false;
      }
  }

    public function get_balance()
    {
        $sql="select balance from account where id=1";

        $result=$this->db->query($sql);

        foreach ($result->result() as $row)
        {
            $balance = (integer) $row->balance;
            return $balance;
        }
    }

    public function get_last_updated()
    {
        $sql="select last_updated from account where id=1";

        $result=$this->db->query($sql);

        foreach ($result->result() as $row)
        {
            return $row->last_updated;

        }
    }

    public function get_history()
    {
        $sql="select * from transaction";

        $result=$this->db->query($sql);

        return $result->result_array();
    }
}