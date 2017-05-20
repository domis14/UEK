<html>
<body>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>

<a href="wybor.html">Powrót do menu.</a><br>
<?php
	include("simple_html_dom.php");
	
	$html = file_get_html("http://planzajec.uek.krakow.pl/index.php?typ=G&id=109171&okres=1");
	$rozmiarPrzedmiotow = $iloscPrzedmiotowNaStronie[] = count($html->find(".termin"));
	$numerGrupy = ($html->find(".grupa", 0));
	echo "Numer wybranej grupy: ", $numerGrupy;
	echo "Ilosc przedmiotow w wybranym okresie: ", $rozmiarPrzedmiotow, "<br>";
	
for($z=0; $z < $rozmiarPrzedmiotow; $z++)
{
	$pomocniczaZmienna=$z+1;
	$data[$z] = ($html->find(".termin", $z));
	$godzina[$z] = ($html->find(".dzien", $z));
	$nazwaPrzedmiotu[$z] = $html->find(".table[tr td]", $pomocniczaZmienna);
	
	//$dataWystawieniaOpinii[$z] = $html->find("span[time datetime]", $z)->attr['datetime'];
	$autorOpinii[$z] = ($html->find(".product-reviewer", $z));
	$czyPoleca[$z] = ($html->find(".product-recommended", $z));
	$osobUznajacychOpinieZaPrzydatna[$z] = ($html->find(".js_vote-yes span", $z));
	$osobUznajacychOpinieZaNiePrzydatna[$z] = ($html->find(".js_vote-no span", $z));
	
	echo "Data zajęć: ", $data[$z], "<br>";
	echo "Dzień i godzina zajęć: " , $godzina[$z], "<br>";
	echo "Nazwa przedmiotu: ", $nazwaPrzedmiotu[$z], "<br>";
	
	//$plik = fopen('123.txt','a');
	// przypisanie zawartości do zmiennej
	//fwrite($plik, $nazwaPrzedmiotu[$z]);
 ?>
</html>
</body>		