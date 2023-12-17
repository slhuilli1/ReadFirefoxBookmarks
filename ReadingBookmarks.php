<?php 
   
	/*STRUCTURE DE LA BASE MOOZILLA : https://wiki.mozilla.org/images/d/d5/Places.sqlite.schema3.pdf 
	
		URL locale de la base : C:\Users\33651\AppData\Roaming\Mozilla\Firefox\Profiles\dag35olk.default-release\places.sqlite
		ATTENTION : la chaeine dag35olk.default-release correspond au profil utilisateur de firefox
	*/
$T = array();

   /* Create / Connection to sqlite using PDO and set error mode */
        $db = new PDO('sqlite:places.sqlite');
		$stmt = $db -> prepare("SELECT * FROM moz_places");
		$stmt -> execute();   
		$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach($res as $row){
			array_push($T,$row);
			echo "<pre>";
			print_r($row);
			echo "</pre>";		
        }
		
   file_put_contents('fic.txt', print_r($T, true));
?>
