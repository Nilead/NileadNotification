<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2/13/2015
 * Time: 12:18 PM
 * Author: vu
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Consumer;


use Nilead\Notification\Message\MessageInterface;
use Nilead\NotificationBundle\Form\Type\BaseConsumerConfigurationType;
use Nilead\NotificationComponent\Model\HookInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

abstract class AbstractConsumer implements ConsumerInterface
{
    /**
     * @var EventDispatcherInterface
     */
    //    protected $dispatcher;

    //    /**
    //     * {@inheritdoc}
    //     */
    //    public function setEventDispatcher(EventDispatcherInterface $dispatcher)
    //    {
    //        $this->dispatcher = $dispatcher;
    //    }

    /**
     * {@inheritdoc}
     */
    //    public function getEventDispatcher()
    //    {
    //        return $this->dispatcher;
    //    }

    /**
     * {@inheritdoc}
     */
    public function consumeRaw($data, HookInterface $hook)
    {
        $message = $this->createMessage($data, $hook);

        return $this->consume($message, $hook);
    }

    /**
     * {@inheritdoc}
     */
    public function consume(MessageInterface $message, HookInterface $hook)
    {
        //        $event = new ConsumerEvent();
        //        $event->setMessage($message);

        //        $this->dispatcher->dispatch($event::PRE_MESSAGE_CONSUME, $event);

        $result = $this->process($message, $hook);

        //        $this->dispatcher->dispatch($event::POST_MESSAGE_CONSUME, $event);

        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurationFormType()
    {
        return BaseConsumerConfigurationType::class;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurationFormTemplate()
    {
        return sprintf('NileadNotificationBundle::Consumer/configuration_%s.html.twig', $this->getName());
    }

    /**
     * @param MessageInterface $message
     * @param HookInterface    $hook
     *
     * @return mixed
     */
    abstract protected function process(MessageInterface $message, HookInterface $hook);

    /**
     * @param               $data
     * @param HookInterface $hook
     *
     * @return MessageInterface
     */
    abstract protected function createMessage($data, HookInterface $hook);
}
