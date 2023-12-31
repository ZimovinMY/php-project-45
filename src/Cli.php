<?php

namespace BrainGames\Cli;

use function cli\{line, prompt};

function welcome(): string
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
