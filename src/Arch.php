<?php

namespace Thunderwide\Arch;

use ReflectionClass;
use Thunderwide\Arch\Contracts\ArchContract;

class Arch implements ArchContract
{
    protected static $instance = null;

    protected $resolves = [];

    /**
     * Get instance of Arch statically.
     *
     * @return null|Arch
     */
    public static function getInstance()
    {
        if (! is_null(self::$instance)) {
            return self::$instance;
        }

        self::$instance = new self;

        return self::$instance;
    }

    public static function app($concrete, $contract)
    {
        $instance = self::getInstance();

        return $instance::make($contract, $concrete);
    }

    public static function make($contract, $concrete)
    {
        $instance = self::getInstance();

        return $instance->resolve($contract, $concrete);
    }

    protected function resolve($contract, $concrete)
    {
        $classes = get_declared_classes();
        $implementsContract = [];

        foreach($classes as $class) {

            $reflect = new ReflectionClass($class);

            if ($reflect->implementsInterface($contract)) {
                $implementsContract[] = $class;
            }

        }

        return $classes;
    }

    protected function bind($concrete)
    {

    }

}