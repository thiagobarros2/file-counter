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
        if (str_starts_with($file_extension, '.')) {
            $file_extension = trim($file_extension, '.');
        }
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
