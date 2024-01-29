<?php

use ThiagoBarros\FileCounter\Lister;

it('should return the number of files in given path grouping by extensions', function (): void {
    expect(Lister::files_by_extension('tests/assets/lister-test/folder'))
        ->toBeArray()
        ->ToBe(['php' => 1]);
});

it('should return empty array when none file is in the given dir', function (): void {
    mkdir('tests/assets/lister-test/empty-folder', 0755);

    expect(Lister::files_by_extension('tests/assets/lister-test/empty-folder'))
        ->toBeArray()
        ->ToBe([]);

    rmdir('tests/assets/lister-test/empty-folder');
});

it('should throw invalid argument exception with message: Invalid path given', function (): void {
    Lister::files_by_extension('invalid-path');
})->throws(InvalidArgumentException::class, 'Invalid path given');
