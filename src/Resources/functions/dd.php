<?php

if (!function_exists('dd')) {
    function dd(...$data) {
        foreach ($data as $var) {
            dump($var);
        }
        die;
    }
}