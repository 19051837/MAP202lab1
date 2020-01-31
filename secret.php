	<?php
require_once('header.php');
//session_start();

if($_SESSION['isAuthenticated']!=1)
{
	
	header('Location: /login.php');
}

?>

<div class="container">
 <p>
	<h1>
		 <?php echo "Welcome  ".$_SESSION['username']; ?>
	</h1> 
</p>
 
</div> 
<?php
	require_once('footer.php');
?>