<?php

namespace Helper;

class InputHelper
{
    static public function input(string $sentence): string
    {
        echo "$sentence = ";

        return trim(fgets(STDIN));
    }
}
