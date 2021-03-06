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
 * Generated by PHPUnit_SkeletonGenerator on 2015-05-16 at 19:17:07.
 */
class EventTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @covers Caridea\Event\Event::__construct
     * @covers Caridea\Event\Event::getSource
     */
    public function testGetSource()
    {
        $event = new StubEvent($this);
        $this->assertSame($this, $event->getSource());
    }

    /**
     * @covers Caridea\Event\Event::__construct
     * @covers Caridea\Event\Event::getWhen
     */
    public function testGetWhen()
    {
        $event = new StubEvent($this);
        $this->assertNotNull($event->getWhen());
        $this->assertInternalType('float', $event->getWhen());
    }

    /**
     * @covers Caridea\Event\Event::__construct
     * @expectedException InvalidArgumentException
     */
    public function testBadConstruct()
    {
        new StubEvent('aoeu');
    }
}

class StubEvent extends \Caridea\Event\Event
{
}
