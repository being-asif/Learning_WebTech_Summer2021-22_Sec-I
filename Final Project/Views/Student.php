<?php
     //session_start();

    include 'navbar.php';
    if(!isset($_SESSION['user']))
     {
        header('location: ../Index.php');
     }
    require_once '../Controllers/studentCheck.php';
    $students = getAllStudent();
    // ajax Implemented
    
?>
    <!-- Course Form Stated  -->
    <form action="">    
        <table>
            <td><h3><u>Student List:</u></h3></td>  
        
        
        <td>
        <div class="">
			<h4 class="text" style="display: inline;">Search by Name:-</h4>
			<input type="text" name="search" class="form-control" onkeyup="showCustomer(this.value)">
			<?php /*echo $err_search;*/?>
		</div>
        </td>
        <!-- <td><button><a href="./Result.php">Show Result</a></button></td> -->
        
        </table>
        <div id="txtHint">Student info will be listed here...</div>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px" style="margin-top: 40px;">
                <h4>All Students</h4> 
                    
                    
                    <tr align="center" >
                        <th >Student Id</th>
                        <th >Student Name</th>
                        <th >Gender</th>
                        <th >Email</th>
                        <th >Cgpa</th>
                        <th >Contact No</th>
                        <th >Address</th>
                    
                    
                        <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($students as $student){
                            
                            
                            echo "<tr>";
                            echo "<td>".$student['id']."</td>";
                            echo "<td>".$student['name']."</td>";
                            echo "<td>".$student['gender']."</td>";
                            echo "<td>".$student['email']."</td>";
                            echo "<td>".$student['cgpa']."</td>";  
                            echo "<td>".$student['contactNo']."</td>";
                            echo "<td>".$student['address']."</td>";
                            echo "</tr>";
                            
                        }
                        ?>
                    <!-- </tr> -->
                    
                         
                </table>

                
            <!-- </tr> -->
        <!-- </table> -->

    </form>
    
    <!-- Notice Form Ended  -->
	
    

    </fieldset>
</body>
<script>
function showCustomer(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
      $students=[];
      console.log(this.responseText);
      $students = this.responseText;
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "../Controllers/StudentLive.php?q="+str);
  xhttp.send();
}
</script>
</html>
