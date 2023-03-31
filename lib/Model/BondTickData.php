<?php
/**
 * BondTickData
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finnhub API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finnhub\Model;

use \ArrayAccess;
use \Finnhub\ObjectSerializer;

/**
 * BondTickData Class Doc Comment
 *
 * @category Class
 * @package  Finnhub
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BondTickData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BondTickData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'skip' => 'int',
        'count' => 'int',
        'total' => 'int',
        'v' => 'float[]',
        'p' => 'float[]',
        'y' => 'float[]',
        't' => 'int[]',
        'si' => 'string[]',
        'cp' => 'string[]',
        'rp' => 'string[]',
        'ats' => 'string[]',
        'c' => 'string[][]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'skip' => 'int64',
        'count' => 'int64',
        'total' => 'int64',
        'v' => 'float',
        'p' => 'float',
        'y' => 'float',
        't' => 'int64',
        'si' => null,
        'cp' => null,
        'rp' => null,
        'ats' => null,
        'c' => null
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
        'skip' => 'skip',
        'count' => 'count',
        'total' => 'total',
        'v' => 'v',
        'p' => 'p',
        'y' => 'y',
        't' => 't',
        'si' => 'si',
        'cp' => 'cp',
        'rp' => 'rp',
        'ats' => 'ats',
        'c' => 'c'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'skip' => 'setSkip',
        'count' => 'setCount',
        'total' => 'setTotal',
        'v' => 'setV',
        'p' => 'setP',
        'y' => 'setY',
        't' => 'setT',
        'si' => 'setSi',
        'cp' => 'setCp',
        'rp' => 'setRp',
        'ats' => 'setAts',
        'c' => 'setC'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'skip' => 'getSkip',
        'count' => 'getCount',
        'total' => 'getTotal',
        'v' => 'getV',
        'p' => 'getP',
        'y' => 'getY',
        't' => 'getT',
        'si' => 'getSi',
        'cp' => 'getCp',
        'rp' => 'getRp',
        'ats' => 'getAts',
        'c' => 'getC'
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
        $this->container['skip'] = $data['skip'] ?? null;
        $this->container['count'] = $data['count'] ?? null;
        $this->container['total'] = $data['total'] ?? null;
        $this->container['v'] = $data['v'] ?? null;
        $this->container['p'] = $data['p'] ?? null;
        $this->container['y'] = $data['y'] ?? null;
        $this->container['t'] = $data['t'] ?? null;
        $this->container['si'] = $data['si'] ?? null;
        $this->container['cp'] = $data['cp'] ?? null;
        $this->container['rp'] = $data['rp'] ?? null;
        $this->container['ats'] = $data['ats'] ?? null;
        $this->container['c'] = $data['c'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets skip
     *
     * @return int|null
     */
    public function getSkip()
    {
        return $this->container['skip'];
    }

    /**
     * Sets skip
     *
     * @param int|null $skip Number of ticks skipped.
     *
     * @return self
     */
    public function setSkip($skip)
    {
        $this->container['skip'] = $skip;

        return $this;
    }

    /**
     * Gets count
     *
     * @return int|null
     */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
     * Sets count
     *
     * @param int|null $count Number of ticks returned. If <code>count</code> < <code>limit</code>, all data for that date has been returned.
     *
     * @return self
     */
    public function setCount($count)
    {
        $this->container['count'] = $count;

        return $this;
    }

    /**
     * Gets total
     *
     * @return int|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param int|null $total Total number of ticks for that date.
     *
     * @return self
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets v
     *
     * @return float[]|null
     */
    public function getV()
    {
        return $this->container['v'];
    }

    /**
     * Sets v
     *
     * @param float[]|null $v List of volume data.
     *
     * @return self
     */
    public function setV($v)
    {
        $this->container['v'] = $v;

        return $this;
    }

    /**
     * Gets p
     *
     * @return float[]|null
     */
    public function getP()
    {
        return $this->container['p'];
    }

    /**
     * Sets p
     *
     * @param float[]|null $p List of price data.
     *
     * @return self
     */
    public function setP($p)
    {
        $this->container['p'] = $p;

        return $this;
    }

    /**
     * Gets y
     *
     * @return float[]|null
     */
    public function getY()
    {
        return $this->container['y'];
    }

    /**
     * Sets y
     *
     * @param float[]|null $y List of yield data.
     *
     * @return self
     */
    public function setY($y)
    {
        $this->container['y'] = $y;

        return $this;
    }

    /**
     * Gets t
     *
     * @return int[]|null
     */
    public function getT()
    {
        return $this->container['t'];
    }

    /**
     * Sets t
     *
     * @param int[]|null $t List of timestamp in UNIX ms.
     *
     * @return self
     */
    public function setT($t)
    {
        $this->container['t'] = $t;

        return $this;
    }

    /**
     * Gets si
     *
     * @return string[]|null
     */
    public function getSi()
    {
        return $this->container['si'];
    }

    /**
     * Sets si
     *
     * @param string[]|null $si List of values showing the side (Buy/sell) of each trade. List of supported values: <a target=\"_blank\" href=\"https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp=sharing\",>here</a>
     *
     * @return self
     */
    public function setSi($si)
    {
        $this->container['si'] = $si;

        return $this;
    }

    /**
     * Gets cp
     *
     * @return string[]|null
     */
    public function getCp()
    {
        return $this->container['cp'];
    }

    /**
     * Sets cp
     *
     * @param string[]|null $cp List of values showing the counterparty of each trade. List of supported values: <a target=\"_blank\" href=\"https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp=sharing\",>here</a>
     *
     * @return self
     */
    public function setCp($cp)
    {
        $this->container['cp'] = $cp;

        return $this;
    }

    /**
     * Gets rp
     *
     * @return string[]|null
     */
    public function getRp()
    {
        return $this->container['rp'];
    }

    /**
     * Sets rp
     *
     * @param string[]|null $rp List of values showing the reporting party of each trade. List of supported values: <a target=\"_blank\" href=\"https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp=sharing\",>here</a>
     *
     * @return self
     */
    public function setRp($rp)
    {
        $this->container['rp'] = $rp;

        return $this;
    }

    /**
     * Gets ats
     *
     * @return string[]|null
     */
    public function getAts()
    {
        return $this->container['ats'];
    }

    /**
     * Sets ats
     *
     * @param string[]|null $ats ATS flag. Y or empty
     *
     * @return self
     */
    public function setAts($ats)
    {
        $this->container['ats'] = $ats;

        return $this;
    }

    /**
     * Gets c
     *
     * @return string[][]|null
     */
    public function getC()
    {
        return $this->container['c'];
    }

    /**
     * Sets c
     *
     * @param string[][]|null $c List of trade conditions. A comprehensive list of trade conditions code can be found <a target=\"_blank\" href=\"https://docs.google.com/spreadsheets/d/1O3aueXSPOqo7Iuyz4PqDG6yZunHsX8BTefZ2kFk5pz4/edit?usp=sharing\">here</a>
     *
     * @return self
     */
    public function setC($c)
    {
        $this->container['c'] = $c;

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


