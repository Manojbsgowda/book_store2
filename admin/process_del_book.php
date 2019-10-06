<?php
require('../includes/config.php');
			$ids=$_GET['id'];
			$query="delete from book where b_id ='$ids'";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_book.php");

?>