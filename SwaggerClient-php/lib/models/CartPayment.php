<?php
/**
 * CartPayment
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
 * CartPayment Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CartPayment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CartPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'amazon' => '\ultracart\v2\models\CartPaymentAmazon',
        'check' => '\ultracart\v2\models\CartPaymentCheck',
        'credit_card' => '\ultracart\v2\models\CartPaymentCreditCard',
        'payment_method' => 'string',
        'purchase_order' => '\ultracart\v2\models\CartPaymentPurchaseOrder'
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
        'amazon' => 'amazon',
        'check' => 'check',
        'credit_card' => 'credit_card',
        'payment_method' => 'payment_method',
        'purchase_order' => 'purchase_order'
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
        'amazon' => 'setAmazon',
        'check' => 'setCheck',
        'credit_card' => 'setCreditCard',
        'payment_method' => 'setPaymentMethod',
        'purchase_order' => 'setPurchaseOrder'
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
        'amazon' => 'getAmazon',
        'check' => 'getCheck',
        'credit_card' => 'getCreditCard',
        'payment_method' => 'getPaymentMethod',
        'purchase_order' => 'getPurchaseOrder'
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
        $this->container['amazon'] = isset($data['amazon']) ? $data['amazon'] : null;
        $this->container['check'] = isset($data['check']) ? $data['check'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
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
     * Gets amazon
     * @return \ultracart\v2\models\CartPaymentAmazon
     */
    public function getAmazon()
    {
        return $this->container['amazon'];
    }

    /**
     * Sets amazon
     * @param \ultracart\v2\models\CartPaymentAmazon $amazon
     * @return $this
     */
    public function setAmazon($amazon)
    {
        $this->container['amazon'] = $amazon;

        return $this;
    }

    /**
     * Gets check
     * @return \ultracart\v2\models\CartPaymentCheck
     */
    public function getCheck()
    {
        return $this->container['check'];
    }

    /**
     * Sets check
     * @param \ultracart\v2\models\CartPaymentCheck $check
     * @return $this
     */
    public function setCheck($check)
    {
        $this->container['check'] = $check;

        return $this;
    }

    /**
     * Gets credit_card
     * @return \ultracart\v2\models\CartPaymentCreditCard
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     * @param \ultracart\v2\models\CartPaymentCreditCard $credit_card
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets payment_method
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     * @param string $payment_method Payment method
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets purchase_order
     * @return \ultracart\v2\models\CartPaymentPurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     * @param \ultracart\v2\models\CartPaymentPurchaseOrder $purchase_order
     * @return $this
     */
    public function setPurchaseOrder($purchase_order)
    {
        $this->container['purchase_order'] = $purchase_order;

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

