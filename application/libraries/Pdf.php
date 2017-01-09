<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."/third_party/Cezpdf.php");

/**
* 
*/
class pdf extends Cezpdf
{
	
	function __construct($params)
	{
		if (is_array($params))
		{
			parent::__construct($params['paper'],
			$params['orientation'], $params['type'],
			$params['option']);
		}
		else
		{
			parent::__construct();
		}
	}
}