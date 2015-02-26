<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2013-12-24
 * Time: 02:57:55 AM
 *
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Event;

use Nilead\Notification\Message\MessageInterface;

/**
 * Consumer event interface
 */
interface ConsumerEventInterface
{
    const PRE_MESSAGE_CONSUME = 'nilead.notification.pre_message_consume';

    const POST_MESSAGE_CONSUME = 'nilead.notification.post_message_consume';

    /**
     * Get message instance from event
     *
     * @return MessageInterface
     */
    public function getMessage();
}
