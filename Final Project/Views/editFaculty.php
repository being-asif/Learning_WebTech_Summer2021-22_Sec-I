<?php
    require_once '../Controllers/editFaculty.php';
    $faculty = getFacultyInfo($_GET['id']);
    // echo $faculty;
?>
    <!-- Notice Form Stated  -->
    <h3>Edit Faculty Information</h3>
    <form method="POST" action="../../Controllers/editFaculty.php" >
        <table>
            
            <tr>
                <td>Faculty ID</td>
                
                <td><input type="text" name="facultyId" value='<?php echo $faculty["id"]; ?>'></td>
            </tr>
            <tr>
                <td>Faculty Name</td>
                <td><input type="text" name="facultyName" value='<?php echo $faculty["facultyName"]; ?>'></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="text" name="gender" value='<?php echo $faculty["gender"]; ?>'></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value='<?php echo $faculty["email"]; ?>'></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><input type="text" name="contact" value='<?php echo $faculty["contactNo"]; ?>'></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary" value='<?php echo $faculty["salary"]; ?>'></td>
            </tr>
                
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
				
                <button><a href="../Faculty.php">Go Back</a></button>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
        
    
    
			
</body>
</html>