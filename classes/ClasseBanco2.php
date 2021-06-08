<?php
#Classe de conexão com o banco
abstract class ClasseBanco2 {
    protected function conecta_DB(){
         try {
             $con = new mysqli ("localhost", "root", "", "mydb");
             return $con;
         } catch (Exception $ex) {
             return $erro->getMessage();
         }
     }
}
