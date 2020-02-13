<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| API URI
|--------------------------------------------------------------------------
|
| http://ipinfodb.com/ Offer a free IP Geolocation tools,
| The API returns the location of an IP address (country, region, city, zipcode,
| latitude, longitude) and the associated timezone in XML or JSON format.
|
*/
$config['api'] = 'http://api.ipinfodb.com/';

/*
|--------------------------------------------------------------------------
| API VERSION
|--------------------------------------------------------------------------
|
| Version of the API
|
*/
$config['api_version'] = 'v3';

/*
|--------------------------------------------------------------------------
| API KEY
|--------------------------------------------------------------------------
|
| The API KEY : You can get yours from here http://ipinfodb.com/register.php
|
*/
$config['api_key'] = '81938be0f65323bc02a1a1cfe0363dfb3c5d26f38d05a4549fb70d4baf85e854';

/*
|--------------------------------------------------------------------------
| FORMAT
|--------------------------------------------------------------------------
|
| The default format is a php array, but you can change it to XML, JSON or RAW format
|
| $config['format'] = ''; Returns a PHP array
|
| $config['format'] = 'json';
|
| $config['format'] = 'xml';
|
| $config['format'] = 'raw';
|
*/
$config['format'] = '';
