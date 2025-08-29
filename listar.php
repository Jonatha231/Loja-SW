<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" src="css/style.css">
    
</head>
<body>
        <div class="container">
            <h1 class="tit">Bem vindo ao 1º Sistema Web com CRUD</h1>
            <h2>Jonatha de Paula e Bryan Soares de Carvalho</h2>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">PREÇO</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                    </tr>
                </thead>

                <tbody>
                    
                    <?php
                        require 'conexao.php';
                        $sql = "SELECT * FROM produtos";
                        $stmt = $pdo->query($sql);
                        while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)) {

                            echo"<tr>";
                            
                            echo"<td>".  $produto['id']."</td>";
                            echo"<td>" . $produto['nome'] . "</td>";
                            echo"<td>" . $produto['preco'] . "</td>";
                            echo"<td>" . $produto['estoque'] . "</td>";
                            echo
                            "<td>
                                <div class='btn-group' role='group' aria-label='Basic mixed styles example'>
                                    <a href='form_atualizar.php?id=".  $produto['id']."'type='button' class='btn btn-danger'>Atualizar </a>
                                    <a href='#'type='button' class='btn btn-warning'>Apagar </a>
                                </div>
                            </td>";
                            echo"</tr>";
                        }
                    ?>
                   
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>