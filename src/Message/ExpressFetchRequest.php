<?php

namespace TheGallagher\Omnipay\PayPalFetch\Message;

use Omnipay\PayPal\Message\AbstractRequest;

/**
 * PayPal Fetch Transaction Request
 */
class ExpressFetchRequest extends AbstractRequest
{
    public function getData()
    {
        $data = $this->getBaseData('GetExpressCheckoutDetails');

		$data['TOKEN'] = $this->httpRequest->query->get('token');
		$data['PAYERID'] = $this->httpRequest->query->get('PayerID');

        return $data;
    }
}
