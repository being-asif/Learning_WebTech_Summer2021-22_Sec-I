<?php
    include './navbar.php';
    if(!isset($_SESSION['user']))
     {
        header('location: ../Index.php');
     }
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/RoomNo.php" onsubmit="return validateform()" >
        <table>
            
            <tr>
                <td>Course ID</td>
                <td><input type="text" name="courseId" value="" id="courseId" onkeyup="showCourseRoom(this.value)"></td>
                <td><p id="errorId" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td><input type="text" name="courseName" value="" id="courseName"></td>
                <td><p id="errorName" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Room No</td>
                <td><input type="text" name="roomNo" value="" id="roomNo"></td>
                <td><p id="errorRoom" style="color: red;"></p></td>
</tr>
<tr>
                <td>Time</td>
                <td>
                    <input type="time" name="time" value="" id="time">
                    <td><p id="errorTime" style="color: red;"></p></td>
                    
            </td>
            </tr>
                
            
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
                
			</tr>
            
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    
        
        
    
    
			
</body>
<script>
	
	
	function validateform(){  
	// var name=document.myform.name.value;  
	// var No = document.getElementById("noticeId").value;
    console.log("Hi");
	var courseId = document.getElementById("courseId").value;
	var courseName = document.getElementById("courseName").value;
	var roomNo = document.getElementById("roomNo").value;
	var time = document.getElementById("time").value;
	// var noticeDescription = document.getElementById("noticeDescription").value;
	//var date = document.getElementById("date").value;
	// var password=document.myform.password.value;  
	
	if (courseId==""){  
		document.getElementById('errorId').innerHTML = "Enter Course Id"
		return false;  
	}else if(courseName==""){  
		document.getElementById('errorName').innerHTML = "Enter Course Name"
		return false;  
	} 
    else if(roomNo==""){  
		document.getElementById('errorRoom').innerHTML = "Enter Room No"
		return false;  
	}
    else if(time==""){  
		document.getElementById('errorTime').innerHTML = "Enter Time"
		return false;  
	}  
}

  function showCourseRoom(str) {
    if (str == "") {
    document.getElementById("courseName").value = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
      $students=[];
    //   console.log(this.responseText);
      $students = this.responseText;    
    //   console.log(this.responseText);
    document.getElementById("courseName").value = this.responseText;
  }
//   .$notice['No'].
  xhttp.open("GET", "../Controllers/RoomLive.php?q="+str);
  xhttp.send();
}

</script>
</fieldset>
</html>