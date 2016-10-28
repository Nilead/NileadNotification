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


abstract class AbstractConsumer implements ConsumerInterface
{
    /**
     * {@inheritdoc}
     */
    public function consume(HookInterface $hook, MessageInterface $message)
    {
        $result = $this->process($hook, $message);

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

    public function getInput()
    {
        return [];
    }

    /**
     * @param HookInterface    $hook
     * @param MessageInterface $message
     *
     * @return mixed
     */
    abstract protected function process(HookInterface $hook, MessageInterface $message);

    /**
     * @param               $data
     * @param HookInterface $hook
     *
     * @return MessageInterface
     */
    //    abstract protected function createMessage($data, HookInterface $hook);
}
