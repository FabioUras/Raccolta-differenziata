<?php

namespace App\Controller ;

use App\Core\App;


  class PagesController

  {

        public function home()

         {

             $result= App::get('database')->selectAll('ritiro1' , 'ritiro2');

             return view('index' , ['result' => $result]);

          }



        public function CalendarioSettimanale()

         {

             $result= App::get('database')->selectAll('ritiro1' , 'ritiro2');

             return view('calendario-settimanale', ['result'=>$result]);

          }


   }
