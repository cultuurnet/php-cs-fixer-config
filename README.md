# PHP CS Fixer config

## Installation

Add this library as a dev dependency to your project
```bash
composer require --dev publiq/php-cs-fixer-config
```

Add the following to the `.php_cs` file in the root of your repository and modify based on your application.
```php
<?php
return Publiq\PhpCsFixer\Config::fromFolders(
    [
        'src/',
        'test/',
    ]
);
```

You can add the following to your composer file for ease of use
```
"scripts": {
  "cs": "php-cs-fixer fix -v --diff --dry-run",
  "cs-fix": "php-cs-fixer fix -v --diff"
}
```
