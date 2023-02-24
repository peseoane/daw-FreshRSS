<?php
return array (
  'environment' => 'production',
  'salt' => '07cfbee4bd445797589eac7a508089661b08c3a4',
  'base_url' => 'http://localhost:2004',
  'auto_update_url' => 'https://update.freshrss.org',
  'language' => 'en',
  'title' => 'FreshRSS',
  'meta_description' => '',
  'logo_html' => '',
  'default_user' => 'FOXTROT',
  'force_email_validation' => false,
  'allow_anonymous' => false,
  'allow_anonymous_refresh' => false,
  'auth_type' => 'form',
  'http_auth_auto_register' => true,
  'http_auth_auto_register_email_field' => '',
  'api_enabled' => false,
  'unsafe_autologin_enabled' => false,
  'simplepie_syslog_enabled' => true,
  'pubsubhubbub_enabled' => false,
  'allow_robots' => false,
  'allow_referrer' => false,
  'limits' => 
  array (
    'cookie_duration' => 7776000,
    'cache_duration' => 800,
    'timeout' => 15,
    'max_inactivity' => 9223372036854775807,
    'max_feeds' => 131072,
    'max_categories' => 16384,
    'max_registrations' => 1,
  ),
  'curl_options' => 
  array (
  ),
  'db' => 
  array (
    'type' => 'sqlite',
    'host' => false,
    'user' => false,
    'password' => false,
    'base' => false,
    'prefix' => false,
    'connection_uri_params' => '',
    'pdo_options' => 
    array (
    ),
  ),
  'mailer' => 'mail',
  'smtp' => 
  array (
    'hostname' => '',
    'host' => 'localhost',
    'port' => 25,
    'auth' => false,
    'auth_type' => '',
    'username' => '',
    'password' => '',
    'secure' => '',
    'from' => 'root@localhost',
  ),
  'extensions_enabled' => 
  array (
    'Google-Groups' => true,
    'Tumblr-GDPR' => true,
  ),
  'disable_update' => true,
  'trusted_sources' => 
  array (
    0 => '127.0.0.0/8',
    1 => '::1/128',
  ),
);