<?php

/**
 * Slider plugin for Craft CMS 3.x
 *
 * Testimonial Slider
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\slider\variables;

use ds\slider\Slider;


use Craft;


class SlidertestVariable

    // Public Methods
    // =========================================================================
     /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.slider.getslides() }}
     *  */
{
    public function getslides()
    {
        return Slider::getInstance()->SliderService->slider();
    }

}
