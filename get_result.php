<?php
$servername = "127.0.0.1";
$username = "root";
$password = "newpassword";
$database = "mydb";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($table=="1"){
  ///This is for search query
  echo "Your Inputs:";
  echo "<br>";
  $coursenumber = $_POST["InputCourseNumber"];
  echo $coursenumber;
  echo "<br>";
  $departmentname = $_POST["InputDepartmentName"];
  echo $departmentname;
  echo "<br>";
  $instructorname = $_POST["InputInstructorName"];
  echo $instructorname;
  echo "<br>";
  $instructorgender = $_POST["InputInstructorGender"];
  echo $instructorgender;
  echo "<br>";
  $teachingsemester = $_POST["InputInstructorTeachingSemester"];
  echo $teachingsemester;
  echo "<br>";


  $where = "WHERE course_number = '$coursenumber'";

  if(!empty($departmentname)){
  $where .= "and department = '$departmentname'";
  }
  if(!empty($instructorname )){
  $where .= "and instructor_name= '$instructorname '";
  }
  if(!empty($instructorgender)){
  $where .= "and gender = '$instructorgender'";
  }
  if(!empty($teachingsemester )){
  $where .= "and semester= '$teachingsemester '";
  }

  $sql = "SELECT id, semester, department, course_number, instructor_name, avg_GPA FROM 'grade_info' WHERE course_number = $coursenumber AND department =$departmentname AND instructor_name = $instructorname AND semester = $teachingsemester";
  $result = mysqli_query($conn, $sql);
}

if ($table=="2"){
  ///This is for search query combining two tables
  echo "Your Inputs:";
  echo "<br>";
  $departmentfullname = $_POST["InputDepartmentFullName"];
  echo $departmentname;
  echo "<br>";
  echo "<br>";
  $instructorname = $_POST["InputInstructorName"];
  echo $instructorname;
  echo "<br>";
  $teachingsemester = $_POST["InputInstructorTeachingSemester"];
  echo $teachingsemester;
  echo "<br>";

  try {
      $results = $databaseb->query(
            "SELECT id, semester, department, course_number, instructor_name, avg_GPA FROM 'grade_info'
            JOIN department_info ON department_info.department_id=grade_info.department_id
      );
  }

}


if ($table=="3"){
  //This is for search query combining two tables
  echo "Your Inputs:";
  echo "<br>";
  $instructorgender = $_POST["InputInstructorGender"];
  echo $instructorgender;
  echo "<br>";
  echo "<br>";
  $instructorname = $_POST["InputInstructorName"];
  echo $instructorname;
  echo "<br>";
  $teachingsemester = $_POST["InputInstructorTeachingSemester"];
  echo $teachingsemester;
  echo "<br>";

  sql = "SELECT * FROM instructor_info NATURAL JOIN grade_info WHERE gender = {$instructorgender}";
  $result = mysqli_query($conn, $sql);
}


$num_rows = $result->num_rows;
if ($num_rows >0){
  echo '<table class="w3-table-all w3-hoverable w3-card-4">';
  while ($row = mysql_fetch_row($result)) {
  	echo '<tr>';
  	foreach($row as $field) {
  		echo '<td>' . htmlspecialchars($field) . '</td>';
  	}
  	echo '</tr>';
    }
    echo '</table>';
    } else{
  echo "0 results";
}


$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Your Result Is Listed Below</title>
  <style>
    table, tr, th,td
    {
      border: 1px solid black;
    }
  </style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Your Result Is Listed Below</h2>
		<img src="https://blogs.bmc.com/wp-content/uploads/2016/06/database-blue.png" width="500" height="333">
    <table>
      <tr>
        <th>ID</th>
        <th>Semester</th>
        <th>Department</th>
        <th>Course Number</th>
        <th>Instructor Name</th>
        <th>Grade</th>
      </tr>
    </table>

	</div>

</body>
</html>
