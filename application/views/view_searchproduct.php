
<h1>Search Productss</h1>

<form name="searchpro" method="post">
	<input name="pname" placeholder="Product Name" /><br/><br/>
	<input type="submit" name="buttonSubmit"/>
	<a href="http://localhost/ci226/product/">Go Back</a>
</form>

<table border="1">
		<tr>
			<th>Name</th>
			<th>Quantity</th>
			<th>Price</th>
			<th>Category</th>
			<th colspan="2">ACTIONS</th>
		</tr>
	<?php
		foreach($searchresult as $sr){
	?>
		<tr>
			<td><?php echo $sr['name']; ?></td>
			<td><?php echo $sr['price']; ?></td>
			<td><?php echo $sr['quantity']; ?></td>
			<td><?php echo $sr['category']; ?></td>
			<td><a href="/ci226/product/edit/<?php echo $sr['name']; ?>">Edit</a></td>
			<td><a href="/ci226/product/delete/<?php echo $sr['name']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>