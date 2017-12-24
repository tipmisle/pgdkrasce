<?php 
class obvestilo {
	public function __construct(){
		include_once __DIR__."/../config/db.php";
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

      //FUNKCIJA ZA PRIDOBIVANJE OBVESTILA PREKO ID-JA
      public function obvestiloPodatki() {
         global $db;
         $res = $db->query("SELECT * FROM obvestila WHERE id = 1");
         $res->execute();

         $obvestilo = $res->fetch();
         if (!empty($obvestilo)) {
            return $obvestilo;
         } else {
            return false;
         }
      }



}
?>