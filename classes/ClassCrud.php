<?php

require "ClasseBanco2.php";
class ClassCrud extends ClasseBanco2 {
    private $Crud;
    private $Contador;
    private $Resultado;
    
    private function countParametros($Parametros) {
        $this->Contador = count($Parametros);
    }
    //método prepare para mysqli
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

    #Método para autenticar usuário
    public function validarUSER($user,$pass) {
        $usuario = $this->conecta_DB()->real_escape_string($user);
        $senha = $this->conecta_DB()->real_escape_string($pass);
        
        $sql = "SELECT * FROM `admsystem` WHERE email='$usuario' && senha='$senha' ";
        
        $result = $this->conecta_DB()->query($sql);
        $resultado = $result->fetch_assoc();
        if(empty($resultado)){
        $_SESSION['loginErro'] = "E-mail ou senha inválidos";
        header("Location: index.php");
    }elseif (isset ($resultado)) {
            $_SESSION['usuarioNome'] = $resultado['nome'];
            header ("Location: index.php");
        }
}
}
    