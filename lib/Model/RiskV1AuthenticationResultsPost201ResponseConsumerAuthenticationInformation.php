<?php
/**
 * RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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
 * RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskV1AuthenticationResultsPost201Response_consumerAuthenticationInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authenticationResult' => 'string',
        'authenticationStatusMsg' => 'string',
        'cavv' => 'string',
        'cavvAlgorithm' => 'string',
        'indicator' => 'string',
        'eci' => 'string',
        'eciRaw' => 'string',
        'paresStatus' => 'string',
        'specificationVersion' => 'string',
        'ucafAuthenticationData' => 'string',
        'ucafCollectionIndicator' => 'float',
        'xid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authenticationResult' => null,
        'authenticationStatusMsg' => null,
        'cavv' => null,
        'cavvAlgorithm' => null,
        'indicator' => null,
        'eci' => null,
        'eciRaw' => null,
        'paresStatus' => null,
        'specificationVersion' => null,
        'ucafAuthenticationData' => null,
        'ucafCollectionIndicator' => null,
        'xid' => null
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
        'authenticationResult' => 'authenticationResult',
        'authenticationStatusMsg' => 'authenticationStatusMsg',
        'cavv' => 'cavv',
        'cavvAlgorithm' => 'cavvAlgorithm',
        'indicator' => 'indicator',
        'eci' => 'eci',
        'eciRaw' => 'eciRaw',
        'paresStatus' => 'paresStatus',
        'specificationVersion' => 'specificationVersion',
        'ucafAuthenticationData' => 'ucafAuthenticationData',
        'ucafCollectionIndicator' => 'ucafCollectionIndicator',
        'xid' => 'xid'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authenticationResult' => 'setAuthenticationResult',
        'authenticationStatusMsg' => 'setAuthenticationStatusMsg',
        'cavv' => 'setCavv',
        'cavvAlgorithm' => 'setCavvAlgorithm',
        'indicator' => 'setIndicator',
        'eci' => 'setEci',
        'eciRaw' => 'setEciRaw',
        'paresStatus' => 'setParesStatus',
        'specificationVersion' => 'setSpecificationVersion',
        'ucafAuthenticationData' => 'setUcafAuthenticationData',
        'ucafCollectionIndicator' => 'setUcafCollectionIndicator',
        'xid' => 'setXid'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authenticationResult' => 'getAuthenticationResult',
        'authenticationStatusMsg' => 'getAuthenticationStatusMsg',
        'cavv' => 'getCavv',
        'cavvAlgorithm' => 'getCavvAlgorithm',
        'indicator' => 'getIndicator',
        'eci' => 'getEci',
        'eciRaw' => 'getEciRaw',
        'paresStatus' => 'getParesStatus',
        'specificationVersion' => 'getSpecificationVersion',
        'ucafAuthenticationData' => 'getUcafAuthenticationData',
        'ucafCollectionIndicator' => 'getUcafCollectionIndicator',
        'xid' => 'getXid'
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
        $this->container['authenticationResult'] = isset($data['authenticationResult']) ? $data['authenticationResult'] : null;
        $this->container['authenticationStatusMsg'] = isset($data['authenticationStatusMsg']) ? $data['authenticationStatusMsg'] : null;
        $this->container['cavv'] = isset($data['cavv']) ? $data['cavv'] : null;
        $this->container['cavvAlgorithm'] = isset($data['cavvAlgorithm']) ? $data['cavvAlgorithm'] : null;
        $this->container['indicator'] = isset($data['indicator']) ? $data['indicator'] : null;
        $this->container['eci'] = isset($data['eci']) ? $data['eci'] : null;
        $this->container['eciRaw'] = isset($data['eciRaw']) ? $data['eciRaw'] : null;
        $this->container['paresStatus'] = isset($data['paresStatus']) ? $data['paresStatus'] : null;
        $this->container['specificationVersion'] = isset($data['specificationVersion']) ? $data['specificationVersion'] : null;
        $this->container['ucafAuthenticationData'] = isset($data['ucafAuthenticationData']) ? $data['ucafAuthenticationData'] : null;
        $this->container['ucafCollectionIndicator'] = isset($data['ucafCollectionIndicator']) ? $data['ucafCollectionIndicator'] : null;
        $this->container['xid'] = isset($data['xid']) ? $data['xid'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['cavv']) && (strlen($this->container['cavv']) > 255)) {
            $invalid_properties[] = "invalid value for 'cavv', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['cavvAlgorithm']) && (strlen($this->container['cavvAlgorithm']) > 1)) {
            $invalid_properties[] = "invalid value for 'cavvAlgorithm', the character length must be smaller than or equal to 1.";
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

        if (strlen($this->container['cavv']) > 255) {
            return false;
        }
        if (strlen($this->container['cavvAlgorithm']) > 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets authenticationResult
     * @return string
     */
    public function getAuthenticationResult()
    {
        return $this->container['authenticationResult'];
    }

    /**
     * Sets authenticationResult
     * @param string $authenticationResult Raw authentication data that comes from the cardissuing bank. Primary authentication field that indicates if authentication was successful and if liability shift occurred. You should examine first the result of this field. This field contains one of these values: - `-1`: Invalid PARes. - `0`: Successful validation. - `1`: Cardholder is not participating, but the attempt to authenticate was recorded. - `6`: Issuer unable to perform authentication. - `9`: Cardholder did not complete authentication.
     * @return $this
     */
    public function setAuthenticationResult($authenticationResult)
    {
        $this->container['authenticationResult'] = $authenticationResult;

        return $this;
    }

    /**
     * Gets authenticationStatusMsg
     * @return string
     */
    public function getAuthenticationStatusMsg()
    {
        return $this->container['authenticationStatusMsg'];
    }

    /**
     * Sets authenticationStatusMsg
     * @param string $authenticationStatusMsg Message that explains the authenticationResult reply field.
     * @return $this
     */
    public function setAuthenticationStatusMsg($authenticationStatusMsg)
    {
        $this->container['authenticationStatusMsg'] = $authenticationStatusMsg;

        return $this;
    }

    /**
     * Gets cavv
     * @return string
     */
    public function getCavv()
    {
        return $this->container['cavv'];
    }

    /**
     * Sets cavv
     * @param string $cavv Unique identifier generated by the card-issuing bank for Visa, American Express, JCB, Diners Club, and Discover transactions after the customer is authenticated. The value is in base64. When you request the card authorization service, CyberSource automatically converts the value, not the field name, to the format required by your payment processor.
     * @return $this
     */
    public function setCavv($cavv)
    {
        if (!is_null($cavv) && (strlen($cavv) > 255)) {
            throw new \InvalidArgumentException('invalid length for $cavv when calling RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 255.');
        }

        $this->container['cavv'] = $cavv;

        return $this;
    }

    /**
     * Gets cavvAlgorithm
     * @return string
     */
    public function getCavvAlgorithm()
    {
        return $this->container['cavvAlgorithm'];
    }

    /**
     * Sets cavvAlgorithm
     * @param string $cavvAlgorithm Field that is returned only when the CAVV is generated, which occurs when paresStatus contains the values Y (successful authentication) or A (attempted authentication). If you use the ATOS processor, send the value of this field in the `cavv_algorithm` request field of the authorization service. This field contains one of these values: - `2`: Visa, American Express, JCB, Diners Club, and Discover - `3`: Mastercard
     * @return $this
     */
    public function setCavvAlgorithm($cavvAlgorithm)
    {
        if (!is_null($cavvAlgorithm) && (strlen($cavvAlgorithm) > 1)) {
            throw new \InvalidArgumentException('invalid length for $cavvAlgorithm when calling RiskV1AuthenticationResultsPost201ResponseConsumerAuthenticationInformation., must be smaller than or equal to 1.');
        }

        $this->container['cavvAlgorithm'] = $cavvAlgorithm;

        return $this;
    }

    /**
     * Gets indicator
     * @return string
     */
    public function getIndicator()
    {
        return $this->container['indicator'];
    }

    /**
     * Sets indicator
     * @param string $indicator Indicator used to differentiate Internet transactions from other types. The authentication failed if this field is not returned. For Visa, if your payment processor is Streamline, Barclays, AIBMS, or FDC Germany, you receive the value vbv_failure instead of internet when eci is 07. The value of this field is passed automatically to the authorization service if you request the services together. This field contains one of these values: - `aesk`: American Express SafeKey authentication verified successfully. - `aesk_attempted`: Card not enrolled in American Express SafeKey, but the attempt to authenticate was recorded. - `dipb`: Discover ProtectBuy authentication verified successfully. - `dipb_attempted`: Card not enrolled in Discover ProtectBuy, but the attempt to authenticate was recorded. - `internet`: Authentication was not verified successfully. - `js`: J/Secure authentication verified successfully. - `js_attempted`: Card not enrolled in J/Secure, but the attempt to authenticate was recorded. - `moto`: Mail or telephone order. - `pb_attempted`: Card not enrolled in Diners Club ProtectBuy, but the attempt to authenticate was recorded. - `recurring`: Recurring transaction. - `spa`: Mastercard Identity Check authentication verified successfully. - `spa_failure`: Mastercard Identity Check failed authentication. - `vbv`: Visa Secure authentication verified successfully. - `vbv_attempted`: Card not enrolled in Visa Secure, but the attempt to authenticate was recorded. - `vbv_failure`: Visa Secure authentication unavailable.
     * @return $this
     */
    public function setIndicator($indicator)
    {
        $this->container['indicator'] = $indicator;

        return $this;
    }

    /**
     * Gets eci
     * @return string
     */
    public function getEci()
    {
        return $this->container['eci'];
    }

    /**
     * Sets eci
     * @param string $eci Note This field applies only to non-U.S-issued cards.  For enroll, Numeric electronic commerce indicator (ECI) returned only for Visa, American Express, JCB, Diners Club, and Discover transactions when the card is not enrolled. For more information, see \"Interpreting the Reply,\" page 22.  If you are not using the CyberSource payment services, you must send this value to your payment processor in the subsequent request for card authorization. This field contains one of these values: - `06`: The card can be enrolled. Liability shift. - `07`: The card cannot be enrolled. No liability shift.  For validate, Numeric electronic commerce indicator (ECI) returned only for Visa, American Express, JCB, Diners Club, and Discover transactions. The field is absent when authentication fails. You must send this value to your payment processor in the subsequent request for card authorization. This field contains one of these values: - `05`: Successful authentication - `06`: Authentication attempted - `07`: Failed authentication (No response from the merchant because of a problem.)
     * @return $this
     */
    public function setEci($eci)
    {
        $this->container['eci'] = $eci;

        return $this;
    }

    /**
     * Gets eciRaw
     * @return string
     */
    public function getEciRaw()
    {
        return $this->container['eciRaw'];
    }

    /**
     * Sets eciRaw
     * @param string $eciRaw ECI value that can be returned for Visa, Mastercard, American Express, JCB, Diners Club, and Discover. The field is absent when authentication fails. If your payment processor is Streamline, you must pass the value of this field instead of the value of `eci` or `ucafCollectionIndicator`.  This field can contain one of these values: - `01`: Authentication attempted (Mastercard) - `02`: Successful authentication (Mastercard) - `05`: Successful authentication (Visa, American Express, JCB, Diners Club, and Discover) - `06`: Authentication attempted (Visa, American Express, JCB, Diners Club, and Discover)
     * @return $this
     */
    public function setEciRaw($eciRaw)
    {
        $this->container['eciRaw'] = $eciRaw;

        return $this;
    }

    /**
     * Gets paresStatus
     * @return string
     */
    public function getParesStatus()
    {
        return $this->container['paresStatus'];
    }

    /**
     * Sets paresStatus
     * @param string $paresStatus Raw result of the authentication check. If you are configured for Asia, Middle East, and Africa Gateway Processing, you need to send the value of this field in your authorization request. This field can contain one of these values: - `A`: Proof of authentication attempt was generated. - `N`: Customer failed or canceled authentication. Transaction denied. - `U`: Authentication not completed regardless of the reason. - `Y`: Customer was successfully authenticated.
     * @return $this
     */
    public function setParesStatus($paresStatus)
    {
        $this->container['paresStatus'] = $paresStatus;

        return $this;
    }

    /**
     * Gets specificationVersion
     * @return string
     */
    public function getSpecificationVersion()
    {
        return $this->container['specificationVersion'];
    }

    /**
     * Sets specificationVersion
     * @param string $specificationVersion This field contains the 3D Secure version that was used to process the transaction. For example, 1.0.2 or 2.0.0.
     * @return $this
     */
    public function setSpecificationVersion($specificationVersion)
    {
        $this->container['specificationVersion'] = $specificationVersion;

        return $this;
    }

    /**
     * Gets ucafAuthenticationData
     * @return string
     */
    public function getUcafAuthenticationData()
    {
        return $this->container['ucafAuthenticationData'];
    }

    /**
     * Sets ucafAuthenticationData
     * @param string $ucafAuthenticationData AAV is a unique identifier generated by the card-issuing bank for Mastercard Identity Check transactions after the customer is authenticated. The value is in base64. Include the data in the card authorization request.
     * @return $this
     */
    public function setUcafAuthenticationData($ucafAuthenticationData)
    {
        $this->container['ucafAuthenticationData'] = $ucafAuthenticationData;

        return $this;
    }

    /**
     * Gets ucafCollectionIndicator
     * @return float
     */
    public function getUcafCollectionIndicator()
    {
        return $this->container['ucafCollectionIndicator'];
    }

    /**
     * Sets ucafCollectionIndicator
     * @param float $ucafCollectionIndicator For enroll, Returned only for Mastercard transactions. Indicates that authentication is not required because the customer is not enrolled. Add the value of this field to the authorization field ucaf_collection_indicator. This field can contain these values: 0, 1.  For validate, Numeric electronic commerce indicator (ECI) returned only for Mastercard Identity Check transactions. The field is absent when authentication fails. You must send this value to your payment processor in the request for card authorization. This field contain one of these values: - `0`: Authentication data not collected, and customer authentication was not completed. - `1`: Authentication data not collected because customer authentication was not completed. - `2`: Authentication data collected because customer completed authentication.
     * @return $this
     */
    public function setUcafCollectionIndicator($ucafCollectionIndicator)
    {
        $this->container['ucafCollectionIndicator'] = $ucafCollectionIndicator;

        return $this;
    }

    /**
     * Gets xid
     * @return string
     */
    public function getXid()
    {
        return $this->container['xid'];
    }

    /**
     * Sets xid
     * @param string $xid Transaction identifier generated by CyberSource for successful enrollment or validation checks. Use this value, which is in base64, to match an outgoing PAReq with an incoming PARes. CyberSource forwards the XID with the card authorization service to these payment processors in these cases: - Barclays - Streamline (when the **ecommerceIndicator**`=spa`)
     * @return $this
     */
    public function setXid($xid)
    {
        $this->container['xid'] = $xid;

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

