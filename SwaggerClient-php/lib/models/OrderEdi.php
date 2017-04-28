<?php
/**
 * OrderEdi
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
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

namespace ultracart\v2\models;

use \ArrayAccess;

/**
 * OrderEdi Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderEdi implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderEdi';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'bill_to_edi_code' => 'string',
        'edi_department' => 'string',
        'edi_internal_vendor_number' => 'string',
        'ship_to_edi_code' => 'string'
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
        'bill_to_edi_code' => 'bill_to_edi_code',
        'edi_department' => 'edi_department',
        'edi_internal_vendor_number' => 'edi_internal_vendor_number',
        'ship_to_edi_code' => 'ship_to_edi_code'
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
        'bill_to_edi_code' => 'setBillToEdiCode',
        'edi_department' => 'setEdiDepartment',
        'edi_internal_vendor_number' => 'setEdiInternalVendorNumber',
        'ship_to_edi_code' => 'setShipToEdiCode'
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
        'bill_to_edi_code' => 'getBillToEdiCode',
        'edi_department' => 'getEdiDepartment',
        'edi_internal_vendor_number' => 'getEdiInternalVendorNumber',
        'ship_to_edi_code' => 'getShipToEdiCode'
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
        $this->container['bill_to_edi_code'] = isset($data['bill_to_edi_code']) ? $data['bill_to_edi_code'] : null;
        $this->container['edi_department'] = isset($data['edi_department']) ? $data['edi_department'] : null;
        $this->container['edi_internal_vendor_number'] = isset($data['edi_internal_vendor_number']) ? $data['edi_internal_vendor_number'] : null;
        $this->container['ship_to_edi_code'] = isset($data['ship_to_edi_code']) ? $data['ship_to_edi_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['edi_internal_vendor_number']) && (strlen($this->container['edi_internal_vendor_number']) > 50)) {
            $invalid_properties[] = "invalid value for 'edi_internal_vendor_number', the character length must be smaller than or equal to 50.";
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
        if (strlen($this->container['edi_internal_vendor_number']) > 50) {
            return false;
        }
        return true;
    }


    /**
     * Gets bill_to_edi_code
     * @return string
     */
    public function getBillToEdiCode()
    {
        return $this->container['bill_to_edi_code'];
    }

    /**
     * Sets bill_to_edi_code
     * @param string $bill_to_edi_code Billing address identification code from the EDI order.  Typically DUNS or DUNS+4
     * @return $this
     */
    public function setBillToEdiCode($bill_to_edi_code)
    {
        $this->container['bill_to_edi_code'] = $bill_to_edi_code;

        return $this;
    }

    /**
     * Gets edi_department
     * @return string
     */
    public function getEdiDepartment()
    {
        return $this->container['edi_department'];
    }

    /**
     * Sets edi_department
     * @param string $edi_department Department number associated with this EDI order
     * @return $this
     */
    public function setEdiDepartment($edi_department)
    {
        $this->container['edi_department'] = $edi_department;

        return $this;
    }

    /**
     * Gets edi_internal_vendor_number
     * @return string
     */
    public function getEdiInternalVendorNumber()
    {
        return $this->container['edi_internal_vendor_number'];
    }

    /**
     * Sets edi_internal_vendor_number
     * @param string $edi_internal_vendor_number Internal vendor number associated with this EDI order
     * @return $this
     */
    public function setEdiInternalVendorNumber($edi_internal_vendor_number)
    {
        if (strlen($edi_internal_vendor_number) > 50) {
            throw new \InvalidArgumentException('invalid length for $edi_internal_vendor_number when calling OrderEdi., must be smaller than or equal to 50.');
        }
        $this->container['edi_internal_vendor_number'] = $edi_internal_vendor_number;

        return $this;
    }

    /**
     * Gets ship_to_edi_code
     * @return string
     */
    public function getShipToEdiCode()
    {
        return $this->container['ship_to_edi_code'];
    }

    /**
     * Sets ship_to_edi_code
     * @param string $ship_to_edi_code Shipping address identification code from the EDI order.  Typically DUNS or DUNS+4
     * @return $this
     */
    public function setShipToEdiCode($ship_to_edi_code)
    {
        $this->container['ship_to_edi_code'] = $ship_to_edi_code;

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
            return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ultracart\v2\ObjectSerializer::sanitizeForSerialization($this));
    }
}

