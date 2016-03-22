<?php
declare(strict_types=1);
/**
 * Caridea
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 *
 * @copyright 2015-2016 LibreWorks contributors
 * @license   http://opensource.org/licenses/Apache-2.0 Apache 2.0 License
 */
namespace Caridea\Event;

/**
 * Abstract event that can be broadcast to listeners.
 *
 * @copyright 2015-2016 LibreWorks contributors
 * @license   http://opensource.org/licenses/Apache-2.0 Apache 2.0 License
 */
abstract class Event
{
    /**
     * @var object The source of the event
     */
    private $source;
    /**
     * @var float The microtime when the event kicked off
     */
    private $when;
    
    /**
     * Creates a new event
     *
     * @param object $source The source of the event. Cannot be null.
     */
    public function __construct($source)
    {
        if (!is_object($source)) {
            throw new \InvalidArgumentException("Event source must be an object");
        }
        $this->source = $source;
        $this->when = microtime(true);
    }

    /**
     * Gets the source of the event.
     *
     * @return object The source of the event
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Gets the time in microseconds when the event kicked off.
     *
     * @return float The time of the event
     */
    public function getWhen(): float
    {
        return $this->when;
    }
}
