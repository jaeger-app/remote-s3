<?php
/**
 * Jaeger
 *
 * @copyright	Copyright (c) 2015-2016, mithra62
 * @link		http://jaeger-app.com
 * @version		1.0
 * @filesource 	./tests/S3Test.php
 */
namespace JaegerApp\tests\Remote;

use JaegerApp\Remote\S3;

/**
 * Jaeger - S3 Remote Object Unit Tests
 *
 * Contains all the unit tests for the \JaegerApp\Remote\Rcf object
 *
 * @package Jaeger\Tests
 * @author Eric Lamb <eric@mithra62.com>
 */
class S3Test extends \PHPUnit_Framework_TestCase
{

    public function testServiceInstance()
    {
        $creds = $this->getS3Creds();
        $s3 = S3::getRemoteClient($creds['s3_access_key'], $creds['s3_secret_key']);
        $this->assertInstanceOf('Aws\S3\S3Client', $s3);
    }
    
    /**
     * The Amazon S3 Test Credentials
     *
     * @return array
     */
    protected function getS3Creds()
    {
        return include 'data/s3creds.config.php';
    }    
}