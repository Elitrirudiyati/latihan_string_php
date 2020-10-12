<?php 
$paragraf="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";


function lc_first($paragraf){
	return lcfirst($paragraf);
}
function uc_first($paragraf){
	return ucfirst($paragraf);
}
function toupper($paragraf){
	return strtoupper($paragraf);
}
function tolower($paragraf){
	return strtolower($paragraf);
}


echo "<br> <i>Awal nya kecil sealin itu besar </i>: <br>", lc_first (strtoupper($paragraf));
echo "<br><i>Awal nya besar sealin itu kecil </i>: <br>", uc_first(strtolower($paragraf));
echo "<br> <i> Kecil semua</i>: <br>", tolower ($paragraf);
echo "<br> <i> Besar semua</i>: <br>", toupper ($paragraf);

?>