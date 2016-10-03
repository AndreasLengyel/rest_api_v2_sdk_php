<?php
/**
 * ItemIdentifiers
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
 * ItemIdentifiers Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemIdentifiers implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemIdentifiers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'barcode' => 'string',
        'manufacturer_name' => 'string',
        'manufacturer_sku' => 'string',
        'unspsc' => 'string'
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
        'barcode' => 'barcode',
        'manufacturer_name' => 'manufacturer_name',
        'manufacturer_sku' => 'manufacturer_sku',
        'unspsc' => 'unspsc'
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
        'barcode' => 'setBarcode',
        'manufacturer_name' => 'setManufacturerName',
        'manufacturer_sku' => 'setManufacturerSku',
        'unspsc' => 'setUnspsc'
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
        'barcode' => 'getBarcode',
        'manufacturer_name' => 'getManufacturerName',
        'manufacturer_sku' => 'getManufacturerSku',
        'unspsc' => 'getUnspsc'
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
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['manufacturer_name'] = isset($data['manufacturer_name']) ? $data['manufacturer_name'] : null;
        $this->container['manufacturer_sku'] = isset($data['manufacturer_sku']) ? $data['manufacturer_sku'] : null;
        $this->container['unspsc'] = isset($data['unspsc']) ? $data['unspsc'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['barcode']) && (strlen($this->container['barcode']) > 30)) {
            $invalid_properties[] = "invalid value for 'barcode', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['manufacturer_name']) && (strlen($this->container['manufacturer_name']) > 50)) {
            $invalid_properties[] = "invalid value for 'manufacturer_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['manufacturer_sku']) && (strlen($this->container['manufacturer_sku']) > 25)) {
            $invalid_properties[] = "invalid value for 'manufacturer_sku', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['unspsc']) && (strlen($this->container['unspsc']) > 20)) {
            $invalid_properties[] = "invalid value for 'unspsc', the character length must be smaller than or equal to 20.";
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
        if (strlen($this->container['barcode']) > 30) {
            return false;
        }
        if (strlen($this->container['manufacturer_name']) > 50) {
            return false;
        }
        if (strlen($this->container['manufacturer_sku']) > 25) {
            return false;
        }
        if (strlen($this->container['unspsc']) > 20) {
            return false;
        }
        return true;
    }


    /**
     * Gets barcode
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     * @param string $barcode Barcode
     * @return $this
     */
    public function setBarcode($barcode)
    {
        if (strlen($barcode) > 30) {
            throw new \InvalidArgumentException('invalid length for $barcode when calling ItemIdentifiers., must be smaller than or equal to 30.');
        }
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets manufacturer_name
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->container['manufacturer_name'];
    }

    /**
     * Sets manufacturer_name
     * @param string $manufacturer_name Manufacturer Name
     * @return $this
     */
    public function setManufacturerName($manufacturer_name)
    {
        if (strlen($manufacturer_name) > 50) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_name when calling ItemIdentifiers., must be smaller than or equal to 50.');
        }
        $this->container['manufacturer_name'] = $manufacturer_name;

        return $this;
    }

    /**
     * Gets manufacturer_sku
     * @return string
     */
    public function getManufacturerSku()
    {
        return $this->container['manufacturer_sku'];
    }

    /**
     * Sets manufacturer_sku
     * @param string $manufacturer_sku Manufacturer SKU
     * @return $this
     */
    public function setManufacturerSku($manufacturer_sku)
    {
        if (strlen($manufacturer_sku) > 25) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_sku when calling ItemIdentifiers., must be smaller than or equal to 25.');
        }
        $this->container['manufacturer_sku'] = $manufacturer_sku;

        return $this;
    }

    /**
     * Gets unspsc
     * @return string
     */
    public function getUnspsc()
    {
        return $this->container['unspsc'];
    }

    /**
     * Sets unspsc
     * @param string $unspsc UNSPSC
     * @return $this
     */
    public function setUnspsc($unspsc)
    {
        if (strlen($unspsc) > 20) {
            throw new \InvalidArgumentException('invalid length for $unspsc when calling ItemIdentifiers., must be smaller than or equal to 20.');
        }
        $this->container['unspsc'] = $unspsc;

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


