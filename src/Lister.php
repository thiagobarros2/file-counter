<?php

declare(strict_types=1);

namespace ThiagoBarros\FileCounter;

final class Lister
{
    /**
     * @return array<int> $filesByExtension
     */
    public static function files_by_extension(string $path): array
    {
        if (! is_dir($path)) {
            throw new \InvalidArgumentException('Invalid path given');
        }

        $filesInDir = is_array(scandir($path)) ? scandir($path) : [];

        $allExtensionsInDir = [];

        foreach ($filesInDir as $file) {
            $extension = pathinfo($file, PATHINFO_EXTENSION);
            if ($extension !== '') {
                $allExtensionsInDir[] = strtolower($extension);
            }
        }

        $filesByExtension = [];

        $filesByExtension = array_count_values($allExtensionsInDir);

        return $filesByExtension;
    }
}
