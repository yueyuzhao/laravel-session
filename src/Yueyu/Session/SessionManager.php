<?php

namespace Yueyu\Session;

use Illuminate\Session\SessionManager as Manager;

class SessionManager extends Manager {

    /**
     * Create an instance of the "cookie" session driver.
     *
     * @return \Illuminate\Session\Store
     */
    protected function createSessionDriver()
    {
        return $this->buildSession(new SessionHandler());
    }

}
