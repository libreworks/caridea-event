<?php
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
 * @copyright 2015 LibreWorks contributors
 * @license   http://opensource.org/licenses/Apache-2.0 Apache 2.0 License
 */

namespace Caridea\Event;

/**
 * Easy implementation of `PublisherAware`.
 */
trait PublisherSetter
{
    /**
     * @var \Caridea\Event\Publisher
     */
    protected $publisher;

    /**
     * Sets the publisher.
     *
     * @param \Caridea\Event\Publisher$ publisher The publisher
     */
    public function setPublisher(Publisher $publisher)
    {
        $this->publisher = $publisher;
    }
}
