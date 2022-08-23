<?php
    include './navbar.php';
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/departmentAddCheck.php" onsubmit="return validateform()">
        <table>
            
            <tr>
                <td>Department ID</td>
                <td><input type="text" name="departmentId"value="" id="id"></td>
                <!-- <td><p id="errorId" style="color: red;"></p></td> -->
            </tr>
            <tr>
                <td>Department Name</td>
                <td><input type="text" name="departmentName"value="" id="departmentName"></td>
                <td><p id="errorName" style="color: red;"></p></td>
            </tr>
                
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
        
    
    
			
</body>
<script>
	
	
	function validateform(){  
	// var name=document.myform.name.value;  
	// var name = document.getElementById("id").value;
	var departmentName = document.getElementById("departmentName").value;
	// var password=document.myform.password.value;  
	
	if (departmentName==""){  
		document.getElementById('errorName').innerHTML = "Enter DepartmentName"
		return false;  
	 
	}  
}
</script>
</html>