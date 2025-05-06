<?php

namespace App\Core;

class Env {
    public static function load($path = __DIR__ . '/../../.env') {
        if (!file_exists($path)) {
            throw new \Exception(".env file not found at: $path");
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) continue;
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);

            // Remove optional surrounding quotes
            $value = trim($value, "'\"");

            putenv("$key=$value");
            $_ENV[$key] = $value;
        }
    }
}