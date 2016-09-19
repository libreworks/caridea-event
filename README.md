# caridea-event
Caridea is a miniscule PHP application library. This shrimpy fellow is what you'd use when you just want some helping hands and not a full-blown framework.

![](http://libreworks.com/caridea-100.png)

This is its event library. It has interfaces for Publisher and Listener, and an abstract class for Event.

If you'd like a concrete implementation of `Publisher`, try [caridea-container](https://github.com/libreworks/caridea-container).

[![Packagist](https://img.shields.io/packagist/v/caridea/event.svg)](https://packagist.org/packages/caridea/event)
[![Build Status](https://travis-ci.org/libreworks/caridea-event.svg)](https://travis-ci.org/libreworks/caridea-event)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/libreworks/caridea-event/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/libreworks/caridea-event/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/libreworks/caridea-event/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/libreworks/caridea-event/?branch=master)

We've also included `.hhi` files for the Hack typechecker.

## Installation

You can install this library using Composer:

```console
$ composer require caridea/event
```

* The master branch (version 2.x) of this project requires PHP 7.0 and has no dependencies.
* Version 1.x of this project requires PHP 5.5 and has no dependencies.

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

There's a no-op implementation of `Publisher` available as `\Caridea\Event\NullPublisher`.

### PublisherAware

For classes which need the event publisher, you can make use of the `PublisherAware` interface, and optionally the `PublisherSetter` trait.

```php
class MyClass implements \Caridea\Event\PublisherAware
{
    use \Caridea\Event\PublisherSetter;

    public function __construct()
    {
        $this->setPublisher(new \Caridea\Event\NullPublisher());
    }
}
```
