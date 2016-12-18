# Publishers

This library includes an interface: `Publisher`, with a single method, `publish`.

Classes which implement `Publisher` should send the event object provided to the `publish` method to any registered listeners.

No contract is included in this interface to add or remove listeners.

If you'd like a concrete implementation of `Publisher`, check out the [caridea-container](https://github.com/libreworks/caridea-container) project.

The only implementation of `Publisher` we provide is the `NullPublisher`, which is a no-operation class intended for unit testing and as a default instance.

Here is a very simple implementation of `Publisher`.

```php
namespace Foobar;

use Caridea\Event\Event;
use Caridea\Event\Listener;
use Caridea\Event\Publisher;

class MyPublisher implements Publisher
{
    private $publishers = [];

    public function __construct(array $publishers)
    {
        foreach ($publishers as $p) {
            if ($p instanceof Listener) {
                $this->publishers[] = $p;
            }
        }
    }

    public function notify(Event $event)
    {
        foreach ($this->publishers as $p) {
            $p->notify($event);
        }
    }
}
```

### PublisherAware

We provide the `PublisherAware` interface for objects which need a `Publisher`.

It has one method, `setPublisher`, which accepts the `Publisher` object.

To simplify using this interface, we provide a trait, `PublisherSetter`, which has a protected property, `$publisher`, and an implementation of the `setPublisher` method.

```php
namespace Foobar;

use Caridea\Event\NullPublisher;
use Caridea\Event\Publisher;
use Caridea\Event\PublisherAware;
use Caridea\Event\PublisherSetter;

class MyClass implements PublisherAware
{
    use PublisherSetter;

    public function __construct()
    {
        $this->setPublisher(new NullPublisher());
    }
}
```

The `Objects` class in the `caridea-container` project is a dependency injection container which will (among other things) automatically call `setPublisher` on any objects which implement `PublisherAware`.
