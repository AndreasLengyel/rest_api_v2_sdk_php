<?php
/**
 * ItemContentMultimediaThumbnail
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
 * ItemContentMultimediaThumbnail Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemContentMultimediaThumbnail implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemContentMultimediaThumbnail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'height' => 'int',
        'http_url' => 'string',
        'https_url' => 'string',
        'png_format' => 'bool',
        'square' => 'bool',
        'width' => 'int'
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
        'height' => 'height',
        'http_url' => 'http_url',
        'https_url' => 'https_url',
        'png_format' => 'png_format',
        'square' => 'square',
        'width' => 'width'
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
        'height' => 'setHeight',
        'http_url' => 'setHttpUrl',
        'https_url' => 'setHttpsUrl',
        'png_format' => 'setPngFormat',
        'square' => 'setSquare',
        'width' => 'setWidth'
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
        'height' => 'getHeight',
        'http_url' => 'getHttpUrl',
        'https_url' => 'getHttpsUrl',
        'png_format' => 'getPngFormat',
        'square' => 'getSquare',
        'width' => 'getWidth'
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
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['http_url'] = isset($data['http_url']) ? $data['http_url'] : null;
        $this->container['https_url'] = isset($data['https_url']) ? $data['https_url'] : null;
        $this->container['png_format'] = isset($data['png_format']) ? $data['png_format'] : null;
        $this->container['square'] = isset($data['square']) ? $data['square'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
     * Gets height
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     * @param int $height Height of the thumbnail
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets http_url
     * @return string
     */
    public function getHttpUrl()
    {
        return $this->container['http_url'];
    }

    /**
     * Sets http_url
     * @param string $http_url HTTP URL to view the thumbnail
     * @return $this
     */
    public function setHttpUrl($http_url)
    {
        $this->container['http_url'] = $http_url;

        return $this;
    }

    /**
     * Gets https_url
     * @return string
     */
    public function getHttpsUrl()
    {
        return $this->container['https_url'];
    }

    /**
     * Sets https_url
     * @param string $https_url HTTPS URL to view the thumbnail
     * @return $this
     */
    public function setHttpsUrl($https_url)
    {
        $this->container['https_url'] = $https_url;

        return $this;
    }

    /**
     * Gets png_format
     * @return bool
     */
    public function getPngFormat()
    {
        return $this->container['png_format'];
    }

    /**
     * Sets png_format
     * @param bool $png_format True if PNG, false if JPEG
     * @return $this
     */
    public function setPngFormat($png_format)
    {
        $this->container['png_format'] = $png_format;

        return $this;
    }

    /**
     * Gets square
     * @return bool
     */
    public function getSquare()
    {
        return $this->container['square'];
    }

    /**
     * Sets square
     * @param bool $square True if the thumbnail is square
     * @return $this
     */
    public function setSquare($square)
    {
        $this->container['square'] = $square;

        return $this;
    }

    /**
     * Gets width
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     * @param int $width Width of the thumbnail
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


