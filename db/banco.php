<?php

include 'util/constantes.php';

class banco {

    private PDO $pdo;

    public function __construct() {
        $this->pdo = $this->conectaBanco();
    }

    /**
     * @return PDO
     * @throws PDOException
     */
    private function conectaBanco() {
        try {
            return new PDO('mysql:host=' . util\constantes::HOSTNAME . '; dbname=' . util\constantes::DATABASE . ';', util\constantes::USERNAME, util\constantes::PASSWORD);
        } catch (PDOException $exception) {
            throw new PDOException($exception->getMessage());
        }
    }

    public function delete($tabela, $id) {
        $script = "DELETE FROM " . $tabela . " WHERE id = :id;";

        if ($tabela && $id) {
            $this->pdo->beginTransaction();
            $stmt = $this->pdo->prepare($script);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $this->pdo->commit();
                return util\constantes::SUCESSO_MSG;
            } else {
                $this->pdo->rollBack();
                throw new InvalidArgumentException(util\constantes::ERRO_MSG);
            }
        } else {
            throw new InvalidArgumentException(util\constantes::ERRO_PARAMETROS);
        }
    }

    public function getAll($tabela) {
        if ($tabela) {
            $consulta = 'SELECT * FROM ' . $tabela;
            $stmt = $this->pdo->query($consulta);
            $registros = $stmt->fetchAll($this->pdo::FETCH_ASSOC);
            if (is_array($registros) && count($registros) > 0) {
                return $registros;
            }
        }
        throw new InvalidArgumentException(util\constantes::MSG_ERRO_SEM_RETORNO);
    }

    public function getOneByColun($tabela, $coluna, $valor) {
        if ($tabela) {
            $consulta = 'SELECT * FROM ' . $tabela . ' WHERE ' . $coluna . ' = ' . $valor;
            $stmt = $this->pdo->query($consulta);
            $registros = $stmt->fetchAll($this->pdo::FETCH_ASSOC);
            if (is_array($registros) && count($registros) > 0) {
                return $registros;
            }
        }
        throw new InvalidArgumentException(util\constantes::MSG_ERRO_SEM_RETORNO);
    }

    public function getdb() {
        return $this->pdo;
    }
}
