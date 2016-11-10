<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends CI_Model {
	
	public function insert($name, $price, $qty ,$cat)
	{
		$sql = "INSERT INTO products VALUES ('$name', '$price', '$qty', '$cat')";
		$this->load->database();
		$this->db->query($sql);
	}
	public function getAll()
	{
		$sql = "SELECT * FROM products";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	public function search($name)
	{
		$sql = "SELECT * FROM products where name like '%$name%'";
		$this->load->database();
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	public function update_name($name, $category)
	{
		$sql = "UPDATE products SET name='$name' WHERE category='$category'";
		$this->load->database();
		$this->db->query($sql);
	}
	public function update_quantity($name, $quantity)
	{
		$sql = "UPDATE products SET quantity='$quantity'  WHERE name='$name'";
		$this->load->database();
		$this->db->query($sql);
	}
	public function update_price($name, $price)
	{
		$sql = "UPDATE products SET price='$price' WHERE name='$name'" ;
		$this->load->database();
		$this->db->query($sql);
	}
	public function delete($name)
	{
		$sql = "DELETE FROM products WHERE name='$name'";
		$this->load->database();
		$this->db->query($sql);
	}
}