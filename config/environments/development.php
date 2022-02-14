<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG') ?? true);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('DISALLOW_INDEXING', true);
Config::define('JETPACK_DEV_DEBUG', true);
Config::define('CLIENT_ID', 78502);
Config::define('CLIENT_SECRET', '13OGFxPlviMdo8J65bTQVKTjHftL3U2wCtzeZPlTSsepKcFeUM4cwxJxpXb6sudu');
Config::define('REDIRECT_URL', 'https://fdf.dev/');
Config::define('REQUEST_TOKEN_URL', 'https://public-api.wordpress.com/oauth2/token');
Config::define('AUTHENTICATE_URL', 'https://public-api.wordpress.com/oauth2/authenticate');

ini_set('display_errors', '1');

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);
