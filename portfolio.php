<?php include('header.php'); ?>

<div class="container logo-div">
	<img src="assets/img/logo.png">
</div>	
<div class="page-banner-div">
	<div class="container">
		<h3>
			Impact Investing Portfolio
		</h3>
	</div>
</div>
<style type="text/css">
	.blue {
		background-color: #0f0;
	}
	.pink {
		background-color: #f00;
	}
</style>
<div class="container">
	<div class="page-body">
		<div class="portfolio chart">
	  		<div id="chartContainer" style="height: 400px; width: 100%;"></div>
	  		<div class="hide-text"></div>
		</div>

		<div class="portfolio-table">
			<h2>Portfolio Breakdown</h2>
			<table>
				<tbody>
					<tr>
						<td>Type of Impact Investor</td>
						<td>Program Related Investor</td>
					</tr>
					<tr>
						<td>Type of Impact Investor</td>
						<td>Program Related Investor</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="next-btn">
			<a href="dashboard.php">Your Dashboard</a>
		</div>
	</div>
</div>

<script type="text/javascript" src="assets/js/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	CanvasJS.addColorSet("greenShades",["#2F4F4F","#008080","#2E8B57","#3CB371", "#90EE90"]);

	var chart = new CanvasJS.Chart("chartContainer",
	{
        animationEnabled: true,
        colorSet: "greenShades",
		legend: false,
		toolTip:{
		   	contentFormatter: function ( e ) {
		   		return "Custom ToolTip"; 
		   	}  
		},
		data: [
		{        
			type: "pie",
			name: "portfolio",      
			indexLabelFontSize: 14,
			indexLabel: "{label} {y}%",
			startAngle:-160,
			toolTipContent:"{label} <br>(Expected Return {legendText})",
			dataPoints: [
				{  y: 20, label: "Grants", legendText:'0%' },
				{  y: 25, label: "Non-Profit Lending", legendText: '2-4%' },
				{  y: 5, label: "Microfinance", legendText: '0-1%' },
				{  y: 20, label: "VC Fund", legendText: '9+%'},       
				{  y: 15, label: "Pay For Success Bonds", legendText:'2-6%'},
				{  y: 15, label: "Green Bonds", legendText:'4-8%'},
			]
		}
		]
	});
	chart.render();
}
</script>
<?php include('footer.php'); ?>