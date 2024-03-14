<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>At4 SQL</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            background-color: #f4f4f4;
        }

        form {
            font-family: Arial;
            position: absolute;
            top: 25%;
            margin: auto;
            display: block;
            background-color: #f4f4f4;
            width: fit-content;
            padding: 2rem;
            border: 2px solid rgba(0,0,0,.2);
            border-radius: 8px;
            box-shadow: 0px 0px 5rem 20px rgba(0, 0, 0, .2);

            & h1 {
                text-align: center;
            }

            & input {
                width: 100%;
            }

            & button {
                width: 100%;
                height: 2rem;
                margin: 4px 0;
            }

            & a {
                margin-top: 8px;
                display: block;
                width: 100%;
                text-align: center;
                background-color: lightcoral;
                padding: 4px 0;
                border-radius: 8px;
                text-decoration: none;
                color: white;

                &:hover {
                    background-color: coral;
                }
            }
        }
    </style>
</head>
<body>
    <form name="cadastro" action="./at4-SQL.php" method="post">
        <h1>Cadastro de Aluno</h1>
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" maxlength="50" size="50" required>
        <br><br>
        <label for="sobrenome">Sobrenome:</label><br>
        <input type="text" name="sobrenome" maxlength="50" size="50" required>
        <br><br>
        <label for="idade">Idade:</label><br>
        <input type="number" name="idade" min="1" max="99" size="2" required>
        <br><br>
        <label for="matricula">Matricula:</label><br>
        <input type="number" name="matricula" min="0" max="99999" size="5" required>
        <br><br>
        <label for="data-nascimento">Data de nascimento:</label><br>
        <input type="date" name="data-nascimento" size="10" required>
        <br><br>
        <button type="submit" name="enviar">Cadastrar</button>
        <button type="reset" name="limpar">Limpar</button>
        <!-- <input type="submit" name="enviar" value="cadastrar">
        <input type="reset" name="limpar" value="limpar"> -->
        <a href="../">voltar</a>
    </form>
    <?php
        if (!$_POST) {
            die("Sem dados");
        }

        //var_dump($_POST);
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $idade = $_POST["idade"];
        $matricula = $_POST["matricula"];
        $data_nascimento = $_POST["data-nascimento"];

        $strconexao = mysqli_connect('localhost','root','','php-aulas');

        if (!$strconexao) {
            die("Não foi possivel conectar ao banco de dados!");
        }

        echo "Conexão realizada com sucesso!"."<br><br>";
        
        $sql = "INSERT INTO `alunos` (`nome`, `sobrenome`, `idade`, `matricula`, `datanascimento`) 
            VALUES (
                '$nome', 
                '$sobrenome', 
                '$idade', 
                '$matricula', 
                '$data_nascimento'
            )";
        
        mysqli_query($strconexao, $sql) or die("Erro ao cadastrar");

        /*echo "Nome do Aluno: ".$nome." ".$sobrenome."<br>";
        echo "Idade: ".$idade."<br>";
        echo "Matricula: ".$matricula."<br>";
        echo "Data de nascimento: ".$data_nascimento."<br>";*/

        mysqli_close($strconexao);
    ?>
</body>
</html>