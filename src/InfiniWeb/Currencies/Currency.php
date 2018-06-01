<?php
namespace InfiniWeb\Currencies;

class Currency
{
	protected $isoCode;
	protected $exchangeRate;

	public function __construct($isoCode = null)
	{
		if ($isoCode === null) {
			// new
		} else {
			// todo - load from ISO code
		}
	}

	public function getIsoCode()
	{
		return $this->isoCode;
	}

	public function getExchangeRate()
	{
		return $this->exchangeRate;
	}

}
