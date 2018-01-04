<?php

namespace App\Service\Factory;

use App\Service\RegisterService;
use Faulancer\ServiceLocator\FactoryInterface;
use Faulancer\ServiceLocator\ServiceLocatorInterface;

/**
 * Class RegisterServiceFactory
 *
 * @package App\Service\Factory
 * @author  Your Name <your.name@example.com>
 */
class RegisterServiceFactory implements FactoryInterface
{

    /**
     * Create register service
     *
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return RegisterService
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        // Classes aren't existend; only for demonstration purposes
        $dependency1 = $serviceLocator->get(Dependency1::class);
        $dependency2 = $serviceLocator->get(Dependency2::class);

        return new RegisterService($dependency1, $dependency2);
    }

}