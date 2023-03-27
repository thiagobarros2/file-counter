## Instalation 

```bash
# development
$ composer require thiagobarros2/file-counter --dev

# production
$ composer require thiagobarros2/file-counter

# warning: this package can be of course used in production but was thinking to be a dev-dependency.
```

## Usage
```php
<?php

namespace src;

use ThiagoBarros\FileCounter\Counter;

function yourFunction() {
    $number_of_files = Counter::number_of_files('tests', 'php'); //the file_extension param can be provided with or without '.'    
    return = $number_of_files;
});
```
