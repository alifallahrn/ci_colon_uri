<?php defined('BASEPATH') or exit('No direct script access allowed');

class MY_Router extends CI_Router
{
    protected function _set_request($segments = [])
    {
        parent::_set_request($segments);
        $this->_set_params($segments);
    }

    protected function _set_params($params = [])
    {
        foreach($params as $key => $value) {
            if( FALSE !== strpos($value, ':') && preg_match('/^([a-z0-9\-_]+)\:(.*)$/iu',$value,$m) ) {
                $this->uri->params[$m[1]] = $m[2];
                unset($params[$key]);
                continue;
            }
        }
    }
}