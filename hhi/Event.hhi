<?hh // strict

namespace Caridea\Event;

abstract class Event<T>
{
    private T $source;

    public function __construct(T $source)
    {
        $this->source = $source;
    }

    public function getSource(): T
    {
        return $this->source;
    }

    public function getWhen(): float
    {
        return 0.0;
    }
}
