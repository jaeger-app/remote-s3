<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./Remote/S3.php
 */
namespace JaegerApp\Remote;

use League\Flysystem\AwsS3v2\AwsS3Adapter as Adapter;
use Aws\S3\S3Client;

/**
 * Jaeger - S3 Transfer Abstraction
 *
 * Simple intermediary between Flysystem and mithra62
 *
 * @package Remote
 * @author Eric Lamb <eric@mithra62.com>
 */
class S3 extends Adapter
{
    /**
     * Returns the remote transport client
     * 
     * @param string $access_key            
     * @param string $secret_key   
     * @param string $region         
     * @return \Aws\S3\S3Client
     */
    public static function getRemoteClient($access_key, $secret_key, $region = '')
    {        
        return S3Client::factory([
            'key' => $access_key,
            'secret' => $secret_key,
            'region' => $region
        ]);
    }
}