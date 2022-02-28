<?php

require '../vendor/autoload.php';

require '../core/bootstrap.php';

require '../helpers/functions.php';

use App\Core\{Router, Request};

 Router::load('../routes/routes.php')

   ->direct(Request::uri(), Request::method());
