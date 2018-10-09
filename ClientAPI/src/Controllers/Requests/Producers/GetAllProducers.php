<?php
namespace ClientAPI\Controllers\Requests\Producers;

use ClientAPI\Controllers\Requests\Producers\Commands\GetAll;
use ClientAPI\Controllers\Basic\Objects\Request;
use ClientAPI\Controllers\Basic\Operations\SendRequest;
use ClientAPI\Controllers\Creds;

/**
 * Class GetAllProducers
 * @package ClientAPI\Controllers\Requests\Producers
 */
class GetAllProducers extends Request implements GetAll
{

    /**
     * @param string $login
     * @param string $password
     * @return SendRequest
     */
    public function getAllProducers($login = '', $password = '')
    {
        if(Creds::ENVIRONMENT == 'test'){
            $this->setTesterRequestInfo();
        }else{
            $this->setUrl(Creds::URL_CREATE_ONE);
            $this->setLogin($login);
            $this->setPassword($password);
        }

        $getAll = new SendRequest();
        $getAll->sendRequest($this);

        return $getAll;
    }

    public function setTesterRequestInfo()
    {
        $this->setUrl(Creds::URL_CREATE_ONE);
        $this->setLogin(Creds::LOGIN);
        $this->setPassword(Creds::PASSWORD);
    }

}
