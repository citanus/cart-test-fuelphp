<?php
/**
 * Created by PhpStorm.
 * User: cita
 * Date: 2/27/14
 * Time: 7:21 AM
 */
return array(
	'driver' => 'file',
	'file' => array(
      'cookie_name'    => 'mysession_id',
	    'path'           => '/tmp',
	    'gc_probability' => 5
    )
);