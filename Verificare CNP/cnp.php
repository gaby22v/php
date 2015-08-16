<html>
<body>
<?php
$cnp = $_POST["cnp"]; 
$judete = array (
		"Alba",
		"Arad",
		"Arges",
		"Bacau",
		"Bihor",
		"Bistrita-Nasaud",
		"Botosani",
		"Brasov",
		"Braila",
		"Buzau",
		"Caras-Severin",
		"Cluj",
		"Constanta",
		"Covasna",
		"Dambovita",
		"olj",
		"Galati",
		"Gorj",
		"Harghita",
		"Hunedoara",
		"Ialomita",
		"Iasi",
		"Ilfov",
		"Maramures",
		"Mehedinti",
		"Mures",
		"Neamt",
		"Olt",
		"Prahova",
		"Satu Mare",
		"Salaj",
		"Sibiu",
		"Suceava",
		"Teleorman",
		"Timis",
		"Tulcea",
		"Vaslui",
		"Valcea",
		"Vrancea",
		"Bucuresti",
		"Bucuresti S.1",
		"Bucuresti S.2",
		"Bucuresti S.3",
		"Bucuresti S.4",
		"Bucuresti S.5",
		"Bucuresti S.6",
		"Calarasi",
		"Giurgiu"
);
$luni = array (
		"Ianuarie",
		"Februarie",
		"Martie",
		"Aprilie",
		"Mai",
		"Iunie",
		"Iulie",
		"August",
		"Septembrie",
		"Octombrie",
		"Noiembrie",
		"Decembrie"
);
echo "CNP-ul este: " . $cnp;
/* Sexul */
$sex = substr ( $cnp, 0, 1 );
if ($sex == 9)
	echo ("<br> X este o persoana straina ");
else if ($sex % 2 == 1)
	echo ("<br> Sex: Masculin");
else
	echo ("<br>Sex: Feminin");
	/* Anul Nasterii */
$an = substr ( $cnp, 1, 2 );

switch ($sex) {
	case 1 :
	case 2 :
		echo ("<br> Anul nasterii: 19$an");
		break;
	case 3 :
	case 4 :
		echo ("<br> Anul nasterii: 18$an");
		break;
	case 5 :
	case 6 :
		echo ("<br> Anul nasterii: 20$an");
		break;
	case 7 :
	case 8 :
		echo ("<br> Persoana este de nationalitate straina, rezidenta in Romania");
		break;
	case 9 :
		echo ("<br> Persoana este de nationalitate straina, rezidenta in Romania");
		break;
	default :
		echo ("CNP-ul introdus este gresit");
}
/* Data nasterii */
$luna = substr ( $cnp, 3, 2 );
$ziua = substr ( $cnp, 5, 2 );
echo ("<br> Nascut in luna " . $luni [$luna - 1] . " in a $ziua -a zi<br>");

/* Judetul */
$jud = substr ( $cnp, 7, 2 );
echo ("<br>Judetul: " . $judete [$jud - 1] . "<br>");

/* Cifra de control */
$control = 0;
$suma = 0;
$nr_control = "279146358279";
for($i = 0; $i <= 11; $i ++)
	$suma += substr ( $cnp, $i, 1 ) * substr ( $nr_control, $i, 1 );
if ($suma % 11 == substr ( $cnp, 12, 1 ))
	echo "<br>CNP-ul este corect";
else
	echo "<br>CNP-ul a fost introdus gresit";
?>
</body>
</html>
