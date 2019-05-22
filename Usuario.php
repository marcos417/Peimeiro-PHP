<?php

Class Usuario {
    public $nome;
    public $sobrenome;
    public $email;
    public $telefone;
    public $nomeCompleto;

    public function nomeCompleto() {
        $this->nomeCompleto = $this->nome . ' ' . $this->sobrenome;

        return $this->nomeCompleto;
    }

    public function sair() {
        return 'usuário '. $this->nomeCompleto() .' saiu do sistema';
    }

    public function calculo($soma1, $soma2, $soma3) {
        if(!empty($soma1) && !empty($soma2) && !empty($soma3))   {
            $total = $soma3 * $soma2;
            $lucro = $total - $soma1;
            return "O total de ganho é $total e seu lucro é $lucro ";
        } else {
            return 'Cara de pau, preencha todos os valores!';
        }
    }

    public function tudoCaro(){
        return 'agora o usuario tbm é ' . $this->nomeCompleto() . ' assim e pronto';
    }
}

$primeiroUsuario = new Usuario();
$calculadora = new Usuario();

$primeiroUsuario->nome = "Scooby";
$primeiroUsuario->sobrenome = "Dogão";

echo $calculadora->calculo(4,2,7);

echo "<pre>";
var_dump($primeiroUsuario->sair());
echo "<pre/>";

