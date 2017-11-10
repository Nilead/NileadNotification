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
 *
 * base message interface with the minimal set of requirements
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
     * @param array $data
     *
     * @return self
     */
    public function setData(array $data);

    /**
     * @return array
     */
    public function getData();

    /**
     * @return array
     */
    public function getMetadata();

    /**
     * @param array $metadata
     *
     * @return self
     */
    public function setMetadata(array $metadata);

    /**
     * Get the current level of data
     *
     * @return string
     */
    public function getCurrent();

    /**
     * Set the current level of data
     *
     * @param string $current
     *
     * @return self
     */
    public function setCurrent($current);

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function has($key);

    /**
     * @param string $key
     * @param null   $default
     *
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * @param string $key
     * @param mixed  $value
     *
     * @return self
     */
    public function set($key, $value);

    /**
     * @return self
     */
    public function stopPropagate();

    /**
     * @return bool
     */
    public function getPropagate();

    /**
     * @return self
     */
    public function skipQueue();

    /**
     * @return bool
     */
    public function canQueue();
}
