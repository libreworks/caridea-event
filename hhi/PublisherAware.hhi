<?hh // strict

namespace Caridea\Event;

interface PublisherAware
{
    public function setPublisher(Publisher $publisher): void;
}
