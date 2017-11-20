<?php 
class obvestilo {
	public function __construct(){
		include_once "../config/db.php";
		global $db;
   	}

   	//FUNKCIJA ZA PRIDOBIVANJE OBVESTIL
   	public function obvestilaPodatki() {
         global $db;
         $res = $db->query("SELECT * FROM obvestila");
         $res->execute();

         $r = $res->fetchAll(PDO::FETCH_ASSOC);
         if (!empty($r)) {
            return $r;
         } else {
            return false;
         }
      }



}
?>