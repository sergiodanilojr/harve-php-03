<?php

function config(string $config, ?string $key = null)
{
    $path = __DIR__ . "/../config/" . $config . ".php";

    if (!file_exists($path)) {
        throw new Exception("Arquivo não encontrado!");
    }

    $file = require $path;

    if (!$key) {
        return $file;
    }

    //return $file[$key] ?? null;

    return array_key_exists($key, $file) ? $file[$key] : null;
}
