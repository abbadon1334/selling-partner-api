<?php
/**
 * NetworkComminglingTransactionEvent
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Finances
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\Finances;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * NetworkComminglingTransactionEvent Class Doc Comment
 *
 * @category Class
 * @description A network commingling transaction event.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class NetworkComminglingTransactionEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NetworkComminglingTransactionEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'transaction_type' => 'string',
        'posted_date' => '\DateTime',
        'net_co_transaction_id' => 'string',
        'swap_reason' => 'string',
        'asin' => 'string',
        'marketplace_id' => 'string',
        'tax_exclusive_amount' => '\SellingPartnerApi\Model\Finances\Currency',
        'tax_amount' => '\SellingPartnerApi\Model\Finances\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'transaction_type' => null,
        'posted_date' => 'date-time',
        'net_co_transaction_id' => null,
        'swap_reason' => null,
        'asin' => null,
        'marketplace_id' => null,
        'tax_exclusive_amount' => null,
        'tax_amount' => null
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
        'transaction_type' => 'TransactionType',
        'posted_date' => 'PostedDate',
        'net_co_transaction_id' => 'NetCoTransactionID',
        'swap_reason' => 'SwapReason',
        'asin' => 'ASIN',
        'marketplace_id' => 'MarketplaceId',
        'tax_exclusive_amount' => 'TaxExclusiveAmount',
        'tax_amount' => 'TaxAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_type' => 'setTransactionType',
        'posted_date' => 'setPostedDate',
        'net_co_transaction_id' => 'setNetCoTransactionId',
        'swap_reason' => 'setSwapReason',
        'asin' => 'setAsin',
        'marketplace_id' => 'setMarketplaceId',
        'tax_exclusive_amount' => 'setTaxExclusiveAmount',
        'tax_amount' => 'setTaxAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_type' => 'getTransactionType',
        'posted_date' => 'getPostedDate',
        'net_co_transaction_id' => 'getNetCoTransactionId',
        'swap_reason' => 'getSwapReason',
        'asin' => 'getAsin',
        'marketplace_id' => 'getMarketplaceId',
        'tax_exclusive_amount' => 'getTaxExclusiveAmount',
        'tax_amount' => 'getTaxAmount'
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
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['net_co_transaction_id'] = $data['net_co_transaction_id'] ?? null;
        $this->container['swap_reason'] = $data['swap_reason'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['tax_exclusive_amount'] = $data['tax_exclusive_amount'] ?? null;
        $this->container['tax_amount'] = $data['tax_amount'] ?? null;
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
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type The type of network item swap. Possible values: * NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace. * ComminglingVAT - A commingling VAT transaction. Available only in the UK, Spain, France, Germany, and Italy marketplaces.
     *
     * @return self
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets posted_date
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTime|null $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets net_co_transaction_id
     *
     * @return string|null
     */
    public function getNetCoTransactionId()
    {
        return $this->container['net_co_transaction_id'];
    }

    /**
     * Sets net_co_transaction_id
     *
     * @param string|null $net_co_transaction_id The identifier for the network item swap.
     *
     * @return self
     */
    public function setNetCoTransactionId($net_co_transaction_id)
    {
        $this->container['net_co_transaction_id'] = $net_co_transaction_id;

        return $this;
    }

    /**
     * Gets swap_reason
     *
     * @return string|null
     */
    public function getSwapReason()
    {
        return $this->container['swap_reason'];
    }

    /**
     * Sets swap_reason
     *
     * @param string|null $swap_reason The reason for the network item swap.
     *
     * @return self
     */
    public function setSwapReason($swap_reason)
    {
        $this->container['swap_reason'] = $swap_reason;

        return $this;
    }

    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN) of the swapped item.
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The marketplace in which the event took place.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets tax_exclusive_amount
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getTaxExclusiveAmount()
    {
        return $this->container['tax_exclusive_amount'];
    }

    /**
     * Sets tax_exclusive_amount
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $tax_exclusive_amount tax_exclusive_amount
     *
     * @return self
     */
    public function setTaxExclusiveAmount($tax_exclusive_amount)
    {
        $this->container['tax_exclusive_amount'] = $tax_exclusive_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return \SellingPartnerApi\Model\Finances\Currency|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param \SellingPartnerApi\Model\Finances\Currency|null $tax_amount tax_amount
     *
     * @return self
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

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


