<?php
    require_once '../Controllers/editNotice.php';
    $notice = getNotice($_GET['id']);
    // echo $faculty;
?>
    <!-- Notice Form Stated  -->
    <h3>Edit Notice Information</h3>
    <form method="POST" action="../../Controllers/editNotice.php" >
        <table>
            
            <tr>
                <td>ID</td>
                
                <td><input type="text" name="noticeId" value='<?php echo $notice["No"]; ?>'></td>
            </tr>
            <tr>
                <td>Faculty Name</td>
                <td><input type="text" name="noticeName" value='<?php echo $notice["NoticeName"]; ?>'></td>
            </tr>
            <tr>
                <td>Notice Description</td>
                <td><input type="text" name="noticeDescription" value='<?php echo $notice["NoticeDetails"]; ?>'></td>
            </tr>
            <tr>
                <td>Date</td>
                <td><input type="text" name="Date" value='<?php echo $notice["Date"]; ?>'></td>
            </tr>
            <!-- <tr>
                <td>Contact</td>
                <td><input type="text" name="contact" value='<?php echo $faculty["contactNo"]; ?>'></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="salary" value='<?php echo $faculty["salary"]; ?>'></td>
            </tr> -->
                
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td><input type="submit" name="Reset" value="reset"></td>
                <button><a href="../NoticeList.php">Go Back</a></button>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
        
        
    
    
			
</body>
</html>