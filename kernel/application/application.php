<?php
namespace iMVC\kernel\application;

require_once (dirname(__FILE__).'/../../baseiMVC.php');


/**
 * @author dariush
 * @version 1.0
 * @created 04-Sep-2013 15:50:20
 */
class application extends \iMVC\baseiMVC
{

	function __construct()
	{
	}

	function __destruct()
	{
	}
    
        public function Initiate()
        {
            ;
        }
        public function Dispose()
        {
            parent::Dispose();
        }


	/**
	 * Run the application
	 */
	public function Run()
	{
	}

	/**
	 * Shutdowns application
	 */
	public function Shutdown()
	{
	}

	/**
	 * Startup and making application's ready with passed configuration file
	 * 
	 * @param config_file_address
	 */
	public function Startup(string $config_file_address = NULL)
	{
	}

}
?>