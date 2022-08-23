<?php
    include './navbar.php';
    require '../Controllers/facultyAddCheck.php';
    // $faculty = getFacultyInfo($_GET['id']);
    // echo $faculty;
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/facultyAddCheck.php" onsubmit="return validateform()" >
        <table>
            
            
            <tr>
                <td>Faculty Name</td>
                <td><input type="text" name="facultyName" value=''id="facultyName"></td>
                <td><p id="errorName" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender" value=''id="gender"></td>
                <td><p id="errorGender" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"value=''id="email"></td>
                <td><p id="errorEmail" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="contactNo"value=''id="contactNo"></td>
                <td><p id="errorContact" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary"value=''id="salary"></td>
                <td><p id="errorSalary" style="color: red;"></p></td>
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
	// var name = document.getElementById("id").value;
	var facultyName = document.getElementById("facultyName").value;
	var gender = document.getElementById("gender").value;
	var email = document.getElementById("email").value;
	var contactNo = document.getElementById("contactNo").value;
	var salary = document.getElementById("salary").value;
	// var password=document.myform.password.value;  
	
	if (facultyName==""){  
		document.getElementById('errorName').innerHTML = "Enter Faculty Name"
		return false;  
	 
	}  
	else if (gender==""){  
		document.getElementById('errorGender').innerHTML = "Enter Gender"
		return false;  
	 
	}  
	else if (email==""){  
		document.getElementById('errorEmail').innerHTML = "Enter Email"
		return false;  
	 
	}  
	else if (contactNo==""){  
		document.getElementById('errorContact').innerHTML = "Enter Contact No"
		return false;  
	 
	}  
	else if (salary==""){  
		document.getElementById('errorSalary').innerHTML = "Enter Salary"
		return false;  
	 
	}  
}
</script>
</fieldset>
</html>