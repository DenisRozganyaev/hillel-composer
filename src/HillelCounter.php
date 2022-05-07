<?php

namespace HillelComposer;

class HillelCounter
{
    const NEEDED_WORD = "hillel";

    public static function count(string $text = ""): int
    {
        return substr_count(strtolower($text), self::NEEDED_WORD);
    }
}
