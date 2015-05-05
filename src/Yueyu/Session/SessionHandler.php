<?php

namespace Yueyu\Session;

class SessionHandler implements \SessionHandlerInterface
{

    public function __construct()
    {
        session_start();
    }

    /**
     * {@inheritdoc}
     */
    public function open($savePath, $sessionName)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function read($sessionId)
    {
        return array_get( $_SESSION, '__data__' );
    }

    /**
     * {@inheritdoc}
     */
    public function write($sessionId, $data)
    {
        $_SESSION['__data__'] = $data;
    }

    /**
     * {@inheritdoc}
     */
    public function destroy($sessionId)
    {
        // throw new \Exception("Error Processing Request", 1);
        // session_destroy();
    }

    /**
     * {@inheritdoc}
     */
    public function gc($maxlifetime)
    {
        return true;
    }
}
