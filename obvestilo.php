<?php 
include 'includes/header.php';
include 'includes/navbar.php';
include 'config/db.php';
require 'class/class_obvestilo.php';

$id = $_GET['id'];
$obvestilo = new obvestilo;
$obvestilo = $obvestilo->obvestiloPodatki($id);
?>
<h1><?php echo $obvestilo['naslov']; ?></h1>
<h2><?php echo $obvestilo['created_at']; ?></h2>
<p><?php echo $obvestilo['tekst']; ?></p>

<?php 
include 'includes/footer.php';
?>
