<?php

include_once 'db/Conexao.php';

class Login {

    private $idUser;
    private $nomeUser;
    private $imagemUser;
    private $emailUser;
    private $tokenUser;
    private $arquivo;
    function getArquivo() {
        return $this->arquivo;
    }

    function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }

        function getIdUser() {
        return $this->idUser;
    }

    function getNomeUser() {
        return $this->nomeUser;
    }

    function getImagemUser() {
        return $this->imagemUser;
    }

    function getEmailUser() {
        return $this->emailUser;
    }

    function getTokenUser() {
        return $this->tokenUser;
    }

    function setIdUser($idUser) {
        $this->idUser = $idUser;
    }

    function setNomeUser($nomeUser) {
        $this->nomeUser = $nomeUser;
    }

    function setImagemUser($imagemUser) {
        $this->imagemUser = $imagemUser;
    }

    function setEmailUser($emailUser) {
        $this->emailUser = $emailUser;
    }

    function setTokenUser($tokenUser) {
        $this->tokenUser = $tokenUser;
    }

    public function insert() {
        try {
            $sql = "INSERT INTO usuario(idUser, nomeUser, imagemUser, emailUser, tokenUser) VALUES (?,?,?,?,?)";
            $stm = Conexao::prepare($sql);
            $stm->bindValue(1, $this->getIdUser());
            $stm->bindValue(2, $this->getNomeUser());
            $stm->bindValue(3, $this->getImagemUser());
            $stm->bindValue(4, $this->getEmailUser());
            $stm->bindValue(5, $this->getTokenUser());
            return $stm->execute();
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    public function logar() {
        try {
            session_start();
            $sql = "SELECT * FROM usuario WHERE emailUser = ? LIMIT 1 ";
            $stm = Conexao::prepare($sql);
            $stm->bindValue(1, $this->getEmailUser(), PDO::PARAM_STR);
            $stm->execute();
            if ($stm->rowCount() == 1) {
                $result = $stm->fetch(PDO::FETCH_OBJ);
                $_SESSION['emailUser'] = $result->emailUser;

                return true;
            } else {
                return false;
            }
        } catch (SQLiteException $ex) {
            echo $ex->getMessage();
        }
    }

}
