<?php

    /*
    Excersize A4 B) GL1-Ein-/Ausgaben und Memory 
    */

    // Excersize GL1 - Ausgabe

    

    echo "Hallo Walter \n";
    echo "Hallo Paul ".PHP_EOL;
    echo "Hallo Gerhard";
    echo "Hallo Manfred";

    // Welche Unterschiede sehen Sie?
    // Wie erklären Sie sich die Unterschiede?

    /* 
    Explanation:
    
    After the first two there is the text in a new line.
    The third and the fourth are in the same line. 
    That is becuase \n and EOL (End of Line) end the current line and start a new one.
    */

    // GL1 - Variablen und Datentypen

    $str = "12";
    var_dump($str);

    //int
    $zahl = 3;
    echo "Eine Ganzzahl: $zahl \n";

    //float
    $kommaZahl = 3.5;
    echo "Eine Kommazahl: $kommaZahl \n";

    // Ausgabe mit 2 Nachkommastellen und Komma statt Punkt
    echo number_format($kommaZahl, 2, ',', '.'); // erzeugt 1,50

    /*
    Anhand welcher Informationen wird der Datentyp bestimmt?
    Welche Datentypen kennen Sie?
    Welche Datentypen haben die Variablen aus dem Bespiel oben?
    Wie kann ich eine Variable in einem echo ausgeben?
    */

    /*
    Answer:

    PHP reads the input and then decides which data type it should have.
    If something is in quotation marks it is a string, if it is a number
    without decimal places it's an integer and if it has decimal places it is
    a float. 

    The first variable str is a string.
    The second variable zahl is an integer.
    The third variable kommaZahl is a float.

    Variables can be printed with an echo by adding the whole variable name with the dollar sign.
    */

    // GL1 - Rechnen mit Variablen

    $zahl = 10;
    $zahl2 = 25;

    // 1. Hole Variable zahl aus Speicher in Prozessor
    // 2. Addiere im Prozessor 36 dazu
    // 3. Speichere das Ergebnis in Variable ergebnis

    $ergebnis = $zahl + 36;
    echo "\n $ergebnis \n";

    $ergebnis2 = $zahl + $zahl2;
    echo "\n $ergebnis2 \n";

    $ergebnis3 = $zahl + 65 - $zahl2 * 3;
    echo "\n $ergebnis3 \n";

    echo 23 - $zahl . "\n";

    //-------------------------

    // Es gibt auch andere Möglichkeiten, verkürzte
    // Langform:  summe = summe + 1;
    // Kurzform:  summe += 1;

    $summe = 10;
    $ww = 51;

    $summe = $summe + 9; // Langform für Aufaddieren
    $summe += 7; // Kurzform für Aufaddieren
    $summe = $summe + $ww; // Langform
    $summe -= $ww; // Kurform für Abziehen
    echo "$summe \n";

    /*
    (Bei der Langform) Welche Werte haben $ergebnis, $ergebnis2 und $ergebnis3 bei der langform?
    (Bei der Kurzform) Welchen Wert hat $summe?
    Wie würde ich in Kurzform summe = summe * 1337 schreiben?
    */

    /*
    Antwort:

    $ergebnis hat den Wert 46

    $ergebnis2 hat den Wert 35

    $ergebnis3 hat den Wert 0

    $summe hat den Wert  26

    Die Kurzform zu $summe = $summe * 1337; wäre $summe *= 1337;

    */

    // GL1 - Eingabe

    $line = readline("\nZahl zwischen 3 und 100 eingeben: ");
    var_dump($line); // den Typ der Variable ausgeben. Für Entwickler!

    if(is_numeric($line))
    {
        $zahl = 3 * $line;
        echo "Das dreifache der Zahl ist $zahl \n";

        var_dump($zahl); //den Typ der Variable ausgeben
    }
    else{
        echo "Bitte Zahl eingeben!";
    }
    /*
    Wieso ist $line zuerst ein String? Wir wollen doch eine Zahl eingeben!
    Wieso ändert sich der Dateityp von $line, nachdem wir ihn mit 3 multipliziert haben?
    Bitte forden Sie in einer eigenen readline() den Anweder dazu auf das eigene Alter anzugeben, sowie das Alter der Mutter. Ihr Programm soll nun das Alter der Mutter bei Geburt in der Konsole angeben.
    */

    /*
    Antwort:

    Die Funktion readline liest Zeichen für Zeichen aus der Konsole aus bis es auf ein \n trifft.
    Diese werden standardmäßig in einem string daher gespeichert, um die gesamte Eingabe erfassen zu können.
    
    Der Dateityp ändert sich da php erkennt, dass eine Rechenoperation mit einem Integer ausgeführt wird und den
    Dateityp des strings dann automatisch konvertiert für die Rechnung. 
    */

    $alterKind = readline("Bitte geben Sie das Alter des Kindes an: \n");
    $alterMutter = readline("Bitte geben Sie das Alter der Mutter an: \n");

    echo "Das Alter der Mutter war bei Geburt: " . ($alterMutter-$alterKind) . "\n";

    // GL1 - Modulo

    /*

    Modulo = Rest einer Ganzzahldivision

    Beispiele:
      10 % 2 = 0   // 10 lässt sich ohne Rest durch 2 teilen
      7  % 2 = 1   // die 2 passt 3 mal in die 7. Es bleibt ein Rest von 1
      11 % 2 = 1   // die 2 passt 5 mal in die 11. Rest = 1
  
      30 % 5 = 0   // die 5 passt 6mal in die 30. Es bleibt ein Rest von 0
      23 % 5 = 3   // die 5 passt 4 mal in die 23. Es bleibt ein Rest von 3
    */
  
    $eineZahl = 26;
    $rest = $eineZahl % 5;
    echo "Modulo Rest=". $rest . "\n" ;
  
    // Anwendung  : Gerade Zahl:   zahl % 2 == 0
      //              Alle Zahlen, die durch 5 teilbar sind:  zahl % 5 == 0
      //              Aus einer großen Zahl eine Zahl im Bereich 0 bis x machen  zahl = bigzahl % x
      //              z.b. Bei Zufallszahlen oder hashes.

    // Erweitern Sie Ihr Programm aus der Voraufgabe und geben Sie mit aus, ob das Alter der Mutter dabei grade oder ungrade war.

    if(($alterMutter-$alterKind) % 2 == 0){
        echo "Das Alter der Mutter war gerade zur Geburt.\n";
    }
    else{
        echo "Das Alter der Mutter war ungerade zur Geburt. \n";
    }

    //GL1 - Scope

    echo "Hello World";
    $a = 1;
    if ($a > 2)
    {
        $h = 3;
    }

    echo $h;  // Variable gilt auch noch außerhalb des Blocks
          // Dies ist bei C++ und Java anders!!
          // Beim Thema Funktionen kehren wir zu den Scopes zurück

    // GL1 - Konstanten

    const PI = 3.14159; // Achtung: Kein $-Zeichen vor der Konstanten

    // PI = 5.14 //Verboten!

    echo "\n\n" . PI;

    // So würde es auch gehen:
    define('MIN_VALUE', '0.0');
    define('MAX_VALUE', '1.0');

    echo "\n\n" . MIN_VALUE;
    echo "\n" . MAX_VALUE . "\n";

    // Wieso braucht man in der Programmierung Konstanten? Schildern Sie ein Beispiel, welches ohne PI auskommt.

    /*
    Antwort:

    In der programmierung gibt es Werte die in der Laufzeit nicht verändert werden sollen,
    Konstanten in den Naturwissenschaften zum Beispiel. Werte wie die Lichtgeschwindigkeit
    haben einen festen Wert, der zum Berechnen wichtig ist.
    */

    // GL1 - Casting

    $str = "12";
    var_dump($str);

    $zahl = (int) $str;  // caste string nach zahl
    var_dump($zahl);
   
    $str2 = (string) $zahl; // caste zahl nach string
    var_dump($str2);
   
   
    $kzahlStr = "3.6";
    var_dump($kzahlStr);
    $kzahl  = (float) $kzahlStr;
    var_dump($kzahl);
   
    $kzahlStr2 = (string) $kzahl;
    var_dump($kzahlStr2);

    // Bitte Casten Sie das Alter der Mutter bei Geburt aus den vorherigen Aufgaben in einen String

    $alterMutterGeburtString = (string) ($alterMutter-$alterKind);
    var_dump($alterMutterGeburtString);

    // GL1 - Weitere Aufgaben

    /*
    1a)
    Ohne Benutzer-Eingabe!
    Gegeben sind 5 ganzzahlige Variablen zahl1, zahl2 etc.
    Berechnenen Sie die Summe und den Durchschnitt der Werte.
    Geben Sie die Ergebnisse auf der Konsole aus.
    Rechnen Sie die Ergebnisse nach!
    */


    $zahl1 = 5;
    $zahl2 = 17;
    $zahl3 = 100;
    $zahl4 = 9;
    $zahl5 = 8;

    $summe = $zahl1 + $zahl2 + $zahl3 + $zahl4 + $zahl5;

    $durchschnitt = $summe/5;

    echo "Die Summe der 5 Zahlen ist: $summe\nIhr Durchschnitt liegt bei: $durchschnitt \n";

    /*
    Antwort:

    Ergebnis nach Konsole:

    Summe:
    139

    Durchschnitt:
    27,8

    Ergebnis durch nachrechnen:

    Summe:
    5 + 17 + 100 + 9 + 8 = 139

    Durchschnitt:
    139/5 = 27,8
    */

    /*
    1b)
    Benutzereingabe: Eine Ganzahl
    Berechnen Sie die Quadratzahl der Eingabe
    Geben Sie beispielsweis bei der Eingabe von 5 folgendes aus:
    Die Quadratzahl von 5 ist 25;
    */

    $zahl = readline("Bitte geben Sie eine Zahl ein: \n");
    $quadratZahl = $zahl * $zahl;

    echo "Die Quadratzahl von $zahl ist $quadratZahl\n";

    /*
    1c)
    Erstellen Sie eine Variable summe
    Addieren Sie 33 zu dieser summe
    Addieren Sie weitere 22 zu dieser summe
    Geben Sie den Inhalt von summe auf der Konsole aus.
    Hinweis: Verwenden Sie nur die eine Variable "int summe"
         Verwenden Sie die Langform um 33 zu addieren.
         Verwenden Sie die Kurzfrom um weitere 22 zu addieren.
    */

    $summe = 0;

    $summe = $summe + 33;
    $summe += 22;

    echo "Summe hat den Wert: $summe\n";

    /*
    1d)
    Benutzereingabe Integerzahl
    Geben Sie den Divisionsrest dieser Zahl aus. Teilen Sie durch 2 und 5
    Hinweis: Modulo verwenden.
    */

    $zahl = readline("Bitte geben Sie eine Zahl ein: \n");

    echo "Der Rest der Zahl $zahl bei einer Division durch 2 beträgt: " . ($zahl % 2) . "\n";
    echo "Der Rest der Zahl $zahl bei einer Division durch 5 beträgt: " . ($zahl % 5) . "\n";

    /*
    1e)
    Wie kann man prüfen, ob eine Zahl ungerade ist.
    Schreiben Sie ein Programm mit Benutzereingabe einer Zahl.
    Ausgabe-Beispiel: Die Zahl 5 ist ungerade oder  Die Zahl 6 ist nicht ungerade.
    */

    $zahl = readline("Bitte geben Sie eine Zahl ein: \n");

    if($zahl % 2 == 0){
        echo "Die Zahl $zahl ist gerade.\n";
    }
    else{
        echo "Die Zahl $zahl ist ungerade.\n";
    }

    /*
    1f)
    Gegeben ist Gemüse mit einem  Gewicht von 66.5 kg.
    Durch Trocknung verliert es 20% seines Gewichts.
    Rechnen Sie mit Variablen in zwei Schritten: 
    - double verlust:    Höhe des Gewichtsverlusts
    - double endgewicht: Gewicht nach der Trocknung
    Geben Sie das Endgewicht nach der Trocknung aus.
    */

    $gewichtGemüse = 66.5;
    
    $verlust = $gewichtGemüse * 0.2;
    $endgewicht = $gewichtGemüse - $verlust;

    echo "Das Endgewicht nach der Trocknung beträgt: $endgewicht kg. \n";

    /*
    1g)
    Benutzereingabe: Kreisradius
    Berechnen Sie den Kreisumfang und die Kreisfläche
    Verwenden Sie die Kreiszahl PI als Konstante.
    Geben Sie das Ergebnis in dieser Form aus:
    Ein Kreis mit dem Radius 4 hat einen Kreisumfang von 25.133 und eine Kreisfläche von 50.265
    */

    $radius = readline("Bitte geben Sie eine Zahl (in cm) für den Kreisradius an: \n");
    //const PI = 3.14159; PI already in this file


    $kreisFläche = PI * $radius * $radius;

    $kreisUmfang = 2 * PI * $radius;

    echo "Ein Kreis mit dem Radius $radius cm hat ungefähr einen Kreisumfang von $kreisUmfang cm und eine Kreisfläche von $kreisFläche cm².\n";

    /*
    1h)
    Auf dem Markt wird Obst stückweise verkauft.
    Hier die Preise:
    Apfel = 60 cent
    Kirsche = 10 cent
    Aprikosen = 30 cent

    Frank kauft 4 Äpfel, 20 Kirschen und 5 Aprikosen
    Frieda kauft 3 Äpfel, 30 Kirschen und 4 Aprikosen

    Das Programm gibt folgenden Text aus:
    Frank kauft für X Euro ein.  
    Frieda kauft für Y Euro ein.
    Frank muss mehr als Frieda bezahlen
    oder
    Frieda muss mehr als Frank bezahlen
    Ersetzen X, Y durch die berechneten Werte. 
    */

    $preisApfel = 0.6;
    $preisKirsche = 0.1;
    $preisAprikosen = 0.3;

    $apfelFrank = 4;
    $kirschenFrank = 20;
    $aprikosenFrank = 5;

    $apfelFrieda = 3;
    $kirschenFrieda = 30;
    $aprikosenFrieda = 4;

    $kostenFrank = $preisApfel * $apfelFrank + $preisKirsche * $kirschenFrank + $preisAprikosen * $aprikosenFrank;
    $kostenFrieda = $preisApfel * $apfelFrieda + $preisKirsche * $kirschenFrieda + $preisAprikosen * $aprikosenFrieda;

    echo "Frank kauft für $kostenFrank € ein.\n";
    echo "Frieda kauft für $kostenFrieda € ein.\n";
    if($kostenFrank>$kostenFrieda){
        echo "Frank muss mehr als Frieda bezahlen.\n";
    }
    elseif($kostenFrank<$kostenFrieda){
        echo "Frieda muss mehr als Frank bezahlen.\n";
    }
    else{
        echo "Frank und Frieda bezahlen gleich viel.\n";
    }

?>


 