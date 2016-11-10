<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array (
	'addpro' => array (
		array(
		        'field' => 'pname',
		        'label' => 'Product Name',
		        'rules' => 'required|is_unique[products.name]'
		     ),
		array(
		        'field' => 'cat',
		        'label' => 'Product Category',
		        'rules' => 'required'
		     ),
		array(
		        'field' => 'qty',
		        'label' => 'Product Quantity',
		        'rules' => 'numberic|required'
		     ),
	    array(
		        'field' => 'price',
		        'label' => 'Product Price',
		        'rules' => 'numberic|required'
		     ),	 	 
		)
);
