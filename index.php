<?php

class StringUtility {

    public static function shout($string) {
        return strtoupper($string . "!");
    }

    public static function whisper($string) {
        return strtolower($string . ".");
    }

    public static function repeat($string, $times = 2) {
        return str_repeat($string, $times);
    }
}

$stringExample = "Let's test this out";
echo StringUtility::shout($stringExample);
echo("<br>");
echo StringUtility::whisper($stringExample);
echo("<br>");
echo StringUtility::repeat($stringExample);
