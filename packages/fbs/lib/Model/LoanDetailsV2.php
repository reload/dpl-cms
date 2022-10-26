<?php
/**
 * LoanDetailsV2
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
 * LoanDetailsV2 Class Doc Comment
 *
 * @category Class
 * @package  DanskernesDigitaleBibliotek\FBS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LoanDetailsV2 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoanDetailsV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'due_date' => 'string',
        'il_bibliographic_record' => '\DanskernesDigitaleBibliotek\FBS\Model\ILLBibliographicRecord',
        'loan_date' => 'string',
        'loan_id' => 'int',
        'loan_type' => 'string',
        'material_group' => '\DanskernesDigitaleBibliotek\FBS\Model\MaterialGroup',
        'material_item_number' => 'string',
        'periodical' => '\DanskernesDigitaleBibliotek\FBS\Model\Periodical',
        'record_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'due_date' => null,
        'il_bibliographic_record' => null,
        'loan_date' => null,
        'loan_id' => 'int64',
        'loan_type' => null,
        'material_group' => null,
        'material_item_number' => null,
        'periodical' => null,
        'record_id' => null
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
        'due_date' => 'dueDate',
        'il_bibliographic_record' => 'ilBibliographicRecord',
        'loan_date' => 'loanDate',
        'loan_id' => 'loanId',
        'loan_type' => 'loanType',
        'material_group' => 'materialGroup',
        'material_item_number' => 'materialItemNumber',
        'periodical' => 'periodical',
        'record_id' => 'recordId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'due_date' => 'setDueDate',
        'il_bibliographic_record' => 'setIlBibliographicRecord',
        'loan_date' => 'setLoanDate',
        'loan_id' => 'setLoanId',
        'loan_type' => 'setLoanType',
        'material_group' => 'setMaterialGroup',
        'material_item_number' => 'setMaterialItemNumber',
        'periodical' => 'setPeriodical',
        'record_id' => 'setRecordId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'due_date' => 'getDueDate',
        'il_bibliographic_record' => 'getIlBibliographicRecord',
        'loan_date' => 'getLoanDate',
        'loan_id' => 'getLoanId',
        'loan_type' => 'getLoanType',
        'material_group' => 'getMaterialGroup',
        'material_item_number' => 'getMaterialItemNumber',
        'periodical' => 'getPeriodical',
        'record_id' => 'getRecordId'
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
        $this->container['due_date'] = $data['due_date'] ?? null;
        $this->container['il_bibliographic_record'] = $data['il_bibliographic_record'] ?? null;
        $this->container['loan_date'] = $data['loan_date'] ?? null;
        $this->container['loan_id'] = $data['loan_id'] ?? null;
        $this->container['loan_type'] = $data['loan_type'] ?? null;
        $this->container['material_group'] = $data['material_group'] ?? null;
        $this->container['material_item_number'] = $data['material_item_number'] ?? null;
        $this->container['periodical'] = $data['periodical'] ?? null;
        $this->container['record_id'] = $data['record_id'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['due_date'] === null) {
            $invalidProperties[] = "'due_date' can't be null";
        }
        if ($this->container['loan_date'] === null) {
            $invalidProperties[] = "'loan_date' can't be null";
        }
        if ($this->container['loan_id'] === null) {
            $invalidProperties[] = "'loan_id' can't be null";
        }
        if ($this->container['loan_type'] === null) {
            $invalidProperties[] = "'loan_type' can't be null";
        }
        if ($this->container['material_group'] === null) {
            $invalidProperties[] = "'material_group' can't be null";
        }
        if ($this->container['material_item_number'] === null) {
            $invalidProperties[] = "'material_item_number' can't be null";
        }
        if ($this->container['record_id'] === null) {
            $invalidProperties[] = "'record_id' can't be null";
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
     * Gets due_date
     *
     * @return string
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param string $due_date The date when the material must be returned
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets il_bibliographic_record
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\ILLBibliographicRecord|null
     */
    public function getIlBibliographicRecord()
    {
        return $this->container['il_bibliographic_record'];
    }

    /**
     * Sets il_bibliographic_record
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\ILLBibliographicRecord|null $il_bibliographic_record il_bibliographic_record
     *
     * @return self
     */
    public function setIlBibliographicRecord($il_bibliographic_record)
    {
        $this->container['il_bibliographic_record'] = $il_bibliographic_record;

        return $this;
    }

    /**
     * Gets loan_date
     *
     * @return string
     */
    public function getLoanDate()
    {
        return $this->container['loan_date'];
    }

    /**
     * Sets loan_date
     *
     * @param string $loan_date The date when the material was picked up
     *
     * @return self
     */
    public function setLoanDate($loan_date)
    {
        $this->container['loan_date'] = $loan_date;

        return $this;
    }

    /**
     * Gets loan_id
     *
     * @return int
     */
    public function getLoanId()
    {
        return $this->container['loan_id'];
    }

    /**
     * Sets loan_id
     *
     * @param int $loan_id Identifies the loan for use when renewing the loan
     *
     * @return self
     */
    public function setLoanId($loan_id)
    {
        $this->container['loan_id'] = $loan_id;

        return $this;
    }

    /**
     * Gets loan_type
     *
     * @return string
     */
    public function getLoanType()
    {
        return $this->container['loan_type'];
    }

    /**
     * Sets loan_type
     *
     * @param string $loan_type The loan type, either <b>loan</b> or <b>interLibraryLoan</b>
     *
     * @return self
     */
    public function setLoanType($loan_type)
    {
        $this->container['loan_type'] = $loan_type;

        return $this;
    }

    /**
     * Gets material_group
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\MaterialGroup
     */
    public function getMaterialGroup()
    {
        return $this->container['material_group'];
    }

    /**
     * Sets material_group
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\MaterialGroup $material_group material_group
     *
     * @return self
     */
    public function setMaterialGroup($material_group)
    {
        $this->container['material_group'] = $material_group;

        return $this;
    }

    /**
     * Gets material_item_number
     *
     * @return string
     */
    public function getMaterialItemNumber()
    {
        return $this->container['material_item_number'];
    }

    /**
     * Sets material_item_number
     *
     * @param string $material_item_number Identifies the exact material that has been loaned
     *
     * @return self
     */
    public function setMaterialItemNumber($material_item_number)
    {
        $this->container['material_item_number'] = $material_item_number;

        return $this;
    }

    /**
     * Gets periodical
     *
     * @return \DanskernesDigitaleBibliotek\FBS\Model\Periodical|null
     */
    public function getPeriodical()
    {
        return $this->container['periodical'];
    }

    /**
     * Sets periodical
     *
     * @param \DanskernesDigitaleBibliotek\FBS\Model\Periodical|null $periodical periodical
     *
     * @return self
     */
    public function setPeriodical($periodical)
    {
        $this->container['periodical'] = $periodical;

        return $this;
    }

    /**
     * Gets record_id
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * Sets record_id
     *
     * @param string $record_id The FAUST number of the bibliographic record
     *
     * @return self
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

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

