<?hh // strict

namespace Caridea\Event;

trait PublisherSetter
{
    protected Publisher $publisher;

    public function setPublisher(Publisher $publisher): void
    {
        $this->publisher = $publisher;
    }
}
