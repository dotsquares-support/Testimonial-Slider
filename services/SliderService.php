<?php
/**
 * Social Share plugin for Craft CMS 3.x
 *
 * Social Share
 * 
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\slider\services;
use Craft;
use craft\base\Component;
use ds\slider\Slider;
use ds\slider\resources\SliderAsset;



/**
 * Slider Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Dotsquares
 */


class SliderService extends  Component

{
   
    // Public Methods
    // =========================================================================

    public function slider(){
      $Section_color ="";
      $view = Craft::$app->getView();
      $view->registerAssetBundle(SliderAsset::class);
      
      $settings = Slider::getInstance()->getSettings();
      $Heading =    $settings->getHeading();
      $Section =    $settings->getsectioncolor();
     
      $title =    $settings->gettitle();
    
      $description =    $settings->getdescription();
      $title1 =    $settings->gettitle1();
      $description1 =    $settings->getdescription1();
      $title2 =    $settings->gettitle2();
      $description2 =    $settings->getdescription2();
      if(empty ($Heading ))
  {

    $Heading = "Testimonials";
  }
      if(empty($Section))
      {
      //  echo "hi";
     
  $color =  "bg-white";
} 
     elseif ($Section == "white"|| $Section== "black")
      {
      //  echo "yes";
        $color = 'bg-'. $Section ;
      }

      else{   
         $color = 'bg-'.$Section.'-500' ;
      

      }
    
      echo"  <script src='https://cdn.tailwindcss.com'></script>
      <script defer src='https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js'></script>



      ";
      
echo "<div class='antialiased py-10 sans-serif text-gray-600 w-full $color'>

<div class='my-10 md:my-24 container px-0 mx-auto flex flex-col md:flex-row shadow overflow-hidden items-initial' x-data='{ testimonialActive: 2 }' x-cloak>
  <div class='relative w-full py-2 md:py-24 bg-green-300 md:w-1/2 flex flex-col item-center justify-center !mb-0'>

    <div class='absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24'></div>

    <div class='relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-white font-semibold leading-tight tracking-tight mb-0 z-20'>
      <span class='md:block'>  $Heading </span>
      
    </div>

    <div class='absolute right-0 bottom-0 mr-4 mb-4 hidden md:block'>
      <button class='rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10' x-on:click='testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1'>
        &#8592;
      </button><button class='rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10' x-on:click='testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1'>
        &#8594;
      </button>
    </div>
  </div>

  <div class='w-full md:w-1/2 !mb-0'>
    <div class='flex flex-col relative f-full pb-16'>

      <div class='absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12'>
        <svg xmlns='http://www.w3.org/2000/svg' class='text-green-200 fill-current w-12 h-12 md:w-16 md:h-16' viewBox='0 0 24 24'>
          <path d='M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z' /></svg>
      </div>

      <div class='relative z-10 w-full'>
        <div x-show.immediate='testimonialActive === 1'>
          <p class='text-gray-600 serif font-normal  px-6 py-6 md:px-16 md:py-10 text-lg md:text-xl indent-14' x-show.transition='testimonialActive == 1'>
          $description
          </p>
        </div>

        <div x-show.immediate='testimonialActive === 2'>
          <p class='text-gray-600 serif font-normal  px-6 py-6 md:px-16 md:py-10 text-lg md:text-xl indent-14' x-show.transition='testimonialActive == 2'>
          $description1

          </p>
        </div>

        <div x-show.immediate='testimonialActive === 3'>
          <p class='text-gray-600 serif font-normal  px-6 py-6 md:px-16 md:py-10 text-lg md:text-xl indent-14' x-show.transition='testimonialActive == 3'>
          $description2

          </p>
        </div>
      </div>

      <div class='flex px-6 md:px-16 pt-0 pb-6 md:pb-6 w-full'>
        <div class='text-center' x-show='testimonialActive == 1'>
          <h2 class='text-sm md:text-base font-bold text-gray-700 leading-tight'>  $title 
          </h2>
        </div>

        <div class='text-center' x-show='testimonialActive == 2'>
          <h2 class='text-sm md:text-base font-bold text-gray-700 leading-tight'> $title1 </h2>
        </div>

        <div class='text-center' x-show='testimonialActive == 3'>
          <h2 class='text-sm md:text-base font-bold text-gray-700 leading-tight'> $title2 </h2>
        </div>
      </div>

      <div class='flex my-4 justify-center items-center absolute bottom-0 left-0 w-full'>
       
        <button @click.prevent='testimonialActive = 1' class='text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-3 w-3 inline-block bg-green-600 rounded-full mx-2' :class='{'h-3 w-3 opacity-25 bg-green-300 text-gray-600': testimonialActive != 1, 'h-4 w-4 opacity-100 bg-green-600 text-white': testimonialActive == 1 }'> </button>
        <button @click.prevent='testimonialActive = 2' class='text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-3 w-3 inline-block bg-green-600 rounded-full mx-2' :class='{'h-3 w-3 opacity-25 bg-green-300 text-gray-600': testimonialActive != 2, 'h-4 w-4 opacity-100 bg-green-600 text-white': testimonialActive == 2 }'> </button>
        <button @click.prevent='testimonialActive = 3' class='text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-3 w-3 inline-block bg-green-600 rounded-full mx-2' :class='{'h-3 w-3 opacity-25 bg-green-300 text-gray-600': testimonialActive != 3, 'h-4 w-4 opacity-100 bg-green-600 text-white': testimonialActive == 3 }'> </button>
      </div>

      
    </div>
  </div>
</div>

</div>";

      
}

}
     

