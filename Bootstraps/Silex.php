<?php

namespace PHPPM\Bootstraps;

use PHPPM\Bootstraps\BootstrapInterface;
use Silex\Application;

class Silex implements BootstrapInterface, ApplicationEnvironmentAwareInterface
{
    /**
     * @var string
     */
    private $appEnv;

    /**
     * @var bool
     */
    private $debug;

    /**
     * Instantiate the bootstrap, storing the $appenv
     *
     * @param $appenv
     * @param $debug
     */
    public function initialize($appenv, $debug)
    {
        $this->appenv = $appenv;
        $this->debug = $debug;
    }

    /**
     * @return Application
     */
    public function getApplication()
    {
        require './vendor/autoload.php';

        $app = new Application($this->appenv);

        return $app;
    }

    /**
     * @return string
     */
    public function getStaticDirectory()
    {
        return './web';
    }

}
