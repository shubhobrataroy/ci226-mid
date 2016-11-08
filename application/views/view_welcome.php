<html>

<h1>Welcome !!</h1>
<br>
<h5>Please Login to proceed </h5>

<br>

<form action="welcome/" method="post">
 
<input type="text" name="name" placeholder="Username" /> <?php echo form_error('name'); ?>
<br>
<input type="text" name="password" placeholder="password" /> <?php echo form_error('password'); ?>
<br>
<input type="submit" value="Login" />

</form>
<h6><?php if($message!="") echo "Wrong Username/Password"?></h6>
</html>
