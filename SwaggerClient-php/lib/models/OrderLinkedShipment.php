<?php
/**
 * OrderLinkedShipment
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
 * OrderLinkedShipment Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderLinkedShipment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderLinkedShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'has_linked_shipment' => 'bool',
        'linked_shipment' => 'bool',
        'linked_shipment_channel_partner_order_ids' => 'string[]',
        'linked_shipment_order_ids' => 'string[]',
        'linked_shipment_to_order_id' => 'string'
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
        'has_linked_shipment' => 'has_linked_shipment',
        'linked_shipment' => 'linked_shipment',
        'linked_shipment_channel_partner_order_ids' => 'linked_shipment_channel_partner_order_ids',
        'linked_shipment_order_ids' => 'linked_shipment_order_ids',
        'linked_shipment_to_order_id' => 'linked_shipment_to_order_id'
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
        'has_linked_shipment' => 'setHasLinkedShipment',
        'linked_shipment' => 'setLinkedShipment',
        'linked_shipment_channel_partner_order_ids' => 'setLinkedShipmentChannelPartnerOrderIds',
        'linked_shipment_order_ids' => 'setLinkedShipmentOrderIds',
        'linked_shipment_to_order_id' => 'setLinkedShipmentToOrderId'
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
        'has_linked_shipment' => 'getHasLinkedShipment',
        'linked_shipment' => 'getLinkedShipment',
        'linked_shipment_channel_partner_order_ids' => 'getLinkedShipmentChannelPartnerOrderIds',
        'linked_shipment_order_ids' => 'getLinkedShipmentOrderIds',
        'linked_shipment_to_order_id' => 'getLinkedShipmentToOrderId'
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
        $this->container['has_linked_shipment'] = isset($data['has_linked_shipment']) ? $data['has_linked_shipment'] : null;
        $this->container['linked_shipment'] = isset($data['linked_shipment']) ? $data['linked_shipment'] : null;
        $this->container['linked_shipment_channel_partner_order_ids'] = isset($data['linked_shipment_channel_partner_order_ids']) ? $data['linked_shipment_channel_partner_order_ids'] : null;
        $this->container['linked_shipment_order_ids'] = isset($data['linked_shipment_order_ids']) ? $data['linked_shipment_order_ids'] : null;
        $this->container['linked_shipment_to_order_id'] = isset($data['linked_shipment_to_order_id']) ? $data['linked_shipment_to_order_id'] : null;
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
     * Gets has_linked_shipment
     * @return bool
     */
    public function getHasLinkedShipment()
    {
        return $this->container['has_linked_shipment'];
    }

    /**
     * Sets has_linked_shipment
     * @param bool $has_linked_shipment True if this order has child linked shipments
     * @return $this
     */
    public function setHasLinkedShipment($has_linked_shipment)
    {
        $this->container['has_linked_shipment'] = $has_linked_shipment;

        return $this;
    }

    /**
     * Gets linked_shipment
     * @return bool
     */
    public function getLinkedShipment()
    {
        return $this->container['linked_shipment'];
    }

    /**
     * Sets linked_shipment
     * @param bool $linked_shipment True if this order is linked to another parent order
     * @return $this
     */
    public function setLinkedShipment($linked_shipment)
    {
        $this->container['linked_shipment'] = $linked_shipment;

        return $this;
    }

    /**
     * Gets linked_shipment_channel_partner_order_ids
     * @return string[]
     */
    public function getLinkedShipmentChannelPartnerOrderIds()
    {
        return $this->container['linked_shipment_channel_partner_order_ids'];
    }

    /**
     * Sets linked_shipment_channel_partner_order_ids
     * @param string[] $linked_shipment_channel_partner_order_ids The child linked shipment channel partner order ids
     * @return $this
     */
    public function setLinkedShipmentChannelPartnerOrderIds($linked_shipment_channel_partner_order_ids)
    {
        $this->container['linked_shipment_channel_partner_order_ids'] = $linked_shipment_channel_partner_order_ids;

        return $this;
    }

    /**
     * Gets linked_shipment_order_ids
     * @return string[]
     */
    public function getLinkedShipmentOrderIds()
    {
        return $this->container['linked_shipment_order_ids'];
    }

    /**
     * Sets linked_shipment_order_ids
     * @param string[] $linked_shipment_order_ids The child linked shipment order ids
     * @return $this
     */
    public function setLinkedShipmentOrderIds($linked_shipment_order_ids)
    {
        $this->container['linked_shipment_order_ids'] = $linked_shipment_order_ids;

        return $this;
    }

    /**
     * Gets linked_shipment_to_order_id
     * @return string
     */
    public function getLinkedShipmentToOrderId()
    {
        return $this->container['linked_shipment_to_order_id'];
    }

    /**
     * Sets linked_shipment_to_order_id
     * @param string $linked_shipment_to_order_id The parent order id that this one is linked to
     * @return $this
     */
    public function setLinkedShipmentToOrderId($linked_shipment_to_order_id)
    {
        $this->container['linked_shipment_to_order_id'] = $linked_shipment_to_order_id;

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


