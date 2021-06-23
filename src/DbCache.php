<?php
/**
 * Created by PhpStorm.
 * User: CDD
 * Date: 2021/6/23
 * Time: 11:20
 */

namespace Hfcfb\Chengdd;


class DbCache
{
    private $host;
    private $port;
    private $username;
    private $password;
    private $database;

    /**
     * DbCache constructor.
     * @param $host
     * @param $port
     * @param $username
     * @param $password
     * @param $database
     */
    public function __construct($host, $port, $username, $password, $database)
    {
        if ($host) $this->host = $host;
        if ($port) $this->port = $port;
        if ($username) $this->username = $username;
        if ($password) $this->password = $password;
        if ($database) $this->database = $database;
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host): void
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port): void
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @param mixed $database
     */
    public function setDatabase($database): void
    {
        $this->database = $database;
    }


}