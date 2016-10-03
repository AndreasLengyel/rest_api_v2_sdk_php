<?php
/**
 * OrderMarketing
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\admin\v2
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * This is the next generation UltraCart REST API...
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\admin\v2\models;

use \ArrayAccess;

/**
 * OrderMarketing Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderMarketing implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderMarketing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'advertising_source' => 'string',
        'mailing_list' => 'bool',
        'referral_code' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'advertising_source' => 'advertising_source',
        'mailing_list' => 'mailing_list',
        'referral_code' => 'referral_code'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'advertising_source' => 'setAdvertisingSource',
        'mailing_list' => 'setMailingList',
        'referral_code' => 'setReferralCode'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'advertising_source' => 'getAdvertisingSource',
        'mailing_list' => 'getMailingList',
        'referral_code' => 'getReferralCode'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['advertising_source'] = isset($data['advertising_source']) ? $data['advertising_source'] : null;
        $this->container['mailing_list'] = isset($data['mailing_list']) ? $data['mailing_list'] : null;
        $this->container['referral_code'] = isset($data['referral_code']) ? $data['referral_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['advertising_source']) && (strlen($this->container['advertising_source']) > 50)) {
            $invalid_properties[] = "invalid value for 'advertising_source', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['referral_code']) && (strlen($this->container['referral_code']) > 30)) {
            $invalid_properties[] = "invalid value for 'referral_code', the character length must be smaller than or equal to 30.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (strlen($this->container['advertising_source']) > 50) {
            return false;
        }
        if (strlen($this->container['referral_code']) > 30) {
            return false;
        }
        return true;
    }


    /**
     * Gets advertising_source
     * @return string
     */
    public function getAdvertisingSource()
    {
        return $this->container['advertising_source'];
    }

    /**
     * Sets advertising_source
     * @param string $advertising_source Advertising source
     * @return $this
     */
    public function setAdvertisingSource($advertising_source)
    {
        if (strlen($advertising_source) > 50) {
            throw new \InvalidArgumentException('invalid length for $advertising_source when calling OrderMarketing., must be smaller than or equal to 50.');
        }
        $this->container['advertising_source'] = $advertising_source;

        return $this;
    }

    /**
     * Gets mailing_list
     * @return bool
     */
    public function getMailingList()
    {
        return $this->container['mailing_list'];
    }

    /**
     * Sets mailing_list
     * @param bool $mailing_list True if the customer has opted into mailing list subscription
     * @return $this
     */
    public function setMailingList($mailing_list)
    {
        $this->container['mailing_list'] = $mailing_list;

        return $this;
    }

    /**
     * Gets referral_code
     * @return string
     */
    public function getReferralCode()
    {
        return $this->container['referral_code'];
    }

    /**
     * Sets referral_code
     * @param string $referral_code Referral code
     * @return $this
     */
    public function setReferralCode($referral_code)
    {
        if (strlen($referral_code) > 30) {
            throw new \InvalidArgumentException('invalid length for $referral_code when calling OrderMarketing., must be smaller than or equal to 30.');
        }
        $this->container['referral_code'] = $referral_code;

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
            return json_encode(\ultracart\admin\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\admin\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}


