<?php
/**
 * PayU International Purchase Request
 */
namespace Omnipay\PayUIntl\Message;

use Omnipay\Common\Message\AbstractRequest;
use Omnipay\PayUIntl\Gateway;
use Omnipay\PayUIntl\Omnipay\Common\Address;
use Omnipay\PayUIntl\Omnipay\Common\Item;

/**
 * Class PurchaseRequest
 * @package Omnipay\PayUIntl\Message
 *
 * @author Valentin Sandu <valentin.sandu@innobyte.com>
 */
class PurchaseRequest extends AbstractRequest
{
    /**
     * Get order id
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->getParameter('orderid');
    }

    /**
     * Set order id
     *
     * @param int $value
     * @return AbstractRequest
     */
    public function setOrderId($value)
    {
        return $this->setParameter('orderid', $value);
    }

    /**
     * Get order date
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->getParameter('orderDate');
    }

    /**
     * Set order date
     *
     * @param string $value
     * @return AbstractRequest
     */
    public function setOrderDate($value)
    {
        return $this->setParameter('orderDate', $value);
    }

    /**
     * Get merchant id
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    /**
     * Set merchant id
     *
     * @param string $value
     * @return string
     */
    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    /**
     * Get secret key
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->getParameter('secretKey');
    }

    /**
     * Set secret key
     *
     * @param string $value
     * @return mixed
     */
    public function setSecretKey($value)
    {
        return $this->setParameter('secretKey', $value);
    }

    /**
     * Get live url
     *
     * @return string
     */
    public function getLiveUrl()
    {
        return $this->getParameter('liveUrl');
    }

    /**
     * Set live url
     *
     * @param string $value
     * @return string
     */
    public function setLiveUrl($value)
    {
        return $this->setParameter('liveUrl', $value);
    }

    /**
     * Get sandbox url
     *
     * @return string
     */
    public function getSandboxUrl()
    {
        return $this->getParameter('sandboxUrl');
    }

    /**
     * Set sandbox url
     *
     * @param string $value
     * @return string
     */
    public function setSandboxUrl($value)
    {
        return $this->setParameter('sandboxUrl', $value);
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->getParameter('country');
    }

    /**
     * Set country
     *
     * @param string $value
     * @return $this
     */
    public function setCountry($value)
    {
        return $this->setParameter('country', $value);
    }

    /**
     * Get billing address
     *
     * @return object
     */
    public function getBillingAddress()
    {
        return $this->getParameter('billing_address');
    }

    /**
     * Set billing address
     *
     * @param object $value
     * @return $this
     */
    public function setBillingAddress($value)
    {
        return $this->setParameter('billing_address', $value);
    }

    /**
     * Get shipping address
     *
     * @return Address
     */
    public function getShippingAddress()
    {
        return $this->getParameter('shipping_address');
    }

    /**
     * Set shipping address
     *
     * @param Address $value
     * @return $this
     */
    public function setShippingAddress($value)
    {
        return $this->setParameter('shipping_address', $value);
    }

    /**
     * Get shipping amount
     *
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->getParameter('shipping_amount');
    }

    /**
     * Set shipping amount
     *
     * @param float $value
     * @return $this
     */
    public function setShippingAmount($value)
    {
        return $this->setParameter('shipping_amount', $value);
    }

    /**
     * Get discount amount
     *
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->getParameter('discount_amount');
    }

    /**
     * Set discount amount
     *
     * @param float $value
     * @return $this
     */
    public function setDiscountAmount($value)
    {
        return $this->setParameter('discount_amount', $value);
    }

    /**
     * Get auto mode
     *
     * @return mixed
     */
    public function getAutoMode()
    {
        return $this->getParameter('autoMode');
    }

    /**
     * Set auto mode
     *  - redirect customers straight to the card details page (skipping the billing/delivery screens)
     *
     * @param bool $value
     * @return $this
     */
    public function setAutoMode($value)
    {
        return $this->setParameter('autoMode', $value);
    }

    /**
     * Get timeout
     *
     * @return string
     */
    public function getTimeout()
    {
        return $this->getParameter('timeout');
    }

    /**
     * Set timeout
     *
     * @param string $value
     * @return $this
     */
    public function setTimeout($value)
    {
        return $this->setParameter('timeout', $value);
    }

