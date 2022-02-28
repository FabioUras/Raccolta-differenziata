<?php


  class Querybuilder

  {

     protected $pdo;

     public function __construct($pdo)

     {

      $this->pdo= $pdo;

     }


     public function selectAll($table,$table1)

     {

        $statement= $this->pdo->prepare("SELECT * FROM {$table} INNER JOIN {$table1} ON {$table} . ID = ID1 ");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

     }



     public function update($table,$table1,$parameters){



       $sql="UPDATE {$table} INNER JOIN {$table1} SET Rifiuto=:rifiuto,Rifiuto1=:rifiuto1, Orario_ritiro=:orario, Orario_ritiro1=:orario1 WHERE ID=:id AND ID1=:id1";



           try{

               $statement= $this->pdo->prepare($sql);

               foreach($parameters as $name=>$value){

                    $statement->bindValue($name,$value);
               };


                $statement->execute();


           }catch(Exception $e){

               echo  'Ooops qualcosa non ha funzionato' . $e->getMessage();


          }
         }


     public function reset($table,$table1,$parameters){

         $sql="UPDATE {$table} INNER JOIN {$table1} SET Rifiuto='',Rifiuto1='',Orario_ritiro='',Orario_ritiro1='' WHERE ID=:id
         AND ID1=:id1";


            try{

                 $statement= $this->pdo->prepare($sql);

                 foreach($parameters as $name=>$value){

                      $statement->bindValue($name,$value);
                 };


                  $statement->execute();


            }catch(Exception $e){

                echo  'Ooops qualcosa non ha funzionato' . $e->getMessage();


         }
       }
     }
