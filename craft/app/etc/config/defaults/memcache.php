<?php

/**
 * DO NOT EDIT THIS FILE.
 *
 * This file is subject to be overwritten by a Craft update at any time.
 *
 * If you want to change any of these settings, copy it into craft/config/memcache.php, and make your change there.
 */

return array(
	/**
	 * An array of memcache servers to use.
	 */
	'servers' => array(
		array(
			/**
			 * A memcache server hostname or IP address.
			 */
			'host' => 'localhost',

			/**
			 * Whether or not to use a persistent connection.
			 */
			'persistent' => true,

			/**
			 * The memcache server port.
			 */
			'port' => 11211,

			/**
			 * How often a failed server will be retried (in seconds).
			 */
			'retryInterval' => 15,

			/**
			 * If the server should be flagged as online upon a failure.
			 */
			'status' => true,

			/**
			 * The value in seconds which will be used for connecting to the server.
			 */
			'timeout' => 15,

			/**
			 * Probability of using this server among all servers.
			 */
			'weight' => 1,
		),
	),

	/**
	 * Whether to use memcached or memcache as the underlying caching extension.
	 *
	 * If true [memcached](http://pecl.php.net/package/memcached) will be used.
	 *
	 * If false [memcache](http://pecl.php.net/package/memcache). will be used.
	 *
	 * Defaults to false.
	 */
	'useMemcached' => false,
);
