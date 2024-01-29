<?php

it('should return true asserting /tests/assets/counter-test/folderphp is dir', function (): void {
    mkdir('tests/assets/counter-test/folderphp', 0755);

    expect(is_dir('tests/assets/counter-test/folderphp'))->toBetrue();

    rmdir('tests/assets/counter-test/folderphp');
});

it('should return true asserting /tests/assets/counter-test/folder.php is dir', function (): void {
    mkdir('tests/assets/counter-test/folder.php', 0755);

    expect(is_dir('tests/assets/counter-test/folder.php'))->toBetrue();

    rmdir('tests/assets/counter-test/folder.php');
});

it('should return false asserting /tests/assets/counter-test/folder/file.php is dir', function (): void {
    expect(is_dir('tests/assets/counter-test/folder/file.php'))->toBeFalse();
});

it('should return false asserting /tests/assets/lister-test/folder/file.php is dir', function (): void {
    expect(is_dir('tests/assets/lister-test/folder/file.php'))->toBeFalse();
});
