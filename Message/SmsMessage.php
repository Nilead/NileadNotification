<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 8/28/2015
 * Time: 12:22 PM
 * Author: ThinhNguyen
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Message;

/**
 * Class SmsMessage
 */
class SmsMessage extends Message implements SmsMessageInterface
{
    /**
     * @var string
     */
    protected $from;

    /**
     * @var string
     */
    protected $to;

    /**
     * @var string
     */
    protected $accountSid;

    /**
     * @var string
     */
    protected $authToken;

    /**
     * @var string
     */
    protected $body;

    /**
     * {@inheritdoc}
     */
    public function setFrom($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * {@inheritdoc}
     */
    public function setTo($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * {@inheritdoc}
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * {@inheritdoc}
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccountSid()
    {
        return $this->accountSid;
    }

    /**
     * @param string $accountSid
     */
    public function setAccountSid($accountSid)
    {
        $this->accountSid = $accountSid;
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * @param string $authToken
     */
    public function setAuthToken($authToken)
    {
        $this->authToken = $authToken;
    }

}
