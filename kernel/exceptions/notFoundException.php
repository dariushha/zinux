<?php
namespace iMVC\kernel\exceptions;

require_once ('appException.php');


/**
 * @author dariush
 * @version 1.0
 * @created 04-Sep-2013 15:50:23
 */
class notFoundException extends appException
{

	/**
	 * 
	 * @param message
	 * @param code
	 * @param previous
	 */
	public function __construct($message = null, $code = null, $previous = null)
	{
            parent::__construct(isset($message) && strlen($message)?$message:"Page <b>".$_SERVER['REQUEST_URI']."</b> not found.", $code, $previous);
            $this->SendErrorCode(404);
	}

}
?>