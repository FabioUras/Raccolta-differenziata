<?php

   $router->get('','PagesController@home');
   $router->get('riepilogo-settimanale','PagesController@CalendarioSettimanale');
   $router->post('inserisci','Insert@inserisci');
