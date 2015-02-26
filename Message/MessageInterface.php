<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2013-12-24
 * Time: 02:38:13 AM
 *
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Message;

/**
 * Message interface
 */
interface MessageInterface
{
    /**
     * Gets the message identifier.
     *
     * @return integer
     */
    public function getId();

    /**
     * Sets the message identifier.
     *
     * @param integer $id Message identifier
     *
     * @return self
     */
    public function setId($id);

    /**
     * Gets the message firstName.
     *
     * @return string
     */
    public function getFirstName();

    /**
     *
     * @param $firstName
     */
    public function setFirstName($firstName);

    /**
     * Gets the message LastName
     *
     * @return string
     */
    public function getLastName();

    /**
     * @param $lastName
     */
    public function setLastName($lastName);

    /**
     * Set sendFrom addresses.
     *
     * $from can be either a string or an array
     * It is up to the consumer to decide how to parse this array
     * @link http://swiftmailer.org/docs/messages.html
     *
     * @param $from
     *
     * @return mixed
     */
    public function setFrom($from);

    /**
     * Get the sendFrom addresses
     *
     * @return array
     */
    public function getFrom();

    /**
     * Set sendTo addresses.
     *
     * $to can be either a string or an array
     * It is up to the consumer to decide how to parse this array
     * @link http://swiftmailer.org/docs/messages.html
     *
     * @param $to
     *
     * @return mixed
     */
    public function setTo($to);

    /**
     * Get the sendTo addresses
     *
     * @return mixed
     */
    public function getTo();

    /**
     * @param string $subject
     *
     * @return self
     */
    public function setSubject($subject);

    /**
     * Gets the message body
     *
     * @return string
     */
    public function getSubject();

    /**
     * @param string $body
     *
     * @return self
     */
    public function setBody($body);

    /**
     * Gets the message body
     *
     * @return string
     */
    public function getBody();

    /**
     * @param string $bodyHtml
     *
     * @return self
     */
    public function setBodyHtml($bodyHtml);

    /**
     * Gets the message body (html)
     *
     * @return string
     */
    public function getBodyHtml();

    /**
     * @return array
     */
    public function getData();
}
