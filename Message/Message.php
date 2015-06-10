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

class Message implements MessageInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    public function setData(array $data)
    {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return get_object_vars($this);
    }
}
