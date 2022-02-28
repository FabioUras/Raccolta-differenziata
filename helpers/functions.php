<?php

function datatranslate(){

$timestamp = strtotime("now");

$data= date('l' , $timestamp);


switch($data){

   case 'Monday':

       return 'Lunedì';

   break;


   case 'Tuesday':

        return 'Martedì';

   break;


   case 'Wednesday':

         return 'Mercoledì';

   break;


   case 'Thursday':

         return 'Giovedì';

   break;


   case 'Friday':

         return  'Venerdì';

     break;


   case 'Saturday':

         return   'Sabato';

   break;


   case 'Sunday':

         return 'Domenica';

   break;
}

}


function view($name, $data=[])

{

    extract($data);

    return require "../views/{$name}.view.php";
}
