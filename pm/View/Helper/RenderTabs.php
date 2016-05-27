<?php
// Copyright 1999-2015. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Helper for rendering tabs in view
 *
 * @package Plesk_Modules
 */
class pm_View_Helper_RenderTabs extends Zend_View_Helper_Abstract 
{

    /**
     * Render tabs
     *
     * ```php
     * [
     *     [
     *         'id' => string,
     *         'title' => string,
     *         'active' => bool,
     *         'controller' => string,
     *         'action' => string,
     *         'link' => string,
     *     ],
     *     ...
     * ]
     * ```
     * 
     *
     * @param array $tabs
     * @return string
     */
    public function renderTabs($tabs) { }

}
