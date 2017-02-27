<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/jquery-ui/jquery-ui.min.js"></script>
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
</body>
</html>