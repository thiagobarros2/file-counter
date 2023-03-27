<?php

use ThiagoBarros\FileCounter\Counter;

beforeEach(function () {
    $this->counter = new Counter();
    $this->extension = array_rand(['txt', 'doc', 'pdf', 'jpg', 'png', 'mp3', 'mp4', 'gif', 'xls', 'ppt', 'zip', 'rar', 'html', 'css', 'js', 'json', 'xml', 'csv', 'py', 'cpp'], 1);
});

it('should return the number of files .php into tests/folder dir', function () {
    $path = 'tests/folder';
    $file_extension = '.php';

    $result = $this->counter->number_of_files($path, $file_extension);

    expect($result)->toBe(1);
});

it('should return the number of files .php into tests/folder dir too', function () {
    $path = 'tests/folder';
    $file_extension = 'php';

    $result = $this->counter->number_of_files($path, $file_extension);

    expect($result)->toBe(1);
});

it('should return the number of files searching for another random extension', function () {
    $path = 'tests/folder';
    $result = $this->counter->number_of_files($path, $this->extension);

    expect($result)->toBe(0);
});

it('should return true asserting /tests/folder/folderphp is dir', function () {
    $path = 'tests/folderphp';
    $result = is_dir($path);

    expect($result)->toBetrue();
});

it('should return true asserting /tests/folder.php is dir', function () {
    $path = 'tests/folder.php';
    $result = is_dir($path);

    expect($result)->toBetrue();
});

it('should return false asserting tests/folder/file.php is dir', function () {
    $path = 'tests/folder/file.php';
    $result = is_dir($path);

    expect($result)->toBeFalse();
});
