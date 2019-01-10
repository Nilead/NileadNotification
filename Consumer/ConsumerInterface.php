<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2013-12-24
 * Time: 03:02:58 AM
 *
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Consumer;

use Nilead\Notification\Message\MessageInterface;
use Nilead\Notification\Hook\HookInterface;

/**
 * A consumer is a program that mostly waits to receive messages and send them
 *
 * Consumer does not know how to generate the message itself
 */
interface ConsumerInterface
{
    /**
     * Get unique name of the consumer
     *
     * @return string
     */
    public function getName();

    /**
     * @param HookInterface    $hook
     * @param MessageInterface $message
     * @param array            $configurations
     * @return boolean
     */
    public function consume(HookInterface $hook, MessageInterface $message, array $configurations = []);

    /**
     * @param array $hookConfigurations hook configurations
     *
     * @return array
     */
    public function getInput(array $hookConfigurations);

    /**
     * @param array $hookConfigurations hook configurations
     *
     * @return mixed
     */
    public function getOutput(array $hookConfigurations);

    /**
     * @return string
     */
    public function getConfigurationFormTemplate();
}
