<html>
<head>
	
	<title>Connection</title>
</head>
<body>
		
		<br>
		<table border="1">
			<tr>
				
				
				<th>Name</th>
                <th>ID</th>
				<th>Password</th>
				<th>Department</th>
			
			</tr>

			<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'webtech');

     
    $sql = "select * from connection";
    $result = mysqli_query($conn, $sql);
    
    $row= mysqli_fetch_assoc($result);
        
    
?>
			<tr>
				<th><?=$row["Name"]?></th>
				<th><?=$row["ID"]?></th>
				<th><?=$row["Pass"]?></th>
				<th><?=$row["Department"]?></th>
				
				
			</tr>
			<?php
					
				
			?>
		</table>
</body>
</html>