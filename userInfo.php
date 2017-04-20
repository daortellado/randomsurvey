<?php
 		include_once('db.php');
		$name = $_POST['name'];
		$age = $_POST['time'];
		if(mysql_query("INSERT INTO user VALUES('$name', '$time')"))
         echo "Successfully Inserted";
		else
		echo "Insertion Failed";
?>