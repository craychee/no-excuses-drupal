<?php
$db_url='mysql://default:default@localhost/default';
$databases=array('default' => array(
    'default' => array(
        'database' => 'default',
        'username' => 'default',
        'password' => 'default',
        'driver' => 'mysql',
        'host' => 'localhost',
    ),
),);
$drupal_hash_salt='161302b5bf927369e7c370212318c8f1837b03bbecb94eadb9eeed17a7875d1e';
require_once DRUPAL_ROOT . '/sites/default/vendor/autoload.php';
