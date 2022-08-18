<?php


class Pessoa
{
    private $nome;
    private $idade;

//    Verificando se o objeto foi instanciado alguma vez

    public static function getInstance(){
        static $instance = null;
        if($instance===null){
            $instance = new Pessoa();
        }

        return $instance;
    }

//  Criando proteção para que o metodo não seja criado uma nova instancia
    private function __construct()
    {
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }
}