<?php include('header.php'); ?>

<div class="page-banner-div">
	<div class="container">
		<div class="top-head">
			<div class="row">
				<div class="col-md-8">
					<h3>
						Impact Investing Dashboard
					</h3>	
				</div>
				<div class="col-md-4 logo-right">
					<a href="index.php"><img src="assets/img/logo.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="page-body">
		<div class="row">
			<div class="col-md-4">
				<div class="chart">
			  		<div id="chartContainer1" style="height: 400px; width: 100%;"></div>
			  		<div class="hide-text"></div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="chart">
			  		<div id="chartContainer2" style="height: 400px; width: 100%;"></div>
			  		<div class="hide-text"></div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="chart">
			  		<div id="chartContainer3" style="height: 400px; width: 100%;"></div>
			  		<div class="hide-text"></div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				
			</div>
			<div class="col-md-4">
				<div class="chart">
			  		<div id="chartContainer4" style="height: 400px; width: 100%;"></div>
			  		<div class="hide-text"></div>
				</div>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>

		<div>
			<div class="diversification">
				<h2>Diversification Strategy</h2>
				<table>
					<thead>
						<td>Asset Class</td>
						<td>Target</td>
						<td>Current</td>
						<td></td>
						<td>Market Value</td>
						<td>Return</td>
					</thead>	
					<tbody>
						<tr>
							<td>VC Fund</td>
							<td>20%</td>
							<td>25%</td>
							<td>
								<span class="range"></span>
							</td>
							<td>$2,657,500</td>
							<td>15%</td>
						</tr>
						<tr>
							<td>Pay For Success Bonds</td>
							<td>15%</td>
							<td>10%</td>
							<td>
								<span class="range"></span>
							</td>
							<td>$1,063,000</td>
							<td>5%</td>
						</tr>
						<tr>
							<td>Green Bonds</td>
							<td>15%</td>
							<td>15%</td>
							<td>
								<span class="range"></span>
							</td>
							<td>$1,594,500</td>
							<td>8%</td>
						</tr>
						<tr>
							<td>Microfinance</td>
							<td>5%</td>
							<td>7%</td>
							<td>
								<span class="range"></span>
							</td>
							<td>$744.100</td>
							<td>1%</td>
						</tr>
						<tr>
							<td>Non-Profit Lending</td>
							<td>25%</td>
							<td>23%</td>
							<td>
								<span class="range"></span>
							</td>
							<td>$2,444,900</td>
							<td>2%</td>
						</tr>
						<tr>
							<td>Grants</td>
							<td>20%</td>
							<td>10%</td>
							<td>
								<span class="range"></span>
							</td>
							<td>$1,063,000</td>
							<td>0%</td>
						</tr>
						<tr>
							<td>Cash</td>
							<td>0%</td>
							<td>10%</td>
							<td>
								<span class="range"></span>
							</td>
							<td>$1,063,000</td>
							<td>0%</td>
						</tr>
						<tr class="total">
							<td>Total</td>
							<td>100%</td>
							<td>100%</td>
							<td></td>
							<td>$10,630,000</td>
							<td>6.3%</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<div>
			<div class="risk-score">
				<h2>Risk Score</h2>
				<div class="risk-measure table-div">
					<div style="background:#919191;">1</div>
					<div style="background:#B5B5B5;">2</div>
					<div style="background:#CBCBCB;">3</div>
					<div style="background:#E0E0E0;">4</div>
					<div style="background:#E3EBF5;">5</div>
					<div style="background:#C5D7EA;">6</div>
					<div style="background:#A5C0DF;">7</div>
					<div style="background:#4674A3;">8</div>
					<div style="background:#225785;">9</div>
					<div style="background:#123351;">10</div>
				</div>
				
			</div>
		</div>


		<div style="width:600px; margin: 0 auto">
			<div class="chart">
		  		<div id="chartContainer5" style="height: 400px; width: 100%;"></div>
		  		<div class="hide-text" style="height:10px"></div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript" src="assets/js/canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {
	CanvasJS.addColorSet("greenShades",["#123351","#4674A3","#A5C0DF","#C5D7EA","#E0E0E0", "#919191"]);

	var chart1 = new CanvasJS.Chart("chartContainer1", {
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
	chart1.render();

	var chart2 = new CanvasJS.Chart("chartContainer2", {
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
	chart2.render();

	var chart3 = new CanvasJS.Chart("chartContainer3", {
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
	chart3.render();

	var chart4 = new CanvasJS.Chart("chartContainer4", {
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
	chart4.render();


	var chart5 = new CanvasJS.Chart("chartContainer5", {
        animationEnabled: true,
        colorSet: "greenShades",
		legend: false,
		dataPointMaxWidth: 60,
		axisX:{
		   labelAutoFit: true,
		   labelFontSize: 14,
		},
		axisY:{
	        labelFormatter: function ( e ) {
	               return e.value + '%';  
	        },
	        gridThickness: 1,
		   	gridColor: "#EEE",
    	},
		data: [
		{        
			type: "column",
			name: "portfolio",

			dataPoints: [
				{  y: 6, label: "Your Return" },
				{  y: 8, label: "VC Average Return" },
				{  y: 5, label: "PE Average Return"},
				{  y: 4, label: "Other PRI Fund"},
				{  y: 4.5, label: "Preserved Capital"}
			]
		}
		]
	});
	chart5.render();

}
</script>
<?php include('footer.php'); ?>