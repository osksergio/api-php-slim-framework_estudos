<?php

namespace App\DAO\MySQL\GerenciadorDeLojas;

class LojasDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
    função teste p/ ver se está acessando os dados no banco

    public function teste()
    {
        $lojas = $this->pdo
            ->query('select * from lojas;')
            ->fetchAll(\PDO::FETCH_ASSOC);

        echo "<pre>";
        foreach($lojas as $loja) {
            var_dump($loja);
        }

        die;
    }
    */
}