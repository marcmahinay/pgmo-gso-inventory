<?php

if (!function_exists('getNameInitials')) {
    function getNameInitials($name)
    {
        $name_array = explode(' ', trim($name));

        $firstWord = $name_array[0];
        $lastWord = $name_array[count($name_array) - 1];

        return mb_substr($firstWord[0], 0, 1) . "" . mb_substr($lastWord[0], 0, 1);
    }
}

if (!function_exists('formatBytes')) {
    function formatBytes($bytes)
    {
        if ($bytes > 0) {
            $i = floor(log($bytes) / log(1024));
            $sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
            return sprintf('%.02F', round($bytes / pow(1024, $i), 1)) * 1 . ' ' . @$sizes[$i];
        } else {
            return 0;
        }
    }
}
