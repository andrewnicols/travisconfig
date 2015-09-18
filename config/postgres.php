<?php

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'travis_ci_test';
$CFG->dbuser    = 'postgres';
$CFG->dbpass    = '';
$CFG->prefix    = 'm_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://localhost';
$CFG->dataroot  = '/home/travis/roots/base';

$CFG->phpunit_dataroot = '/home/travis/roots/phpunit';
$CFG->phpunit_prefix = 'p_';

require_once(dirname(__FILE__) . '/lib/setup.php');
