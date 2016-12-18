# Events

This library includes an abstract class, `Event`. Event has two properties: `source` and `when`.

* `source` is the object from which the event originated
* `when` is a float containing the system time at which this event occurred.

Children of this class are passed to a `Publisher`, which in turn sends them to `Listeners`. (see [Publishers](03-publishers.md) and [Listeners](02-listeners.md)).

Here is an example concrete event class.

```php
namespace Foobar;

use Caridea\Event\Event;

class AuthenticationEvent extends Event
{
    private $username;

    public function __construct($source, string $username)
    {
        parent::__construct($source);
        $this->username = $username;
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
```

You could then create a `Listener` that responds to `Foobar\AuthenticationEvent` objects.
