<?php

namespace TheGallagher\Omnipay\PayPalFetch;

use Omnipay\PayPal\ExpressGateway;
use Omnipay\PayPal\Message\ExpressAuthorizeRequest;
use Omnipay\PayPal\Message\ExpressCompleteAuthorizeRequest;
use Omnipay\PayPal\Message\ExpressCompletePurchaseRequest;

/**
 * PayPal Express Class
 */
class FetchExpressGateway extends ExpressGateway
{
	public function fetch(array $parameters = array())
	{
		return $this->createRequest('\TheGallagher\Omnipay\PayPalFetch\Message\ExpressFetchRequest', $parameters);
	}
}
