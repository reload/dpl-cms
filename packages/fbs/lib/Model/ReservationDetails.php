<?php
/**
 * ReservationDetails
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
 * ReservationDetails Class Doc Comment
 *
 * @category Class
 * @package  DanskernesDigitaleBibliotek\FBS
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReservationDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReservationDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date_of_reservation' => 'string',
        'expiry_date' => 'string',
        'il_bibliographic_record' => '\DanskernesDigitaleBibliotek\FBS\Model\ILLBibliographicRecord',
        'loan_type' => 'string',
        'number_in_queue' => 'int',
        'periodical' => '\DanskernesDigitaleBibliotek\FBS\Model\Periodical',
        'pickup_branch' => 'string',
        'pickup_deadline' => 'string',
        'pickup_number' => 'string',
        'record_id' => 'string',
        'reservation_id' => 'int',
        'state' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'date_of_reservation' => null,
        'expiry_date' => null,
        'il_bibliographic_record' => null,
        'loan_type' => null,
        'number_in_queue' => 'int32',
        'periodical' => null,
        'pickup_branch' => null,
        'pickup_deadline' => null,
        'pickup_number' => null,
        'record_id' => null,
        'reservation_id' => 'int64',
        'state' => null
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
        'date_of_reservation' => 'dateOfReservation',
        'expiry_date' => 'expiryDate',
        'il_bibliographic_record' => 'ilBibliographicRecord',
        'loan_type' => 'loanType',
        'number_in_queue' => 'numberInQueue',
        'periodical' => 'periodical',
        'pickup_branch' => 'pickupBranch',
        'pickup_deadline' => 'pickupDeadline',
        'pickup_number' => 'pickupNumber',
        'record_id' => 'recordId',
        'reservation_id' => 'reservationId',
        'state' => 'state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_of_reservation' => 'setDateOfReservation',
        'expiry_date' => 'setExpiryDate',
        'il_bibliographic_record' => 'setIlBibliographicRecord',
        'loan_type' => 'setLoanType',
        'number_in_queue' => 'setNumberInQueue',
        'periodical' => 'setPeriodical',
        'pickup_branch' => 'setPickupBranch',
        'pickup_deadline' => 'setPickupDeadline',
        'pickup_number' => 'setPickupNumber',
        'record_id' => 'setRecordId',
        'reservation_id' => 'setReservationId',
        'state' => 'setState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_of_reservation' => 'getDateOfReservation',
        'expiry_date' => 'getExpiryDate',
        'il_bibliographic_record' => 'getIlBibliographicRecord',
        'loan_type' => 'getLoanType',
        'number_in_queue' => 'getNumberInQueue',
        'periodical' => 'getPeriodical',
        'pickup_branch' => 'getPickupBranch',
        'pickup_deadline' => 'getPickupDeadline',
        'pickup_number' => 'getPickupNumber',
        'record_id' => 'getRecordId',
        'reservation_id' => 'getReservationId',
        'state' => 'getState'
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
        $this->container['date_of_reservation'] = $data['date_of_reservation'] ?? null;
        $this->container['expiry_date'] = $data['expiry_date'] ?? null;
        $this->container['il_bibliographic_record'] = $data['il_bibliographic_record'] ?? null;
        $this->container['loan_type'] = $data['loan_type'] ?? null;
        $this->container['number_in_queue'] = $data['number_in_queue'] ?? null;
        $this->container['periodical'] = $data['periodical'] ?? null;
        $this->container['pickup_branch'] = $data['pickup_branch'] ?? null;
        $this->container['pickup_deadline'] = $data['pickup_deadline'] ?? null;
        $this->container['pickup_number'] = $data['pickup_number'] ?? null;
        $this->container['record_id'] = $data['record_id'] ?? null;
        $this->container['reservation_id'] = $data['reservation_id'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date_of_reservation'] === null) {
            $invalidProperties[] = "'date_of_reservation' can't be null";
        }
        if ($this->container['expiry_date'] === null) {
            $invalidProperties[] = "'expiry_date' can't be null";
        }
        if ($this->container['loan_type'] === null) {
            $invalidProperties[] = "'loan_type' can't be null";
        }
        if ($this->container['pickup_branch'] === null) {
            $invalidProperties[] = "'pickup_branch' can't be null";
        }
        if ($this->container['record_id'] === null) {
            $invalidProperties[] = "'record_id' can't be null";
        }
        if ($this->container['reservation_id'] === null) {
            $invalidProperties[] = "'reservation_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
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
     * Gets date_of_reservation
     *
     * @return string
     */
    public function getDateOfReservation()
    {
        return $this->container['date_of_reservation'];
    }

    /**
     * Sets date_of_reservation
     *
     * @param string $date_of_reservation date_of_reservation
     *
     * @return self
     */
    public function setDateOfReservation($date_of_reservation)
    {
        $this->container['date_of_reservation'] = $date_of_reservation;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string $expiry_date The date when the patron is no longer interested in the reserved material
     *
     * @return self
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

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
     * @param string $loan_type loan_type
     *
     * @return self
     */
    public function setLoanType($loan_type)
    {
        $this->container['loan_type'] = $loan_type;

        return $this;
    }

    /**
     * Gets number_in_queue
     *
     * @return int|null
     */
    public function getNumberInQueue()
    {
        return $this->container['number_in_queue'];
    }

    /**
     * Sets number_in_queue
     *
     * @param int|null $number_in_queue The number in the reservation queue.
     *
     * @return self
     */
    public function setNumberInQueue($number_in_queue)
    {
        $this->container['number_in_queue'] = $number_in_queue;

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
     * Gets pickup_branch
     *
     * @return string
     */
    public function getPickupBranch()
    {
        return $this->container['pickup_branch'];
    }

    /**
     * Sets pickup_branch
     *
     * @param string $pickup_branch ISIL-number of pickup branch
     *
     * @return self
     */
    public function setPickupBranch($pickup_branch)
    {
        $this->container['pickup_branch'] = $pickup_branch;

        return $this;
    }

    /**
     * Gets pickup_deadline
     *
     * @return string|null
     */
    public function getPickupDeadline()
    {
        return $this->container['pickup_deadline'];
    }

    /**
     * Sets pickup_deadline
     *
     * @param string|null $pickup_deadline Set if reserved material is available for loan
     *
     * @return self
     */
    public function setPickupDeadline($pickup_deadline)
    {
        $this->container['pickup_deadline'] = $pickup_deadline;

        return $this;
    }

    /**
     * Gets pickup_number
     *
     * @return string|null
     */
    public function getPickupNumber()
    {
        return $this->container['pickup_number'];
    }

    /**
     * Sets pickup_number
     *
     * @param string|null $pickup_number The reservation number. Will be present if the reservation is ready for pickup (the state is 'readyForPickup')
     *
     * @return self
     */
    public function setPickupNumber($pickup_number)
    {
        $this->container['pickup_number'] = $pickup_number;

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
     * @param string $record_id The FAUST number
     *
     * @return self
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets reservation_id
     *
     * @return int
     */
    public function getReservationId()
    {
        return $this->container['reservation_id'];
    }

    /**
     * Sets reservation_id
     *
     * @param int $reservation_id Identifies the reservation for use when updating or deleting the reservation
     *
     * @return self
     */
    public function setReservationId($reservation_id)
    {
        $this->container['reservation_id'] = $reservation_id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return self
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


