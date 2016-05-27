<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Hook for registering long tasks
 *
 * @package Plesk_Modules
 */
abstract class pm_Hook_LongTasks implements pm_Hook_Interface
{

    /**
     * Retrieve the list of long tasks
     *
     * @return pm_LongTask_Task[]
     */
    abstract public function getLongTasks();

}
