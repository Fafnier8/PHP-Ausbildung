<?php
    // GL2-Bedingung und Lückentext

    //GL2-Bedingungen - IF

    /*
        Grenzen Sie die Begriffe "if", "elseif" und "else" voneinander ab.
        Ihr Beispeil aus GL1... bitte überprüfen Sie, ob die Mutter bei der Geburt noch Minderjährig war, über 40, oder dazwischen. 
        Geben Sie entsprechend einen sinnvollen Text für den Anwender aus.
    */

    /*
        Antwort:

        if is the first one used when asking a condition. If the condition is true the code block will be executed.
        elseif is used when you want to check another condition. it is only executed when the condition before is false.
        else is the last option that is executed when no before condition is true.
    */
    $alterKind = readline("Bitte geben Sie das Alter des Kindes an: \n");
    $alterMutter = readline("Bitte geben Sie das Alter der Mutter an: \n");
    $alterMutterGeburt = $alterMutter-$alterKind;

    echo "Das Alter der Mutter war bei Geburt: " . $alterMutterGeburt . "\n";

    if($alterMutterGeburt < 18){
        echo "Schwierig für das Alter.\n";
    }
    elseif($alterMutterGeburt > 40){
        echo "Stolzes Alter für die Entscheidung.\n";
    }
    else{
        echo "In dem Alter liegen die meisten Geburten.\n";
    }

    // GL2 - Bedingungen - Switch - Case

    /*
        <?php

            $tag = readline("eine zahl 1-8 eingeben \n ");

            switch ($tag) {
             case 1:
                echo "Montag \n";
                break; //Hier wird ein Case beendet
            case 2:
                echo "Dienstag \n";
                break;
            case 3:
                echo "Mittwoch \n";
                break;
            case 4:
                echo "Donnerstag \n";
                break;
            case 5:
                echo "Freitag \n";
                break;
            case 6:
                echo "Samstag \n";
                break;
            case 7:
                echo "Sonntag \n";
                break;
            default: //Dieser Code wird ausgeführt, wenn kein passendes Case gefunden wurde
                echo "Fehler \n";
                break;
            }
        Bitte ändern Sie die Cases auf die tatsächlichen Wochentage. So dass der User also "Montag" angeben muss und nicht 1.
        Bonus: Sorgen Sie für eine gewisse Fehlertoleranz seitens der Eingaben des Anwenders.
    */

    // Error acceptance by making every letter lowercase and removing empty space at beginning and end

    $tag = trim(strtolower(readline("\nBitte geben Sie einen Wochentag ein.\n ")));


    switch ($tag) {
     case 'montag':
        echo "Montag \n";
        break; 
    case 'dienstag':
        echo "Dienstag \n";
        break;
    case 'mittwoch':
        echo "Mittwoch \n";
        break;
    case 'donnerstag':
        echo "Donnerstag \n";
        break;
    case 'freitag':
        echo "Freitag \n";
        break;
    case 'samstag':
        echo "Samstag \n";
        break;
    case 'sonntag':
        echo "Sonntag \n";
        break;
    default: 
        echo "Fehler. Kein Wochentag eingegeben! \n";
        break;
    }

    
    // Gl2 - UND / ODER

    /*
        UND und ODER sind sogenannte Logische Operatoren. Hier werden zwei Inputs (a und b) miteinander verknüpft und ergeben x.
        Es gibt noch den Operator NOT, welche den Wert ändert, also von true auf false, oder eben umgekehrt.
        Die Operatoren können ineinander verschachtelt werden, dabei müssen wir auf die Klammern achten, ähnlich wie in der Mathematik.

        UND (true, wenn beide true sind) a && b = x
            a        b          x
            true    true     true            
            true    false    false    
            false   true     false     
            false   false    false    

 

        ODER (true, wenn mind. eins true ist) a || b = x
            a         b          x
            true    true      true
            true    false     true
            false   true      true       
            false   false     false

        // -----------------------------------------------------
            // UND
            $einWert = 3;
            $nochnWert = 6.9;
            // Nur erfüllt, wenn beide Bedingungen true sind
            if ( ($einWert == 3) && ($nochnWert > 4.0) ) // && = and = UND. Jede der beiden Bedinungen muss true sein
            {                                            // dann wird dieser Codeblock ausgeführt
                echo "Bedingung ist erfuellt \n";
                // Hier können viele Zeilen Code stehen.
            }                                          // Ende Codeblock

        // -----------------------------------------------------
            // ODER
            // Erfüllt, wenn eine der beiden Bedingungen true ist
            if ( ($einWert == 3) || ($nochnWert > 4.0) ) // || = or = ODER. Mind. eine der Bedingungen muss true sein
            {                                            // dann wird dieser Codeblock ausgeführt
                echo "Bedingung ist erfuellt \n";
            }                                            // Ende Codeblock

        // -----------------------------------------------------
            // NOT
            $doit = true;
            $dontdoit = ! $doit; // Aus true wird false, aus false wird true
            var_dump($dontdoit);
    
            if (! ($einWert > 4)) // Prüfe zunächst (einWert > 4) ist false. Dann ! () ergibt true.
            {
        echo "einWert ist NICHT groeßer 4 \n"; 
            }   

        Welches Symbol wird verwendet um ein NOT auszuführen?
        Erklären Sie NAND und NOR in einer Tabelle analog zu der oben.
        Denken Sie sich ein sinnvolles Beispiel aus, bei dem Sie eine UND und/oder eine ODER Bedingung verwenden.
    */

    /*
        Antwort:

        To execute NOT an exclamtion mark is used.

        NAND (Is true if one is false) !(a && b) = x
        
        a       b        x
        true    true     false            
        true    false    true    
        false   true     true     
        false   false    true

        NOR (Is true if both are false) !(a || b) = x
        
        a       b        x
        true    true     false            
        true    false    false    
        false   true     false     
        false   false    true
        

        Beispiel eines UND und ODER Bedingung anhang von Ladungsneutralität:
        
        if(($positron && $electron) || $neutron){
            echo "The electric charge is neutral";
        }
    */

    /*
        Wie stelle ich ein Mathematisches Kleiner-Gleich-Zeichen dar?
        Wie stelle ich ein Mathematisches Größer-Gleich-Zeichen dar?
        Erstellen Sie eine IF-Verzweigung bei der Sie beide Zeichen verwenden.

        Bitte schreiben Sie das passende echo auf, was sich aus folgendem Code ergeben wird, OHNE ihn vorher in vom Computer verarbeiten zu lassen. Überprüfen Sie das Ergebnis im Anschluss mit Hilfe des PCs. Hier könnte ein Fehler geschen, der die Menscheheit schon mehrere Tausen Stunden gekostet hat.
        $x = 7;
        if($x=8)
        {echo "true"}
        else {echo "false"}
    */

    /*
        Antwort:

        Ein mathematisches kleiner-gleich Zeichen sieht so aus <= .
        Ein mathematisches größer-gleich Zeichen sieht so aus >= .

    */

    $number = 10;

    if($number >= 9 && $number <= 12){
        echo "You have a number from 9-12\n";
    }

    $x = 7;
    if($x=8){
        echo "true\n";
    }
    else {
        echo "false\n";
    }

    echo "The semicolon are missing and there is only one = during comparisson.\n";

    // GL2 - Ternär

    /*
        Beim Ternär Operato wrd anstatt von einer If-Bedingung wird das ganze mit einem ? und : geklärt. Zuerst kommt das echo dann die Bedingung unter der es 
        true oder false ist. Wenn es true ist wird das vor dem Doppelpunkt geprintet ansonsten das nach dem Doppelpunkt.
    */

    $isLength6 = readline("Please enter a word with 6 letters:\n");

    echo (strlen($isLength6)==6) ? "These are indeed 6 letters :thumpsUp: \n" : "Learn to Count!!\n";

    echo ($isLength6 === 'Burgir') ? "It's burgir time!\n" : "Sadge\n";

    // GL2 - Weitere Aufgaben

    /*
        2a)
            Gegeben ist eine Variable
            $gewicht = 405.5; // Gramm
            Schreiben Sie Code, um das Gewicht zu prüfen.
            Alles über 400 Gramm ist in Ordnung
            Genau 400 Gramm ist in Ordnung
            Alles unter 400 Gramm bringt eine Meldung "Gewicht reicht nicht aus"
            Alle anderen Fälle zeigen die Meldung "Gewicht ist okay"
        Bonus: Geben Sie aus, wie viel Gewicht fehlt, wenn das Gewicht unter 400 Gramm liegt.
    */

    $gewicht = 305.5; //gramm

    if($gewicht < 400){
        echo "Gewicht reicht nicht aus\n";
        $missingWeight = 400-$gewicht;
        echo "Es würden noch $missingWeight g fehlen.\n";
    }
    else{
        echo "Das Gewicht ist okay\n";
    }

    /*
        2b) 
            In einem Kino werden Filme für verschiedene Altergruppen gezeigt.
            Ab 0, ab 6, ab 12, ab 16 oder ab 18 Jahren.
            Das jeweilige Alter ist in der Variablen zuschauerAlter gespeichert:
            int zuschauerAlter = 9;
            Die Altersgrenze für den jeweiligen Film ist in der Variablen altersGrenze gespeichert.
            int altersGrenze = 12; // In diesem Beispiel ist der Film ab 12 Jahren zugänglich
            Schreiben Sie Code, der prüft, ob ein Zuschauer in den Film darf.
            Geben Sie sinnvollen Text für die beiden Fälle aus.

            In Filme ab 12 Jahren dürfen auch Kinder von 9-11 Jahren hinein, sofern sie
            von einem Erwachsenen gegleitet werden.
            Erweitern Sie das Programm auf alle Altersstufen und so, dass der Anwender sein Alter und seinen präferierten Film selber angeben kann.
    */
    /*
    $zuschauerAlt;
    $altersGrenze;
    $erwachsenenBegleitung;

    do{
        $zuschauerAlt = (int)abs(readline("Bitte geben Sie ihr Alter in Form einer positiven Zahl  ein: "));
        $altersGrenze = trim(readline("Bitte geben Sie die Altersgrenze vom Film ein, den Sie sehen wollen.(0, 6, 12, 16 oder 18): "));
        $erwachsenenBegleitung = trim(strtolower(readline("Werden Sie von einem Erwachsenen begleitet? (Ja oder Nein): ")));
        if(!(is_int($zuschauerAlt)) || !(in_array($altersGrenze, [0, 6, 12, 16, 18])) || !(in_array($erwachsenenBegleitung, ['ja', 'nein']))){
            echo "\033[31mUngültige Eingabe! Bitte beachten Sie den angezeigten Text!\033[0m\n";
        }
    } while(!(is_int($zuschauerAlt)) || !(in_array($altersGrenze, [0, 6, 12, 16, 18])) || !(in_array($erwachsenenBegleitung, ['ja', 'nein'])));

    if($zuschauerAlt>= $altersGrenze || ($altersGrenze == 12 && $erwachsenenBegleitung == 'ja' && $zuschauerAlt>=9)){
        echo "Vielen Dank. Viel Spaß bei Ihrem Film.\n";
    }
    else{
        if($altersGrenze == 12 && $zuschauerAlt >= 9){
            echo "Diesen Film können Sie nur unter Begleitung eines Erwachsenen schauen.\n";
        }
        else{
            echo "Sie sind zu jung für diesen Film und dürfen ihn daher nicht anschauen.\n";
        }
    }
    */

    /*
        2c)
            Erstellen Sie eine ZeichenVariable $gender = 'm';
            Gültige Zeichen sind m=männlich, w=weiblich d=divers
            und eine Variable int alter = 18;
            Erstellen Sie Werbesprüche gemäß den Vorgaben, männlich, weiblich
            und Alter. Divers passt jeweils für männlich und weiblich.
            Beachten Sie die Zielgruppen: 3-10 Jahre, 11-13, 14-17 Jahre und ab 18
            Geben Sie für jede Zielgruppe jeweils für m, w einen Spruch aus.
            Schreiben Sie Bedingungen für alle Testfälle und erweitern Sie das Programm so, dass der Anwender sein Alter und sein Gender selber       angeben kann.
    */
    do{
        $gender = trim(strtolower(readline("Bitte geben Sie Ihr Geschlecht an (männlich = m, weiblich = w, divers = d): ")));
        $alter = (int)abs(readline("Bitte geben Sie ihr Alter in Form einer positiven Zahl  ein: "));
        if(!(in_array($gender, ['m', 'w', 'd']))){
            echo "\033[31mUngültige Eingabe! Bitte beachten Sie den angezeigten Text!\033[0m\n";
        }
    }while(!(in_array($gender, ['m', 'w', 'd'])));
    
    // Won't do a gender specific advertisment because of personal and moral reasons

    if($alter > 17){
        echo "Test Age > 17\n" ;
    } 
    elseif($alter > 13){
        echo "Test 18 > Age > 13\n";
    }
    elseif($alter > 10){
        echo "Test 14 > Age > 10\n";
    }
    elseif($alter > 2){
        echo "Test 11 > Age > 2\n";
    }

    /*
        2d)
            Ein Hybridauto ist abfahrbereit, sofern der Akku mind. 5kWh Ladung hat oder sich im Tank mind. 10 Liter Benzin befinden.
            Außerdem muss der Reifenluftdruck in allen 4 Reifen immer mind. 1.8 bar betragen.
        $druckReifen1 = 1.7;
        $druckReifen2 = 1.9;
        $druckReifen3 = 2.0;
        $druckReifen4 = 2.1;
        $batterieKapazitaet = 6;
        $tankinhalt = 12;
        Geben Sie nun für die hard gecodeten Variablen aus, ob das Auto losfahren darf, oder nicht. Wenn es nicht losfahren darf, geben Sie eine entsprechende Begründung mit an.
        Bonus: Lassen Sie den User alle Variablen selbst eingeben und begründen Sie den Fehler so genau wie möglich und geben Sie ihm einen Lösungsvorschlag mit.
    */

    $druckReifen1 = (float)abs(readline("Bitte geben Sie den Reifendruck Ihres vorderen linken Reifens in der Einheit bar ein: "));
    $druckReifen2 = (float)abs(readline("Bitte geben Sie den Reifendruck Ihres vorderen rechten Reifens in der Einheit bar ein: "));
    $druckReifen3 = (float)abs(readline("Bitte geben Sie den Reifendruck Ihres hinteren linken Reifens in der Einheit bar ein: "));
    $druckReifen4 = (float)abs(readline("Bitte geben Sie den Reifendruck Ihres hinteren rechten Reifens in der Einheit bar ein: "));
    $batterieKapazitaet = (float)abs(readline("Bitte geben Sie die Ladung Ihrer Batterie in der Einheit kWh ein: "));
    $tankinhalt = (float)abs(readline("Bitte geben Sie den Inhalt Ihres Tankes in der Einheit Liter ein: "));

    // Bool variables to prove if part is alright

    $druckReifen1OK = true;
    $druckReifen2OK = true;
    $druckReifen3OK = true;
    $druckReifen4OK = true;
    $batterieKapazitaetOK = true;
    $tankinhaltOK = true;

    // user input for car data

    echo "Ihre Eingaben waren wie folgt:\nVorderer Linker Reifen: $druckReifen1 bar\n";
    echo "Vorderer Rechter Reifen: $druckReifen2 bar\n";
    echo "Hinterer Linker Reifen: $druckReifen3 bar\n";
    echo "Hinterer Rechter Reifen: $druckReifen4 bar\n";
    echo "Batterieladung: $batterieKapazitaet kWh\n";
    echo "Tankinhalt: $tankinhalt Liter\n";

    if($druckReifen1 < 1.8){
        echo "Der Druck vom vorderen linken Reifen ist zu gering.\n Dieser müsste um mindestens " . (1.8-$druckReifen1). " Bar aufgefüllt werden.\n";
        $druckReifen1OK = false;
    }

    if($druckReifen2 < 1.8){
        echo "Der Druck vom vorderen rechten Reifen ist zu gering.\n Dieser müsste um mindestens " . (1.8-$druckReifen2). " Bar aufgefüllt werden.\n";
        $druckReifen2OK = false;
    }

    if($druckReifen3 < 1.8){
        echo "Der Druck vom hinteren linken Reifen ist zu gering.\n Dieser müsste um mindestens " . (1.8-$druckReifen3). " Bar aufgefüllt werden.\n";
        $druckReifen3OK = false;
    }

    if($druckReifen4 < 1.8){
        echo "Der Druck vom hinteren rechten Reifen ist zu gering.\n Dieser müsste um mindestens " . (1.8-$druckReifen4). " Bar aufgefüllt werden.\n";
        $druckReifen4OK = false;
    }

    if($batterieKapazitaet < 5){
        echo "Die Batterieladung ist zu gering. Die Batterie muss um mindestens " . (5-$batterieKapazitaet) . " kWh aufgeladen werden.\n";
        $batterieKapazitaetOK = false;
    }

    if($tankinhalt < 10){
        echo "Der Tankinhalt ist zu gering. Der Tank müsste um mindestens " . 10-$tankinhalt . " Liter aufgefüllt werden.\n";
        $tankinhaltOK = false;
    }

    if($druckReifen1OK && $druckReifen2OK && $druckReifen3OK && $druckReifen4OK && $batterieKapazitaetOK && $tankinhaltOK){
        echo "Das Auto darf losfahren.\n";
    }

?>