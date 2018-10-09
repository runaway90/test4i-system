<?php
namespace ClientAPI\Controllers\Basic\Objects;

/**
 * Class Producer
 * @package ClientAPI\Controllers\Basic\Objects
 */
abstract class Producer
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $siteUrl;

    /**
     * @var string
     */
    public $logoFilename;

    /**
     * @var integer
     */
    public $ordering;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * Producer constructor.
     * @param $id
     * @param string $name
     * @param string $siteUrl
     * @param string $logoFilename
     * @param integer $ordering
     * @param string $sourceId
     */
    public function __construct($id, $name = 'e', $siteUrl = 'e', $logoFilename = 'e', $ordering= 2, $sourceId = 'e')
    {
        $this->id = $id;
        $this->name = $name;
        $this->siteUrl = $siteUrl;
        $this->logoFilename = $logoFilename;
        $this->ordering = $ordering;
        $this->sourceId = $sourceId;
    }

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->siteUrl;
    }

    /**
     * @param string $siteUrl
     */
    public function setSiteUrl($siteUrl)
    {
        $this->siteUrl = $siteUrl;
    }

    /**
     * @return string
     */
    public function getLogoFilename()
    {
        return $this->logoFilename;
    }

    /**
     * @param string $logoFilename
     */
    public function setLogoFilename($logoFilename)
    {
        $this->logoFilename = $logoFilename;
    }

    /**
     * @return string
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * @param string $ordering
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    }

    /**
     * @return string
     */
    public function getSourceId()
    {
        return $this->sourceId;
    }

    /**
     * @param string $sourceId
     */
    public function setSourceId($sourceId)
    {
        $this->sourceId = $sourceId;
    }



}
