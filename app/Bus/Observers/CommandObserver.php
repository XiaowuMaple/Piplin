<?php

/*
 * This file is part of Piplin.
 *
 * Copyright (C) 2016-2017 piplin.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Piplin\Bus\Observers;

use Piplin\Models\Command;

/**
 * Event observer for Command model.
 */
class CommandObserver
{
    /**
     * Called when the model is deleting.
     *
     * @param Command $command
     */
    public function deleting(Command $command)
    {
        $command->environments()->detach();
    }
}
