<?php

namespace App\Model;

use App\Core\App;


class Insert

{
  public function inserisci()

  {



     App::get('database')->update('ritiro1' ,'ritiro2', [

            ':id'=>$_POST['id'],
            ':rifiuto'=>$_POST['rifiuto'],
            ':orario'=>$_POST['orario'],
            ':id1'=>$_POST['id1'],
            ':rifiuto1'=>$_POST['rifiuto1'],
            ':orario1'=>$_POST['orario1']

          ]);


      App::get('database')->reset('ritiro1','ritiro2', [

            ':id'=>$_POST['reset'],
            ':id1'=>$_POST['reset1']

          ]);



    header('Location: /riepilogo-settimanale');


    }


   public function OutputGiornaliero($result) {  //Accetta come argomento il risultato ($result) della query SELECT, trovandosi $result all'esterno della funzione questa non è in grado di leggerlo di conseguenza lo "importiamo" attraverso la funzione $compact e ne estriamo l'array con estract()


    extract($result);

    $data=daytranslate();


     switch($data){

       case 'Lunedì':

              if($result[0]->Rifiuto==''){

                echo 'Nessun ritiro impostato per oggi' . "<br>" ;

              }else{

                echo 'Oggi ritirano: ' .  $result[0]->Rifiuto . ', alle ore: ' .

                $result[0]->Orario_ritiro . '</br>' ;


                 if($result[0]->Rifiuto1==''){

            echo 'Nessun secondo ritiro impostato per oggi';

          }else{

                 echo 'Oggi ritirano: ' .  $result[0]->Rifiuto1 . ', alle ore: ' .

                 $result[0]->Orario_ritiro1;

                 }
                }



               break;

        case 'Martedì':


                 if($result[1]->Rifiuto==''){

                     echo 'Nessun ritiro impostato per oggi';

                 }else{

                  echo 'Oggi ritirano: ' .  $result[1]->Rifiuto . ', alle ore: ' .

                  $result[1]->Orario_ritiro . '</br>';


                  if($result[1]->Rifiuto1==''){

                    echo 'Nessun secondo ritiro impostato per oggi';

                  }else{

                  echo 'Oggi ritirano: ' .  $result[1]->Rifiuto1 . ', alle ore: ' .

                  $result[1]->Orario_ritiro1;

                   }

                  }

                break;

         case 'Mercoledì':


                if($result[2]->Rifiuto==''){

                    echo 'Nessun ritiro impostato per oggi';

                }else{

                 echo 'Oggi ritirano: ' .  $result[2]->Rifiuto . ', alle ore: ' .

                        $result[2]->Orario_ritiro . '</br>';


                 if($result[2]->Rifiuto1==''){

                   echo 'Nessun secondo ritiro impostato per oggi';

                 }else{

                 echo 'Oggi ritirano: ' .  $result[2]->Rifiuto1 . ', alle ore: ' .

                 $result[2]->Orario_ritiro1;

                   }

                 }



                 break;



          case 'Giovedì':

                 if($result[3]->Rifiuto==''){

                     echo 'Nessun ritiro impostato per oggi';

                 }else{

                  echo 'Oggi ritirano: ' .  $result[3]->Rifiuto . ', alle ore: ' .

                  $result[3]->Orario_ritiro . '</br>';


                  if($result[3]->Rifiuto1==''){

                    echo 'Nessun secondo ritiro impostato per oggi';

                  }else{

                         echo 'Oggi ritirano: ' .  $result[3]->Rifiuto1 . ', alle ore: ' .

                  $result[3]->Orario_ritiro1;

                     }

                   }



                  break;


           case 'Venerdì':

                  if($result[4]->Rifiuto==''){

                      echo 'Nessun ritiro impostato per oggi';

                  }else{

                   echo 'Oggi ritirano: ' .  $result[4]->Rifiuto . ', alle ore: ' .

                   $result[4]->Orario_ritiro . '</br>';


                   if($result[4]->Rifiuto1==''){

                     echo 'Nessun secondo ritiro impostato per oggi';

                   }else{

                   echo 'Oggi ritirano: ' .  $result[4]->Rifiuto1 . ', alle ore: ' .

                   $result[4]->Orario_ritiro1;

                      }

                    }

                   break;

            case 'Sabato':

                   if($result[5]->Rifiuto==''){

                       echo 'Nessun ritiro impostato per oggi';

                   }else{

                    echo 'Oggi ritirano: ' .  $result[5]->Rifiuto . ', alle ore: ' .

                    $result[5]->Orario_ritiro . '</br>';


                    if($result[5]->Rifiuto1==''){

                      echo 'Nessun secondo ritiro impostato per oggi';

                    }else{

                    echo 'Oggi ritirano: ' .  $result[5]->Rifiuto1 . ', alle ore: ' .

                    $result[5]->Orario_ritiro1;

                        }

                      }

                    break;


             case 'Domenica':

                    if($result[6]->Rifiuto==''){

                        echo 'Nessun ritiro impostato per oggi';

                    }else{

                     echo 'Oggi ritirano: ' .  $result[6]->Rifiuto . ', alle ore: ' .

                     $result[6]->Orario_ritiro . '</br>';


                     if($result[6]->Rifiuto1==''){

                       echo 'Nessun secondo ritiro impostato per oggi';

                     }else{

                     echo 'Oggi ritirano: ' .  $result[6]->Rifiuto1 . ', alle ore: ' .

                     $result[6]->Orario_ritiro1;

                       }

                     }



                     break;
           }

         }



}
