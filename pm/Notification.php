<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH. All Rights Reserved.
/**
 * Notification manager
 *
 * @package Plesk_Modules
 * @since 17.0
 */
class pm_Notification
{

    /**
     * Creates new instance of notification manager
     */
    public function __construct() { }

    /**
     * Sends a notification
     *
     * @param string $id                notification's id
     * @param array $params             mail params for email body and subject (placeholders: key => value).
     * @param pm_Client|null $client    client or reseller who gets a notification.
     * @return array                    list of recipients
     * @throws pm_Exception
     */
    public function send($id, $params = [], $client = null) { }

}
