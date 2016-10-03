<?php
/**
 * OrderAffiliate
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
 * OrderAffiliate Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderAffiliate implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderAffiliate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'affiliate_oid' => 'int',
        'ledger_entries' => '\ultracart\admin\v2\models\OrderAffiliateLedger[]',
        'sub_id' => 'string'
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
        'affiliate_oid' => 'affiliate_oid',
        'ledger_entries' => 'ledger_entries',
        'sub_id' => 'sub_id'
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
        'affiliate_oid' => 'setAffiliateOid',
        'ledger_entries' => 'setLedgerEntries',
        'sub_id' => 'setSubId'
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
        'affiliate_oid' => 'getAffiliateOid',
        'ledger_entries' => 'getLedgerEntries',
        'sub_id' => 'getSubId'
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
        $this->container['affiliate_oid'] = isset($data['affiliate_oid']) ? $data['affiliate_oid'] : null;
        $this->container['ledger_entries'] = isset($data['ledger_entries']) ? $data['ledger_entries'] : null;
        $this->container['sub_id'] = isset($data['sub_id']) ? $data['sub_id'] : null;
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
     * Gets affiliate_oid
     * @return int
     */
    public function getAffiliateOid()
    {
        return $this->container['affiliate_oid'];
    }

    /**
     * Sets affiliate_oid
     * @param int $affiliate_oid Affiliate ID
     * @return $this
     */
    public function setAffiliateOid($affiliate_oid)
    {
        $this->container['affiliate_oid'] = $affiliate_oid;

        return $this;
    }

    /**
     * Gets ledger_entries
     * @return \ultracart\admin\v2\models\OrderAffiliateLedger[]
     */
    public function getLedgerEntries()
    {
        return $this->container['ledger_entries'];
    }

    /**
     * Sets ledger_entries
     * @param \ultracart\admin\v2\models\OrderAffiliateLedger[] $ledger_entries Ledger entries associated with all the commissions earned on this order
     * @return $this
     */
    public function setLedgerEntries($ledger_entries)
    {
        $this->container['ledger_entries'] = $ledger_entries;

        return $this;
    }

    /**
     * Gets sub_id
     * @return string
     */
    public function getSubId()
    {
        return $this->container['sub_id'];
    }

    /**
     * Sets sub_id
     * @param string $sub_id Sub identifier provided by the affiliate on the click that generated this order
     * @return $this
     */
    public function setSubId($sub_id)
    {
        $this->container['sub_id'] = $sub_id;

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

