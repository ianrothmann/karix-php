<?php
/**
 * NotFoundResponseErrorTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * karix api
 *
 * Karix API lets you interact with the Karix platform using an omnichannel messaging API. It also allows you to query your account, set up webhooks and buy phone numbers.
 *
 * OpenAPI spec version: 2.0
 * Contact: support@karix.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Karix;

/**
 * NotFoundResponseErrorTest Class Doc Comment
 *
 * @category    Class
 * @description NotFoundResponseError
 * @package     Karix
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class NotFoundResponseErrorTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "NotFoundResponseError"
     */
    public function testNotFoundResponseError()
    {
    }

    /**
     * Test attribute "message"
     */
    public function testPropertyMessage()
    {
        $not_found_response_error = new \Karix\Model\NotFoundResponseError();
        $message = "Not Found.";
        
        $not_found_response_error->setMessage($message);
        $this->assertEquals($message, $not_found_response_error->getMessage());

    }

    /**
    * Helper to create a good example of model
    */
    public function getGoodExample()
    {
        $message = "Not Found.";
        
        return array(
            "message" => $message,
        );
    }

    /**
    * Test NotFoundResponseError validation
    */
    public function testValidation()
    {
        $example = $this->getGoodExample();
        $not_found_response_error = new \Karix\Model\NotFoundResponseError($example);
        $this->assertTrue($not_found_response_error->valid());
    }

    /**
    *
    */
    public function testRequiredPropertyMessage()
    {
        $example = $this->getGoodExample();
        $example['message'] = null;
        $not_found_response_error = new \Karix\Model\NotFoundResponseError($example);
        $this->assertFalse($not_found_response_error->valid());

        $invalidProperties = $not_found_response_error->listInvalidProperties();
        $this->assertContains("'message' can't be null", $invalidProperties);
    }

}
