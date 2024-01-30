<?php

it('should return true asserting /tests/assets/counter-test/folder/file.php is file', function (): void {
    expect(is_file('tests/assets/counter-test/folder/file.php'))->toBeTrue();
});

it('should return true asserting /tests/assets/lister-test/folder/file.php is file', function (): void {
    expect(is_file('tests/assets/lister-test/folder/file.php'))->toBeTrue();
});

it('should return true asserting /tests/assets/lister-test/folder/a.r is file', function (): void {
    expect(is_file('tests/assets/lister-test/folder/a.r'))->toBeTrue();
});

it('should return true asserting /tests/assets/lister-test/folder/b.cs is file', function (): void {
    expect(is_file('tests/assets/lister-test/folder/b.cs'))->toBeTrue();
});

it('should return true asserting /tests/assets/lister-test/folder/c.c is file', function (): void {
    expect(is_file('tests/assets/lister-test/folder/c.c'))->toBeTrue();
});

it('should return true asserting /tests/assets/lister-test/folder/d.js is file', function (): void {
    expect(is_file('tests/assets/lister-test/folder/d.js'))->toBeTrue();
});
