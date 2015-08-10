<?php

class Resumo {

    /** @var ConexaoDAO */
    private $conexao;

    /**
     * __construct
     * Inicializa a conexao
     */
    public function __construct() {
        $this->conexao = new ConexaoDAO('resumo');
    }
    
    /**
     * cadastrar
     * Cadastra um resumo
     * 
     * @param array $dados
     * @return int
     */
    public function cadastrar($dados){        
        return $this->conexao->Cadastrar($dados);
    }
    
    /**
     * editar
     * Editar um resumo existente
     * 
     * @param array $dados
     * @return int
     */
    public function editar($dados){
        return $this->conexao->Editar($dados);
    }
    
    
    /**
     * buscar
     * retorna os resumos cadastrados
     * 
     * @param array $dados que serão usuados para filtrar 
     * @return array
     */
    public function buscar($dados = array()){
        
        /** @var string */
        $filtro = "";
        
        /** Monta o filtro na consulta */
        if(count($dados) > 0){
            $filtro = 'WHERE ' . implode(" LIKE ? OR ", array_keys($dados)) . " LIKE ?";
        }
        /** Consulta para retornar os resumos */        
        $query = "SELECT r.id, r.idUsuario, u.nome, r.idCapitulo, c.titulo, r.resumo, r.aprovacao, DATE_FORMAT(r.dataAtual, '%d/%m/%Y') dataAtual
                  FROM resumo as r
                  INNER JOIN usuarios as u
                  ON r.idUsuario = u.id
                  INNER JOIN capitulos as c
                  ON r.idCapitulo = c.id
                  {$filtro}
                  ORDER BY r.dataAtual DESC, u.nome ASC";
                  
        /** Executa e retorna a consulta */
        return $this->conexao->Buscar($query, $dados);
    }
    
    /**
     * buscarPorID
     * Retorna os dados de um resumo especifico
     * @param string
     * @return array
     */
    public function buscarPorID($id) {
        $query = "SELECT r.id, r.idUsuario, u.nome, r.idCapitulo, c.titulo, r.resumo, r.aprovacao, DATE_FORMAT(r.dataAtual, '%d/%m/%Y') dataAtual  
                  FROM resumo as r
                  INNER JOIN usuarios as u
                  ON r.idUsuario = u.id
                  INNER JOIN capitulos as c
                  ON r.idCapitulo = c.id
                  WHERE r.id = ?";
        $dados = array($id);
        return $this->conexao->Buscar($query, $dados);
    }
          
    /**
     * Retorna uma instância única de uma classe.
     * @staticvar Singleton $instance A instância única dessa classe.
     * @return Singleton A Instância única.
     */
    public static function getInstance() {
        /** Inicializa a var instance e retorna */
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }

        return $instance;
    }

}
