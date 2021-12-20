<?php 
/**
 * Social Share 
 *
 * AssetBundle represents a collection of asset files, such as CSS, JS, images.
 *
 */

namespace ds\slider\resources;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;



class SliderAsset extends AssetBundle
{
    
    // Public Methods
    // =========================================================================

    /**
     * Initializes the bundle.
     */

    public function init()
    {
     
        // define the path that your publishable resources live
        $this->sourcePath = '@ds/slider/resources/css';

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS files that should be registered with the page

       
        $this->js = [
            'owl.carousel.js',
        ];

        $this->css = [
            'custom.css',
        ];

        parent::init();
    }
}
?>