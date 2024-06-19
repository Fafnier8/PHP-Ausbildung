<?php
/*
    Erstelle für den Unten stehenden Code, einen eigenen Unit-Test.
    Bitte bearbeite nur die Funktion UnitTestEinfach() und füge dort deinen Unit-Test ein.
    Solltest du am Code etwas verändern müssen, um deinen Unit-Test zu realisieren, begründe dies bitte in einem Kommentar.
*/

// ############################################  Unit-Test  ############################################

/**
 * Unit-Test Parameter
 * 
 * Test Variables
 * @param erwartung contains expected values of Unit-Test parameters
 * @param eingaben contains Unit-Test parameter that will be checked
 * @param ausgaben contains return-value from function FlaechenUmfang with eingaben as parameter
 */
function UnitTest() {
        // Erstelle hier deinen Unit-Test
        // Angaben und Erwartungen
        // Code Aufruf
        // Vergleich


        $erwartung = [13, NAN, NAN];
        $eingaben = [
                ["Dreieck", "Kreis", 'Rechteck'],
                [3, -3, 'q'],
                [6, 3, 1],
                [4, 8, 100]
        ];
        $ausgaben = FlaechenUmfang($eingaben[0], $eingaben[1], $eingaben[2], $eingaben[3]);

        var_dump($ausgaben);

        echo "Start Unit-Test\n";
        echo "--------------------------------------------------------------\n";

        for($i = 0; $i < sizeof($erwartung); $i++){
                if($erwartung[$i] === $ausgaben[$i]){
                        echo "    FINE  VALUE SHOULD BE: " . $erwartung[$i] . " VALUE IS: " . $ausgaben[$i] . "\n";
                        echo "--------------------------------------------------------------\n";
                } elseif(is_nan($erwartung[$i]) && is_nan($ausgaben[$i])) {
                        echo "    FINE  VALUE SHOULD BE: " . $erwartung[$i] . " VALUE IS: " . $ausgaben[$i] . "\n";
                        echo "--------------------------------------------------------------\n";
                } else {
                        echo "NOT FINE  VALUE SHOULD BE: " . $erwartung[$i] . " VALUE IS: " . $ausgaben[$i] . "\n";
                        echo "--------------------------------------------------------------\n";
                }
        }

}


// ############################################  Funktion  ############################################
/**
 * Änderungen am Code zur Realisierung des Unit-Tests
 * 
 * Um mehrere Werte gleichzeitig zu überprüfen wurde ein Array fürs Ergebnis und
 * eine for-Schleife zum Durchzählen eingefügt.
 * Der Return erfolgt dementsprechend erst am Ende und breaks für den Switch Case wurden eingefügt.
 * Eine IF-Abfrage wurde hinzugefügt da mit NAN nicht gerechnet werden kann.
 */

function FlaechenUmfang($Form, $Lanege1, $Laenge2, $Laenge3) {
$ergebnis = [];

for($i = 0; $i<sizeof($Form);$i++){
        if (!is_numeric($Lanege1[$i]) || !is_numeric($Laenge2[$i]) || !is_numeric($Laenge3[$i])) {
            $ergebnis[$i] = NAN;                             // Wenn eine der Längen keine Zahl ist, wird NaN zurückgegeben
        } else {
                switch ($Form[$i]) {
                    case "Dreieck":
                        $ergebnis[$i] = $Lanege1[$i] + $Laenge2[$i] + $Laenge3[$i];
                        break;

                    case "Kreis":
                        $ergebnis[$i] = 2 * pi() * $Lanege1[$i];
                        break;

                    case "Rechteck":
                        $ergebnis[$i] = 2 * ($Lanege1[$i] + $Laenge2[$i]);
                        break;

                    default:
                        $ergebnis[$i] = 0;
                }
        }
}

return $ergebnis;
}

UnitTest();

// EOF
