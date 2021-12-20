<?php

/**
 * Image Slider plugin for Craft CMS 3.x
 *
 * Image Slider
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */

namespace ds\slider;

use Craft;
use craft\base\Plugin;
use ds\slider\models\Settings;
use ds\slider\services\SliderService;
use craft\web\twig\variables\CraftVariable;
use ds\slider\variables\Slidertest;
use yii\base\Event;



class Slider extends Plugin 

{
    public $hasCpSettings = true;
	public static $plugin;
    
    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
         self::$plugin = $this;
        

         parent::init();
         self::$plugin = $this;
         $this->setComponents([
             'SliderService' =>  services\SliderService::class,
         ]);
         
         // Register our variables
         Event::on(
             CraftVariable::class,
             CraftVariable::EVENT_INIT,
             function (Event $event) {
                 /** @var CraftVariable $variable */
                 $variable = $event->sender;
                 $variable->set('slider', variables\SlidertestVariable::class);
             }
         );


        Craft::info(
            Craft::t(
                'slider',
                '{name} plugin loaded',
                ['name' => $this->name]
            ),
            __METHOD__
        );
    }

    

public function registerCpRoutes()
{
    return array(
        'Slider' => ['action' => "Slider/tabOne/index"],
        'Slider/additional-settings' => ['action' => "Slider/tabTwo/index"],
        /**
         * Each 'action' relates to a controller in your plugin.
         * The names of your controller and these action must match.
         */
    );
}

protected function defineSettings()
{
    return array(
        'someSetting' => array(AttributeType::String, 'label' => 'Some Setting', 'default' => ''),
        'additionalSetting' => array(AttributeType::String, 'label' => 'Some Additional Setting', 'default' => ''),
        /*...more settings here as needed...*/
    );
}
     // Protected Methods
    // =========================================================================
        protected function createSettingsModel()
        {
            return new Settings();
        }
    
    
            // Get the settings that are being defined by template
    
        protected function settingsHtml()
        {
            return \Craft::$app->getView()->renderTemplate(
                // Plugin handle name/settings
                'slider/settings',
                [ 'settings' => $this->getSettings() ]
            );
            

            

        } 
       
        public function getSettingsUrl()
{
    return 'Slider';
    /* This must be the same as the first segment in your cpRoutes. */
}

    





}

?>
