<?hh // strict

namespace Caridea\Event;

class NullPublisher implements Publisher
{
    public function publish<T>(Event<T> $event): void
    {
    }
}
