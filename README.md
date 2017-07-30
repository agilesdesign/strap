# strap
Fluent library for working with strings in Laravel

## Description
`Illuminate\Support\Str` wrapper for fluently working with strings as objects in Laravel. 

## Installation

##### Include through composer

`composer require agilesdesign/strap`

## Overview
###### Stop doing:
```php

$string = preg_replace(
    '/(?:' . preg_quote('!', '/') . ')+$/u',
    '',
    mb_convert_case(
        preg_replace(
            '/(?:' . preg_quote(' doing this', '/') . ')+$/u',
            '', 'stop'
        ) . ' doing this',
        MB_CASE_TITLE,
        'UTF-8'
    )
) . '!';

echo $string;

// Stop Doing This!
```

###### Start doing:
```php
$string = str('start')->finish(' ')->finish('doing this')->title()->finish('!');

echo $string;

// Start Doing This!
```

## Usage
> `Strap\Str` implements `__toString()` allowing the object to be converted to a string in cases where it is to be treated as such

