<?php 
include 'includes/header.php';
include 'includes/navbar.php';
?>
<div class="content">
<h1>Pozdravljeni na straneh prostovoljnega gasilskega društva Krašce</h1>
<h2>Sebi v ponos, bližnjemu v pomoč!</h2>
<h3>Obvestila:</h3>
<div class="obvestila">
</div>
<script type="text/javascript">
	$(document).ready(function() {
		//pridobi obvestila
		$.ajax({
		  url: "php/obvestila.php",
		  type: "GET"
		}).done(function(res) {
		  $(".obvestila").html(res);
		});

		$('body').on('click','.obvestilo' , function() {
			var idObvestila = $(this).attr('id');
			$.ajax({
			  url: "obvestilo.php",
			  type: "POST",
			  data: { id: idObvestila }
			}).done(function(res) {
			  $(".content").html(res);
			});			
		});
	});	
</script>
</div>
<?php 
include 'includes/footer.php';
?>
