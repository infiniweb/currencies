<?php
namespace InfiniWeb\Currencies;

class Amount
{

	protected $value;
	protected $currency;

	public function __construct($value = 0.0, Currency $currency = null)
	{
		$this->value = $value;
		$this->currency = $currency;
	}

	public function getValue($decimal = 2)
	{
		return round($this->value, $decimal);
	}

	public function getCurrency()
	{
		return $this->currency;
	}

	public function convert(Currency $currency)
	{
		// todo - convert to another currency
		
		$amount = new Amount();

		return $amount;
	}

}
