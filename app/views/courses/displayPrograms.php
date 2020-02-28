<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Programs</h1>
				<p class="lead">Department is <b><?=$data['department']?></b></p>
				 <p >Please select below programs for further details </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>  <?php 
	foreach($data[programs] as $program)
	{
		echo '<p><a href="/courses/'.$data['department'].'/'.$program[program].'">'.$program[program].'</a></p>';
	}
	?>
				
			</p>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
