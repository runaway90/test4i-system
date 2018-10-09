<?php
namespace ClientAPI\Controllers\Basic\Commands;
use ClientAPI\Controllers\Basic\Objects\Request;

/**
 * Interface MainRequestCommands
 * @package ClientAPI\Controllers\Basic\Commands
 */
interface MainRequestCommands
{

    /**
     * @param Request $request
     * @param string $method
     * @param null $parameters
     */
    public function sendRequest( Request $request, $method = 'GET', $parameters = null);

    /**
     * @return mixed
     */
    public function showSuccess();

    /**
     * @param $error
     * @return mixed
     */
    public function showError($error);

}
