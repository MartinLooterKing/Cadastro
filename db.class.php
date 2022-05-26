<?php
class db
{
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $database = 'cadastro_medico';

  public function conecta_mysql()
  {

    $conexao = mysqli_connect($this->host, $this->user, $this->pass, $this->database);

    mysqli_set_charset($conexao, 'utf8');

    if (mysqli_connect_errno()) {

      echo 'Erro ao tentar conectar com o BD MySQL: ' . mysqli_connect_error();
    }

    return $conexao;
  }
}

?>