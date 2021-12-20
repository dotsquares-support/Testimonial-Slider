<?php


/**
 * Image Slider  plugin for Craft CMS 3.x
 *
 * Image Slider
 * 
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */

namespace ds\slider\models;
use ds\slider\Slider;


use Craft;
use craft\base\Model;


/**
 * Image Slider Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 
 */


class Settings extends Model
{
   // Public Properties
    // =========================================================================

  public $color = '';
    public $Section = '';
    public $Heading = '';
    public $Title = '';
    public $Description ='';
    
    public $Title1 = '';
    public $Description1 ='';

    public $Title2 = '';
    public $Description2='';

    // Returns the validation rules for attributes.
    public function rules()
    {
        return [
            [['Title'], 'required'],
            [['Title1'], 'required'],
            [['Title2'], 'required'],
            [['Description'], 'required'],
            [['Description1'], 'required'],
            [['Description2'], 'required'],
           
        ];
        
          
        
    }

    public function getsectioncolor()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Section));
    }
    
    public function getheading()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Heading));
    }
    

    public function gettitle()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Title));
    }
    

    public function getdescription()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Description));
    }
    public function gettitle1()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Title1));
    }
    

    public function getdescription1()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Description1));
    }
    public function gettitle2()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Title2));
    }
    

    public function getdescription2()
    {
        return Craft::parseEnv(trim(Slider::getInstance()->getSettings()->Description2));
    }
    
    
    
}