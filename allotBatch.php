<?php
require ('iMacConnect.php'); 
?>

<script>
	function loadAjax(){
		var checkboxArray = new Array();
		var xhttp = new XMLHttpRequest();
		
		$("input:checked").each(function(){
			checkboxArray.push($(this).val());
		});
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				alert(xhttp.responseText);
			}
		};
		xhttp.open("POST","master.php",true);
		xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		// xhttp.send("query=allotTask&Batch="+$("#batchAllotedInput").val());
		xhttp.send("query=allotTask&Batch="+$("#batchAllotedInput").val()+"&checkbox[]="+checkboxArray);
	}

</script>
<div id="content_table">
	<p id="studentsList"><b>List of Students Pending:</b></p>
	<form action="" name="willAllotTaskForm" id="willAllotTaskForm">
		<table >

			<?php
			$sql = "SELECT * FROM $tableName WHERE Status='Pending' AND Batch=0";
			$result = mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				echo "<tr>
						<td></td>
						<td>Name</td>
						<td>Year</td>
						<td>Branch</td>
					</tr>";
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td><input type='checkbox' name='checkbox[]' id='checkbox' value='".$row['Mobile']."'></td>";
				echo "<td>".$row["Name"]."</td>";
				echo "<td>".$row["Year"]."</td>";
				echo "<td>".$row["Branch"]."</td>";
				echo "</tr>";
			}
		}else{
			echo "ALL REGISTRATIONS HAVE BEEN ALLOTED A BATCH.";
		}
		?>
	</table>
</form>
</div>
<div id="operations">
	<p id="studentsList">Instructions:</p>
	<p><ol>
		<li>Select Students to allot batch.</li>
		<li>Enter their Batch no in the field Below.</li>
		<li><b>NOTE:</b> No of Students selected at once, will be alloted the same Batch.</li>
	</ol></p>
	<p>
		<input type="text" form="willAllotTaskForm" id="batchAllotedInput" required>
		<button onclick="loadAjax()" form="willAllotTaskForm">Submit</button>
	</p>
</div>