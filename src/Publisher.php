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
 * @copyright 2015-2018 LibreWorks contributors
 * @license   Apache-2.0
 */
namespace Caridea\Event;

/**
 * Interface for objects which send out event updates.
 *
 * @copyright 2015-2018 LibreWorks contributors
 * @license   Apache-2.0
 */
interface Publisher
{
    /**
     * Queues an event to be sent to Listeners.
     *
     * @param \Caridea\Event\Event $event The event to publish
     */
    public function publish(Event $event);
}
