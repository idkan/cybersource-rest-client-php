<?php
/**
 * InlineResponse2015VoidAmountDetails
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * InlineResponse2015VoidAmountDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2015VoidAmountDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_5_voidAmountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'voidAmount' => 'string',
        'originalTransactionAmount' => 'string',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'voidAmount' => null,
        'originalTransactionAmount' => null,
        'currency' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'voidAmount' => 'voidAmount',
        'originalTransactionAmount' => 'originalTransactionAmount',
        'currency' => 'currency'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'voidAmount' => 'setVoidAmount',
        'originalTransactionAmount' => 'setOriginalTransactionAmount',
        'currency' => 'setCurrency'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'voidAmount' => 'getVoidAmount',
        'originalTransactionAmount' => 'getOriginalTransactionAmount',
        'currency' => 'getCurrency'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['voidAmount'] = isset($data['voidAmount']) ? $data['voidAmount'] : null;
        $this->container['originalTransactionAmount'] = isset($data['originalTransactionAmount']) ? $data['originalTransactionAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 3)) {
            $invalid_properties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['currency']) > 3) {
            return false;
        }
        return true;
    }


    /**
     * Gets voidAmount
     * @return string
     */
    public function getVoidAmount()
    {
        return $this->container['voidAmount'];
    }

    /**
     * Sets voidAmount
     * @param string $voidAmount Total amount of the void.
     * @return $this
     */
    public function setVoidAmount($voidAmount)
    {
        $this->container['voidAmount'] = $voidAmount;

        return $this;
    }

    /**
     * Gets originalTransactionAmount
     * @return string
     */
    public function getOriginalTransactionAmount()
    {
        return $this->container['originalTransactionAmount'];
    }

    /**
     * Sets originalTransactionAmount
     * @param string $originalTransactionAmount Amount of the original transaction.
     * @return $this
     */
    public function setOriginalTransactionAmount($originalTransactionAmount)
    {
        $this->container['originalTransactionAmount'] = $originalTransactionAmount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used for the order. Use the three-character ISO Standard Currency Codes.  For an authorization reversal or a capture, you must use the same currency that you used in your request for Payment API.
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling InlineResponse2015VoidAmountDetails., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


