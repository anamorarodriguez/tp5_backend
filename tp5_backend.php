<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>tp3_backend</h3>

    <?php
    //1
    print "<h2> ejercicio 1 </h2>";
    for ($i=1; $i <= 100; $i++) {
        print "<p>$i</p>\n";
        }

    //2 
    print "<h2> ejercicio 2 </h2>";
    for ($i=100 ; $i >= 1 ; $i-- ) {
        print "<p>$i</p>\n";
        }

    //3
    print "<h2> ejercicio 3 </h2>";
    for ($i = 2; $i <= 100; $i += 2) {
        print "<p>$i</p>\n";
    }

    //4
    print "<h2> ejercicio 4 </h2>";
    for ($i = 1; $i <= 100; $i += 2) {
        print "<p>$i</p>\n";
    }

    //5 
    print "<h2> ejercicio 5 </h2>";
    $suma=0;
    for ($i=1;$i<=20;$i++) {
        $suma+=$i;
        print "<p>$suma</p>";
    }

    //6
    print "<h2> ejercicio 6 </h2>";
    $suma=0;
    for ($i=2;$i<=20;$i+=2) {
        $suma+=$i;
        print "<p>$suma</p>";
    }
    ?>
</body>
</html>


