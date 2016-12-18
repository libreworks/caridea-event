# Listeners

This library includes an interface: `Listener`, with a single method, `notify`.

Classes which implement `Listener` are expected to check the type of event that gets supplied and react accordingly.

Here is an example listener that only cares about the `Foobar\AuthenticationEvent` that we created in the [previous section](01-events.md).

```php
namespace Foobar;

use Caridea\Event\Event;
use Caridea\Event\Listener;

class AuthListener implements Listener
{
    public function notify(Event $event)
    {
        if ($event instanceof AuthenticationEvent) {
            error_log($event->getUsername() . ' logged in at ' . date('c', (int) $event->getWhen()));
        }
    }
}
```

Listeners get registered with and notified by a `Publisher`.
