<?php
/**
 * Created by PhpStorm.
 * User: todd
 * Date: 2/16/19
 * Time: 3:16 PM
 */

namespace App\Singleton;

class Singleton
{
    private static $instance = null;
    private $micro = null;

    private function __construct()
    {
        $this->micro = microtime();
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getMicro()
    {
        return $this->micro;
    }
}