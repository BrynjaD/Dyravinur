<?php
$connect = mysql_connect("localhost", "root", ""); 

if (!$connect) 
	{ 
		die('Connection Failed: ' . mysql_error());
 	}
else {
	mysql_select_db("dyravinur", $connect);
}


$user_info = "INSERT INTO Eigandi (Nafn, Netfang, Lykilord, Kennitala, Simanr, Heimilisfang, Postnr, Baejarfelag, Landshluti) VALUES ('$_POST[fullName]', '$_POST[username]', '$_POST[password]', '$_POST[kennitala]', '$_POST[simanr]', '$_POST[heimilisfang]', '$_POST[postnr]', '$_POST[baejarfelag]', '$_POST[landshluti]');";

if (!mysql_query($user_info, $connect)) 
	{ 
		die('Error: ' . mysql_error()); 
	}

echo "Your information was added to the database.";

mysql_close($connect); 

?>