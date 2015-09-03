<?php

class Notificacao {

    /** @var ConexaoDAO */
    private $conexao;

    /**
     * __construct
     * Inicializa a conexao
     */
    public function __construct() {
        $this->conexao = new ConexaoDAO('notificacoes');
    }
    
    /**
     * cadastrar
     * Cadastra uma notificação
     * 
     * @param array $dados
     * @return int
     */
    public function cadastrar($dados){        
        return $this->conexao->Cadastrar($dados);
    }
    
    /**
     * editar
     * Editar uma notificação existente existente
     * 
     * @param array $dados
     * @return int
     */
    public function editar($dados){
        return $this->conexao->Editar($dados);
    }
    
    
    /**
     * buscar
     * retorna as notificações cadastradas
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
        /** Consulta para retornar as notificacoes */        
        $query = "SELECT n.id, n.idUsuario, n.idResumo, u.nome, n.assunto, n.notificacao, DATE_FORMAT(n.dataNotificacao, '%d/%m/%Y') dataNotificacao 
                  FROM notificacoes as n
                  INNER JOIN usuarios as u
                  ON n.idUsuario = u.id
                  {$filtro}
                  ORDER BY n.dataNotificacao DESC, u.nome ASC";
                  
        /** Executa e retorna a consulta */
        return $this->conexao->Buscar($query, $dados);
    }
    
    /**
     * buscarPorID
     * Retorna os dados de uma notificação específica
     * @param string
     * @return array
     */
    public function buscarPorID($id) {
        $query = "SELECT n.id, n.idUsuario, n.idResumo, u.nome, n.assunto, n.notificacao, DATE_FORMAT(n.dataNotificacao, '%d/%m/%Y') dataNotificacao 
                  FROM notificacoes as n
                  INNER JOIN usuarios as u
                  ON n.idUsuario = u.id
                  WHERE n.id = ?";
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
