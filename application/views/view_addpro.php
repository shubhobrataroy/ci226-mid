
<h1>Add Products</h1>

<form name="addcat" method="post">
	<input name="pname" placeholder="Product Name" /><br/><br/>
		<select name="cat" placeholder="Category">
			<option value='Formal' >Formal</option>
			<option value='Regular' >Regular</option>
			<option value='Sport' >Sport</option>
		</select><br/><br/>
	<input name="qty" placeholder="Quantity"><br/><br/>
	<input name="price" placeholder="Price"><br/><br/>
	<input type="submit" name="buttonSubmit"/>
	<a href="http://localhost/ci226/product/">Go Back</a>
	<label><?php echo $message; ?></label>
</form>