<?php ?>

<!DOCTYPE html>
<html>
<body style="background-color:powderblue;">
<head>
	<title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script type="text/javascript">
    function filter_by_cnumber()
		{
			var course_number=$("#InputCourseNumber").val();
      if(course_number!="")
      {
       $.ajax
       ({
        type:'post',
        url:'get_result.php',
        data:{
         submit_data:"submit_data",
         course_name:course_name
        },
        success:function(response) {
         if(response=="submitted")
         {
          document.getElementById("collapseCourseNumber").innerHTML="Quenry result:";
         }
        }
       });
      }
     else
     {
      alert("Please Fill All The Details");
     }
     return false;
    }

		function filter_by_cname()
    {
     var course_name=$("#InputCourseName").val();
     if(course_name!="")
     {
      $.ajax
      ({
       type:'post',
       url:'get_result.php',
       data:{
        submit_data:"submit_data",
        course_name:course_name
       },
       success:function(response) {
        if(response=="submitted")
        {
         document.getElementById("collapseCourseName").innerHTML="Quenry result:";
        }
       }
      });
     }
     else
     {
      alert("Please Fill All The Details");
     }

     return false;
    }
		function filter_by_iname()
    {
     var instructor_name=$("#InputInstructorName").val();
     if(instructor_name!="")
     {
      $.ajax
      ({
       type:'post',
       url:'get_result.php',
       data:{
        submit_data:"submit_data",
        instrctor_name:instrctor_name
       },
       success:function(response) {
        if(response=="submitted")
        {
         document.getElementById("collapseInstructorName").innerHTML="Quenry result:";
        }
       }
      });
     }
     else
     {
      alert("Please Fill All The Details");
     }

     return false;
    }
		function filter_by_gender()
    {
     var gender=$("#InputInstructorGender").val();
     if(gender!="")
     {
      $.ajax
      ({
       type:'post',
       url:'get_result.php',
       data:{
        submit_data:"submit_data",
        gender:gender
       },
       success:function(response) {
        if(response=="submitted")
        {
         document.getElementById("collapseInstructorGender").innerHTML="Quenry result:";
        }
       }
      });
     }
     else
     {
      alert("Please Fill All The Details");
     }

     return false;
    }
		function filter_by_semester()
    {
     var semester=$("#InputInstructorTeachingSemester").val();
     if(semester!="")
     {
      $.ajax
      ({
       type:'post',
       url:'get_result.php',
       data:{
        submit_data:"submit_data",
        semester:semester
       },
       success:function(response) {
        if(response=="submitted")
        {
         document.getElementById("collapseInstructorTeachingSemester").innerHTML="Quenry result:";
        }
       }
      });
     }
     else
     {
      alert("Please Fill All The Details");
     }

     return false;
    }
  </script>
</head>
<body>
<div class="header">
	<h2>Welcome to the Grade Distribution Database</h2>
  <img src="https://www.fireflytoysandgames.com/uploads/4/1/6/0/41605391/published/good-grades.png?1545416000" width="500" height="333">
</div>

<style>
.btn-group button {
  background-color: #4CAF; /* Green background */
  border: 1px solid powderblue; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>

<h2>Take Peek into Historical Grades Distribution The Way You Like</h2>

<div>
  <p class="btn-group">
    <button class="btn-group" data-toggle="collapse" href="#collapseCourseNumber" role="button" aria-expanded="false" aria-controls="collapseCourseNumber">
      Begin with Course Number
    </button>
    <button class="btn-group" data-toggle="collapse" href="#collapseCourseName" role="button" aria-expanded="false" aria-controls="collapseCourseName">
      Begin with Department
    </button>
		<button class="btn-group" data-toggle="collapse" href="#collapseInstructorName" role="button" aria-expanded="false" aria-controls="collapseInstructorName">
			Begin with Instructor Name
		</button>
		<button class="btn-group" data-toggle="collapse" href="#collapseInstructorGender" role="button" aria-expanded="false" aria-controls="collapseInstructorGender">
			Begin with Instructor Gender
		</button>
		<button class="btn-group" data-toggle="collapse" href="#collapseInstructorTeachingSemester" role="button" aria-expanded="false" aria-controls="collapseInstructorTeachingSemester">
			Begin with Instructor Teaching Semester
		</button>
  </p>
  <div class="collapse" id="collapseCourseNumber">
    <div class="card card-body">
      <form method="post">
        <div class="form-group">
          <label for="InputCourseNumber">CourseNumber</label>
          <input class="form-control" id="InputCourseNumber" aria-describedby="cnumberHelp" placeholder="Enter a course number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <div class="collapse" id="collapseCourseName">
    <div class="card card-body">
      <form>
        <div class="form-group">
          <label for="InputCourseName">CourseName</label>
          <input class="form-control" id="InputCourseName" aria-describedby="cnameHelp" placeholder="Enter a course name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
	<div class="collapse" id="collapseInstructorName">
		<div class="card card-body">
			<form method="post">
				<div class="form-group">
					<label for="InputInstructorName">InstructorName</label>
					<input class="form-control" id="InputInstructorName" aria-describedby="inameHelp" placeholder="Enter an Instructor Name">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<div class="collapse" id="collapseInstructorGender">
		<div class="card card-body">
			<form method="post">
				<div class="form-group">
					<label for="InputInstructorGender">InstructorGender</label>
					<input class="form-control" id="InputInstructorGender" aria-describedby="genderHelp" placeholder="Enter an Instructor Gender">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<div class="collapse" id="collapseInstructorTeachingSemester">
		<div class="card card-body">
			<form method="post">
				<div class="form-group">
					<label for="InputInstructorTeachingSemester">CourseSemester</label>
					<input class="form-control" id="InputInstructorTeachingSemester" aria-describedby="semesterHelp" placeholder="Enter the Semester Instructor Teaching">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>


<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>

<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>

<h2>You are Welcome to Insert Information into Our Database:</h2>
<div class="btn-group" style="width:100%">
  <button style="width:25%">Insert into Instructor List</button>
  <button style="width:25%">Insert into Department List</button>
  <button style="width:25%">Insert into Class List</button>
  <button style="width:25%">Insert into Course List</button>
</div>

<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>

<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>

<h2>There are Some Incorrect Information You Want to Correct:</h2>


<div class="btn-group" style="width:100%">
  <button style="width:25%">Change into Instructor List</button>
  <button style="width:25%">Change into Department List</button>
  <button style="width:25%">Change into Class List</button>
  <button style="width:25%">Change into Course List</button>
</div>
<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>

<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>


<h2>If You Encourage Us to Delete the Piece of Info:</h2>


<div class="btn-group" style="width:100%">
  <button style="width:25%">Delete From Instructor List</button>
  <button style="width:25%">Delete From Department List</button>
  <button style="width:25%">Delete From Class List</button>
  <button style="width:25%">Delete From Course List</button>
</div>


<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>

<div style="text-align: center">
    <asp:Button ID="btnSubmit" runat="server" Text="Submit" Width="89px" OnClick="btnSubmit_Click" />
    &nbsp;
    <asp:Button ID="btnClear" runat="server" Text="Clear" Width="89px" OnClick="btnClear_Click" />
</div>

<p>
  You may log out if you are done! <a href="logout.php">Sign out</a>
</p>
</body>
