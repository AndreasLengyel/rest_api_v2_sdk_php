<?php
/**
 * ItemOption
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
 * ItemOption Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemOption implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'cost_if_specified' => 'float',
        'cost_per_letter' => 'float',
        'cost_per_line' => 'float',
        'ignore_if_default' => 'bool',
        'label' => 'string',
        'label_translated_text_instance_oid' => 'int',
        'name' => 'string',
        'name_translated_text_instance_oid' => 'int',
        'one_time_fee' => 'bool',
        'option_oid' => 'int',
        'required' => 'bool',
        'system_option' => 'bool',
        'type' => 'string',
        'values' => '\ultracart\admin\v2\models\ItemOptionValue[]'
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
        'cost_if_specified' => 'cost_if_specified',
        'cost_per_letter' => 'cost_per_letter',
        'cost_per_line' => 'cost_per_line',
        'ignore_if_default' => 'ignore_if_default',
        'label' => 'label',
        'label_translated_text_instance_oid' => 'label_translated_text_instance_oid',
        'name' => 'name',
        'name_translated_text_instance_oid' => 'name_translated_text_instance_oid',
        'one_time_fee' => 'one_time_fee',
        'option_oid' => 'option_oid',
        'required' => 'required',
        'system_option' => 'system_option',
        'type' => 'type',
        'values' => 'values'
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
        'cost_if_specified' => 'setCostIfSpecified',
        'cost_per_letter' => 'setCostPerLetter',
        'cost_per_line' => 'setCostPerLine',
        'ignore_if_default' => 'setIgnoreIfDefault',
        'label' => 'setLabel',
        'label_translated_text_instance_oid' => 'setLabelTranslatedTextInstanceOid',
        'name' => 'setName',
        'name_translated_text_instance_oid' => 'setNameTranslatedTextInstanceOid',
        'one_time_fee' => 'setOneTimeFee',
        'option_oid' => 'setOptionOid',
        'required' => 'setRequired',
        'system_option' => 'setSystemOption',
        'type' => 'setType',
        'values' => 'setValues'
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
        'cost_if_specified' => 'getCostIfSpecified',
        'cost_per_letter' => 'getCostPerLetter',
        'cost_per_line' => 'getCostPerLine',
        'ignore_if_default' => 'getIgnoreIfDefault',
        'label' => 'getLabel',
        'label_translated_text_instance_oid' => 'getLabelTranslatedTextInstanceOid',
        'name' => 'getName',
        'name_translated_text_instance_oid' => 'getNameTranslatedTextInstanceOid',
        'one_time_fee' => 'getOneTimeFee',
        'option_oid' => 'getOptionOid',
        'required' => 'getRequired',
        'system_option' => 'getSystemOption',
        'type' => 'getType',
        'values' => 'getValues'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_DROPDOWN = 'dropdown';
    const TYPE_FILE_ATTACHMENT = 'file attachment';
    const TYPE_FIXED = 'fixed';
    const TYPE_HIDDEN = 'hidden';
    const TYPE_MULTILINE = 'multiline';
    const TYPE_RADIO = 'radio';
    const TYPE_SINGLE = 'single';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_DROPDOWN,
            self::TYPE_FILE_ATTACHMENT,
            self::TYPE_FIXED,
            self::TYPE_HIDDEN,
            self::TYPE_MULTILINE,
            self::TYPE_RADIO,
            self::TYPE_SINGLE,
        ];
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
        $this->container['cost_if_specified'] = isset($data['cost_if_specified']) ? $data['cost_if_specified'] : null;
        $this->container['cost_per_letter'] = isset($data['cost_per_letter']) ? $data['cost_per_letter'] : null;
        $this->container['cost_per_line'] = isset($data['cost_per_line']) ? $data['cost_per_line'] : null;
        $this->container['ignore_if_default'] = isset($data['ignore_if_default']) ? $data['ignore_if_default'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['label_translated_text_instance_oid'] = isset($data['label_translated_text_instance_oid']) ? $data['label_translated_text_instance_oid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_translated_text_instance_oid'] = isset($data['name_translated_text_instance_oid']) ? $data['name_translated_text_instance_oid'] : null;
        $this->container['one_time_fee'] = isset($data['one_time_fee']) ? $data['one_time_fee'] : null;
        $this->container['option_oid'] = isset($data['option_oid']) ? $data['option_oid'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['system_option'] = isset($data['system_option']) ? $data['system_option'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['label']) && (strlen($this->container['label']) > 50)) {
            $invalid_properties[] = "invalid value for 'label', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 50)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        $allowed_values = array("dropdown", "file attachment", "fixed", "hidden", "multiline", "radio", "single");
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of #{allowed_values}.";
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
        if (strlen($this->container['label']) > 50) {
            return false;
        }
        if (strlen($this->container['name']) > 50) {
            return false;
        }
        $allowed_values = array("dropdown", "file attachment", "fixed", "hidden", "multiline", "radio", "single");
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets cost_if_specified
     * @return float
     */
    public function getCostIfSpecified()
    {
        return $this->container['cost_if_specified'];
    }

    /**
     * Sets cost_if_specified
     * @param float $cost_if_specified Cost if specified
     * @return $this
     */
    public function setCostIfSpecified($cost_if_specified)
    {
        $this->container['cost_if_specified'] = $cost_if_specified;

        return $this;
    }

    /**
     * Gets cost_per_letter
     * @return float
     */
    public function getCostPerLetter()
    {
        return $this->container['cost_per_letter'];
    }

    /**
     * Sets cost_per_letter
     * @param float $cost_per_letter Cost per letter
     * @return $this
     */
    public function setCostPerLetter($cost_per_letter)
    {
        $this->container['cost_per_letter'] = $cost_per_letter;

        return $this;
    }

    /**
     * Gets cost_per_line
     * @return float
     */
    public function getCostPerLine()
    {
        return $this->container['cost_per_line'];
    }

    /**
     * Sets cost_per_line
     * @param float $cost_per_line Cost per line
     * @return $this
     */
    public function setCostPerLine($cost_per_line)
    {
        $this->container['cost_per_line'] = $cost_per_line;

        return $this;
    }

    /**
     * Gets ignore_if_default
     * @return bool
     */
    public function getIgnoreIfDefault()
    {
        return $this->container['ignore_if_default'];
    }

    /**
     * Sets ignore_if_default
     * @param bool $ignore_if_default Ignore this option on the order if the default value is selected
     * @return $this
     */
    public function setIgnoreIfDefault($ignore_if_default)
    {
        $this->container['ignore_if_default'] = $ignore_if_default;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label Label
     * @return $this
     */
    public function setLabel($label)
    {
        if (strlen($label) > 50) {
            throw new \InvalidArgumentException('invalid length for $label when calling ItemOption., must be smaller than or equal to 50.');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets label_translated_text_instance_oid
     * @return int
     */
    public function getLabelTranslatedTextInstanceOid()
    {
        return $this->container['label_translated_text_instance_oid'];
    }

    /**
     * Sets label_translated_text_instance_oid
     * @param int $label_translated_text_instance_oid Label translated text instance ID
     * @return $this
     */
    public function setLabelTranslatedTextInstanceOid($label_translated_text_instance_oid)
    {
        $this->container['label_translated_text_instance_oid'] = $label_translated_text_instance_oid;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name
     * @return $this
     */
    public function setName($name)
    {
        if (strlen($name) > 50) {
            throw new \InvalidArgumentException('invalid length for $name when calling ItemOption., must be smaller than or equal to 50.');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_translated_text_instance_oid
     * @return int
     */
    public function getNameTranslatedTextInstanceOid()
    {
        return $this->container['name_translated_text_instance_oid'];
    }

    /**
     * Sets name_translated_text_instance_oid
     * @param int $name_translated_text_instance_oid Name translated text instance ID
     * @return $this
     */
    public function setNameTranslatedTextInstanceOid($name_translated_text_instance_oid)
    {
        $this->container['name_translated_text_instance_oid'] = $name_translated_text_instance_oid;

        return $this;
    }

    /**
     * Gets one_time_fee
     * @return bool
     */
    public function getOneTimeFee()
    {
        return $this->container['one_time_fee'];
    }

    /**
     * Sets one_time_fee
     * @param bool $one_time_fee One time fee
     * @return $this
     */
    public function setOneTimeFee($one_time_fee)
    {
        $this->container['one_time_fee'] = $one_time_fee;

        return $this;
    }

    /**
     * Gets option_oid
     * @return int
     */
    public function getOptionOid()
    {
        return $this->container['option_oid'];
    }

    /**
     * Sets option_oid
     * @param int $option_oid Option object identifier
     * @return $this
     */
    public function setOptionOid($option_oid)
    {
        $this->container['option_oid'] = $option_oid;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required True if the customer is required to specify an answer
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets system_option
     * @return bool
     */
    public function getSystemOption()
    {
        return $this->container['system_option'];
    }

    /**
     * Sets system_option
     * @param bool $system_option True if this is a system option
     * @return $this
     */
    public function setSystemOption($system_option)
    {
        $this->container['system_option'] = $system_option;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of option
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('dropdown', 'file attachment', 'fixed', 'hidden', 'multiline', 'radio', 'single');
        if (!in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'dropdown', 'file attachment', 'fixed', 'hidden', 'multiline', 'radio', 'single'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets values
     * @return \ultracart\admin\v2\models\ItemOptionValue[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     * @param \ultracart\admin\v2\models\ItemOptionValue[] $values Values
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

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


