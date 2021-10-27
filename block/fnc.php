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
	$word = str_replace("’","`",$word);
	$word = str_replace("‘","`",$word);
	$word = str_replace("–","-",$word);
	$word = str_replace("“","\"",$word);
	$word = str_replace("”","\"",$word);
	
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

	$word = str_replace("'","ъ",$word);	
	$word = str_replace("Sh","Ш",$word);
	$word = str_replace("Ch","Ч",$word);
	$word = str_replace("Yu","Ю",$word);
	$word = str_replace("Ya","Я",$word);
	$word = str_replace("Yo","Ё",$word);

	$word = str_replace("SH","Ш",$word);
	$word = str_replace("CH","Ч",$word);
	$word = str_replace("YU","Ю",$word);
	$word = str_replace("YA","Я",$word);
	$word = str_replace("YO","Ё",$word);

	$word = str_replace("O`","Ў",$word);
	$word = str_replace("O`","Ў",$word);
	$word = str_replace("G`","&#1170;",$word);
	
	$word = str_replace("sh","ш",$word);
	$word = str_replace("ch","ч",$word);
	$word = str_replace("yu","ю",$word);
	$word = str_replace("ya","я",$word);
	$word = str_replace("yo","ё",$word);
	$word = str_replace("o`","ў",$word);
	$word = str_replace("g`","&#1171;",$word);
	$word = str_replace("a","а",$word);
	$word = str_replace("b","б",$word);;
	$word = str_replace("d","д",$word);
	$word = str_replace("e","е",$word);
	$word = str_replace("f","ф",$word);
	$word = str_replace("g","г",$word);
	$word = str_replace("h","&#1203;",$word);
	$word = str_replace("i","и",$word);
	$word = str_replace("j","ж",$word);
	$word = str_replace("k","к",$word);
	$word = str_replace("l","л",$word);
	$word = str_replace("m","м",$word);
	$word = str_replace("n","н",$word);
	$word = str_replace("o","о",$word);
	$word = str_replace("p","п",$word);
	$word = str_replace("q","&#1179;",$word);
	$word = str_replace("r","р",$word);
	$word = str_replace("s","с",$word);
	$word = str_replace("t","т",$word);
	$word = str_replace("u","у",$word);
	$word = str_replace("v","в",$word);
	$word = str_replace("x","х",$word);
	$word = str_replace("y","й",$word);
	$word = str_replace("z","з",$word);
										/////////////  Katta xarflar

	$word = str_replace("A","А",$word);
	$word = str_replace("B","Б",$word);;
	$word = str_replace("D","Д",$word);
	$word = str_replace("E","Е",$word);
	$word = str_replace("F","Ф",$word);
	$word = str_replace("G","Г",$word);
	$word = str_replace("H","&#1202;",$word);
	$word = str_replace("I","И",$word);
	$word = str_replace("J","Ж",$word);
	$word = str_replace("K","К",$word);
	$word = str_replace("L","Л",$word);
	$word = str_replace("M","М",$word);
	$word = str_replace("N","Н",$word);
	$word = str_replace("O","О",$word);
	$word = str_replace("P","П",$word);
	$word = str_replace("Q","&#1178;",$word);
	$word = str_replace("R","Р",$word);
	$word = str_replace("S","С",$word);
	$word = str_replace("T","Т",$word);
	$word = str_replace("U","У",$word);
	$word = str_replace("V","В",$word);
	$word = str_replace("X","Х",$word);
	$word = str_replace("Y","Й",$word);
	$word = str_replace("Z","З",$word);
	return($word);
}
//echo(enddel('univergasiga','ga'));

function arrcount($arr){
	$i = 0;
	foreach($j as $arr){
		$i++;
	}
	return($i);
}
?>














