<?php
class Carta
{
	protected $number;
	protected $cvc;
	protected $expiry;

	public function __construct($number, $cvc, $expiry)
	{
		$this->number = $number;
		$this->cvc = $cvc;
		$this->expiry = $expiry;
	}
}