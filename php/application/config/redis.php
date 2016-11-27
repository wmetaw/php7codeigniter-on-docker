<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
| ————————————————————————-
| Redis settings
| ————————————————————————-
| Your Redis servers can be specified below.
|
| See: http://codeigniter.com/user_guide/libraries/caching.html#redis
|
*/
$config['socket_type'] = 'tcp'; //`tcp` or `unix`
$config['socket'] = '/var/run/redis.sock'; // in case of `unix` socket type
$config['host'] = 'redis';
$config['password'] = NULL;
$config['port'] = 6379;
$config['timeout'] = 0;