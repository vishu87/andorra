<?php include('header.php'); ?>

<div class="container logo-div">
	<img src="assets/img/logo.png">
</div>	
<div class="page-banner-div">
	<div class="container">
		<h3>
			Impact Investing Dashboard
		</h3>
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
		</div>

		<div>
			<div class="risk-score">
				<h2>Risk Score</h2>
				
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
	CanvasJS.addColorSet("greenShades",["#2F4F4F","#008080","#2E8B57","#3CB371", "#90EE90"]);

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