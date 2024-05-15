
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        $kalimat1 = "PHP is never old";
        echo "Output : ".$kalimat1."<br>";
        echo "Panjang string : ". strlen($kalimat1)."<br>";
        echo "Jumlah kata : ". str_word_count($kalimat1)."<br><br>";
        
        echo "<h3> Soal No 2</h3>";
        $kalimat2 = "I love PHP";
        echo "Kata pertama: " . substr($kalimat2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($kalimat2, 2, 5) . "<br>" ;
        echo "Kata Ketiga: " . substr($kalimat2, 6, 9) . "<br>" ;

        echo "<h3> Soal No 3 </h3>";
        $kalimat3 = "PHP is old but sexy!";
        echo "kalimat: ".$kalimat3. "<br>"; 
        echo "Ganti kalimat: ". str_replace ("sexy","awesome",$kalimat3);

    ?>
</body>
</html>