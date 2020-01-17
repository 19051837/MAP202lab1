<html>
 <head>
  <title>PHP Test</title>
	  <style>
#Movies {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 30%;
}

#Movies td, #Movies th {
  border: 1px solid #ddd;
  padding: 8px;
}

#Movies tr:nth-child(even){background-color: #f2f2f2;}

#Movies tr:hover {background-color: #ddd;}

#Movies th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
		 
		 #favorites {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 40%;
}

#favorites td, #favorites th {
  border: 1px solid #ddd;
  padding: 8px;
}

#favorites tr:nth-child(even){background-color: #f2f2f2;}

#favorites tr:hover {background-color: #ddd;}

#favorites th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0066cc;
  color: white;
}
		  
	 </style>
 </head>
 <body>
	 <div>
		 <table id='Movies' >
			 
			 <tr><td>Student Number </td><td>19051837</td></tr>
			 <tr><td>Lab Number </td><td>2</td></tr>
		 </table>
		 <br>
		 <br>
	 </div>
	
	 <?php 	
	 
$films = array(
            "comedy" => array (
                            0 => "Pink Panther",
                            1 => "johnny English",
                            2 => "Tommy Boy"),
            "action" => array (
                            0 => "Die Hard",
                            1 => "Expendables"),
            "epic" => array (
                            0 => "The Lord of the Rings"),
            "Romance" => array (
                            0 => "Romeo and Juliet")
);
	 
$favorites = array(
   array(
	   
       "name" => "Dave Punk",
       "phone" => "5689741523",
       "email" => "davepunk@gmail.com",

   ),
   array(

       "name" => "Monty Smith",
       "phone" => "2584369721",
       "email" => "montysmith@gmail.com",
   ),
   array(

       "name" => "John Flinch",
       "phone" => "9875147536",
       "email" => "johnflinch@gmail.com",
   )
);
	 
 echo "<table id='Movies'><th>Movie Name</th><th>Genre</th>";
	 
		foreach($films as $key1=>$row1) 
		{
   			 foreach($row1 as $key2=>$row2)
			 {
      			 echo "<tr><td>".$key1."</td><td>".$row2."</td></tr>";
   			 }
		}
	 
echo "</table>";
	 
echo "<div><br><br><br>";
	 
echo "<table id='favorites'><th>Name</th><th>Phone</th><th>Email</th>";
	 
	 foreach($favorites as $row1) 
		{   echo "<tr>";
   			 foreach($row1 as $key2=>$row2)
			 {
				 echo "<td>".$row2."</td>";
   			 }
		 echo "</tr>";
		}
	 
echo "</div>";
		 
?>	 
 </body>
</html>