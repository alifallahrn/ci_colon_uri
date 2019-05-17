<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_URI extends CI_URI
{
	public $params = [];
	
    public function param($n, $no_result = NULL)
    {
        return isset($this->params[$n]) ? $this->params[$n] : $no_result;
    }
}

function param($n, $no_result = NULL)
{
	return get_instance()->uri->param($n, $no_result);
}