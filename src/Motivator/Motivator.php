<?php

namespace Motivator;

class Motivator
{
    /**
     * Say something motivational.
     */
    public static function say()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/../../data/quotes.json'), true);

        return $data[array_rand($data)];
    }
}