    /**
     * Get timeout url
     *
     * @return string
     */
    public function getTimeoutUrl()
    {
        return $this->getParameter('timeoutUrl');
    }

    /**
     * Set timeout url
     *
     * @param string $value
     * @return $this
     */
    public function setTimeoutUrl($value)
    {
        return $this->setParameter('timeoutUrl', $value);
    }

    /**
     * Get the installment count
     *
     * @return string
     */
    public function getInstallmentCount()
    {
        return $this->getParameter('installmentCount');
    }

    /**
     * Sets the request installment count
     *
     * @param string $value
     * @return $this
     */
    public function setInstallmentCount($value)
    {
        return $this->setParameter('installmentCount', $value);
    }

    /**
     * Get the request success URL
     *
     * @return string
     */
    public function getSuccessUrl()
    {
        return $this->getParameter('successUrl');
    }

    /**
     * Sets the request success URL
     *
     * @param string $value
     * @return $this
     */
    public function setSuccessUrl($value)
    {
        return $this->setParameter('successUrl', $value);
    }

    /**
     * Get gateway url
     *
     * @return string
     */
    public function getGatewayUrl()
    {
        return $this->getTestMode() ? $this->getSandboxUrl() : $this->getLiveUrl();
    }

    /**
     * Retrieve data to send to PayU.
     */
    public function getData()
    {
        $billingAddress = $this->getBillingAddress();
        $shippingAddress = $this->getShippingAddress();

        $data['MERCHANT'] = $this->getMerchantId();
        $data['ORDER_REF'] = $this->getOrderId();
        $data['ORDER_DATE'] = gmdate('Y-m-d H:i:s');

        $items = $this->getItems();
        if (!empty($items)) {
            foreach ($items as $key => $item) {
                $data["ORDER_PNAME[$key]"]      = $item->getName();
                $data["ORDER_PCODE[$key]"]      = $item->getSku();
                $data["ORDER_PINFO[$key]"]      = $item->getDescription();
                $data["ORDER_PRICE[$key]"]      = sprintf('%.2F', $item->getPrice());
                $data["ORDER_QTY[$key]"]        = intval($item->getQuantity());
                $data["ORDER_VAT[$key]"]        = sprintf('%.2F', $item->getTaxPercent());
                $data["ORDER_PRICE_TYPE[$key]"] = 'GROSS';
            }
        }

        $data['BILL_FNAME'] = $billingAddress->getFirstName();
        $data['BILL_LNAME'] = $billingAddress->getLastName();
        $data['BILL_EMAIL'] = $billingAddress->getEmail();
        if (mb_strlen($billingAddress->getCompany())) {
            $data['BILL_COMPANY'] = $billingAddress->getCompany();
        }

        $data['BILL_PHONE']         = mb_strlen($billingAddress->getPhone()) ? $billingAddress->getPhone() : '-';
        $data['BILL_ADDRESS']       = $billingAddress->getAddress();
        $data['BILL_ZIPCODE']       = $billingAddress->getZipCode();
        $data['BILL_STATE']         = $billingAddress->getState();
        $data['BILL_CITY']          = $billingAddress->getCity();
        $data['BILL_COUNTRYCODE']   = $billingAddress->getCountryCode();
        $data['DELIVERY_FNAME']     = $shippingAddress->getFirstName();
        $data['DELIVERY_LNAME']     = $shippingAddress->getLastName();
        $data['DELIVERY_EMAIL']     = $shippingAddress->getEmail();
        if (mb_strlen($shippingAddress->getCompany())) {
            $data['DELIVERY_COMPANY'] = $shippingAddress->getCompany();
        }
        $data['DELIVERY_PHONE']         = mb_strlen($shippingAddress->getPhone()) ? $shippingAddress->getPhone() : '-';
        $data['DELIVERY_ADDRESS']       = $shippingAddress->getAddress();
        $data['DELIVERY_ZIPCODE']       = $shippingAddress->getZipCode();
        $data['DELIVERY_STATE']         = $shippingAddress->getState();
        $data['DELIVERY_CITY']          = $shippingAddress->getCity();
        $data['DELIVERY_COUNTRYCODE']   = $shippingAddress->getCountryCode();

        $card = $this->getCard();
        $data['SELECTED_INSTALLMENTS_NUMBER']   = $this->getInstallmentCount();
        $data['CC_NUMBER']                      = $card->getNumber();
        $data['EXP_MONTH']                      = $card->getExpiryMonth();
        $data['EXP_YEAR']                       = $card->getExpiryYear();
        $data['CC_CVV']                         = $card->getCvv();
        $data['CC_OWNER']                       = $card->getName();

        /* additional info */
        $data['BACK_REF'] = str_replace('{{orderid}}', $this->getOrderId(), $this->getSuccessUrl());
        $data['CLIENT_IP'] = $this->getClientIp();

        $data['ORDER_SHIPPING'] = sprintf('%.2F', $this->getShippingAmount());
        $data['PRICES_CURRENCY'] = $this->getCurrency();

        $data['DISCOUNT'] = sprintf('%.2F', abs($this->getDiscountAmount()));
        $data['TESTORDER'] = $this->getTestMode() ? 'TRUE' : 'FALSE';

        $data['PAY_METHOD'] = Gateway::PAYU_METHOD_CCVISAMC;
        $data['LANGUAGE'] = $this->httpRequest->getLocale();

        $data = $this->utf8izeArray($data);

        $data['ORDER_HASH'] = $this->hmacMd5($data);

        return $data;
    }

