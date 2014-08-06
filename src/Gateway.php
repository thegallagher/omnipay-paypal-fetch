<?php

namespace TheGallagher\Omnipay\PayPalFetch;

use Omnipay\PayPal\ExpressGateway;
use TheGallagher\Omnipay\PayPalFetch\Message\FetchExpressRequest;

/**
 * PayPal Express Class
 */
class Gateway extends ExpressGateway
{
	public function fetch(array $parameters = array())
	{
		return $this->createRequest('\TheGallagher\Omnipay\PayPalFetch\Message\FetchExpressRequest', $parameters);
	}
}
