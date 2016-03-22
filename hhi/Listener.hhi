<?hh // strict

namespace Caridea\Event;

interface Listener
{
    public function notify<T>(Event<T> $event) : void;
}
