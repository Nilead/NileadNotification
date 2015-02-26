<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2/13/2015
 * Time: 12:57 PM
 * Author: vu
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Nilead\Notification\Event;

use Nilead\Notification\Event\ConsumerEventInterface;
use Nilead\Notification\Message\MessageInterface;
use Symfony\Component\EventDispatcher\Event;

class ConsumerEvent extends Event implements ConsumerEventInterface
{
    /**
     * @var MessageInterface
     */
    protected $message;

    /**
     * {@inheritdoc}
     */
    public function setMessage(MessageInterface $message)
    {
        $this->message = $message;
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage()
    {
        return $this->message;
    }
}
