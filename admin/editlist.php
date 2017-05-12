<?php include 'adminheader.php';
	/*Displays the employee information available in a
	table. */
	//connect to database
	include '../databaseConnect.php';
    //get tables for employee
    $queryEmployees = "SELECT *
                     FROM employee";
    $result = $db->prepare($queryEmployees);
    $result->execute();
    $employees = $result->fetchAll();
    $result->closeCursor();
?>

<html>
<head>
	<style>

		
		table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
	</style>
</head>

<body>
  
	<p align="center"><b>The following employee information is in the system:</b></p>
    <form action='edit.php' method='POST'>
	<table align="center">
	<tbody>
		<tr >
		<td><h3>Employee ID</h3></td>    		
		<td><h3>Username</h3></td>	
		<td><h3>Phone</h3></td>
		<td><h3>First Name</h3></td>
		<td><h3>Last Name</h3></td>
        <td><h3>Select</h3></td>

		</tr>

		<!--display info for each employee-->
		<?php foreach ($employees as $employee) : ?>
			<tr>
			<td><?php echo $employee['e_ID']; ?></td>    	
			<td><?php echo $employee['e_Username']; ?></td>
			<td><?php echo $employee['e_Phone']; ?></td>
			<td><?php echo $employee['e_FName']; ?></td>
			<td><?php echo $employee['e_LName']; ?></td>
			<td><input type="radio" name=employee[<?php echo $employee['e_ID']?>] id='employee' value=<?php echo $employee['e_ID']?>> </td>
		
			</tr>
			
		<?php endforeach; ?></p>

	</tbody>
	</table>
	<br>
    <div align='center'>
     <input type='submit' class="btn btn-primary active" value='Edit' id='edit'>
    </div>
    </form>
     <br>
    	<div align="center">
    <script>
    function goBack() {
    window.location.replace("https://cyan.csam.montclair.edu/~torresa31/admin/employeeindex.php");
    }


    </script>
    <button onclick="goBack()" class="btn btn-primary active" >Go Back</button>
    <br>
    <br>
   
    </div>

<br>
<br>




</body>
</html>