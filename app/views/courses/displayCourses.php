<?php require_once 'app/views/templates/header.php' ?>
<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1 style="color:  #ba4a00">Courses</h1>
                <p class="lead">Below are the courses under Department <b style="color:  #ba4a00"><?=$data['department']?></b> and   Program <b style="color:  #ba4a00"><?=$data['program']?></b></p>
            </div>
        </div>
    </div>
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
</style>
    <div class="row">
        <div class="col-lg-12">
			<table>
				
			
              <?php 
	
	foreach($data[courses] as $course)
	{
		
		echo '<tr><td>' .$course[courseid].'</td><td>'.$course[coursename].' </td></tr>';
	}
	?>	
				
			</table>
        </div>
    </div>

    <?php require_once 'app/views/templates/footer.php' ?>
