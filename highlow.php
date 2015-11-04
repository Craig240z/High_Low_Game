<?php

$random = mt_rand(1,100);
echo "\$random value is $random" . PHP_EOL;

$tries = 0;

do {

    fwrite(STDOUT, "Guess a number between 1 and 100...NOW!!" . PHP_EOL);    
    $guess = trim(fgets(STDIN));

    // var_dump($guess) {
        if (!is_numeric($guess)) {
            fwrite(STDOUT, "You MUST guess a number!" . PHP_EOL);   
        } else if ($guess == $random) {
            fwrite(STDOUT, "GOOD GUESS!" . PHP_EOL);   
        } else if ($guess > $random) {
            fwrite(STDOUT, "TOO HIGH. Guess Lower!" . PHP_EOL);
        } else if ($guess < $random) {
            fwrite(STDOUT, "Too LOW. Guess Higher!" . PHP_EOL);
        }
    } while($guess != $random);