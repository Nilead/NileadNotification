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
     */
    public function setData(array $data);

    /**
     * @return array
     */
    public function getData();
}
