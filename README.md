# strap
Fluent library for working with strings in Laravel

Branch         |         |         |
------- | ------- | ------- |
master  | [![build status](https://gitlab.com/agilesdesign/strap/badges/master/build.svg)](https://gitlab.com/agilesdesign/strap/commits/master)   | [![coverage report](https://gitlab.com/agilesdesign/strap/badges/master/coverage.svg)](https://gitlab.com/agilesdesign/strap/commits/master)
dev     | [![build status](https://gitlab.com/agilesdesign/strap/badges/dev/build.svg)](https://gitlab.com/agilesdesign/strap/commits/dev)         | [![coverage report](https://gitlab.com/agilesdesign/strap/badges/dev/coverage.svg)](https://gitlab.com/agilesdesign/strap/commits/dev)

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

