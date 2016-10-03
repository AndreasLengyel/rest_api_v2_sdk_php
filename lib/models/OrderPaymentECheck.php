<?php
/**
 * OrderPaymentECheck
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
 * OrderPaymentECheck Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderPaymentECheck implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderPaymentECheck';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'bank_aba_code' => 'string',
        'bank_account_name' => 'string',
        'bank_account_number' => 'string',
        'bank_account_type' => 'string',
        'bank_name' => 'string',
        'bank_owner_type' => 'string',
        'customer_tax_id' => 'string',
        'drivers_license_dob' => 'string',
        'drivers_license_number' => 'string',
        'drivers_license_state' => 'string'
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
        'bank_aba_code' => 'bank_aba_code',
        'bank_account_name' => 'bank_account_name',
        'bank_account_number' => 'bank_account_number',
        'bank_account_type' => 'bank_account_type',
        'bank_name' => 'bank_name',
        'bank_owner_type' => 'bank_owner_type',
        'customer_tax_id' => 'customer_tax_id',
        'drivers_license_dob' => 'drivers_license_dob',
        'drivers_license_number' => 'drivers_license_number',
        'drivers_license_state' => 'drivers_license_state'
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
        'bank_aba_code' => 'setBankAbaCode',
        'bank_account_name' => 'setBankAccountName',
        'bank_account_number' => 'setBankAccountNumber',
        'bank_account_type' => 'setBankAccountType',
        'bank_name' => 'setBankName',
        'bank_owner_type' => 'setBankOwnerType',
        'customer_tax_id' => 'setCustomerTaxId',
        'drivers_license_dob' => 'setDriversLicenseDob',
        'drivers_license_number' => 'setDriversLicenseNumber',
        'drivers_license_state' => 'setDriversLicenseState'
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
        'bank_aba_code' => 'getBankAbaCode',
        'bank_account_name' => 'getBankAccountName',
        'bank_account_number' => 'getBankAccountNumber',
        'bank_account_type' => 'getBankAccountType',
        'bank_name' => 'getBankName',
        'bank_owner_type' => 'getBankOwnerType',
        'customer_tax_id' => 'getCustomerTaxId',
        'drivers_license_dob' => 'getDriversLicenseDob',
        'drivers_license_number' => 'getDriversLicenseNumber',
        'drivers_license_state' => 'getDriversLicenseState'
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
        $this->container['bank_aba_code'] = isset($data['bank_aba_code']) ? $data['bank_aba_code'] : null;
        $this->container['bank_account_name'] = isset($data['bank_account_name']) ? $data['bank_account_name'] : null;
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['bank_account_type'] = isset($data['bank_account_type']) ? $data['bank_account_type'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_owner_type'] = isset($data['bank_owner_type']) ? $data['bank_owner_type'] : null;
        $this->container['customer_tax_id'] = isset($data['customer_tax_id']) ? $data['customer_tax_id'] : null;
        $this->container['drivers_license_dob'] = isset($data['drivers_license_dob']) ? $data['drivers_license_dob'] : null;
        $this->container['drivers_license_number'] = isset($data['drivers_license_number']) ? $data['drivers_license_number'] : null;
        $this->container['drivers_license_state'] = isset($data['drivers_license_state']) ? $data['drivers_license_state'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['bank_aba_code']) && (strlen($this->container['bank_aba_code']) > 9)) {
            $invalid_properties[] = "invalid value for 'bank_aba_code', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['bank_account_name']) && (strlen($this->container['bank_account_name']) > 50)) {
            $invalid_properties[] = "invalid value for 'bank_account_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['bank_account_number']) && (strlen($this->container['bank_account_number']) > 50)) {
            $invalid_properties[] = "invalid value for 'bank_account_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['bank_account_type']) && (strlen($this->container['bank_account_type']) > 8)) {
            $invalid_properties[] = "invalid value for 'bank_account_type', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['bank_name']) && (strlen($this->container['bank_name']) > 50)) {
            $invalid_properties[] = "invalid value for 'bank_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['bank_owner_type']) && (strlen($this->container['bank_owner_type']) > 8)) {
            $invalid_properties[] = "invalid value for 'bank_owner_type', the character length must be smaller than or equal to 8.";
        }

        if (!is_null($this->container['customer_tax_id']) && (strlen($this->container['customer_tax_id']) > 9)) {
            $invalid_properties[] = "invalid value for 'customer_tax_id', the character length must be smaller than or equal to 9.";
        }

        if (!is_null($this->container['drivers_license_dob']) && (strlen($this->container['drivers_license_dob']) > 10)) {
            $invalid_properties[] = "invalid value for 'drivers_license_dob', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['drivers_license_number']) && (strlen($this->container['drivers_license_number']) > 50)) {
            $invalid_properties[] = "invalid value for 'drivers_license_number', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['drivers_license_state']) && (strlen($this->container['drivers_license_state']) > 2)) {
            $invalid_properties[] = "invalid value for 'drivers_license_state', the character length must be smaller than or equal to 2.";
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
        if (strlen($this->container['bank_aba_code']) > 9) {
            return false;
        }
        if (strlen($this->container['bank_account_name']) > 50) {
            return false;
        }
        if (strlen($this->container['bank_account_number']) > 50) {
            return false;
        }
        if (strlen($this->container['bank_account_type']) > 8) {
            return false;
        }
        if (strlen($this->container['bank_name']) > 50) {
            return false;
        }
        if (strlen($this->container['bank_owner_type']) > 8) {
            return false;
        }
        if (strlen($this->container['customer_tax_id']) > 9) {
            return false;
        }
        if (strlen($this->container['drivers_license_dob']) > 10) {
            return false;
        }
        if (strlen($this->container['drivers_license_number']) > 50) {
            return false;
        }
        if (strlen($this->container['drivers_license_state']) > 2) {
            return false;
        }
        return true;
    }


    /**
     * Gets bank_aba_code
     * @return string
     */
    public function getBankAbaCode()
    {
        return $this->container['bank_aba_code'];
    }

    /**
     * Sets bank_aba_code
     * @param string $bank_aba_code Bank routing code
     * @return $this
     */
    public function setBankAbaCode($bank_aba_code)
    {
        if (strlen($bank_aba_code) > 9) {
            throw new \InvalidArgumentException('invalid length for $bank_aba_code when calling OrderPaymentECheck., must be smaller than or equal to 9.');
        }
        $this->container['bank_aba_code'] = $bank_aba_code;

        return $this;
    }

    /**
     * Gets bank_account_name
     * @return string
     */
    public function getBankAccountName()
    {
        return $this->container['bank_account_name'];
    }

    /**
     * Sets bank_account_name
     * @param string $bank_account_name Bank account name
     * @return $this
     */
    public function setBankAccountName($bank_account_name)
    {
        if (strlen($bank_account_name) > 50) {
            throw new \InvalidArgumentException('invalid length for $bank_account_name when calling OrderPaymentECheck., must be smaller than or equal to 50.');
        }
        $this->container['bank_account_name'] = $bank_account_name;

        return $this;
    }

    /**
     * Gets bank_account_number
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     * @param string $bank_account_number Bank account number (masked to last 4)
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {
        if (strlen($bank_account_number) > 50) {
            throw new \InvalidArgumentException('invalid length for $bank_account_number when calling OrderPaymentECheck., must be smaller than or equal to 50.');
        }
        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets bank_account_type
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->container['bank_account_type'];
    }

    /**
     * Sets bank_account_type
     * @param string $bank_account_type Bank account type
     * @return $this
     */
    public function setBankAccountType($bank_account_type)
    {
        if (strlen($bank_account_type) > 8) {
            throw new \InvalidArgumentException('invalid length for $bank_account_type when calling OrderPaymentECheck., must be smaller than or equal to 8.');
        }
        $this->container['bank_account_type'] = $bank_account_type;

        return $this;
    }

    /**
     * Gets bank_name
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     * @param string $bank_name Bank name
     * @return $this
     */
    public function setBankName($bank_name)
    {
        if (strlen($bank_name) > 50) {
            throw new \InvalidArgumentException('invalid length for $bank_name when calling OrderPaymentECheck., must be smaller than or equal to 50.');
        }
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_owner_type
     * @return string
     */
    public function getBankOwnerType()
    {
        return $this->container['bank_owner_type'];
    }

    /**
     * Sets bank_owner_type
     * @param string $bank_owner_type Bank owner type
     * @return $this
     */
    public function setBankOwnerType($bank_owner_type)
    {
        if (strlen($bank_owner_type) > 8) {
            throw new \InvalidArgumentException('invalid length for $bank_owner_type when calling OrderPaymentECheck., must be smaller than or equal to 8.');
        }
        $this->container['bank_owner_type'] = $bank_owner_type;

        return $this;
    }

    /**
     * Gets customer_tax_id
     * @return string
     */
    public function getCustomerTaxId()
    {
        return $this->container['customer_tax_id'];
    }

    /**
     * Sets customer_tax_id
     * @param string $customer_tax_id Customer tax id (masked to last 4)
     * @return $this
     */
    public function setCustomerTaxId($customer_tax_id)
    {
        if (strlen($customer_tax_id) > 9) {
            throw new \InvalidArgumentException('invalid length for $customer_tax_id when calling OrderPaymentECheck., must be smaller than or equal to 9.');
        }
        $this->container['customer_tax_id'] = $customer_tax_id;

        return $this;
    }

    /**
     * Gets drivers_license_dob
     * @return string
     */
    public function getDriversLicenseDob()
    {
        return $this->container['drivers_license_dob'];
    }

    /**
     * Sets drivers_license_dob
     * @param string $drivers_license_dob Driver license date of birth
     * @return $this
     */
    public function setDriversLicenseDob($drivers_license_dob)
    {
        if (strlen($drivers_license_dob) > 10) {
            throw new \InvalidArgumentException('invalid length for $drivers_license_dob when calling OrderPaymentECheck., must be smaller than or equal to 10.');
        }
        $this->container['drivers_license_dob'] = $drivers_license_dob;

        return $this;
    }

    /**
     * Gets drivers_license_number
     * @return string
     */
    public function getDriversLicenseNumber()
    {
        return $this->container['drivers_license_number'];
    }

    /**
     * Sets drivers_license_number
     * @param string $drivers_license_number Driver license number (masked to last 4)
     * @return $this
     */
    public function setDriversLicenseNumber($drivers_license_number)
    {
        if (strlen($drivers_license_number) > 50) {
            throw new \InvalidArgumentException('invalid length for $drivers_license_number when calling OrderPaymentECheck., must be smaller than or equal to 50.');
        }
        $this->container['drivers_license_number'] = $drivers_license_number;

        return $this;
    }

    /**
     * Gets drivers_license_state
     * @return string
     */
    public function getDriversLicenseState()
    {
        return $this->container['drivers_license_state'];
    }

    /**
     * Sets drivers_license_state
     * @param string $drivers_license_state Driver license state
     * @return $this
     */
    public function setDriversLicenseState($drivers_license_state)
    {
        if (strlen($drivers_license_state) > 2) {
            throw new \InvalidArgumentException('invalid length for $drivers_license_state when calling OrderPaymentECheck., must be smaller than or equal to 2.');
        }
        $this->container['drivers_license_state'] = $drivers_license_state;

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


