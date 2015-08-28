<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 8/28/2015
 * Time: 12:25 PM
 * Author: ThinhNguyen
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Message;

/**
 * Interface SmsMessageInterface
 */
interface SmsMessageInterface
{
    /**
     * {@inheritdoc}
     */
    public function setFrom($from);

    /**
     * {@inheritdoc}
     */
    public function getFrom();

    /**
     * {@inheritdoc}
     */
    public function setTo($to);

    /**
     * {@inheritdoc}
     */
    public function getTo();

    /**
     * {@inheritdoc}
     */
    public function getBody();

    /**
     * {@inheritdoc}
     */
    public function setBody($body);

    /**
     * @return string
     */
    public function getAccountSid();

    /**
     * @param string $accountSid
     */
    public function setAccountSid($accountSid);

    /**
     * @return string
     */
    public function getAuthToken();

    /**
     * @param string $authToken
     */
    public function setAuthToken($authToken);
}
