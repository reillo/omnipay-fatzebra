<?php
/**
 * Fat Zebra REST Response
 */

namespace Omnipay\Fatzebra\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

/**
 * Fat Zebra REST Response
 */
class RestResponse extends AbstractResponse
{
    protected $statusCode;

    public function __construct(RequestInterface $request, $data, $statusCode = 200)
    {
        parent::__construct($request, $data);
        $this->statusCode = $statusCode;
    }

    public function isSuccessful()
    {
        // The Fat Zebra gateway returns errors in several possible different ways.
        if ($this->getCode() >= 400) {
            return false;
        }
        
        if (! empty($this->data['errors'])) {
            return false;
        }
        
        if (! empty($this->data['response']['successful'])) {
            return $this->data['response']['successful'];
        }
        
        return true;
    }

    public function getTransactionReference()
    {
        // This is usually correct for payments, authorizations, etc
        if (!empty($this->data['response']) && !empty($this->data['response']['id'])) {
            return $this->data['response']['id'];
        }

        return null;
    }

    public function getMessage()
    {
        if (isset($this->data['errors'])) {
            return implode(', ', $this->data['errors']);
        }

        if (isset($this->data['response']['message'])) {
            return $this->data['response']['message'];
        }
        
        return null;
    }

    public function getCode()
    {
        return $this->statusCode;
    }
}