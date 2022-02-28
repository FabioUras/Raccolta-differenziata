
<div class='wrapper'>

<?php foreach($result as $rifiuto): ?>



<form class='form' method="POST" action='/inserisci'>


   <fieldlist>

      <legend><h2><?php echo $rifiuto->Giorno; ?></h2></legend>


        <input type='hidden' name='id' value=<?php echo $rifiuto->ID ?> >


        <select class="form-select" aria-label=".form-select-sm size 1 selecet example" name='rifiuto' >

        <optgroup label="Tipologia rifiuti" >

           <option selected><?php echo $rifiuto->Rifiuto;?></option>
           <option value='Carta'>Carta</option>
           <option value='Plastica'>Plastica</option>
           <option value='Organico'>Organico</option>
           <option value='Vetro'>Vetro</option>
           <option value='Metalli'>Metalli</option>
           <option value='Secco/Indifferenziata'>Secco/Indifferenziata</option>


        </optgroup>
      </select>



       <legend><h3>Orario</h3></legend>

         <input  class="btn btn-outline-dark" type='time' name='orario'
         value=<?php echo $rifiuto->Orario_ritiro; ?>>

       </br>
       </br>

         <input class="btn btn-success" type='submit' value='Invia'>

   </fieldlist>


   </br>
   </br>

     <fieldlist>

       <legend><h3>Secondo orario di ritiro</h3></legend>

       <br>
       <br>


         <input type='hidden' name='id1' value=<?php echo $rifiuto->ID1 ?>>


         <select class="form-select" aria-label="Default select example" name='rifiuto1'>

         <optgroup label="Tipologia rifiuti">

             <option selected><?php echo $rifiuto->Rifiuto1;?></option>
             <option value='Carta'>Carta</option>
             <option value='Plastica'>Plastica</option>
             <option value='Organico'>Organico</option>
             <option value='Vetro'>Vetro</option>
             <option value='Metalli'>Metalli</option>
             <option value='Secco/Indifferenziata'>Secco/Indifferenziata</option>




          </optgroup>
          </select>


      <legend><h3>Orario</h3></legend>

         <input class="btn btn-outline-dark" type='time' name='orario1'
         value=<?php echo $rifiuto->Orario_ritiro1; ?>>

       </br>
       <br>

         <input class="btn btn-success" type='submit' value='Invia'>


         <br>
         <br>

         <input  type='hidden' name='reset' value=<?= $rifiuto->ID  ?>>

         <button class="btn btn-warning"

         type='submit'  name='reset1' value=<?= $rifiuto->ID1 ?>>

         Reset</button>


      </fieldlist>


</form>



<?php endforeach; ?>

</div>
