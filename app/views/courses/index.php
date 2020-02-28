<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:  #ba4a00" >Departments</h1>
                <p class="lead">Click any below department for more details</p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>  <?php 
	foreach($data[departments] as $department)
	{
		echo '<p><a style="color:  #ba4a00" href="/courses/'.$department[department].'">'.$department[department].'</a></p>';
	}
	?>
				
			</p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
