<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP stringovi</title>
    <style>
        body {
            font-size: 25px;
        }

        h2 {
            color: blue;
        }

        h3 {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Stringovi</h1>
    <hr>
    <h2>Dodavanje i brisanje crte / i back slash</h2>
    <hr>
    <h3>Addslashes</h3>
    <?php
    $string = "Haj'd da se malo poigramo sa stringovima. To nam je jel'te vazno.";
    echo $string;
    echo "<br>";
    echo addslashes($string);
    echo "<br>";
    ?>
    <h3>Stripslashes</h3>
    <?php
    $brisanje = "Haj\'d da da mal\'ko brisemo kose crtice, obrnuto od funkcije addslashes koja ih dodaje.";
    echo $brisanje;
    echo "<br>";
    echo stripslashes($brisanje);
    echo "<br>";
    ?>
    <hr>
    <h2>Trim funkcija</h2>
    <ul>
        <li>trim</li>
        <li>ltrim</li>
        <li>rtrim</li>
    </ul>
    <h3>trim, ltrim, rtrim</h3>
    <?php
    $ime = "        Slobodan";
    $prezime = "        Miric       ";
    $celo_ime = $ime . " " . $prezime;

    echo $celo_ime;
    echo "<pre>";
    echo $celo_ime;
    echo "</pre>";
    echo "<br>";

    $celo_ime = trim($ime) . " " . trim($prezime);
    echo $celo_ime;
    echo "<pre>";
    echo $celo_ime;
    echo "</pre>";
    echo "<br>";

    $levo = "       prazno levo";
    $desno = "prazno desno       ";
    $ispis = ltrim($levo) . " - " . rtrim($desno);
    echo "<pre>";
    echo $ispis;
    echo "</pre>";
    echo "<br>";
    ?>

    <h3>primer sa explode</h3>
    <?php
    $primer = "Evo nam ga string,         koji koristimo za primer sa explode";
    echo "<pre>";
    echo $primer;
    echo "</pre>";
    echo "<br>";

    $explode = explode(",", $primer);
    echo "<pre>";
    var_dump($explode);
    print_r($explode);
    echo "</pre>";
    echo "<br>";
    echo "<pre>";
    var_dump(trim($explode[1]));
    print_r(trim($explode[1]));
    echo "</pre>";
    echo "<br>";

    ?>

    <hr>
    <h2>Substring</h2>
    <?php
    $tekst = "Ovo je neki tekst gde zelimo da izbacimo VISAK koji nam smeta. IZBACITI";
    echo "<pre>";
    echo "izvorni tekst: " . $tekst . "<br>";
    echo "substr(\$tekst, 41, 5): " . substr($tekst, 41, 5) . "<br>";
    echo "substr(\$tekst, -8): " . substr($tekst, -8) . "<br>";
    echo "substr(\$tekst, 62, 8): " . substr($tekst, 62, 8) . "<br>";
    echo "</pre>";
    echo "<br>";
    ?>

    <hr>
    <h2>String replace</h2>
    <pre>
        str_replace(array | string $search, array | string $replace, string | niz $subject)
    </pre>
    <?php
    $relax = "_ voli da seta Fridu u slobodno vreme";
    $sport = "_ voli da voza rolere po keju, takodje _ voli i brzi hod, posto je raspadnut ya trcanje.";
    $ugovor = "Ime_sponzora se obavezuje da ce uplatiti celokupan iznos koji je dogovoren najkasnije do 31. decembra. Ime_klijenta se obavezuje da ce uraditi u vezi predstavljanja sponzora na konferenciji. Ime_sponzora se obavezuje da ce dostaviti trazene materijale, a Ime_klijenta da ce se sve dogovoreno sprovesti u delo.";
    echo "<pre>";
    echo "\$relax: " . $relax . "<br>";
    echo "\$sport: " . $sport . "<br>";
    echo "\$ugovor: " . $ugovor . "<br>";
    echo "str_replace('_', 'Sloba', \$relax): " . str_replace("_", "Sloba", $relax) . "<br>";
    echo "str_replace('_', 'Sloba', \$spot): " . str_replace("_", "Sloba", $sport) . "<br>";
    echo "str_replace(array('Ime_sponzora', 'Ime_klijenta'), array('GoDaddy', 'WP Apatin'), \$ugovor): " . str_replace(array('Ime_sponzora', 'Ime_klijenta'), array('GoDaddy', 'WP Apatin'), $ugovor) . "<br>";
    echo "</pre>";
    echo "<br>";
    ?>

    <hr>
    <h2>Nizovi</h2>
    <hr>
    <h3>Funkcija za rad sa nizovima - in Array</h3>
    <?php
    $automobili = ['Mercedes', 'Audi', 'Renault', 'Peugeot', 'Honda', 'Toyota', 'BMW'];
    var_dump($automobili);
    echo "<br>";
    var_dump(in_array('Renault', $automobili));
    echo "<br>";
    var_dump(in_array('Yugo', $automobili));
    echo "<br>";

    echo '<hr>';
    var_dump(in_array('BMW', $automobili));
    echo "<br>";
    $model = 'BMW';
    $akcija = in_array($model, $automobili);
    if ($akcija) {
        echo $model . " je trenutno na akciji";
    } else {
        echo $model . " trenutno nije na akciji";
    }
    echo "<br>";
    ?>

    <hr>
    <h3>Array keys funkcija za rad sa nizovima</h3>
    <?php
    $evrovizija = [
        'Hrvatska' => 'Majke',
        'BiH' => 'Dubioza kolektiv',
        'Srbija' => 'Zvonko Bogdan',
        'Makedonija' => 'Leb i sol',
        'Slovenija' => 'Laibach',
        'Crna Gora' => 'Rambo Amadeus'
    ];
    echo '<pre>';
    echo "print_r(\$evrovizija): ";
    print_r($evrovizija);
    echo '</pre>';
    echo '<br>';
    echo '<pre>';
    echo "print_r(array_keys(\$evrovizija)): ";
    print_r(array_keys($evrovizija));
    echo '</pre>';
    echo '<br>';
    echo '<pre>';
    echo "print_r(array_key_first(\$evrovizija)): ";
    print_r(array_key_first($evrovizija));
    echo '</pre>';
    echo '<br>';
    echo '<pre>';
    echo "print_r(array_key_last(\$evrovizija)): ";
    print_r(array_key_last($evrovizija));
    echo '</pre>';
    echo '<br>';
    ?>

    <hr>
    <h3>Array pop - skidanje poslednjeg clana niza</h3>
    <?php
    $pasta = [
        'crni luk',
        'beli luk',
        'sampinjoni',
        'kuvani paradajz',
        'bosiljak',
        'origano',
        'vegeta',
        'piletina'
    ];
    echo '<pre>';
    echo "print_r(\$pasta): ";
    print_r($pasta);
    echo '</pre>';
    $opcioni_element = array_pop($pasta);
    echo '<pre>';
    echo "Moze i ne mora da se koristi $opcioni_element" . "<br>";
    print_r($pasta);
    echo '</pre>';
    echo '<br>';
    ?>

    <hr>
    <h3>Random - nasumicne vrednosti</h3>
    <?php
    $telefoni = ['Samsung', 'Xiaomi', 'Honor', 'Iphone', 'Motorola', 'Vivo'];
    echo " Do nedavno sam koristio $telefoni[3], pa sam presao na $telefoni[2]";
    echo '<br>';
    echo "\$telefoni[array_rand(\$telefoni)]: " . $telefoni[array_rand($telefoni)];
    echo '<br>';
    $zapamti = array_rand($telefoni);
    echo $zapamti . " = " . $telefoni[$zapamti];
    ?>

    <hr>
    <h3>Array search</h3>
    <?php
    $meni = ['pasta', 'sarma', 'riblji paprikas', 'burek', 'pecenje', 'pica'];
    echo "print_r(\$meni): ";
    print_r($meni);
    echo '<br>';
    echo "print_r(array_search('riblja corba', \$meni)): ";
    print_r(array_search('riblji paprikas', $meni));
    echo '<br>';
    $index = array_search('riblji paprikas', $meni);
    echo "$meni[$index] je tradicionalno jelo gornjeg podunavlja.";
    echo '<br>';
    ?>

    <hr>
    <h3>Sortiranje elemenata niza</h3>
    <ul>
        <li>sort</li>
        <li>rsort</li>
        <li>asort</li>
        <li>ksort</li>
        <li>arsort</li>
        <li>krsort</li>
    </ul>
    <hr>
    <?php
    $patike = ['Nike', 'Addidas', 'New Balance', 'Asics', 'Sketchers', 'Converse'];
    echo "print_r(\$patike): ";
    print_r($patike);
    echo '<br>';
    sort($patike);
    echo '<pre>';
    print_r($patike);
    echo '<hr>';
    echo '</pre>';

    $brojevi = [100, 2, 39, 50, 4, 98, 11, 62];
    echo '<pre>';
    print_r($brojevi);
    echo '<br>';
    rsort($brojevi);
    echo "Nakon rsort(\$brojevi): ";
    print_r($brojevi);
    echo '<hr>';
    echo '</pre>';

    $ispitni_rezultati = [
        'Arnold Sudicki' => 100,
        'Nina Zollner' => 90,
        'Bojan Ruzic' => 80,
        'Slobodan Miric' => 45
    ];
    echo '<pre>';
    print_r($ispitni_rezultati);
    echo '<br>';
    asort($ispitni_rezultati);
    echo "Nakon asort(\$ispitni_rezultati): ";
    print_r($ispitni_rezultati);
    echo '<br>';
    ksort($ispitni_rezultati);
    echo "Nakon ksort(\$ispitni_rezultati): ";
    print_r($ispitni_rezultati);
    echo '<br>';
    arsort($ispitni_rezultati);
    echo "Nakon arsort(\$ispitni_rezultati): ";
    print_r($ispitni_rezultati);
    echo '<br>';
    krsort($ispitni_rezultati);
    echo "Nakon krsort(\$ispitni_rezultati): ";
    print_r($ispitni_rezultati);
    echo '<br>';
    echo '</pre>';


    echo '<br>';

    ?>
</body>

</html>