<?php

namespace App\View\Helper;

use Faulancer\View\AbstractViewHelper;
use Faulancer\View\ViewController;

/**
 * Class CustomViewHelper
 *
 * @package App\View\Helper
 * @author  Your Name <your.name@example.com>
 */
class CustomViewHelper extends AbstractViewHelper
{

    /**
     * Is executed if called from a view as a function/method
     * View call example:
     * - $this->customViewHelper()
     * - $this->customViewHelper()->functionExposed()
     *
     * The first argument is always the current view from where the helper is called
     *
     * @param ViewController $view
     * @return self
     */
    public function __invoke(ViewController $view)
    {
        // Instead of return this object you can implement a render
        // function to directly output the string
        // Example: return $this->render();
        return $this;
    }

    public function functionExposed()
    {
        // Do some things
    }

}