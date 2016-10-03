<?php
/**
 * OrderPayment
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
 * OrderPayment Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     ultracart\admin\v2
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OrderPayment implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'OrderPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'check' => '\ultracart\admin\v2\models\OrderPaymentCheck',
        'credit_card' => '\ultracart\admin\v2\models\OrderPaymentCreditCard',
        'echeck' => '\ultracart\admin\v2\models\OrderPaymentECheck',
        'hold_for_fraud_review' => 'bool',
        'payment_dts' => 'string',
        'payment_method' => 'string',
        'payment_method_accounting_code' => 'string',
        'payment_method_deposit_to_account' => 'string',
        'payment_status' => 'string',
        'purchase_order' => '\ultracart\admin\v2\models\OrderPaymentPurchaseOrder',
        'rotating_transaction_gateway_code' => 'string',
        'surcharge' => 'float',
        'surcharge_accounting_code' => 'string',
        'surcharge_transaction_fee' => 'float',
        'surcharge_transaction_percentage' => 'float',
        'test_order' => 'bool',
        'transactions' => '\ultracart\admin\v2\models\OrderPaymentTransaction[]'
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
        'check' => 'check',
        'credit_card' => 'credit_card',
        'echeck' => 'echeck',
        'hold_for_fraud_review' => 'hold_for_fraud_review',
        'payment_dts' => 'payment_dts',
        'payment_method' => 'payment_method',
        'payment_method_accounting_code' => 'payment_method_accounting_code',
        'payment_method_deposit_to_account' => 'payment_method_deposit_to_account',
        'payment_status' => 'payment_status',
        'purchase_order' => 'purchase_order',
        'rotating_transaction_gateway_code' => 'rotating_transaction_gateway_code',
        'surcharge' => 'surcharge',
        'surcharge_accounting_code' => 'surcharge_accounting_code',
        'surcharge_transaction_fee' => 'surcharge_transaction_fee',
        'surcharge_transaction_percentage' => 'surcharge_transaction_percentage',
        'test_order' => 'test_order',
        'transactions' => 'transactions'
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
        'check' => 'setCheck',
        'credit_card' => 'setCreditCard',
        'echeck' => 'setEcheck',
        'hold_for_fraud_review' => 'setHoldForFraudReview',
        'payment_dts' => 'setPaymentDts',
        'payment_method' => 'setPaymentMethod',
        'payment_method_accounting_code' => 'setPaymentMethodAccountingCode',
        'payment_method_deposit_to_account' => 'setPaymentMethodDepositToAccount',
        'payment_status' => 'setPaymentStatus',
        'purchase_order' => 'setPurchaseOrder',
        'rotating_transaction_gateway_code' => 'setRotatingTransactionGatewayCode',
        'surcharge' => 'setSurcharge',
        'surcharge_accounting_code' => 'setSurchargeAccountingCode',
        'surcharge_transaction_fee' => 'setSurchargeTransactionFee',
        'surcharge_transaction_percentage' => 'setSurchargeTransactionPercentage',
        'test_order' => 'setTestOrder',
        'transactions' => 'setTransactions'
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
        'check' => 'getCheck',
        'credit_card' => 'getCreditCard',
        'echeck' => 'getEcheck',
        'hold_for_fraud_review' => 'getHoldForFraudReview',
        'payment_dts' => 'getPaymentDts',
        'payment_method' => 'getPaymentMethod',
        'payment_method_accounting_code' => 'getPaymentMethodAccountingCode',
        'payment_method_deposit_to_account' => 'getPaymentMethodDepositToAccount',
        'payment_status' => 'getPaymentStatus',
        'purchase_order' => 'getPurchaseOrder',
        'rotating_transaction_gateway_code' => 'getRotatingTransactionGatewayCode',
        'surcharge' => 'getSurcharge',
        'surcharge_accounting_code' => 'getSurchargeAccountingCode',
        'surcharge_transaction_fee' => 'getSurchargeTransactionFee',
        'surcharge_transaction_percentage' => 'getSurchargeTransactionPercentage',
        'test_order' => 'getTestOrder',
        'transactions' => 'getTransactions'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const PAYMENT_METHOD_AFFIRM = 'Affirm';
    const PAYMENT_METHOD_AMAZON = 'Amazon';
    const PAYMENT_METHOD_AMAZON_SC = 'Amazon SC';
    const PAYMENT_METHOD_CASH = 'Cash';
    const PAYMENT_METHOD_CHECK = 'Check';
    const PAYMENT_METHOD_COD = 'COD';
    const PAYMENT_METHOD_COINBASE = 'Coinbase';
    const PAYMENT_METHOD_CREDIT_CARD = 'Credit Card';
    const PAYMENT_METHOD_DWOLLA = 'Dwolla';
    const PAYMENT_METHOD_E_CHECK = 'eCheck';
    const PAYMENT_METHOD_GOOGLE_CHECKOUT = 'Google Checkout';
    const PAYMENT_METHOD_MONEY_ORDER = 'Money Order';
    const PAYMENT_METHOD_PAY_PAL = 'PayPal';
    const PAYMENT_METHOD_PURCHASE_ORDER = 'Purchase Order';
    const PAYMENT_METHOD_QUOTE_REQUEST = 'Quote Request';
    const PAYMENT_METHOD_SAFETY_PAY = 'SafetyPay';
    const PAYMENT_METHOD_SKY_MALL = 'SkyMall';
    const PAYMENT_METHOD_SMART_BARGAINS = 'Smart Bargains';
    const PAYMENT_METHOD_SOFORT = 'Sofort';
    const PAYMENT_METHOD_UNKNOWN = 'Unknown';
    const PAYMENT_METHOD_WIRE_TRANSFER = 'Wire Transfer';
    const PAYMENT_STATUS_UNPROCESSED = 'Unprocessed';
    const PAYMENT_STATUS_AUTHORIZED = 'Authorized';
    const PAYMENT_STATUS_CAPTURE_FAILED = 'Capture Failed';
    const PAYMENT_STATUS_PROCESSED = 'Processed';
    const PAYMENT_STATUS_DECLINED = 'Declined';
    const PAYMENT_STATUS_VOIDED = 'Voided';
    const PAYMENT_STATUS_REFUNDED = 'Refunded';
    const PAYMENT_STATUS_SKIPPED = 'Skipped';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_AFFIRM,
            self::PAYMENT_METHOD_AMAZON,
            self::PAYMENT_METHOD_AMAZON_SC,
            self::PAYMENT_METHOD_CASH,
            self::PAYMENT_METHOD_CHECK,
            self::PAYMENT_METHOD_COD,
            self::PAYMENT_METHOD_COINBASE,
            self::PAYMENT_METHOD_CREDIT_CARD,
            self::PAYMENT_METHOD_DWOLLA,
            self::PAYMENT_METHOD_E_CHECK,
            self::PAYMENT_METHOD_GOOGLE_CHECKOUT,
            self::PAYMENT_METHOD_MONEY_ORDER,
            self::PAYMENT_METHOD_PAY_PAL,
            self::PAYMENT_METHOD_PURCHASE_ORDER,
            self::PAYMENT_METHOD_QUOTE_REQUEST,
            self::PAYMENT_METHOD_SAFETY_PAY,
            self::PAYMENT_METHOD_SKY_MALL,
            self::PAYMENT_METHOD_SMART_BARGAINS,
            self::PAYMENT_METHOD_SOFORT,
            self::PAYMENT_METHOD_UNKNOWN,
            self::PAYMENT_METHOD_WIRE_TRANSFER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_UNPROCESSED,
            self::PAYMENT_STATUS_AUTHORIZED,
            self::PAYMENT_STATUS_CAPTURE_FAILED,
            self::PAYMENT_STATUS_PROCESSED,
            self::PAYMENT_STATUS_DECLINED,
            self::PAYMENT_STATUS_VOIDED,
            self::PAYMENT_STATUS_REFUNDED,
            self::PAYMENT_STATUS_SKIPPED,
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
        $this->container['check'] = isset($data['check']) ? $data['check'] : null;
        $this->container['credit_card'] = isset($data['credit_card']) ? $data['credit_card'] : null;
        $this->container['echeck'] = isset($data['echeck']) ? $data['echeck'] : null;
        $this->container['hold_for_fraud_review'] = isset($data['hold_for_fraud_review']) ? $data['hold_for_fraud_review'] : null;
        $this->container['payment_dts'] = isset($data['payment_dts']) ? $data['payment_dts'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_method_accounting_code'] = isset($data['payment_method_accounting_code']) ? $data['payment_method_accounting_code'] : null;
        $this->container['payment_method_deposit_to_account'] = isset($data['payment_method_deposit_to_account']) ? $data['payment_method_deposit_to_account'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
        $this->container['rotating_transaction_gateway_code'] = isset($data['rotating_transaction_gateway_code']) ? $data['rotating_transaction_gateway_code'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
        $this->container['surcharge_accounting_code'] = isset($data['surcharge_accounting_code']) ? $data['surcharge_accounting_code'] : null;
        $this->container['surcharge_transaction_fee'] = isset($data['surcharge_transaction_fee']) ? $data['surcharge_transaction_fee'] : null;
        $this->container['surcharge_transaction_percentage'] = isset($data['surcharge_transaction_percentage']) ? $data['surcharge_transaction_percentage'] : null;
        $this->container['test_order'] = isset($data['test_order']) ? $data['test_order'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("Affirm", "Amazon", "Amazon SC", "Cash", "Check", "COD", "Coinbase", "Credit Card", "Dwolla", "eCheck", "Google Checkout", "Money Order", "PayPal", "Purchase Order", "Quote Request", "SafetyPay", "SkyMall", "Smart Bargains", "Sofort", "Unknown", "Wire Transfer");
        if (!in_array($this->container['payment_method'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'payment_method', must be one of #{allowed_values}.";
        }

        $allowed_values = array("Unprocessed", "Authorized", "Capture Failed", "Processed", "Declined", "Voided", "Refunded", "Skipped");
        if (!in_array($this->container['payment_status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'payment_status', must be one of #{allowed_values}.";
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
        $allowed_values = array("Affirm", "Amazon", "Amazon SC", "Cash", "Check", "COD", "Coinbase", "Credit Card", "Dwolla", "eCheck", "Google Checkout", "Money Order", "PayPal", "Purchase Order", "Quote Request", "SafetyPay", "SkyMall", "Smart Bargains", "Sofort", "Unknown", "Wire Transfer");
        if (!in_array($this->container['payment_method'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("Unprocessed", "Authorized", "Capture Failed", "Processed", "Declined", "Voided", "Refunded", "Skipped");
        if (!in_array($this->container['payment_status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets check
     * @return \ultracart\admin\v2\models\OrderPaymentCheck
     */
    public function getCheck()
    {
        return $this->container['check'];
    }

    /**
     * Sets check
     * @param \ultracart\admin\v2\models\OrderPaymentCheck $check
     * @return $this
     */
    public function setCheck($check)
    {
        $this->container['check'] = $check;

        return $this;
    }

    /**
     * Gets credit_card
     * @return \ultracart\admin\v2\models\OrderPaymentCreditCard
     */
    public function getCreditCard()
    {
        return $this->container['credit_card'];
    }

    /**
     * Sets credit_card
     * @param \ultracart\admin\v2\models\OrderPaymentCreditCard $credit_card
     * @return $this
     */
    public function setCreditCard($credit_card)
    {
        $this->container['credit_card'] = $credit_card;

        return $this;
    }

    /**
     * Gets echeck
     * @return \ultracart\admin\v2\models\OrderPaymentECheck
     */
    public function getEcheck()
    {
        return $this->container['echeck'];
    }

    /**
     * Sets echeck
     * @param \ultracart\admin\v2\models\OrderPaymentECheck $echeck
     * @return $this
     */
    public function setEcheck($echeck)
    {
        $this->container['echeck'] = $echeck;

        return $this;
    }

    /**
     * Gets hold_for_fraud_review
     * @return bool
     */
    public function getHoldForFraudReview()
    {
        return $this->container['hold_for_fraud_review'];
    }

    /**
     * Sets hold_for_fraud_review
     * @param bool $hold_for_fraud_review True if order has been held for fraud review
     * @return $this
     */
    public function setHoldForFraudReview($hold_for_fraud_review)
    {
        $this->container['hold_for_fraud_review'] = $hold_for_fraud_review;

        return $this;
    }

    /**
     * Gets payment_dts
     * @return string
     */
    public function getPaymentDts()
    {
        return $this->container['payment_dts'];
    }

    /**
     * Sets payment_dts
     * @param string $payment_dts Date/time that the payment was successfully processed
     * @return $this
     */
    public function setPaymentDts($payment_dts)
    {
        $this->container['payment_dts'] = $payment_dts;

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
        $allowed_values = array('Affirm', 'Amazon', 'Amazon SC', 'Cash', 'Check', 'COD', 'Coinbase', 'Credit Card', 'Dwolla', 'eCheck', 'Google Checkout', 'Money Order', 'PayPal', 'Purchase Order', 'Quote Request', 'SafetyPay', 'SkyMall', 'Smart Bargains', 'Sofort', 'Unknown', 'Wire Transfer');
        if (!in_array($payment_method, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'payment_method', must be one of 'Affirm', 'Amazon', 'Amazon SC', 'Cash', 'Check', 'COD', 'Coinbase', 'Credit Card', 'Dwolla', 'eCheck', 'Google Checkout', 'Money Order', 'PayPal', 'Purchase Order', 'Quote Request', 'SafetyPay', 'SkyMall', 'Smart Bargains', 'Sofort', 'Unknown', 'Wire Transfer'");
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_accounting_code
     * @return string
     */
    public function getPaymentMethodAccountingCode()
    {
        return $this->container['payment_method_accounting_code'];
    }

    /**
     * Sets payment_method_accounting_code
     * @param string $payment_method_accounting_code Payment method QuickBooks code
     * @return $this
     */
    public function setPaymentMethodAccountingCode($payment_method_accounting_code)
    {
        $this->container['payment_method_accounting_code'] = $payment_method_accounting_code;

        return $this;
    }

    /**
     * Gets payment_method_deposit_to_account
     * @return string
     */
    public function getPaymentMethodDepositToAccount()
    {
        return $this->container['payment_method_deposit_to_account'];
    }

    /**
     * Sets payment_method_deposit_to_account
     * @param string $payment_method_deposit_to_account Payment method QuickBooks deposit account
     * @return $this
     */
    public function setPaymentMethodDepositToAccount($payment_method_deposit_to_account)
    {
        $this->container['payment_method_deposit_to_account'] = $payment_method_deposit_to_account;

        return $this;
    }

    /**
     * Gets payment_status
     * @return string
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     * @param string $payment_status Payment status
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowed_values = array('Unprocessed', 'Authorized', 'Capture Failed', 'Processed', 'Declined', 'Voided', 'Refunded', 'Skipped');
        if (!in_array($payment_status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'payment_status', must be one of 'Unprocessed', 'Authorized', 'Capture Failed', 'Processed', 'Declined', 'Voided', 'Refunded', 'Skipped'");
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets purchase_order
     * @return \ultracart\admin\v2\models\OrderPaymentPurchaseOrder
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     * @param \ultracart\admin\v2\models\OrderPaymentPurchaseOrder $purchase_order
     * @return $this
     */
    public function setPurchaseOrder($purchase_order)
    {
        $this->container['purchase_order'] = $purchase_order;

        return $this;
    }

    /**
     * Gets rotating_transaction_gateway_code
     * @return string
     */
    public function getRotatingTransactionGatewayCode()
    {
        return $this->container['rotating_transaction_gateway_code'];
    }

    /**
     * Sets rotating_transaction_gateway_code
     * @param string $rotating_transaction_gateway_code Rotating transaction gateway code used to process this order
     * @return $this
     */
    public function setRotatingTransactionGatewayCode($rotating_transaction_gateway_code)
    {
        $this->container['rotating_transaction_gateway_code'] = $rotating_transaction_gateway_code;

        return $this;
    }

    /**
     * Gets surcharge
     * @return float
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     * @param float $surcharge Surcharge amount calculated from surcahrge_transaction_fee and surcharge_transaction_percentage
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

        return $this;
    }

    /**
     * Gets surcharge_accounting_code
     * @return string
     */
    public function getSurchargeAccountingCode()
    {
        return $this->container['surcharge_accounting_code'];
    }

    /**
     * Sets surcharge_accounting_code
     * @param string $surcharge_accounting_code Surcharge accounting code
     * @return $this
     */
    public function setSurchargeAccountingCode($surcharge_accounting_code)
    {
        $this->container['surcharge_accounting_code'] = $surcharge_accounting_code;

        return $this;
    }

    /**
     * Gets surcharge_transaction_fee
     * @return float
     */
    public function getSurchargeTransactionFee()
    {
        return $this->container['surcharge_transaction_fee'];
    }

    /**
     * Sets surcharge_transaction_fee
     * @param float $surcharge_transaction_fee Surcharge transaction fee
     * @return $this
     */
    public function setSurchargeTransactionFee($surcharge_transaction_fee)
    {
        $this->container['surcharge_transaction_fee'] = $surcharge_transaction_fee;

        return $this;
    }

    /**
     * Gets surcharge_transaction_percentage
     * @return float
     */
    public function getSurchargeTransactionPercentage()
    {
        return $this->container['surcharge_transaction_percentage'];
    }

    /**
     * Sets surcharge_transaction_percentage
     * @param float $surcharge_transaction_percentage Surcharge transaction percentage
     * @return $this
     */
    public function setSurchargeTransactionPercentage($surcharge_transaction_percentage)
    {
        $this->container['surcharge_transaction_percentage'] = $surcharge_transaction_percentage;

        return $this;
    }

    /**
     * Gets test_order
     * @return bool
     */
    public function getTestOrder()
    {
        return $this->container['test_order'];
    }

    /**
     * Sets test_order
     * @param bool $test_order True if this is a test order
     * @return $this
     */
    public function setTestOrder($test_order)
    {
        $this->container['test_order'] = $test_order;

        return $this;
    }

    /**
     * Gets transactions
     * @return \ultracart\admin\v2\models\OrderPaymentTransaction[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     * @param \ultracart\admin\v2\models\OrderPaymentTransaction[] $transactions Transactions associated with processing this payment
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

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

