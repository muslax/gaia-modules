<?php

/**
 * This file is part of Gaia Behavioral Modules package.
 *
 * @author Arif Muslax <muslax@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gaia\Behavioral\Modules;

use Gaia\Behavioral\GB;
use Gaia\Behavioral\Module;
use Gaia\Behavioral\Evidence;

/**
 * Class that defines GPQModule.
 *
 * @author Arif Muslax <muslax@gmail.com>
 */
class PSIModule extends Module
{
    protected int $type = GB::GB_MOD_PSI;
    
    public function score(Evidence $evidence) : array
    {
        return [];
    }
    
    public function generateReport(Evidence $evidence, array $options = []) : ?object
    {
        return null;
    }
}