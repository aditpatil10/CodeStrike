<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="overview_chart">
	Main chart goes here
</div>
<div id="piechart" ></div>
<div id="chart_div"></div>
<?php

	//----- PostGRE SQL Commands -----	
	$sql="";
	$result="";
	$sql = "SELECT * FROM $tablename_IMac WHERE Branch='CMPN' ";
	$result = pg_query($dbconn, $sql);
	$countCMPN = pg_num_rows($result);
	// echo "$countCMPN";

	$sql = "SELECT * FROM $tablename_IMac WHERE Branch='IT' ";
	$result = pg_query($dbconn, $sql);
	$countIT = pg_num_rows($result);

	$sql = "SELECT * FROM $tablename_IMac WHERE Branch='EXTC' ";
	$result = pg_query($dbconn, $sql);
	$countEXTC = pg_num_rows($result);

	$sql = "SELECT * FROM $tablename_IMac WHERE Branch='ELEC' ";
	$result = pg_query($dbconn, $sql);
	$countELEC = pg_num_rows($result);

	$sql = "SELECT * FROM $tablename_IMac WHERE Branch='ELEX' ";
	$result = pg_query($dbconn, $sql);
	$countELEX = pg_num_rows($result);

	$sql = "SELECT  * FROM $tablename_IMac WHERE Year='BE' ";
	$result = pg_query($dbconn,$sql);
	$countBE = pg_num_rows($result);

	$sql = "SELECT  * FROM $tablename_IMac WHERE Year='TE' ";
	$result = pg_query($dbconn,$sql);
	$countTE = pg_num_rows($result);

	$sql = "SELECT  * FROM $tablename_IMac WHERE Year='SE' ";
	$result = pg_query($dbconn,$sql);
	$countSE = pg_num_rows($result);	
	// -X-X-X- End of PostGRE SQL Commands -X-X-X-

	//----- SQL Commands -----
	/*
	$sql="";
	$result="";
	$sql = "SELECT * FROM $tableName WHERE Branch='CMPN' ";
	$result = mysqli_query($conn,$sql);
	$countCMPN = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='INFT' ";
	$result = mysqli_query($conn,$sql);
	$countIT = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='EXTC' ";
	$result = mysqli_query($conn,$sql);
	$countEXTC = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Branch='ELEX' ";
	$result = mysqli_query($conn,$sql);
	$countELEC = mysqli_num_rows($result);	

	$sql = "SELECT * FROM $tableName WHERE Branch='ELEC' ";
	$result = mysqli_query($conn,$sql);
	$countELEX = mysqli_num_rows($result);	

	$sql = "SELECT * FROM $tableName WHERE Year='BE' ";
	$result = mysqli_query($conn,$sql);
	$countBE = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Year='TE' ";
	$result = mysqli_query($conn,$sql);
	$countTE = mysqli_num_rows($result);

	$sql = "SELECT * FROM $tableName WHERE Year='SE' ";
	$result = mysqli_query($conn,$sql);
	$countSE = mysqli_num_rows($result);
	*/ 	
?>
<script>
	
	google.charts.setOnLoadCallback(drawChart);
	google.charts.setOnLoadCallback(drawBasic);

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Registrations', 'Per week'],
			['CMPN',     <?php echo "50"; ?>],
			['INFT',      <?php echo "50"; ?>],
			['ELEX',  <?php echo "50"; ?>],
			['ELEC', <?php echo "50"; ?>],
			['EXTC',    <?php echo "50"; ?>]
			]);

		var options = {
			title: 'Department wise Registrations',
			is3D: true,
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));

		chart.draw(data, options);
	}

	function drawBasic() {
		var data = google.visualization.arrayToDataTable([
			['Year', 'Registrations',],
			['SE', <?php echo "10"; ?>],
			['TE', <?php echo "10"; ?>],
			['BE', <?php echo "10"; ?>],
			]);

		var options = {
			title: 'Year wise Registrations',
			chartArea: {width: '50%'},
			hAxis: {
				title: 'Total Registrations',
				minValue: 0
			},
			vAxis: {
				title: 'Year'
			}
		};

		var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

		chart.draw(data, options);
	}
</script>