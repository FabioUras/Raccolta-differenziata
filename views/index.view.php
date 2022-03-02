<?php require '../partials/head.php'; ?>

<nav>
<a href="riepilogo-settimanale">Imposta calendario</a>
</nav>



<h1>Ritiro odierno</h1>

<div class='home'>

<?php

use App\Model\Insert;

$outputgiornaliero= new Insert;
$outputgiornaliero->OutputGiornaliero(compact('result')

    );

   ?>

</div>


<?php require '../partials/footer.php' ?>
