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
use Nilead\NotificationComponent\Model\HookInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * A consumer is a program that mostly waits to receive messages and send them
 *
 * Consumer does not know how to generate the message itself
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
     * @param mixed         $data
     * @param HookInterface $hook
     *
     * @return boolean
     */
    public function consumeRaw($data, HookInterface $hook);

    /**
     * @param MessageInterface $message
     * @param HookInterface    $hook
     *
     * @return boolean
     */
    public function consume(MessageInterface $message, HookInterface $hook);

    //    /**
    //     * @param EventDispatcherInterface $dispatcher
    //     *
    //     * @return self
    //     */
    //    public function setEventDispatcher(EventDispatcherInterface $dispatcher);
    //
    //    /**
    //     * @return EventDispatcherInterface
    //     */
    //    public function getEventDispatcher();

    /**
     * @return array
     */
    public function getInput();

    /**
     * @return string
     */
    public function getConfigurationFormType();

    /**
     * @return string
     */
    public function getConfigurationFormTemplate();
}
