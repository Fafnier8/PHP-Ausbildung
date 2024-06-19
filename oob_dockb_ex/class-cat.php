<?php

/**
 * Class Cat, Defines the behaviour of a cat to certain actions
 *
 *
 * @param age Defines the age of the cat. The datatype is an integer
 * @param name Defines the name of the cat. The Datatype is a string
 * @param weight Defines the weight of the cat. The datatype is a float
 */
class Cat
{
    public $age;
    public $name;
    public $weight;

    public function __construct($args = []) {
        $this->age = $args['age'] ?? NULL;
        $this->name = $args['name'] ?? NULL;
        $this->weight = $args['weight'] ?? NULL;
    }

    /**
     * Function makeNoise defines which noise cat makes depending on choice from class Person
     *
     * Function that creates a noise depending on an input event from class person
     * return value changes value HealthPoint of object person
     *
     * @param event Defines what event happened to ascertain noise and return value. It's Datatype is a string.
     */
    public function makeNoise($event) {
        switch ($event) {

            case "pet":
                echo "*purr*\n";
                return 20;

            case "sleep":
                $sleepCatNoise = array_rand(['zz', 'zzz', 'ZZZ', 'ZZ']);
                echo "$sleepCatNoise\n";
                return 10;

            case "eat":
                echo "*mampf*\n";
                return 5;

            case "noteat":
                echo "*...*\n";
                return -5;

            case "nightmare":
                echo "*unrest*\n";
                return -10;

            case "scare":
                echo "*fauch* *run*\n";
                return -20;

            default:
                echo "*ignoring*\n";
                return 0;
        }
    }

    /**
     * Function sleep randomly choose if cat has good sleep or bad sleep and returns makeNoise
     *
     * Requires method makeNoise.
     *
     * @param sleepBehaviour Defines the sleep behaviour of the cat randomly
     */
    public function sleep() {
        $sleepBehaviour = array_rand(['good sleep', 'good sleep', 'good sleep', 'nightmare']);

        if ($sleepBehaviour = 'good sleep') {
            return self::makeNoise('sleep');
        }

        return self::makeNoise('nightmare');
    }

    /**
     * Function eat gets an input. If cat likes food, cat goes sleep. If not then not
     *
     * Function returns the lifPonits to class Person. Requires method sleep and makeNoise
     *
     * @param lifePoints Defines the addition/subtraction to lifepoints of an instance of class Person and returns it.
     */
    public function eat($food) {
        if (in_array($food, ['cat food', 'fish', 'cat snack'])) {
            $lifePoints = self::makeNoise('eat');
            $lifePoints += self::sleep();

            return $lifePoints;
        } else {
            return self::makeNoise('noteat');
        }
    }
}

//EOF
