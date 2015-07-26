<?php

$url = getenv("CLEARDB_DATABASE_URL");

if (!$url)
	return array ();

$url = parse_url($url);

define ('DB_USERNAME', $url["user"]);
define ('DB_PASSWORD', $url["pass"]);
define ('DB_SERVER', $url["host"]);
define ('DB_DATABASE', substr($url["path"], 1));

/*
 * Cache
 */
define ('CACHE_DIR', '/tmp/dolumar');
define ('CACHE_URL', 'cache.php?d=');

/**
 * Memcahce
 */
define ('MEMCACHE_SERVERS', getenv("MEMCACHIER_SERVERS"));
define ('MEMCACHE_USERNAME', getenv("MEMCACHIER_USERNAME"));
define ('MEMCACHE_PASSWORD', getenv("MEMCACHIER_PASSWORD"));

define ('USE_PROFILE', false);

define ('EMAIL_FROM', getenv("EMAIL_FROM"));
define ('EMAIL_FROM_NAME', getenv("EMAIL_FROM_NAME"));

define ('EMAIL_SMTP_SERVER', getenv("EMAIL_SMTP_SERVER"));
define ('EMAIL_SMTP_PORT', getenv("EMAIL_SMTP_PORT"));
define ('EMAIL_SMTP_USERNAME', getenv("EMAIL_SMTP_USERNAME"));
define ('EMAIL_SMTP_PASSWORD', getenv("EMAIL_SMTP_PASSWORD"));
define ('EMAIL_SMTP_SECURE', getenv("EMAIL_SMTP_SECURE"));

define ('EMAIL_DEBUG_LEVEL', 2);