<?php
    include 'navbar.php';
    if(!isset($_SESSION['user']))
     {
        header('location: ../Index.php');
     }
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/studentMajorCheck.php" onsubmit="return validateform()">
        <table>
        <h4 style="text-align:center;">My Profile</h4> 
            
            
            <tr>
                <td>Name</td>
                <td>Asif Ahammed</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>19-40020-1@student.aiub.edu</td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>Male</td>
            </tr>
            <tr>
                <td>CGPA</td>
                <td>3.30</td>
            </tr>
            <tr>
                <td>Contact Number</td>
                <td>01796775774</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>Dhaka</td>
           
                
            
            <!-- <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr> -->
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

   
        
        
    
    
			
</body>
<script>
	
	
	function validateform(){  
	// var name=document.myform.name.value;  
	// var name = document.getElementById("id").value;
	var courseName = document.getElementById("courseName").value;
	// var password=document.myform.password.value;  
	
	if (courseName==""){  
		document.getElementById('errorName').innerHTML = "Enter CourseName"
		return false;  
	 
	}  
}
</script>
</fieldset>
</html>