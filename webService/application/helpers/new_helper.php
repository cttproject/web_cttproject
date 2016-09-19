<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function pre($data = array())
    {
        print "<pre>";
        print_r($data);
        print "</pre>";
        exit;

    }   
}

?>