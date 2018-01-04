<?php

namespace App\Service;

/**
 * Class RegisterService
 *
 * @package App\Service
 * @author  Your Name <your.name@example.com>
 */
class RegisterService
{

    /** @var null */
    protected $dep1;

    /** @var null */
    protected $dep2;

    /**
     * RegisterService constructor.
     *
     * @param $dep1
     * @param $dep2
     */
    public function __construct(Dependency1 $dep1, Dependency2 $dep2)
    {
        $this->dep1 = $dep1;
        $this->dep2 = $dep2;
    }

    // Do some registration related things

}