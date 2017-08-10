<?php
namespace Brespit\TestPack;

class TestPack
{

	protected $txt;

	public function __construct($txt)
	{
		$this->txt = $txt;
	}

	public function upperCase()
	{
		return strtoupper($this->txt);
	}

	public function lowerCase()
	{
		return strtolower($this->txt);
	}
}
