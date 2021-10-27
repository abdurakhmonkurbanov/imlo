<?php
function repp($word){
	$word = str_replace(".","",$word);
	$word = str_replace(",","",$word);
	$word = str_replace("?","",$word);
	$word = str_replace("!","",$word);
	$word = str_replace(":","",$word);
	$word = str_replace(";","",$word);
	$word = str_replace("("," ",$word);
	$word = str_replace(")"," ",$word);
	$word = str_replace("'","`",$word);
	
	return($word);
}
function appostr($s){
	$s = str_replace("'","&#39;",$s);
	return($s);
}
function query($word){
	$i = 0;
	$s1 = "(`word` like '";
	$s2 = "') or ";
	$qu = "SELECT *  FROM `words` WHERE ".$s1.$word.$s2;
	for($i = 0;$i<strlen($word);$i++){
		$w1 = $word;
		$w1[$i] = '_';
		$qu = $qu.$s1.$w1.$s2;
	}
	for($i = 0;$i<strlen($word)-1;$i++){
		$w1 = $word;
		$w1[$i] = '_';
		$w1[$i+1] = '_';
		$qu = $qu.$s1.$w1.$s2;
	}
	for($i = 0;$i<strlen($word)+1;$i++){
		$w1 = substr($word,0,$i);
		$w2 = substr($word,$i,strlen($word));
		$w = $w1.'_'.$w2;
		$qu = $qu.$s1.$w.$s2;
	}
	$qu1 = substr($qu,0,strlen($qu)-3);
	return $qu1;
}


function endsWith( $str, $sub ) {
    return ( substr( $str, strlen( $str ) - strlen( $sub ) ) == $sub );
}
function enddel($str, $sub){
		if (endsWith($str,$sub)){
			$res = rtrim($str,$sub);
	}
	return($res);
}
function kiril($word){
	
	$word = str_replace("Sh","Ø",$word);
	$word = str_replace("'","ú",$word);
	$word = str_replace("Ch","×",$word);
	$word = str_replace("Yu","Þ",$word);
	$word = str_replace("Ya","ß",$word);
	$word = str_replace("O`","¡",$word);
	$word = str_replace("G`","&#1170;",$word);
	
	$word = str_replace("sh","ø",$word);
	$word = str_replace("ch","÷",$word);
	$word = str_replace("yu","þ",$word);
	$word = str_replace("ya","ÿ",$word);
	$word = str_replace("o`","¢",$word);
	$word = str_replace("g`","&#1171;",$word);
	$word = str_replace("a","à",$word);
	$word = str_replace("b","á",$word);;
	$word = str_replace("d","ä",$word);
	$word = str_replace("e","å",$word);
	$word = str_replace("f","ô",$word);
	$word = str_replace("g","ã",$word);
	$word = str_replace("h","&#1203;",$word);
	$word = str_replace("i","è",$word);
	$word = str_replace("j","æ",$word);
	$word = str_replace("k","ê",$word);
	$word = str_replace("l","ë",$word);
	$word = str_replace("m","ì",$word);
	$word = str_replace("n","í",$word);
	$word = str_replace("o","î",$word);
	$word = str_replace("p","ï",$word);
	$word = str_replace("q","&#1179;",$word);
	$word = str_replace("r","ð",$word);
	$word = str_replace("s","ñ",$word);
	$word = str_replace("t","ò",$word);
	$word = str_replace("u","ó",$word);
	$word = str_replace("v","â",$word);
	$word = str_replace("x","õ",$word);
	$word = str_replace("y","é",$word);
	$word = str_replace("z","ç",$word);
										/////////////  Katta xarflar

	$word = str_replace("A","À",$word);
	$word = str_replace("B","Á",$word);;
	$word = str_replace("D","Ä",$word);
	$word = str_replace("E","Å",$word);
	$word = str_replace("F","Ô",$word);
	$word = str_replace("G","Ã",$word);
	$word = str_replace("H","&#1202;",$word);
	$word = str_replace("I","È",$word);
	$word = str_replace("J","Æ",$word);
	$word = str_replace("K","Ê",$word);
	$word = str_replace("L","Ë",$word);
	$word = str_replace("M","Ì",$word);
	$word = str_replace("N","Í",$word);
	$word = str_replace("O","Î",$word);
	$word = str_replace("P","Ï",$word);
	$word = str_replace("Q","&#1178;",$word);
	$word = str_replace("R","Ð",$word);
	$word = str_replace("S","Ñ",$word);
	$word = str_replace("T","Ò",$word);
	$word = str_replace("U","Ó",$word);
	$word = str_replace("V","Â",$word);
	$word = str_replace("X","Õ",$word);
	$word = str_replace("Y","É",$word);
	$word = str_replace("Z","Ç",$word);
	return($word);
}
//echo(enddel('univergasiga','ga'));
?>














