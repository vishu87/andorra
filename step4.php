<?php include('header.php'); ?>

<div class="page-banner-div">
	<div class="container">
		<div class="top-head">
			<div class="row">
				<div class="col-md-8">
					<h2>Step 4</h2>
					<h3>
						Explore Environmental and Social Issues That You Care About
					</h3>	
				</div>
				<div class="col-md-4 logo-right">
					<a href="index.php"><img src="assets/img/logo.png"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	$ar = array(
		"Gender Equality",
		"Health",
		"Racial Equality",
		"Renewable Energy",
		"Education",
		"Wildlife",
		"Income Inequality",
		"Community",
		"Faith",
		"Social Responsibilty",
		"Veterans Assistance",
		"Environment",
		"International Development",
		"Disease Prevention",
		"Youth",
		"Non-Profits",
		"CO2 Emissions",
		"Food &amp; Nutrition",
		"Enterpreneurs",
		"Agriculture",
		"All of the Above",
	);
?>
<div class="container">
	<div class="page-body">
		<div class="page-questions">
			<div class="ques center">
				Please select the top eight social and environmental issues from the list provided, and rank them into three tiers.
			</div>
			<div style=" margin-top: 20px">
			<?php
				foreach($ar as $a){ 
					?>
					<div style="border:1px solid #000; display: inline-block; padding: 6px 10px; margin: 0 10px 10px 0;" class="draggable grey drag">
						<?php echo $a ?>
					</div>
					<?php
				}
			?>
			</div>
		</div>
		<div class="tiers">
			<div class="tier droppable tier1" style="padding: 20px; margin-top: 10px; font-size: 24px; background: #BFBFBF">
				Tier 1
			</div>
			<div class="tier droppable tier2" style="padding: 20px; margin-top: 5px; font-size: 24px; background: #D9D9D9">
				Tier 2
			</div>
			<div class="tier droppable tier3" style="padding: 20px; margin-top: 5px; font-size: 24px; background: #F2F2F2">
				Tier 3
			</div>
		</div>
		<div class="next-btn">
			<a href="matrix.php">Submit</a>
		</div>
	</div>
</div>

<script type="text/javascript">
	var count = 0;
	$( function() {
	    $( ".draggable" ).draggable();
	    $( ".droppable" ).droppable({
	      drop: function( event, ui ) {
	      	$(ui.draggable).removeClass("grey").addClass("blue");
	      	count_items();
	      },
	      out: function(event, ui) {
	      		$(ui.draggable).removeClass("blue").addClass("grey");
	      		count_items();
	    	}
	    });
	  } );

	function count_items(){
		console.log($(".blue").length);
	}
</script>

<?php include('footer.php'); ?>