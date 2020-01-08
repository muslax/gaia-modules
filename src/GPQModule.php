<?php

namespace Gaia\Behavioral\Modules;

use Gaia\Behavioral\GB;
use Gaia\Behavioral\Module;
use Gaia\Behavioral\Evidence;

class GPQModule extends Module
{
    protected int $type = GB::GB_MOD_GPQ;
    
    public function score(Evidence $evidence) : array
    {
        return [];
    }
    
    public function generateReport(Evidence $evidence, array $options = []) : ?object
    {
        return null;
    }
}