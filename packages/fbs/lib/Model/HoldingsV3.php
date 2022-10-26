<?php
/**
 * HoldingsV3
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  DanskernesDigitaleBibliotek\FBS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * FBS Adapter
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DanskernesDigitaleBibliotek\FBS\Model;

use \ArrayAccess;
use \DanskernesDigitaleBibliotek\FBS\ObjectSerializer;

/**
 * HoldingsV3 Class Doc Comment
 *
 * @category Class
 * @package  DanskernesDigitaleBibliotek\FBS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class HoldingsV3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HoldingsV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'branch' => '\DanskernesDigitaleBibliotek\FBS\Model\AgencyBranch',
        'department' => '\DanskernesDigitaleBibliotek\FBS\Model\AgencyDepartment',
        'location' => '\DanskernesDigitaleBibliotek\FBS\Model\AgencyLocation',
        'materials' => '\DanskernesDigitaleBibliotek\FBS\Model\MaterialV3[]',
        'sublocation' => '\DanskernesDigitaleBibliotek\FBS\Model\AgencySublocation'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'branch' => null,
        'department' => null,
        'location' => null,
        'materials' => null,
        'sublocation' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'branch' => 'branch',
        'department' => 'department',
        'location' => 'location',
        'materials' => 'materials',
        'sublocation' => 'sublocation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'branch' => 'setBranch',
        'department' => 'setDepartment',
        'location' => 'setLocation',
        'materials' => 'setMaterials',
        'sublocation' => 'setSublocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'branch' => 'getBranch',
        'department' => 'getDepartment',
        'location' => 'getLocation',
        'materials' => 'getMaterials',
        'sublocation' => 'getSublocation'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['branch'] = $data['branch'] ?? null;
        $this->container['department'] = $data['department'] ?? null;
        $this->container['location'] = $data['location'] ?? null;
        $this->container['materials'] = $data['materials'] ?? null;
        $this->container['sublocation'] = $data['sublocation'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['branch'] === null) {
            $invalidProperties[] = "'branch' can't be null";
        }
        if ($this->container['materials'] === null) {
            $invalidProperties[] = "'materials' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets branch
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\AgencyBranch
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\AgencyBranch $branch branch
     *
     * @return self
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets department
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\AgencyDepartment|null
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\AgencyDepartment|null $department department
     *
     * @return self
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\AgencyLocation|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\AgencyLocation|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\MaterialV3[]
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\MaterialV3[] $materials Materials that belongs to this placement
     *
     * @return self
     */
    public function setMaterials($materials)
    {
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets sublocation
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\AgencySublocation|null
     */
    public function getSublocation()
    {
        return $this->container['sublocation'];
    }

    /**
     * Sets sublocation
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\AgencySublocation|null $sublocation sublocation
     *
     * @return self
     */
    public function setSublocation($sublocation)
    {
        $this->container['sublocation'] = $sublocation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


