<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Departments</h1>
                <p class="lead">Select any below department for further details </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>  <?php 
	foreach($data[departments] as $department)
	{
		echo '<p><a href="/courses/'.$department[department].'">'.$department[department].'</a></p>';
	}
	?>
				
			</p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
