<?php
namespace ClientAPI\Controllers\Requests\Producers;

use ClientAPI\Controllers\Requests\Producers\Commands\CreateOne;
use ClientAPI\Controllers\Basic\Operations\CreateNewProducer;
use ClientAPI\Controllers\Creds;
use ClientAPI\Controllers\Basic\Operations\SendRequest;
use ClientAPI\Controllers\Basic\Objects\Request;

/**
 * Class CreateOneProducer
 * @package ClientAPI\Controllers\Requests
 */
class CreateOneProducer extends Request implements CreateOne
{

    /**
     * @param string $login
     * @param string $password
     * @param string $producerId
     * @return SendRequest
     */
    public function createOne($login = '', $password = '', $producerId = null)
    {
        if(Creds::ENVIRONMENT == 'test') {
            $this->setTesterRequestInfo();
        }else{
                $this->setUrl(Creds::URL_CREATE_ONE);
                $this->setLogin($login);
                $this->setPassword($password);
        }

        if($producerId == null){
//            $lastId = new GetLastId(); // variant
//            $producerId = $lastId->getLastIdProducer();
            $producerId = Creds::TEST_PRODUCER['id'];
        }
        $producer = $this->setProducerInfo($producerId);

        $parameters['producer'] = $producer;

        $createOne = new SendRequest();
        $createOne->sendRequest($this, Creds::REQUEST_POST, $parameters);

        return $createOne;
    }

    /**
     *
     */
    public function setTesterRequestInfo()
    {
        $this->setUrl(Creds::URL_CREATE_ONE);
        $this->setLogin(Creds::LOGIN);
        $this->setPassword(Creds::PASSWORD);
    }

    /**
     * @param $producerId
     * @return CreateNewProducer
     */
    public function setProducerInfo($producerId)
    {
        $producer = new CreateNewProducer($producerId);
        $producer->setTestProducer();

        return $producer;
    }

}
