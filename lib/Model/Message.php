<?php
/**
 * Message
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
 * Do not edit the class manually.
 */

namespace Karix\Model;

use \ArrayAccess;
use \Karix\ObjectSerializer;

/**
 * Message Class Doc Comment
 *
 * @category Class
 * @package  Karix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Message implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Message';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uid' => 'string',
        'account_uid' => 'string',
        'total_cost' => 'BigDecimal',
        'refund' => 'BigDecimal',
        'source' => 'string',
        'destination' => 'string',
        'country' => 'string',
        'content_type' => 'string',
        'content' => '\Karix\Model\MessageContent',
        'created_time' => '\DateTime',
        'sent_time' => '\DateTime',
        'delivered_time' => '\DateTime',
        'updated_time' => '\DateTime',
        'status' => 'string',
        'direction' => 'string',
        'error' => '\Karix\Model\MessageError',
        'redact' => 'bool',
        'channel_details' => '\Karix\Model\MessageChannelDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uid' => null,
        'account_uid' => null,
        'total_cost' => 'number',
        'refund' => 'number',
        'source' => null,
        'destination' => null,
        'country' => null,
        'content_type' => null,
        'content' => null,
        'created_time' => 'date-time',
        'sent_time' => 'date-time',
        'delivered_time' => 'date-time',
        'updated_time' => 'date-time',
        'status' => null,
        'direction' => null,
        'error' => null,
        'redact' => null,
        'channel_details' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     *
     * @codeCoverageIgnore
     */
    protected static $attributeMap = [
        'uid' => 'uid',
        'account_uid' => 'account_uid',
        'total_cost' => 'total_cost',
        'refund' => 'refund',
        'source' => 'source',
        'destination' => 'destination',
        'country' => 'country',
        'content_type' => 'content_type',
        'content' => 'content',
        'created_time' => 'created_time',
        'sent_time' => 'sent_time',
        'delivered_time' => 'delivered_time',
        'updated_time' => 'updated_time',
        'status' => 'status',
        'direction' => 'direction',
        'error' => 'error',
        'redact' => 'redact',
        'channel_details' => 'channel_details'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uid' => 'setUid',
        'account_uid' => 'setAccountUid',
        'total_cost' => 'setTotalCost',
        'refund' => 'setRefund',
        'source' => 'setSource',
        'destination' => 'setDestination',
        'country' => 'setCountry',
        'content_type' => 'setContentType',
        'content' => 'setContent',
        'created_time' => 'setCreatedTime',
        'sent_time' => 'setSentTime',
        'delivered_time' => 'setDeliveredTime',
        'updated_time' => 'setUpdatedTime',
        'status' => 'setStatus',
        'direction' => 'setDirection',
        'error' => 'setError',
        'redact' => 'setRedact',
        'channel_details' => 'setChannelDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uid' => 'getUid',
        'account_uid' => 'getAccountUid',
        'total_cost' => 'getTotalCost',
        'refund' => 'getRefund',
        'source' => 'getSource',
        'destination' => 'getDestination',
        'country' => 'getCountry',
        'content_type' => 'getContentType',
        'content' => 'getContent',
        'created_time' => 'getCreatedTime',
        'sent_time' => 'getSentTime',
        'delivered_time' => 'getDeliveredTime',
        'updated_time' => 'getUpdatedTime',
        'status' => 'getStatus',
        'direction' => 'getDirection',
        'error' => 'getError',
        'redact' => 'getRedact',
        'channel_details' => 'getChannelDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     *
     * @codeCoverageIgnore
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     *
     * @codeCoverageIgnore
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const CONTENT_TYPE_TEXT = 'text';
    const CONTENT_TYPE_LOCATION = 'location';
    const CONTENT_TYPE_MEDIA = 'media';
    const STATUS_QUEUED = 'queued';
    const STATUS_SENT = 'sent';
    const STATUS_FAILED = 'failed';
    const STATUS_DELIVERED = 'delivered';
    const STATUS_READ = 'read';
    const STATUS_UNDELIVERED = 'undelivered';
    const STATUS_REJECTED = 'rejected';
    const DIRECTION_INBOUND = 'inbound';
    const DIRECTION_OUTBOUND = 'outbound';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_TEXT,
            self::CONTENT_TYPE_LOCATION,
            self::CONTENT_TYPE_MEDIA
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUED,
            self::STATUS_SENT,
            self::STATUS_FAILED,
            self::STATUS_DELIVERED,
            self::STATUS_READ,
            self::STATUS_UNDELIVERED,
            self::STATUS_REJECTED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_INBOUND,
            self::DIRECTION_OUTBOUND,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uid'] = isset($data['uid']) ? $data['uid'] : null;
        $this->container['account_uid'] = isset($data['account_uid']) ? $data['account_uid'] : null;
        $this->container['total_cost'] = isset($data['total_cost']) ? $data['total_cost'] : null;
        $this->container['refund'] = isset($data['refund']) ? $data['refund'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['content_type'] = isset($data['content_type']) ? $data['content_type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['created_time'] = isset($data['created_time']) ? $data['created_time'] : null;
        $this->container['sent_time'] = isset($data['sent_time']) ? $data['sent_time'] : null;
        $this->container['delivered_time'] = isset($data['delivered_time']) ? $data['delivered_time'] : null;
        $this->container['updated_time'] = isset($data['updated_time']) ? $data['updated_time'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['redact'] = isset($data['redact']) ? $data['redact'] : null;
        $this->container['channel_details'] = isset($data['channel_details']) ? $data['channel_details'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($this->container['content_type']) && !in_array($this->container['content_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'content_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->container['uid'];
    }

    /**
     * Sets uid
     *
     * @param string $uid Unique ID for a message sent or received
     *
     * @return $this
     */
    public function setUid($uid)
    {
        $this->container['uid'] = $uid;

        return $this;
    }

    /**
     * Gets account_uid
     *
     * @return string
     */
    public function getAccountUid()
    {
        return $this->container['account_uid'];
    }

    /**
     * Sets account_uid
     *
     * @param string $account_uid Unique ID of Account which created this message
     *
     * @return $this
     */
    public function setAccountUid($account_uid)
    {
        $this->container['account_uid'] = $account_uid;

        return $this;
    }

    /**
     * Gets total_cost
     *
     * @return BigDecimal
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param BigDecimal $total_cost Total cost deducted from your credits for this message - `total_cost` will reflect refunds for this message. If there was a complete   refund, the `total_cost` will be zero.
     *
     * @return $this
     */
    public function setTotalCost($total_cost)
    {
        $this->container['total_cost'] = $total_cost;

        return $this;
    }

    /**
     * Gets refund
     *
     * @return BigDecimal
     */
    public function getRefund()
    {
        return $this->container['refund'];
    }

    /**
     * Sets refund
     *
     * @param BigDecimal $refund If a refund was processed for this message `refund` will be a non-null number
     *
     * @return $this
     */
    public function setRefund($refund)
    {
        $this->container['refund'] = $refund;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string $source Sender ID for the message
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param string $destination Destination number for the message in E.164 format
     *
     * @return $this
     */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country ISO2 code of the country where the destination belongs to
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type Content type of the message. - Its value will correspond to the key present in the `content`.
     *
     * @return $this
     */
    public function setContentType($content_type)
    {
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($content_type) && !in_array($content_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'content_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_type'] = $content_type;

        return $this;
    }

    /**
     * Gets content
     *
     * @return \Karix\Model\MessageContent
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \Karix\Model\MessageContent $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTime $created_time Timestamp when the message was created
     *
     * @return $this
     */
    public function setCreatedTime($created_time)
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets sent_time
     *
     * @return \DateTime
     */
    public function getSentTime()
    {
        return $this->container['sent_time'];
    }

    /**
     * Sets sent_time
     *
     * @param \DateTime $sent_time Timestamp when message was sent to the selected channel
     *
     * @return $this
     */
    public function setSentTime($sent_time)
    {
        $this->container['sent_time'] = $sent_time;

        return $this;
    }

    /**
     * Gets delivered_time
     *
     * @return \DateTime
     */
    public function getDeliveredTime()
    {
        return $this->container['delivered_time'];
    }

    /**
     * Sets delivered_time
     *
     * @param \DateTime $delivered_time Timestamp when the message was delivered to the destination
     *
     * @return $this
     */
    public function setDeliveredTime($delivered_time)
    {
        $this->container['delivered_time'] = $delivered_time;

        return $this;
    }

    /**
     * Gets updated_time
     *
     * @return \DateTime
     */
    public function getUpdatedTime()
    {
        return $this->container['updated_time'];
    }

    /**
     * Sets updated_time
     *
     * @param \DateTime $updated_time Timestamp when the message status was last updated - If the current status is `read`, then this timestamp also represents   read time - If the current status is `undelivered` then this timestamp also represents   undelivered time
     *
     * @return $this
     */
    public function setUpdatedTime($updated_time)
    {
        $this->container['updated_time'] = $updated_time;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current status of the message. Possible values: - `queued`: Message has been queued in Karix system             (for either `inbound` or `outbound` direction) - `sent`: The `outbound` message has been sent to carriers for delivery - `failed`: In case of `outbound` message, this means that Karix failed             to send the message to a carrier.             In case of `inbound` message, this means that Karix failed             to send the message to its webhook, if configured. - `delivered`: The `outbound` message was delivered to its receiver. - `read`: The outbound message was delivered and read by the the receiver.           Not supported by `sms` channel. - `undelivered`: The `outbound` message falied to be delivered to its receiver. - `rejected`: The `outbound` message was rejected by the chosen carrier.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction
     *
     * @param string $direction Direction of the message. - inbound: Message was sent to a number owned by the karix account - outbound: Message was sent to a destination using karix account
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if (!is_null($direction) && !in_array($direction, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'direction', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets error
     *
     * @return \Karix\Model\MessageError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \Karix\Model\MessageError $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets redact
     *
     * @return bool
     */
    public function getRedact()
    {
        return $this->container['redact'];
    }

    /**
     * Sets redact
     *
     * @param bool $redact If the message was redacted using redact message API, then `redact` will be `true`.
     *
     * @return $this
     */
    public function setRedact($redact)
    {
        $this->container['redact'] = $redact;

        return $this;
    }

    /**
     * Gets channel_details
     *
     * @return \Karix\Model\MessageChannelDetails
     */
    public function getChannelDetails()
    {
        return $this->container['channel_details'];
    }

    /**
     * Sets channel_details
     *
     * @param \Karix\Model\MessageChannelDetails $channel_details channel_details
     *
     * @return $this
     */
    public function setChannelDetails($channel_details)
    {
        $this->container['channel_details'] = $channel_details;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     *
     * @codeCoverageIgnore
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     *
     * @codeCoverageIgnore
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     *
     * @codeCoverageIgnore
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     *
     * @codeCoverageIgnore
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     *
     * @codeCoverageIgnore
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


