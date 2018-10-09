<?php
namespace ClientAPI\Controllers\Basic\Operations;

use ClientAPI\Controllers\Basic\Objects\Producer;
use ClientAPI\Controllers\Creds;

/**
 * Class CreateNewProducer
 * @package ClientAPI\Controllers\Basic\Operations
 */
class CreateNewProducer extends Producer
{
    /**
     * @return $this
     */
    public function setTestProducer()
    {
        $this->setId(Creds::TEST_PRODUCER['id']);
        $this->setName(Creds::TEST_PRODUCER['name']);
        $this->setSiteUrl(Creds::TEST_PRODUCER['site_url']);
        $this->setLogoFilename(Creds::TEST_PRODUCER['logo_filename']);
        $this->setSourceId(date('h:i:s A')); // unique ID, it`s mb time =)
        $this->setOrdering(Creds::TEST_PRODUCER['ordering']);

        return $this;
    }

}
