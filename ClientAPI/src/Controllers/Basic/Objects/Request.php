<?php
namespace ClientAPI\Controllers\Basic\Objects;

/**
 * Class Request
 * @package ClientAPI\Controllers\Basic\Objects
 */
abstract class Request
{
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $login;
    /**
     * @var string
     */
    protected $password;

    /**
     * Request constructor.
     * @param string $url
     * @param string $login
     * @param string $password
     */
    public function __construct($url = '', $login = '', $password = '')
    {
        $this->url = $url;
        $this->login = $login;
        $this->password = $password;

    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



}
