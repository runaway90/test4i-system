<?php
namespace ClientAPI\Controllers\Basic\Operations;

use ClientAPI\Controllers\Basic\Commands\MainRequestCommands;
use ClientAPI\Controllers\Basic\Objects\Request;
use ClientAPI\Controllers\Creds;

/**
 * Class SendRequest
 * @package ClientAPI\Controllers\Basic\Operations
 */
class SendRequest implements MainRequestCommands
{

    /**
     * @param Request $request
     * @param string $method
     * @param null $parameters
     * @return mixed|string
     */
    public function sendRequest(Request $request , $method = 'GET', $parameters = null)
    {
        if(Creds::YOU_CAN_SEND_REQUEST_NOW == true) {

            $createdCurl = curl_init();
            curl_setopt($createdCurl, CURLOPT_URL, $request->getUrl());
            curl_setopt($createdCurl, CURLOPT_CUSTOMREQUEST, $method);

            $login = $request->getLogin();
            $password = $request->getPassword();
            curl_setopt($createdCurl, CURLOPT_USERPWD, "$login".":"."$password");

//            curl_setopt($createdCurl, CURLOPT_LOGIN_OPTIONS, $request->getLogin());
//            curl_setopt($createdCurl, CURLOPT_PASSWORD, $request->getPassword());

            if ($method == Creds::REQUEST_POST) {

                $rebuild['producer'] = [
                    'id' => $parameters['producer']->id,
                    'name' => $parameters['producer']->name,
                    'site_url' => $parameters['producer']->siteUrl,
                    'logo_filename' => $parameters['producer']->logoFilename,
                    'ordering' => $parameters['producer']->ordering,
                    'source_id' => $parameters['producer']->sourceId,
                ];
                curl_setopt($createdCurl, CURLOPT_POSTFIELDS, json_encode($rebuild));
            }

            $result = curl_exec($createdCurl);
            return $result;
        }else{
            return 'You cann`t send request now! Please contact with support!';
        }
    }

    /**
     * @return string
     */
    public function showSuccess()
    {
        return 'Congratulate, dude! You are lucky man and have the successfull response';
    }

    /**
     * @param $error
     * @return string
     */
    public function showError($error)
    {
        return "Sorry, dude. But You have error response:'.$error.'";
    }

}
