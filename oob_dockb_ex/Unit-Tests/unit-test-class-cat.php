

<?php

// Provides class Cat
require_once('../class-cat.php');

/**
 * Class to Unit-Test the class Cat
 */
class UnitTestClassCat
{

    /**
     * Method that Unit-Tests propperties given to a class Cat
     *
     * @return void
     */
    public function UnitTestProperties() {

        /**
         * Properties test
         */
        /** @var array[] $eingabenAttributes Input values that will be tested */
        $eingabenAttributes = [14, 'Meow', 45];
        /** @var array[] $erwartungAttributes Contains expected values for Unit-Test of properties */
        $erwartungAttributes = [14, 'Meow', 45];

        $gadse = new Cat(['age' => $eingabenAttributes[0], 'name' => $eingabenAttributes[1], 'weight' => $eingabenAttributes[2]]);
        $ausgabenAttributes = [$gadse->age, $gadse->name, $gadse->weight];

        $compareArray = array_map(null, $erwartungAttributes, $ausgabenAttributes);

        echo "Start Unit-Test for Properties\n";
        echo "--------------------------------------------------------------\n";

        foreach ($compareArray as $array) {
            if ($array[0] === $array[1]) {
                echo '    FINE  VALUE SHOULD BE: ' . $array[0] . ' VALUE IS: ' . $array[1] . "\n";
                echo "--------------------------------------------------------------\n";
            } elseif (!isset($array[0]) && !isset($array[1])) {
                echo '    FINE  VALUE SHOULD BE: ' . $array[0] . ' VALUE IS: ' . $array[1] . "\n";
                echo "--------------------------------------------------------------\n";
            } else {
                echo 'NOT FINE  VALUE SHOULD BE: ' . $array[0] . ' VALUE IS: ' . $array[1] . "\n";
                echo "--------------------------------------------------------------\n";
            }
        }
    }

    /*
    for ($i = 0; $i < sizeof($erwartungAttributes); $i++) {
      if ($erwartungAttributes[$i] === $ausgabenAttributes[$i]) {
        echo "    FINE  VALUE SHOULD BE: " . $erwartungAttributes[$i] . " VALUE IS: " . $ausgabenAttributes[$i] . "\n";
        echo "--------------------------------------------------------------\n";
      } elseif (!isset($erwartungAttributes[$i]) && !isset($ausgabenAttributes[$i])) {
        echo "    FINE  VALUE SHOULD BE: " . $erwartungAttributes[$i] . " VALUE IS: " . $ausgabenAttributes[$i] . "\n";
        echo "--------------------------------------------------------------\n";
      } else {
        echo "NOT FINE  VALUE SHOULD BE: " . $erwartungAttributes[$i] . " VALUE IS: " . $ausgabenAttributes[$i] . "\n";
        echo "--------------------------------------------------------------\n";
      }
    }

  }
  */
    /**
     * @return void
     */
    public function UnitTestMakeNoise() {
    /**
     * First test of class makeNoise
     */
    /** @var array[] $erwartung Expected values for Unit-Test of method makeNoise*/
    $erwartung = [20, 10, 0, -10, 10];
    /** @var array[] $eingaben Values that will be used as parameters for Unit-Test of method makeNoise*/
    $eingaben = ['pet', 'sleep', 5, 'nightmare', 'sleep'];
    $ausgaben = [];
    $eingabenAttributes = [14, 'Meow', 45];
    $gadse = new Cat(['age' => $eingabenAttributes[0], 'name' => $eingabenAttributes[1], 'weight' => $eingabenAttributes[2]]);

    foreach($eingaben as $input){
        $ausgaben[] = $gadse->makeNoise($input);
    }

    $compareArray = array_map(null, $erwartung, $ausgaben);

    /*
    for ($i = 0; $i < sizeof($eingaben); $i++) {

    }
    */

    echo "Start Unit-Test makeNoise\n";
    echo "--------------------------------------------------------------\n";

    foreach($compareArray as $array) {
        if ($array[0] === $array[1]) {
            echo '    FINE  VALUE SHOULD BE: ' . $array[0] . ' VALUE IS: ' . $array[1] . "\n";
            echo "--------------------------------------------------------------\n";
        } elseif (!isset($array[0]) && !isset($array[1])) {
            echo '    FINE  VALUE SHOULD BE: ' . $array[0] . ' VALUE IS: ' . $array[1] . "\n";
            echo "--------------------------------------------------------------\n";
        } else {
            echo 'NOT FINE  VALUE SHOULD BE: ' . $array[0] . ' VALUE IS: ' . $array[1] . "\n";
            echo "--------------------------------------------------------------\n";
        }
    }

    /*
    for ($i = 0; $i < sizeof($erwartung); $i++) {
      if ($erwartung[$i] === $ausgaben[$i]) {
        echo '    FINE  VALUE SHOULD BE: ' . $erwartung[$i] . ' VALUE IS: ' . $ausgaben[$i] . "\n";
        echo "--------------------------------------------------------------\n";
      } elseif (is_nan($erwartung[$i]) && is_nan($ausgaben[$i])) {
        echo '    FINE  VALUE SHOULD BE: ' . $erwartung[$i] . ' VALUE IS: ' . $ausgaben[$i] . "\n";
        echo "--------------------------------------------------------------\n";
      } else {
        echo 'NOT FINE  VALUE SHOULD BE: ' . $erwartung[$i] . ' VALUE IS: ' . $ausgaben[$i] . "\n";
        echo "--------------------------------------------------------------\n";
      }
    }
    */
  }
}

$testStart = new UnitTestClassCat();
$testStart->UnitTestProperties();
$testStart->UnitTestMakeNoise();


// EOF
