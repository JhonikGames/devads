<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <meta http-equiv="refresh" content="10">
    <style>
        .back {
            display: block;
            background-color: #f4f4f4;
            text-align: center;
            margin: auto;
            padding: 8px;
            border-radius: 8px;
            width: fit-content;
            border: 1px solid black;
            text-decoration: none;
            color: black;

            &:hover {
                background-color: lightblue;
            }
        }
    </style>
</head>
<body>
    <?php

        // comentário de linha única
        /* bloco de comentário */

        define("pi", 3.14);

        class PC {
            public $cpu;
            function ligar() {
                echo "Ligando computador a {$this->cpu}...<br>";
            }
        }

        $obj = new PC;
        $obj -> cpu = "500mhz";
        $obj -> ligar();

        $ajv = new PC;
        $ajv -> cpu = "750mhz";
        $ajv -> ligar();

        $obj -> ligar();
        echo pi;

    ?>
    <p>
        <hr>
        <a class="back" href="../">Voltar</a>
    </p>
</body>
</html>