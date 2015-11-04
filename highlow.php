<?php

    if ($argc <= 2) {
        die("Try Again! Enter php highlow.php and then your numbers.". PHP_EOL);
    }

$min = $argv[1];
$max = $argv[2];

$random = mt_rand($min,$max);
$tries = 0;

do {

    fwrite(STDOUT, "Guess a number between {$min} and {$max}...NOW!!" . PHP_EOL);    
    $guess = trim(fgets(STDIN));

    // var_dump($guess) {
        if (!is_numeric($guess)) {
            fwrite(STDOUT, "You MUST guess a number!" . PHP_EOL);   
        } else if ($guess == $random) {
            fwrite(STDOUT, "GOOD GUESS!" . PHP_EOL);   
        } else if ($guess > $random) {
            fwrite(STDOUT, "YOU SUCK MORE. Guess Lower!" . PHP_EOL);
        } else if ($guess < $random) {
            fwrite(STDOUT, "YOU SUCK LESS. Guess Higher!" . PHP_EOL);
        }
    } while($guess != $random);