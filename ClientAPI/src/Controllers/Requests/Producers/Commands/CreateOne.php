<?php
namespace ClientAPI\Controllers\Requests\Producers\Commands;

/**
 * Interface CreateOne
 * @package ClientAPI\Controllers\Requests\Producers\Commands
 */
interface CreateOne
{
    /**
     * @return mixed
     */
    public function createOne();

    /**
     * @return mixed
     */
    public function setTesterRequestInfo();

}