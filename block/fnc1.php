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
	
	$word = str_replace("Sh","�",$word);
	$word = str_replace("'","�",$word);
	$word = str_replace("Ch","�",$word);
	$word = str_replace("Yu","�",$word);
	$word = str_replace("Ya","�",$word);
	$word = str_replace("O`","�",$word);
	$word = str_replace("G`","&#1170;",$word);
	
	$word = str_replace("sh","�",$word);
	$word = str_replace("ch","�",$word);
	$word = str_replace("yu","�",$word);
	$word = str_replace("ya","�",$word);
	$word = str_replace("o`","�",$word);
	$word = str_replace("g`","&#1171;",$word);
	$word = str_replace("a","�",$word);
	$word = str_replace("b","�",$word);;
	$word = str_replace("d","�",$word);
	$word = str_replace("e","�",$word);
	$word = str_replace("f","�",$word);
	$word = str_replace("g","�",$word);
	$word = str_replace("h","&#1203;",$word);
	$word = str_replace("i","�",$word);
	$word = str_replace("j","�",$word);
	$word = str_replace("k","�",$word);
	$word = str_replace("l","�",$word);
	$word = str_replace("m","�",$word);
	$word = str_replace("n","�",$word);
	$word = str_replace("o","�",$word);
	$word = str_replace("p","�",$word);
	$word = str_replace("q","&#1179;",$word);
	$word = str_replace("r","�",$word);
	$word = str_replace("s","�",$word);
	$word = str_replace("t","�",$word);
	$word = str_replace("u","�",$word);
	$word = str_replace("v","�",$word);
	$word = str_replace("x","�",$word);
	$word = str_replace("y","�",$word);
	$word = str_replace("z","�",$word);
										/////////////  Katta xarflar

	$word = str_replace("A","�",$word);
	$word = str_replace("B","�",$word);;
	$word = str_replace("D","�",$word);
	$word = str_replace("E","�",$word);
	$word = str_replace("F","�",$word);
	$word = str_replace("G","�",$word);
	$word = str_replace("H","&#1202;",$word);
	$word = str_replace("I","�",$word);
	$word = str_replace("J","�",$word);
	$word = str_replace("K","�",$word);
	$word = str_replace("L","�",$word);
	$word = str_replace("M","�",$word);
	$word = str_replace("N","�",$word);
	$word = str_replace("O","�",$word);
	$word = str_replace("P","�",$word);
	$word = str_replace("Q","&#1178;",$word);
	$word = str_replace("R","�",$word);
	$word = str_replace("S","�",$word);
	$word = str_replace("T","�",$word);
	$word = str_replace("U","�",$word);
	$word = str_replace("V","�",$word);
	$word = str_replace("X","�",$word);
	$word = str_replace("Y","�",$word);
	$word = str_replace("Z","�",$word);
	return($word);
}
//echo(enddel('univergasiga','ga'));
?>














