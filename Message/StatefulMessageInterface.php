<?php
/**
 * Created by Rubikin Team.
 * ========================
 * Date: 2/13/2015
 * Time: 11:36 AM
 * Author: vu
 * Question? Come to our website at http://rubikin.com
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nilead\Notification\Message;


interface StatefulMessageInterface
{
    const STATE_OPEN = 'open';

    const STATE_IN_PROGRESS = 'in_progress';

    const STATE_DONE = 'done';

    const STATE_ERROR = 'error';

    const STATE_CANCELLED = 'cancelled';

    /**
     * Gets the message state (open, in_process, done, error, cancelled).
     *
     * @return string
     */
    public function getState();

    /**
     * Sets the message state (open, in_process, done, error, cancelled).
     *
     * @param string $state the state
     *
     * @return self
     */
    public function setState($state);
}
