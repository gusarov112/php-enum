# PHP Enum implementation inspired from SplEnum

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

```bash
composer require gusarov112/php-enum
```

## Declaration

```php
use Gusarov112\Enum\Enum;

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

