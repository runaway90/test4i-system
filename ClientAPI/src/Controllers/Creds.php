<?php
namespace ClientAPI\Controllers;

abstract class Creds
{
    const LOGIN = 'rest'; // test API login
    const PASSWORD = 'vKTUeyrt1!'; // test API password

    //using methods
    const REQUEST_POST = 'POST';
    const REQUEST_GET = 'GET';

    //API urls fot test ENVIRONMENT
    const URL_CREATE_ONE = 'http://recruitment.ciatm.cloud.mns.pl/rest_api/shop_api/v1/producers';
    const URL_GET_ALL = 'http://recruitment.ciatm.cloud.mns.pl/rest_api/shop_api/v1/producers';
    const URL_STATUS = 'http://recruitment.ciatm.cloud.mns.pl/rest_api/shop_api/v1/status';

    // information about tester producer
    const TEST_PRODUCER = [
        'id' => 0,
        'name' => 'Alfa Romeo',
        'site_url' => 'www.alfa.eu',
        'logo_filename' => 'alfa.jpeg',
        'ordering' => 0,
    ];

    // if not test - You need provide LOGIN and PASSWORD for sending API request
    const ENVIRONMENT = 'test'; // 'prod'

    //in this place You can OFF process of sending requests
    const YOU_CAN_SEND_REQUEST_NOW = true; // 'false'

}
