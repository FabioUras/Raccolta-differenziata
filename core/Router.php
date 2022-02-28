<?php


namespace App\Core;




class Router

{


   public  $routes = [

       'GET' =>[],

       'POST' =>[]


   ];

   public static function load($file)

   {

       $router = new static;

       require $file;

       return $router;



   }

   public function define($routes)

   {

      $this->routes= $routes;

   }


   public function get($uri,$controller)

   {

      $this->routes['GET'][$uri]= $controller;

   }


   public function post($uri,$controller)

   {

      $this->routes['POST'][$uri]= $controller;

   }



   public function direct($uri,$requestType)

   {


         if(array_key_exists($uri,$this->routes[$requestType]))


          return $this->callAction(

            ...explode('@',$this->routes[$requestType][$uri]));


       throw new Exception('No route defined for this uri');


   }




   protected function callAction($controller,$action)

   {

          if($controller=='PagesController'){
           $controller = "App\\Controller\\{$controller}";
           $controller = new $controller;
         }

         elseif($controller=='Insert'){ 

           $controller = "App\\Model\\{$controller}";
           $controller = new $controller;
         }

       if( ! method_exists($controller,$action))

          {
            throw new Exception ("No {$controller} does not respond to the {$action}"

          );
          }

           return $controller->$action();


   }





}
