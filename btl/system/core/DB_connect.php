<?php
	/**
	* 
	*/
	class DB_connect
	{
		var $conn;
		function __construct()
		{
			$this->conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
			mysqli_set_charset($this->conn,'utf8');
		}

		function DB_Query($query)
		{
			return mysqli_query($this->conn,$query);
		}
		
		function DB_Fetch($query)
		{
			return mysqli_fetch_assoc($query);
		}
	}
?>