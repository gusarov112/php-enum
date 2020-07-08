# PHP Enum implementation inspired from SplEnum

[![Build Status](https://travis-ci.org/myclabs/php-enum.png?branch=master)](https://travis-ci.org/myclabs/php-enum)
[![Latest Stable Version](https://poser.pugx.org/myclabs/php-enum/version.png)](https://packagist.org/packages/myclabs/php-enum)
[![Total Downloads](https://poser.pugx.org/myclabs/php-enum/downloads.png)](https://packagist.org/packages/myclabs/php-enum)
[![psalm](https://shepherd.dev/github/myclabs/php-enum/coverage.svg)](https://shepherd.dev/github/myclabs/php-enum)

Maintenance for this project is [supported via Tidelift](https://tidelift.com/subscription/pkg/packagist-myclabs-php-enum?utm_source=packagist-myclabs-php-enum&utm_medium=referral&utm_campaign=readme).

## Why?

First, and mainly, `SplEnum` is not integrated to PHP, you have to install the extension separately.

Using an enum instead of class constants provides the following advantages:

- You can use an enum as a parameter type: `function setAction(Action $action) {`
- You can use an enum as a return type: `function getAction() : Action {`
- You can enrich the enum with methods (e.g. `format`, `parse`, …)
- You can extend the enum to add new values (make your enum `final` to prevent it)
- You can get a list of all the possible values (see below)

This Enum class is not intended to replace class constants, but only to be used when it makes sense.

## Installation

```
composer require myclabs/php-enum
```

## Declaration

```php
use MyCLabs\Enum\Enum;

/**
 * Action enum
 */
class Action extends Enum
{
    private const VIEW = 'view';
    private const EDIT = 'edit';
}
```

## Usage

```php
$action = new Action(Action::VIEW);

```

One advantage over using class constants is to be able to use an enum as a parameter type:

```php
function setAction(Action $action) {
    // ...
}
```

## Documentation

- `__construct()` The constructor checks that the value exist in the enum
- `__toString()` You can `echo $myValue`, it will display the enum value (value of the constant)
- `getValue()` Returns the current value of the enum
- `getKey()` Returns the key of the current value on Enum
- `equals()` Tests whether enum instances are equal (returns `true` if enum values are equal, `false` otherwise)

Static methods:

- `toArray()` method Returns all possible values as an array (constant name in key, constant value in value)
- `keys()` Returns the names (keys) of all constants in the Enum class
- `values()` Returns instances of the Enum class of all Enum constants (constant name in key, Enum instance in value)
- `isValid()` Check if tested value is valid on enum set
- `isValidKey()` Check if tested key is valid on enum set
- `search()` Return key for searched value

### Static methods

```php
class Action extends Enum
{
    private const VIEW = 'view';
    private const EDIT = 'edit';
}

// Static method:
$action = Action::VIEW();
$action = Action::EDIT();
```

## Related projects

- [Doctrine enum mapping](https://github.com/acelaya/doctrine-enum-type)
- [Symfony ParamConverter integration](https://github.com/Ex3v/MyCLabsEnumParamConverter)
- [PHPStan integration](https://github.com/timeweb/phpstan-enum)
