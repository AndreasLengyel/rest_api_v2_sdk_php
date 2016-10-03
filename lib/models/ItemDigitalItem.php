<?php
/**
 * ItemDigitalItem
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
 * ItemDigitalItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemDigitalItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemDigitalItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'creation_dts' => 'string',
        'description' => 'string',
        'file_size' => 'int',
        'mime_type' => 'string',
        'original_filename' => 'string'
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
        'creation_dts' => 'creation_dts',
        'description' => 'description',
        'file_size' => 'file_size',
        'mime_type' => 'mime_type',
        'original_filename' => 'original_filename'
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
        'creation_dts' => 'setCreationDts',
        'description' => 'setDescription',
        'file_size' => 'setFileSize',
        'mime_type' => 'setMimeType',
        'original_filename' => 'setOriginalFilename'
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
        'creation_dts' => 'getCreationDts',
        'description' => 'getDescription',
        'file_size' => 'getFileSize',
        'mime_type' => 'getMimeType',
        'original_filename' => 'getOriginalFilename'
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
        $this->container['creation_dts'] = isset($data['creation_dts']) ? $data['creation_dts'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['original_filename'] = isset($data['original_filename']) ? $data['original_filename'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['description']) && (strlen($this->container['description']) > 200)) {
            $invalid_properties[] = "invalid value for 'description', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['mime_type']) && (strlen($this->container['mime_type']) > 100)) {
            $invalid_properties[] = "invalid value for 'mime_type', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['original_filename']) && (strlen($this->container['original_filename']) > 250)) {
            $invalid_properties[] = "invalid value for 'original_filename', the character length must be smaller than or equal to 250.";
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
        if (strlen($this->container['description']) > 200) {
            return false;
        }
        if (strlen($this->container['mime_type']) > 100) {
            return false;
        }
        if (strlen($this->container['original_filename']) > 250) {
            return false;
        }
        return true;
    }


    /**
     * Gets creation_dts
     * @return string
     */
    public function getCreationDts()
    {
        return $this->container['creation_dts'];
    }

    /**
     * Sets creation_dts
     * @param string $creation_dts File creation date
     * @return $this
     */
    public function setCreationDts($creation_dts)
    {
        $this->container['creation_dts'] = $creation_dts;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description Description of the digital item
     * @return $this
     */
    public function setDescription($description)
    {
        if (strlen($description) > 200) {
            throw new \InvalidArgumentException('invalid length for $description when calling ItemDigitalItem., must be smaller than or equal to 200.');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets file_size
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     * @param int $file_size File size
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets mime_type
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     * @param string $mime_type Mime type associated with the file
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        if (strlen($mime_type) > 100) {
            throw new \InvalidArgumentException('invalid length for $mime_type when calling ItemDigitalItem., must be smaller than or equal to 100.');
        }
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets original_filename
     * @return string
     */
    public function getOriginalFilename()
    {
        return $this->container['original_filename'];
    }

    /**
     * Sets original_filename
     * @param string $original_filename Original filename
     * @return $this
     */
    public function setOriginalFilename($original_filename)
    {
        if (strlen($original_filename) > 250) {
            throw new \InvalidArgumentException('invalid length for $original_filename when calling ItemDigitalItem., must be smaller than or equal to 250.');
        }
        $this->container['original_filename'] = $original_filename;

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


