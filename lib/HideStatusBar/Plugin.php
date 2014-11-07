<?php

/**
 * Class HideStatusBar_Plugin
 */
class HideStatusBar_Plugin
    extends Pimcore_API_Plugin_Abstract
    implements Pimcore_API_Plugin_Interface
{

    /**
     * Determine config file name via class name
     *
     * @return string xml config filename
     */
    private static function getConfigName()
    {
        return PIMCORE_WEBSITE_PATH
        . '/var/config/'
        . 'extension-'
        . str_replace('_plugin', '', strtolower(__CLASS__))
        . '.xml';
    }

    /**
     * Do not reload backend after install
     *
     * @return bool false
     */
    public static function needsReloadAfterInstall()
    {
        return false;
    }

    /**
     * Installs the plugin
     *
     * Copies the sample/default user images into the system folder as
     * if they had been set by the user. Creates the extension config
     * file, too.
     *
     * @return string success message
     */
    public static function install()
    {

        $configWriter = new Zend_Config_Writer_Xml();
        $configWriter->setConfig(new Zend_Config(array()));
        $configWriter->write(self::getConfigName());

        if (self::isInstalled()) {
            return "HideStatusBar successfully installed.";
        } else {
            return "HideStatusBar could not be installed";
        }
    }

    /**
     * Uninstalls the plugin
     *
     * @return string success message
     */
    public static function uninstall()
    {
        if (file_exists(self::getConfigName())) {
            unlink(self::getConfigName());
        }

        if (!self::isInstalled()) {
            return "HideStatusBar successfully uninstalled.";
        } else {
            return "HideStatusBar Plugin could not be uninstalled";
        }
    }

    /**
     * Checks, if the plugin is installed
     *
     * Existance of the xml config file is the indicator for an installed plugin
     *
     * @return bool true if the plugin is currently installed
     */
    public static function isInstalled() {

        return file_exists(self::getConfigName());
    }
}
