<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$this->load->library('session');
if( $this->session->userdata('username')==null) exit('Not allowed');
?>


<h1>Welcome</h1>
<h3>Accounts Portal</h3>
<h3>Logged as <?php echo $this->session->userdata('username') ?> </h3>

<ul>
    <li><a href="">Transaction</a></li>
    <li><a href="">Product Inventory (search, Delete, Edit, Update)</a></li>
    <li><a href="">View Sales Report(Monthly, Yearly, Daily)</a></li>
    <li><a href="">Sales History(To date)</a></li>
    <li><a href="">Manage Users</a></li>
</ul>

<a href="http://localhost/ci226/welcome/logout">Logout</a>
