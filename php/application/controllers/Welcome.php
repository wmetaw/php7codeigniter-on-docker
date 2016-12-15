<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// mariaDB接続確認
		// var_dump($this->load->database());

		// redis接続・確認
		// $this->load->driver("cache", array('adapter' => 'redis', 'key_prefix' => 'app_'));
		// $this->cache->redis->save('key', 100);
		// var_dump($this->cache->redis->get('key'));
		// var_dump($this->cache->is_supported('redis'));
		// var_dump($this->cache->cache_info());

		// memcached接続・確認
		// $this->load->driver("cache", array('adapter' => 'memcached', 'key_prefix' => 'app_'));
		// $this->cache->memcached->save('key', 200);
		// var_dump($this->cache->memcached->get('key'));
		// var_dump($this->cache->memcached->is_supported("memcached"));

		$this->load->view('welcome_message');
	}
}
