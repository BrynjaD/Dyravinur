<?php
$connect = mysql_connect("localhost", "root", ""); 

if (!$connect) 
	{ 
		die('Connection Failed: ' . mysql_error());
 	}
else {
	mysql_select_db("dyravinur", $connect);
}


$user_info = "INSERT INTO Eigandi (Netfang, Lykilord) VALUES ('$_POST[username]', '$_POST[password]');";

if (!mysql_query($user_info, $connect)) 
	{ 
		die('Error: ' . mysql_error()); 
	}

echo "Your information was added to the database.";

mysql_close($connect); 

?>