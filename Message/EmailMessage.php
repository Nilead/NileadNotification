<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2/13/2015
 * Time: 10:08 AM
 * Author: vu
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Message;

/**
 * Class EmailMessage
 *
 * @package Nilead\Notification\Message
 */
class EmailMessage extends Message implements EmailMessageInterface
{
    /**
     * {@inheritdoc}
     */
    public function setFrom($from)
    {
        $this->set('from', (array) $from);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFrom()
    {
        return $this->get('from', []);
    }

    /**
     * {@inheritdoc}
     */
    public function setTo($to)
    {
        $this->set('to', (array) $to);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTo()
    {
        return $this->get('to', []);
    }

    /**
     * {@inheritdoc}
     */
    public function setReplyTo($replyTo)
    {
        $this->set('replyTo', (array) $replyTo);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReplyTo()
    {
        return $this->get('replyTo', []);
    }

    /**
     * {@inheritdoc}
     */
    public function setReturnPath($returnPath)
    {
        $this->set('returnPath', $returnPath);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReturnPath()
    {
        return $this->get('returnPath');
    }

    /**
     * {@inheritdoc}
     */
    public function getSubject()
    {
        return $this->get('subject');
    }

    /**
     * {@inheritdoc}
     */
    public function setSubject($subject)
    {
        $this->set('subject', $subject);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->get('body');
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $this->set('body', $body);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBodyHtml()
    {
        return $this->get('bodyHtml');
    }

    /**
     * {@inheritdoc}
     */
    public function setBodyHtml($bodyHtml)
    {
        $this->set('bodyHtml', $bodyHtml);

        return $this;
    }
}
