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


use Nilead\Notification\Event\ConsumerEvent;
use Nilead\Notification\Message\MessageInterface;
use Nilead\NotificationBundle\Form\Type\BaseConsumerConfigurationType;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

abstract class AbstractConsumer implements ConsumerInterface
{
    /**
     * @var EventDispatcherInterface
     */
    protected $dispatcher;

    /**
     * {@inheritdoc}
     */
    public function setEventDispatcher(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    /**
     * {@inheritdoc}
     */
    public function getEventDispatcher()
    {
        return $this->dispatcher;
    }

    public function consume(MessageInterface $message)
    {
        $event = new ConsumerEvent();
        $event->setMessage($message);

        $this->dispatcher->dispatch($event::PRE_MESSAGE_CONSUME, $event);

        $result = $this->process($message);

        $this->dispatcher->dispatch($event::POST_MESSAGE_CONSUME, $event);

        return $result;
    }

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
     *
     * @return mixed
     */
    abstract protected function process(MessageInterface $message);
}
