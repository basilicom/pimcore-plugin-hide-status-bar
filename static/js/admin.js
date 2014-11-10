pimcore.registerNS('pimcore.plugin.hideStatusBar');

/**
 * HideStatusBar Plugin
 * @type {pimcore.plugin.admin}
 */
pimcore.plugin.hideStatusBar = Class.create(pimcore.plugin.admin, {

    /**
     * Gets the plugin class name
     * @returns {string}
     */
    getClassName: function() {
        return 'pimcore.plugin.hideStatusBar';
    },

    /**
     * Registers the plugin
     */
    initialize: function() {
        pimcore.plugin.broker.registerPlugin(this);
    },

    /**
     * Hide the status bar after the backend is fully loaded
     * @param params
     * @param broker
     */
    pimcoreReady: function (params,broker){
        var user = pimcore.globalmanager.get('user');

        if(!user.admin) {
            $('#pimcore_statusbar').hide();
        }
    }


});

var hideStatusBar = new pimcore.plugin.hideStatusBar();
