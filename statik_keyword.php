<?php		

//class ContohStatic {
// public static $angka =1;

// public static function halo(){
// }
//}


//echo ContohStatic::$angka;
//echo "<br>";
//echo ContohStatic::halo();
//echo "<hr>";
//echo ContohStatic::halo();


class contoh {
	public static $angka = 1;

	public function hallo(){
		return "hallo" . self::$angka++ . "kali <br>";
}
	}

	$obj= new contoh;
	echo $obj->hallo();
	echo $obj->hallo();
	echo $obj->hallo();

	echo "<hr>";

	$obj2 = new contoh;
	echo $obj2->hallo();
	echo $obj2->hallo();
	echo $obj2->hallo();

