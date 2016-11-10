<?php

/**
 * Created by PhpStorm.
 * User: shubh
 * Date: 11/9/2016
 * Time: 8:38 PM
 */
class Transaction extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('transaction_model');

    }

   public function index()
   {
       $data['current_balance']=$this->transaction_model->get_balance();
       $data['last_updated']=$this->transaction_model->get_last_updated();

       $data['message']='';

       $this->load->view('view_transaction',$data);
   }

   public function transaction_view()
   {
       $data['current_balance']=$this->transaction_model->get_balance();
       $data['last_updated']=$this->transaction_model->get_last_updated();

       $data['message']='';
       $data['transaction']='ok';



       $this->load->view('view_transaction',$data);
   }

    public function transaction_history()
    {

        $data['current_balance']=$this->transaction_model->get_balance();
        $data['last_updated']=$this->transaction_model->get_last_updated();

        $data['message']='';
        $history=$this->transaction_model->get_history();
        $data['history']=$history;
        $this->load->view('view_transaction',$data);
    }

    public function initiate_transaction()
    {

        $data['current_balance']=$this->transaction_model->get_balance();
        $data['last_updated']=$this->transaction_model->get_last_updated();
        $data['transaction']='ok';


            $transaction_to = $this->input->post('transaction_to');
            $amount = (integer)$this->input->post('amount');
            $recieved_by = $this->input->post('recieved_by');
            $description = $this->input->post('description');

            if($this->transaction_model->balance_check($amount)== false)
            {
                $data['message']="Insufficient Balance";
                $this->load->view('view_transaction',$data);
            }

            else{
                $data['current_balance']=$this->transaction_model->get_balance();
                $data['last_updated']=$this->transaction_model->get_last_updated();
                $data['message']="Transaction Successful";
                $this->load->view('view_transaction',$data);

                $this->transaction_model-> insert($transaction_to,$amount,$recieved_by,$description);

            }

    }
}