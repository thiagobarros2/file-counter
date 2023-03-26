<?php

use ThiagoBarros\FileCounter\Counter;

beforeEach(function () {
    $this->counter = new Counter();
    $this->extension = array_rand(['txt', 'doc', 'pdf', 'jpg', 'png', 'mp3', 'mp4', 'gif', 'xls', 'ppt', 'zip', 'rar', 'html', 'css', 'js', 'json', 'xml', 'csv', 'py', 'cpp'], 1);
});

it('return the number of files .php into tests dir', function () {
    $path = 'tests';
    $file_extension = '.php';
    $result = $this->counter->number_of_files($path, $file_extension);

    expect($result)->toBe(1);
});

it('return the number of files .js into tests dir', function () {
    $path = 'tests';
    $result = $this->counter->number_of_files($path, $this->extension);

    expect($result)->toBe(0);
});
