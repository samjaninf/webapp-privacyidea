<?php

/**
 * Configuration for privacyIDEA plugin
 *
 * @author Daniel Rauer, bytemine GmbH
 * @copyright 2016 bytemine GmbH
 * @license http://www.gnu.org/licenses/ GNU Affero General Public License
 * @link https://www.bytemine.net/
 */

/**
 * Application name in Authenticator
 */
define('PLUGIN_PRIVACYIDEA_APPNAME', 'WebApp');

/**
 * Hostname or IP of the privacyIDEA server
 */
define('PLUGIN_PRIVACYIDEA_VALIDATION_SERVER', 'radius.example.com');

/**
 * Radius secret
 */
define('PLUGIN_PRIVACYIDEA_RADIUS_SECRET', 'my_radius_secret');


/**
 * LDAP host and protocol
 */
define('PLUGIN_PRIVACYIDEA_LDAP_HOST', 'ldaps://ldap.example.com');

/**
 * LDAP port
 */
define('PLUGIN_PRIVACYIDEA_LDAP_PORT', '636');

/**
 * LDAP user group
 */
define('PLUGIN_PRIVACYIDEA_LDAP_USER_GROUP', 'users');

/**
 * LDAP search base
 */
define('PLUGIN_PRIVACYIDEA_LDAP_SEARCH_BASE', 'dc=example,dc=com');

/**
 * LDAP username attribute
 */
define('PLUGIN_PRIVACYIDEA_LDAP_USERNAME_ATTRIBUTE', 'uid');

/**
 * LDAP yubikey attribute
 */
define('PLUGIN_PRIVACYIDEA_LDAP_YUBIKEY_ATTRIBUTE', 'carLicense');

/**
 * Enable/Disable plugin
 * Default for new users, this doesn't mean the activation of two-factor authentication!
 */
define('PLUGIN_PRIVACYIDEA_ENABLE', true);

/**
 * Enable plugin when plugin is loading, the user can't disable the plugin.
 * But if the activate button is enabled the user can deactivate the two-factor authentication!
 */
define('PLUGIN_PRIVACYIDEA_ALWAYS_ENABLED', false);

/**
 * Activate/Deactivate 2FA
 * Default for new users.
 */
define('PLUGIN_PRIVACYIDEA_ACTIVATE', false);

/**
 * Activate 2FA when plugin is loading.
 * If PLUGIN_PRIVACYIDEA_ALWAYS_ACTIVATED is true, PLUGIN_PRIVACYIDEA_ENBUTACTIV should be false
 */
define('PLUGIN_PRIVACYIDEA_ALWAYS_ACTIVATED', false);

/**
 * Enable/Disable button configuration in settings.
 * For example for admin administration in mysql, ldap, ...
 */
define('PLUGIN_PRIVACYIDEA_ENBUTCONF', true);

/**
 * Enable/Disable button activate/deactivate in settings.
 * For example for admin administration in mysql, ldap, ...
 */
define('PLUGIN_PRIVACYIDEA_ENBUTACTIV', true);

/**
 * Enable/Disable button reset configuration in settings.
 * For example for admin administration in mysql, ldap, ...
 */
define('PLUGIN_PRIVACYIDEA_ENBUTTRESET', true);

/**
 * IP Whitelist with comma seperated IP/CIDR netmasks for login without 2FA
 * f.e. '192.168.172.0/24,127.0.0.1' or gethostbyname('uri')
 */
define('PLUGIN_PRIVACYIDEA_WHITELIST', '');

?>
