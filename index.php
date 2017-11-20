<?php 
include 'includes/header.php';
?>

<h1>Pozdravljeni na straneh prostovoljnega gasilskega društva Krašce</h1>
<h2>Sebi v ponos, bližnjemu v pomoč!</h2>
<h3>Obvestila:</h3>
<div class="obvestila">
</div>
<script type="text/javascript">
	$.ajax({
	  url: "php/obvestila.php",
	  type: "GET"
	}).done(function(res) {
	  $(".obvestila").html(res);
	});
</script>
<?php 
include 'includes/footer.php';
?>
