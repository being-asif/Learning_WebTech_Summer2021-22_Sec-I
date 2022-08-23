<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/AssignCourse.php" >
        <table>
            
            <tr>
                <td>Faculty ID</td>
                <td><input type="text" name="facultyId" onkeyup="showFacultyName(this.value)"></td>
            </tr>
            <tr>
                <td>Faculty Name</td>
                <td><input type="text" name="facultyName" id="txtHint"></td>
            </tr>
            <tr>
                <td>Course Name</td>
                <td><input type="text" name="courseName"></td>
            </tr>
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
                <td><button><a href="./Subject.php">View</a></button></td>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
        
    
    
			
</body>
<script>
    function showFacultyName(str) {
  if (str == "") {
    document.getElementById("txtHint").value = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
      $students=[];
    //   console.log(this.responseText);
      $students = this.responseText;    
    //   console.log(this.responseText);
    document.getElementById("txtHint").value = this.responseText;
  }
//   .$notice['No'].
  xhttp.open("GET", "../Controllers/FacultyNameLive.php?q="+str);
  xhttp.send();
}
</script>
</html>