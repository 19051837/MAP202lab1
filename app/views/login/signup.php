<?php require_once 'app/views/templates/headerPublic.php' ?>
<style>
  label
  {
    color:black;
    opacity:1.0;
  }
  .container
  {
    margin: 50px 50px 50px 50px;
  }
  form
  {
    background-color:#FF1493;
    padding: 10px 15px 15px 15px;
    opacity:.7;
    width:40%;
  }
</style>
<main role="main" class="container">
  <div class="page-header" id="banner">
    <div class="row">
      <div class="col-lg-12">
        <h1>
          <strong>Please Enter the details
          </strong>
        </h1>
        <p class="lead"> 
          <?= date("F jS, Y"); ?>
        </p>
      </div>
    </div>
  </div>
  <style>
    body 
    {
      background-image: url("https://vistapointe.net/images/trolls-wallpaper-20.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
  <div class="row">
    <div class="col-lg-12">
      <form class="form-horizontal" action="/login/validateUser" method="post">
        <fieldset>
          <div class="form-group">
            <label for="username" class="col-lg-2 control-label text-sucess">Username
            </label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
          </div>
          <div class="form-group">
            <label for="password"  id="psw" name="psw" class="col-lg-2 control-label">Password
            </label>
            <div class="col-lg-10">
              <input type="password" class="form-control" name="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,}$" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters and a specialCharacter" required>
            </div>
          </div>	
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="submit" class="btn btn-primary">Sign Up
              </button>
              <button type="button" class="btn btn-primary" onclick="window.location.href='/login'">Login
              </button>
            </div>
          </div>
        </fieldset>
        <?php 
if ($data['isValidUser']=="No") { ?>
        <div class="row">
          <div class="col-sm-auto">		
            <div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;
              </button>
              <p>
                <?php echo $data['displayMessage']; ?> 
              <p>
              </p>
            </div>
          </div>
        </div>
        <?php }
else if ($data['isValidUser']=="Yes")
{ ?>
        <div class="row">
          <div class="col-sm-auto">		
            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;
              </button>
              <p>
                Congratulations !!!!! You are sucessfully Registered 
              </p>
            </div>
          </div>
        </div>
        <?php } ?>
      </form>
    </div>
  </div>
  <?php require_once 'app/views/templates/footer.php' ?>
