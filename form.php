<style>
/* Add a black background color to the top navigation */
.topnav {
  background-color: #274060;
  overflow: hidden;
}
	 /* Style inputs with type="text", select elements and textareas */
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
 /* The alert message box */
.alert {
  padding: 20px;
  background-color: #f44336; /* Red */
  color: white;
  margin-bottom: 15px;
}

/* The close button */
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

/* When moving the mouse over the close button */
.closebtn:hover {
  color: black;
} 
/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #274060;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #274060;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #accbe1;
  padding: 20px;
margin: 40px;
} 
body
	{
		background-color: #cee5f2;
	}
/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #5ccadc;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #0c8d99;
  color: white;
}
</style>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #4CAF50;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>


 <div class="topnav">
  <a  href="index.php">Home</a>
  <a class="active" href="form.php">Form</a>
</div> 
	<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
echo"<div class='alert success'><span class='closebtn'>&times;</span><strong>Success!</strong>  Hey Your Selected Country is ".$_POST['country']."
</div>";
}
?>
 <div class="container">
  <form action="form.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

<label for="country">Country</label>
<?php
$sname = "remotemysql.com";
$uname = "6tXSI3oKSy";
$psw = "fDaIO6AzMP";

try
{
		$conn = new PDO("mysql:host=$sname;dbname=$uname", $uname, $psw);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare('SELECT Country_Name FROM Countries');
		$stmt->execute();
	    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	   if ($stmt->rowCount() > 0) {
    		 echo "<select id='country' name='country'>";
    			foreach ($results as $row) { 
					if ($row['Country_Name']!=null)
     				echo "<option value=".$row['Country_Name'].">".$row['Country_Name']."</option>";
				}
	   }
  echo "</select>";
}
catch(PDOException $ex) {
    echo "Error is: " . $ex->getMessage();
}
$conn = null;

?>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div> 
<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</body>