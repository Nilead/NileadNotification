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

use Doctrine\Common\Inflector\Inflector;
use Nilead\Exception\Runtime\Common\UnsupportedOperationException;

class Message implements MessageInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var string
     */
    protected $current = '';

    /**
     * @var bool
     */
    protected $propagate = true;

    /**
     * @var bool
     */
    protected $queue = true;

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

    /**
     * {@inheritdoc}
     */
    public function setData(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * {@inheritdoc}
     */
    public function setCurrent($current)
    {
        $this->current = $current;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function has($key)
    {
        return array_key_exists($key, $this->data);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key, $default = null)
    {
        return array_key_exists($key, $this->data) ? $this->data[$key] : $default;
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;

        $this->setCurrent($key);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function stopPropagate()
    {
        $this->propagate = false;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPropagate()
    {
        return $this->propagate;
    }

    /**
     * @return self
     */
    public function skipQueue()
    {
        $this->queue = false;

        return $this;
    }

    /**
     * @return bool
     */
    public function canQueue()
    {
        return $this->queue;
    }

    /**
     * @param string $method
     * @param array $arguments
     *
     * @return mixed|null
     * @throws UnsupportedOperationException
     */
    public function __call($method, $arguments)
    {
        $name = Inflector::tableize($method);

        if ('get_' === substr($name, 0, 4)) {
            $key = substr($method, 3);

            if($this->has($realKey = Inflector::camelize($key))) {
                return $this->get($realKey);
            }

            if($this->has($realKey = Inflector::tableize($key))) {
                return $this->get($realKey);
            }

            return null;
        }

        throw new UnsupportedOperationException('Bad method call', 1);
    }
}
