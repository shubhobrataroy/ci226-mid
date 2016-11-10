<!DOCTYPE html>
<html lang="en">
<head>
	
</head>
<body>
	<h1>ALL Products</h1>
	<a href="http://localhost/ci226/product/">Go Back</a>
	<a href="http://localhost/ci226/product/searchproduct">Search</a>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Category</th>
			<th colspan="2">ACTIONS</th>
		</tr>
	<?php
		foreach($pros as $pro){
	?>
		<tr>
			<td><?php echo $pro['name']; ?></td>
			<td><?php echo $pro['price']; ?></td>
			<td><?php echo $pro['quantity']; ?></td>
			<td><?php echo $pro['category']; ?></td>
			<td><a href="/ci226/product/edit/<?php echo $pro['name']; ?>">Edit</a></td>
			<td><a href="/ci226/product/delete/<?php echo $pro['name']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>


