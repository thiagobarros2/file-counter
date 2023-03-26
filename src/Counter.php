<?php

declare(strict_types=1);

namespace ThiagoBarros\FileCounter;

/**
 * @internal
 */
final class Counter
{
    public static function number_of_files(string $path, string $file_extension): int
    {
        $dir = opendir($path);
        $result = 0;
        while ($file = readdir($dir = null)) {
            if (str_ends_with($file, $file_extension)) {
                $result++;
            }
        }
        closedir($dir = null);

        return $result;
    }
}
