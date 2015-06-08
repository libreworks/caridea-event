# caridea-event
Caridea is a miniscule PHP web application library. This shrimpy fellow is what you'd use when you just want some helping hands and not a full-blown framework.

This is its event library. It has interfaces for Publisher and Listener, and an abstract class for Event.

If you'd like a concrete implementation of `Publisher`, try [caridea-container](https://github.com/libreworks/caridea-container).

## Installation

You can install this library using Composer:

```console
$ composer require caridea/event
```

This project requires PHP 5.5 and has no dependencies.

## Compliance

Releases of this library will conform to [Semantic Versioning](http://semver.org).

Our code is intended to comply with [PSR-1](http://www.php-fig.org/psr/psr-1/), [PSR-2](http://www.php-fig.org/psr/psr-2/), and [PSR-4](http://www.php-fig.org/psr/psr-4/). If you find any issues related to standards compliance, please send a pull request!

## Examples

Just a few quick examples.

Let's say you have defined these classes

```php
namespace Acme\Foo;

class CustomEvent extends \Caridea\Event\Event
{
}

class CustomEventListener implements \Caridea\Event\Listener
{
    public function notify(\Caridea\Event\Event $event)
    {
        if ($event instanceof CustomEvent) {
            // do something here
        }
    }
}
```

A publisher can be invoked like this:

```php
// Here, we assume that $publisher implements a \Caridea\Event\Publisher and that
// We have somehow registered an \Acme\Foo\CustomEventListener with it.
$publisher->publish(new \Acme\Foo\CustomEvent());
// Our CustomEventListener has its ->notify method invoked.
```
