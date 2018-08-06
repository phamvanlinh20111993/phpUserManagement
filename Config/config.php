<?php


	$servername = "localhost";
	$username = "root";
	$password = "12345";
	$dbname = "UserManagement";

	$isexisttb = false;

	//create connection connect db and create db if not exists
	$conn = new mysqli($servername, $username, $password);

	 if($conn->connect_error){
	  	die("Connection failed: " + $conn->connect_error);
	 }



	//check db is existed
	$db_selected = mysqli_select_db($conn, $dbname);

	if(!$db_selected){
		$isexisttb = true;
		// Create database
	   $sql = "CREATE DATABASE ".$dbname;
		if ($conn->query($sql) === TRUE) {
		   echo "Database created successfully";
		} else {
		   echo "Error creating database: ".$conn->error;
		}
	}

	$conn->close();


	// create new connection
   $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
	if ($conn->connect_error) {
	   die("Connection failed: ".$conn->connect_error);
	} 

	if($isexisttb){
		// sql to create table
		$table = "students";

		$sql = "CREATE TABLE IF NOT EXISTS $table (
		id BIGINT(16) UNSIGNED  AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50) NOT NULL,
		phone VARCHAR(15) NOT NULL,
		address VARCHAR(100),
		password VARCHAR(500) NOT NULL,
		Role INT(1),
		reg_date TIMESTAMP
		)";

		if ($conn->query($sql) === TRUE) {
		   echo "Table $table created successfully";
		} else {
		   echo "Error creating table: " . $conn->error;
		}

		//insert data to table
		$sql = "INSERT INTO $table (firstname, lastname, email) VALUES ('Pham Van', 'Linh', 'phamvanlinh20111993@gmail.com', '0963216364', 'Ngo 273 Tran Cung, Hoang Quoc Viet, Ha Noi', ".password_hash('a12345', PASSWORD_BCRYPT).", 1);";
        $sql = "INSERT INTO $table (firstname, lastname, email) VALUES ('Nguyen Van', 'Thuan', 'thuannguyen20111997@gmail.com', '0913223985', '144 Xuan Thuy, Cau Giay, Ha Noi', ".password_hash('a12345', PASSWORD_BCRYPT).", 0);";
        $sql = "INSERT INTO $table (firstname, lastname, email) VALUES ('Nguyen Thi', 'Ngan', 'Ngannt1710@gmail.com', '0961334985', 'Ngo 213 Ho Tung Mau, Dich Vong Hau, Ha Noi', ".password_hash('a12345', PASSWORD_BCRYPT).", 0);";     

      if (mysqli_multi_query($conn, $sql)) {
    		echo "New records created successfully";
		} else {
   		echo "Error: " . $sql . "<br>" . $conn->error;
		}

		mysqli_close($conn);  

	}

	// escape variables for security
	// $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
	// $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	// $age = mysqli_real_escape_string($conn, $_POST['age']);

?>