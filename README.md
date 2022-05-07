# Hillel Counter

The package will count how many times "Hillel" was mentioned in a text

## Installation

This project using composer.

```bash
$ composer require drozg/hillel-composer 
```

## Usage
Count the number of "Hillel" occurrences
```php
<?php

use Drozg\HillelComposer\HillelCounter;

$text = "This library have to return the number of \"Hillel\" occurrences."

echo HillelCounter::count($text);
```