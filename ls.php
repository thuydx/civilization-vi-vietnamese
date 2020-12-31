<?php

$dir = "./Vietnamese/DLC";
$listFile = getDirContents($dir);

function getDirContents($dir, &$results = array()) {
    $files = scandir($dir);

    foreach ($files as $key => $value) {
        $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
        if (!is_dir($path)) {
            $results[] = $path;
        } else if ($value != "." && $value != "..") {
            getDirContents($path, $results);
//            $results[] = $path;
        }
    }

    return $results;
}

print_r($listFile);