<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Text Plain Long To IPv4 Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage LongToIPv4
 */
namespace PMA\libraries\plugins\transformations;

use PMA\libraries\plugins\transformations\abs\LongToIPv4TransformationsPlugin;

if (!defined('PHPMYADMIN')) {
    exit;
}

/**
 * Handles the long to ipv4 transformation for text plain
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage LongToIPv4
 */
class Text_Plain_Longtoipv4 extends LongToIPv4TransformationsPlugin
{
    /**
     * Gets the plugin`s MIME type
     *
     * @return string
     */
    public static function getMIMEType()
    {
        return "Text";
    }

    /**
     * Gets the plugin`s MIME subtype
     *
     * @return string
     */
    public static function getMIMESubtype()
    {
        return "Plain";
    }
}
