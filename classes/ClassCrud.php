<?php

require "ClasseBanco2.php";
class ClassCrud extends ClasseBanco2 {
    private $Crud;
    private $Contador;
    private $Resultado;
    
    private function countParametros($Parametros) {
        $this->Contador = count($Parametros);
    }
    
    private function preparedStatements($Query, $Tipos, $Parametros){
        $this->countParametros($Parametros);
        $Con = $this->conecta_DB();
        $this->Crud = $Con->prepare($Query);
        
        if ($this->Contador > 0){
            $CallParametros = array();
            foreach ($Parametros as $Key=> $Parametro){
                $CallParametros[$Key]=&$Parametros[$Key];
            }  
        
        array_unshift($CallParametros, $Tipos);
        call_user_func_array(array($this->Crud, 'bind_param'), $CallParametros);
    }
    $this->Crud->execute();
    $this->Resultado = $this->Crud->get_result();
}
    #Método para selecionar
    public function selectDB($Campos, $Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Tipos, $Parametros);
        return $this->Resultado;
    }
    #Método para deletar
    public function deleteDB($Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("delete from {$Tabela} where {$Condicao} ", $Tipos, $Parametros);
        return $this->Crud;
    }
    #Método para inserir
    public function insertDB($Tabela, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Tipos, $Parametros);
        return $this->Crud;
    }
    #Método para atualizar
    public function updateDB($Tabela,$Set, $Condicao, $Tipos, $Parametros) {
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Tipos, $Parametros);
        return $this->Crud;
    }
}
    