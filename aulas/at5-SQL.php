<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>At5 SQL</title>
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

            & input[type="radio"], .radiolabel {
                width: fit-content;
                display: inline;
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
    <form name="cadastro" action="./at5-SQL.php" method="post">
        <h1>Pedidos da Páscoa 2024</h1>
        <label for="nome">Coelinho da pascoa esse ano eu quero...</label><br>
        <input type="text" name="nome" placeholder="seu nome" maxlength="50" size="50" required>
        <br><br>
        <label for="option1">Opção 1:</label><br>
        <input type="text" name="option1" maxlength="100" size="100" required>
        <br><br>
        <label for="option2">Opção 2:</label><br>
        <input type="text" name="option2" maxlength="100" size="100" required>
        <br><br>
        <label for="option3">Opção 3:</label><br>
        <input type="text" name="option3" maxlength="100" size="100" required>
        <br><br>
        <label for="endereco">Endereço:</label><br>
        <input type="text" name="endereco" maxlength="100" size="100" required>
        <br><br>
        <label for="comportamento">Fui um bom aluno(a)?</label><br>
        <input type="radio" name="comportamento" id="sim" value="1">
        <label class="radiolabel" for="sim">Sim</label>
        <br>
        <input type="radio" name="comportamento" id="nao" value="0">
        <label class="radiolabel" for="nao">Não</label>
        <br><br>
        <button type="submit" name="enviar">Cadastrar</button>
        <button type="reset" name="limpar">Limpar</button>
        <a href="../">voltar</a>
    </form>
    <?php
        if (!$_POST) {
            die("Sem dados");
        }
        var_dump($_POST);

        $strconexao = mysqli_connect('localhost','root','','php-aulas');
        if (!$strconexao) {
            die("Não foi possivel conectar ao banco de dados!");
        }
        echo "Conexão realizada com sucesso!"."<br><br>";
        
        $nome = $_POST["nome"];
        $option_1 = $_POST["option1"];
        $option_2 = $_POST["option2"];
        $option_3 = $_POST["option3"];
        $endereco = $_POST["endereco"];
        $comportamento = $_POST["comportamento"];

        $sql = "INSERT INTO `pascoa` (`nome`, `option_1`, `option_2`, `option_3`, `endereco`, `comportamento`) 
            VALUES (
                '$nome',
                '$option_1',
                '$option_2',
                '$option_3',
                '$endereco',
                '$comportamento'
            )";
        
        // executa solicitação no sql
        mysqli_query($strconexao, $sql) or die("Erro ao cadastrar");

        mysqli_close($strconexao);
    ?>
</body>
</html>