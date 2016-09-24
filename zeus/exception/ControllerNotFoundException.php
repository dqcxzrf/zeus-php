<?php
namespace zeus\exception;

class ControllerNotFoundException extends \RuntimeException
{
	public function __construct ($message = null, $code = null, $previous = null) 
	{
		parent::__construct($message,$code,$previous);
	}
}