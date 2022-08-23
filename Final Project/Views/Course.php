<?php
    include 'navbar.php';
    if(!isset($_SESSION['user']))
     {
        header('location: ../Index.php');
     }
    require_once '../Controllers/courseList.php';
    $courses = getAllCourse();
    $departments = getDepartment();
?>
    <!-- Course Form Stated  -->
    <form action="">
        <table>
            <tr><td></td></tr>
            <tr>
                <td>Department</td>
                <td>
                </td>
  
               </td>
               <td></td>
               <td></td>
               <td><button><a href="./AddNewCourse.php">Add New Course</a></button></td>
            </tr>
            <tr>
                <td><b>Offered Courses:</b></td>
            </tr>
            <tr>
                <table cellspacing="0" cellpadding="0" border="1" width="361px" height="86px">
         
                    <tr align="center" >
                        <th >Course Id</th>
                        <th >Course Name</th>
                        <!-- <th >Teacher</th> -->
                    </tr>

                    <?php
                        $i=0;
                        echo "<tr align='center'>";
                        foreach($courses as $course){
                            
                            echo "<tr>";
                            echo "<td>".$course['id']."</td>";
                            echo "<td>".$course['courseName']."</td>";
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
</html>