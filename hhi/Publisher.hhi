<?hh // strict

namespace Caridea\Event;

interface Publisher
{
    public function publish<T>(Event<T> $event) : void;
}
