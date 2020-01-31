<?php
include 'db.php';
function is_validate_user($userName,$password)
{ 
	try 
	{
		$query = "SELECT password FROM users WHERE username = :username";
	    $conn=db_connect();
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare($query);
		$stmt->bindParam(':username', $userName);
		$stmt->execute();
	    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	   if ($stmt->rowCount() > 0) 
	   {
    			foreach ($results as $record) 
				{ 
					if ($record['password']!=null)
					{
						if (password_verify($password ,$record['password'])) 
						{
                           $_SESSION['isAuthenticated'] = 1;	
						   $_SESSION['username'] = $userName;
						   unset ($_SESSION["failure"]);
						   echo "<script> location.href='secret.php'; </script>";
                         
						}
						else 
						{
							if(isset($_SESSION['failure']))
							{
								$_SESSION['failure'] ++; 
							} 
							else 
							{
								$_SESSION['failure'] = 1;
							}

						}
				    }
	            }
        }
		else
		{
			if(isset($_SESSION['failure']))
							{
								$_SESSION['failure'] ++; 
							} 
							else 
							{
								$_SESSION['failure'] = 1;
							}
		}
		$conn = null;
   }
catch(PDOException $ex) 
	{
    echo "Error is: " . $ex->getMessage();
	$conn = null;
	}
}
?>