<?php

/**
 * Created by Rubikin Team.
 * ========================
 * Date: 1/13/2017
 * Time: 12:15 AM
 * Author: vu
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Hook;

interface HookInterface
{
    /**
     * Sets the event for the specific hook
     *
     * @param string $event
     *
     * @return self
     */
    public function setEvent($event);

    /**
     * Gets the event for the specific hook
     *
     * @return string
     */
    public function getEvent();

    /**
     * Sets the consumer for the specific hook
     *
     * @param string $consumer
     *
     * @return self
     */
    public function setConsumer($consumer);

    /**
     * Gets the consumer for the specific hook
     *
     * @return string
     */
    public function getConsumer();

    /**
     * @param int $queue
     *
     * @return self
     */
    public function setQueue($queue);

    /**
     * @return int
     */
    public function getQueue();

    /**
     * @param string $tag
     *
     * @return self
     */
    public function setTag($tag);

    /**
     * @return string
     */
    public function getTag();
}
