<?php
/**
 * CustomerProfile
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
 * CustomerProfile Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomerProfile implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomerProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'customer_profile_oid' => 'int',
        'email' => 'string',
        'qb_class' => 'string',
        'qb_code' => 'string',
        'tax_exempt' => 'bool',
        'terms' => 'string',
        'track_separately' => 'bool'
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
        'customer_profile_oid' => 'customer_profile_oid',
        'email' => 'email',
        'qb_class' => 'qb_class',
        'qb_code' => 'qb_code',
        'tax_exempt' => 'tax_exempt',
        'terms' => 'terms',
        'track_separately' => 'track_separately'
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
        'customer_profile_oid' => 'setCustomerProfileOid',
        'email' => 'setEmail',
        'qb_class' => 'setQbClass',
        'qb_code' => 'setQbCode',
        'tax_exempt' => 'setTaxExempt',
        'terms' => 'setTerms',
        'track_separately' => 'setTrackSeparately'
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
        'customer_profile_oid' => 'getCustomerProfileOid',
        'email' => 'getEmail',
        'qb_class' => 'getQbClass',
        'qb_code' => 'getQbCode',
        'tax_exempt' => 'getTaxExempt',
        'terms' => 'getTerms',
        'track_separately' => 'getTrackSeparately'
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
        $this->container['customer_profile_oid'] = isset($data['customer_profile_oid']) ? $data['customer_profile_oid'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['qb_class'] = isset($data['qb_class']) ? $data['qb_class'] : null;
        $this->container['qb_code'] = isset($data['qb_code']) ? $data['qb_code'] : null;
        $this->container['tax_exempt'] = isset($data['tax_exempt']) ? $data['tax_exempt'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['track_separately'] = isset($data['track_separately']) ? $data['track_separately'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets customer_profile_oid
     * @return int
     */
    public function getCustomerProfileOid()
    {
        return $this->container['customer_profile_oid'];
    }

    /**
     * Sets customer_profile_oid
     * @param int $customer_profile_oid Customer profile object identifier
     * @return $this
     */
    public function setCustomerProfileOid($customer_profile_oid)
    {
        $this->container['customer_profile_oid'] = $customer_profile_oid;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Email address of this customer profile
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets qb_class
     * @return string
     */
    public function getQbClass()
    {
        return $this->container['qb_class'];
    }

    /**
     * Sets qb_class
     * @param string $qb_class QuickBooks class to import this customer as
     * @return $this
     */
    public function setQbClass($qb_class)
    {
        $this->container['qb_class'] = $qb_class;

        return $this;
    }

    /**
     * Gets qb_code
     * @return string
     */
    public function getQbCode()
    {
        return $this->container['qb_code'];
    }

    /**
     * Sets qb_code
     * @param string $qb_code QuickBooks name to import this customer as
     * @return $this
     */
    public function setQbCode($qb_code)
    {
        $this->container['qb_code'] = $qb_code;

        return $this;
    }

    /**
     * Gets tax_exempt
     * @return bool
     */
    public function getTaxExempt()
    {
        return $this->container['tax_exempt'];
    }

    /**
     * Sets tax_exempt
     * @param bool $tax_exempt True if the customer is tax exempt
     * @return $this
     */
    public function setTaxExempt($tax_exempt)
    {
        $this->container['tax_exempt'] = $tax_exempt;

        return $this;
    }

    /**
     * Gets terms
     * @return string
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     * @param string $terms Terms for this customer
     * @return $this
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets track_separately
     * @return bool
     */
    public function getTrackSeparately()
    {
        return $this->container['track_separately'];
    }

    /**
     * Sets track_separately
     * @param bool $track_separately True if the customer should be tracked separately in QuickBooks
     * @return $this
     */
    public function setTrackSeparately($track_separately)
    {
        $this->container['track_separately'] = $track_separately;

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


