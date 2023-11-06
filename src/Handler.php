<?php

namespace App;

use App\Database;
use PDO;

class Handler 
{

    private $db;

    public function __construct()
    {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function handle()
    {
        $metodo = $_SERVER["REQUEST_METHOD"];
        $recurso = $_SERVER["REQUEST_URI"];

        if ($metodo == "GET" && $recurso == "/")
        {
            require_once(__DIR__."/../views/home.php");
            return;
        }

        if ($metodo == "POST" && $recurso == "/cadastrar")
        {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);
            $professor = $_POST["professor"] == "true" ? 1 : 0;
            $idade = $_POST["idade"];

            $sql = "INSERT INTO usuarios (nome,email,senha,professor,idade) VALUES (?,?,?,?,?)";

            $this->db->prepare($sql)->execute([$nome,$email,$senha,$professor,$idade]);
            header("Location: /cadastrar");
            die();
        }

        if ($metodo == "GET" && $recurso == "/cadastrar")
        {
            require_once(__DIR__."/../views/cadastro.php");
            return;
        }

        if ($metodo == "GET" && $recurso == "/login")
        {
            require_once(__DIR__."/../views/login.php");
            return;
        }

        if ($metodo == "POST" && $recurso == "/login")
        {
            $login = $_POST["login"];
            $senha = $_POST["senha"];

            $sql = "SELECT * FROM usuarios WHERE email = :email";

            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(":email", $login, PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $passCompare = password_verify($senha, $user["senha"]);


            if ($user && $passCompare)
            {
                session_start();

                $_SESSION["id"] = $user["id"];
                $_SESSION["name"] = $user["nome"];
                $_SESSION["email"] = $user["email"];

                header("Location: /interno");
                die();
            } else {
                header("Location: /login");
                die();
            }
        }

        if($metodo == "GET" && $recurso == "/interno")
        {
            session_start();
            if(!$_SESSION["email"])
            {
                header("Location: /login");
                die();
            }

            require_once(__DIR__."/../views/interno.php");
            return;
        }
    }
}