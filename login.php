	<?php
require_once('header.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

include 'user.php';
is_validate_user($_POST['username'],$_POST['password']);
}

?>
 <div class="container">
  <form action="login.php" method="post">

    <label for="fname">User Name</label>
    <input type="text" id="username" name="username" placeholder="Your Userid.." required>

    <label for="lname">Password</label>
    <input type="password" id="password" name="password" placeholder="Your Password.." required>
    <input type="submit" value="Submit">

  </form>
</div> 
<?php
	require_once('footer.php');
?>