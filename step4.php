<?php include('header.php'); ?>

<div class="container logo-div">
	<img src="assets/img/logo.png">
</div>	
<div class="page-banner-div">
	<div class="container">
		<h2>Step 4</h2>
		<h3>
			Explore Environmental and Social Issues That You Care About
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
		<div class="page-questions">
			<div class="ques center">
				Please select the top eight social and environmental issues from the list provided?
			</div>
			<?php
				//for ($i=0; $i < 15; $i++) { 
					?>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Gender Equality
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Health
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Racial Equality
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Renewable Energy
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Education
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Wildlife
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Income Inequality
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Community
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Faith
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Social Responsibilty
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Veterans Assistance
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Environment
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						International Development
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Disease Prevention
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Youth
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Non-Profits
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						CO2 Emissions
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Food &amp; Nutrition
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Enterpreneurs
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						Agriculture
					</div>
					<div style="border:1px solid #000; display: inline-block; padding: 10px; margin-bottom: 5px;" class="draggable pink drag<?php //echo $i ?>">
						<?php //echo 'Issue '.$i ?>
						All of the Above
					</div>
					<?php
				//}
			?>
		</div>
		<div class="tiers">
			<div class="tier droppable tier1" style="height:100px; border: 1px solid #000; margin-top: 50px"></div>
			<div class="tier droppable tier2" style="height:100px; border: 1px solid #000; margin-top: 50px"></div>
			<div class="tier droppable tier3" style="height:100px; border: 1px solid #000; margin-top: 50px"></div>
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
	      	$(ui.draggable).removeClass("pink").addClass("blue");
	      	count_items();
	      },
	      out: function(event, ui) {
	      		$(ui.draggable).removeClass("blue").addClass("pink");
	      		count_items();
	    	}
	    });
	  } );

	function count_items(){
		console.log($(".blue").length);
	}
</script>

<?php include('footer.php'); ?>