<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2013-12-24
 * Time: 03:02:58 AM
 *
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Consumer;

use Nilead\Notification\Message\MessageInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * A consumer is a program that mostly waits to receive messages and process them
 */
interface ConsumerInterface
{
    /**
     * Get unique name of the consumer
     *
     * @return string
     */
    public function getName();

    /**
     * @param MessageInterface $message
     *
     * @return boolean
     */
    public function consume(MessageInterface $message);

    /**
     * @param EventDispatcherInterface $dispatcher
     *
     * @return self
     */
    public function setEventDispatcher(EventDispatcherInterface $dispatcher);

    /**
     * @return EventDispatcherInterface
     */
    public function getEventDispatcher();
}
