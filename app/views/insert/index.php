<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Please Add the details of New Course</h1>

            </div>
        </div>
    </div>
	
<div class="row">
    <div class="col-sm-auto">
		<form action="insert/insertCourse" method="post" >
		<fieldset>
			<div class="form-group">
				<label for="name">Enter the Department Name</label>
				<input required type="text" class="form-control" name="department" id="department" required>
			</div>
			<div class="form-group">
				<label for="name">Enter the Program Name</label>
				<input required type="text" class="form-control" name="program" id="program" required>
			</div>
			<div class="form-group">
				<label for="name">Enter the Course ID</label>
				<input required type="text" class="form-control" name="courseid" id="courseid" required>
			</div>
			<div class="form-group">
				<label for="name">Enter the Course Name</label>
				<input required type="text" class="form-control" name="coursename" id="coursename" required>
			</div>
		  <button type="submit" style="background-color:  #ba4a00" class="btn btn-primary">Add</button>
		</fieldset>
		</form> 
	</div>
</div>
    <?php require_once 'app/views/templates/footer.php' ?>
