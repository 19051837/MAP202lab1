<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Add new course</h1>

                <!--<p class="lead"><a href="/login/register"> Sign up here </a></p>-->
            </div>
        </div>
    </div>
	
<div class="row">
    <div class="col-sm-auto">
		<form action="insert/save" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Department Name</label>
				<input required type="text" class="form-control" name="department" id="department">
			</div>
			<div class="form-group">
				<label for="name">Program Name</label>
				<input required type="text" class="form-control" name="program" id="program">
			</div>
			<div class="form-group">
				<label for="name">Course ID</label>
				<input required type="text" class="form-control" name="courseid" id="courseid">
			</div>
			<div class="form-group">
				<label for="name">Course Name</label>
				<input required type="text" class="form-control" name="coursename" id="coursename" >
			</div>
		  <button type="submit" class="btn btn-primary">Save</button>
		</fieldset>
		</form> 
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
