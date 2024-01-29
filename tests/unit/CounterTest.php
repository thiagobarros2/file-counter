<?php

use ThiagoBarros\FileCounter\Counter;

it('should return the number of files .php into tests/folder dir', function (): void {
    expect(Counter::number_of_files('tests/assets/counter-test/folder', '.php'))->toBe(1);
});

it('should return the number of files .php into tests/folder dir too', function (): void {
    expect(Counter::number_of_files('tests/assets/counter-test/folder', 'php'))->toBe(1);
});

it('should return the number of files searching for another random extension', function (): void {
    expect(
        Counter::number_of_files(
            'tests/assets/counter-test/folder',
            array_rand(['txt', 'doc', 'pdf', 'jpg', 'png'], 1)
        )
    )->toBe(0);
});

it('should throw invalid argument exception with message: Invalid path given', function (): void {
    Counter::number_of_files('invalid-path', array_rand(['txt', 'doc', 'pdf', 'jpg', 'png'], 1));
})->throws(InvalidArgumentException::class, 'Invalid path given');