    /**
     * Send data
     *
     * @param mixed $data
     * @return PurchaseResponse
     */
    public function sendData($data)
    {
        $httpResponse = $this->httpClient->post($this->getGatewayUrl(), null, $data)->send();
        $xml = simplexml_load_string($httpResponse->getBody()->__toString());
        return $this->response = new PurchaseResponse($this, $xml, $this->getGatewayUrl());
    }

    /**
     * Encodes an entire array recursevly in UTF-8.
     *
     * @param   array $arrToEncode The array to encode.
     * @return  array
     */
    public function utf8izeArray(array $arrToEncode)
    {
        array_walk_recursive($arrToEncode, array($this, 'utf8izeArrayRecFunction'));
        return $arrToEncode;
    }

    /**
     * Instead of using closure for 5.2 compatibility.
     *
     * @param mixed $item Value in the array to apply utf8izeArray() upon it.
     */
    protected function utf8izeArrayRecFunction(&$item)
    {
        if (!is_array($item)) {
            $item = $this->utf8izeString($item);
        }
    }

    /**
     * Encodes a string in UTF-8.
     *
     * @param   string $strValue The string to encode.
     * @return  string            The string UTF-8 encoded.
     */
    public function utf8izeString($strValue)
    {
        $returnValue = strval($strValue);
        if (!mb_check_encoding($returnValue, 'UTF-8')) {
            $returnValue = mb_convert_encoding($returnValue, 'UTF-8', mb_detect_encoding($returnValue));
        }

        return $returnValue;
    }

    /**
     * Generate order hash
     *
     * @param array $data
     * @return string
     */
    protected function generateHash(array $data)
    {
        return $this->hmacMd5($data);
    }

    /**
     * Apply HMAC_MD5.
     *
     * @param   array $arrData Array with data, can contain subarrays.
     * @return string HMAC_MD5 signature.
     */
    public function hmacMd5(array $arrData)
    {
        ksort($arrData);
        $secretKey = $this->getSecretKey();
        $referenceObj = new \stdClass;
        $referenceObj->strData = '';

        array_walk_recursive($arrData, array($this, 'hmacMd5RecFunction'), $referenceObj);

        if (version_compare(phpversion(), '5.1.2', '>=') === true) {
            return hash_hmac('md5', $referenceObj->strData, $secretKey);
        }

        return bin2hex(mhash(MHASH_MD5, $referenceObj->strData, $secretKey));
    }

    /**
     * Instead of using closure for 5.2 compatibility.
     *
     * @param mixed $item Value in the array to apply utf8izeArray() upon it.
     * @param mixed $key Value 's key.
     * @param \stdClass $obj Object where string to hash will be stored.
     */
    protected function hmacMd5RecFunction($item, $key, \stdClass $obj)
    {
        if (!is_array($item)) {
            $obj->strData .= strlen($item); //mb_strlen(strval($item), 'UTF-8');
            $obj->strData .= strval($item);
        }
    }
}