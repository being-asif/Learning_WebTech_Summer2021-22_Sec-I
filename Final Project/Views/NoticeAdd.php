<?php
    include './navbar.php';
    require_once '../Controllers/noticeAddCheck.php';
    // $notices = createNotice();
?>
    <!-- Notice Form Stated  -->
    <form method="POST" action="../controllers/noticeAddCheck.php" enctype="multipart/form-data" onsubmit="return validateform()">
        <table>
        <tr>
                <td>No</td>
                <td><input type="text" name="noticeId" value="" id="noticeId"></td>
            </tr>
            <tr>
                <td>Notice Title</td>
                <td><input type="text" name="noticeTitle" value="" id="noticeTitle"></td>
                <td><p id="errorTitle" style="color: red;"></p></td>
            </tr>
            <tr>
                <td>Notice Description</td>
                <td><input type="text" name="noticeDescription" value="" id="noticeDescription"></td>
            </tr>
            <tr>
                <td>Date</td>
                <td>
                    <!-- <input type="time" name="time"> -->
                    <input type="date" name="date" value="" id="date">
                    <td><p id="errorDate" style="color: red;"></p></td>
            </td>
            </tr>
            <!-- <tr>
                <td>Image</td>
                <td><input type="file" name="myfile"></td>
            </tr> -->
            <tr>
				<td></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
        </table>
    </form>
    <!-- Notice Form Ended  -->
	
    

    <!-- </fieldset> -->
        
        
    
    
			
</body>
<script>
	
	
	function validateform(){  
	// var name=document.myform.name.value;  
	// var No = document.getElementById("noticeId").value;
	var noticeTitle = document.getElementById("noticeTitle").value;
	// var noticeDescription = document.getElementById("noticeDescription").value;
	var date = document.getElementById("date").value;
	// var password=document.myform.password.value;  
	
	if (noticeTitle==""){  
		document.getElementById('errorTitle').innerHTML = "Enter Notice Title"
		return false;  
	}else if(date==""){  
		document.getElementById('errorDate').innerHTML = "Enter Notice Date"
		return false;  
	}  
}
</script>
</fieldset>
</html>