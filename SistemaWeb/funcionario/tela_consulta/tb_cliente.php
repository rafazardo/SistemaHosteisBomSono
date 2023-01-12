<!doctype html>
<html lang="pt-br">
    <head>
        <title> Funcionário | Tela Consulta </title>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../css/normalize.css">
        <link rel="stylesheet" href="../../css/tela_funcionario.css">
        <link rel="icon" href="../../images/icon.png">   
    </head>
    <body>
        
        <header class="mainHeader">
            <h1 class="mainHeaderTitulo">
                Tela Consulta<br>
                <strong>Tabela Cliente</strong>,<br> 
                <br>
                <a href="../../funcionario/tela_inicial.php" class="mainHeaderLink">Voltar</a>
                <br>
                <a href="../../index.html" class="mainHeaderLink">Sair da Seção</a>
            </h1>            
        </header>
        
        <main class="mainContent">
            
            <section class="mainContentSection">

                <h2>Dados Obtidos</h2>
                <p>Listagem dos dados armazenados no nosso bando de dados SQL</p>
                
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Senha</th>
                            <th>Telefone</th>
                            <th>Profissão</th>
                            <th>Nacionalidade</th>
                            <th>Data Nascimento</th>
                            <th>Gênero</th>
                            <th>Identidade</th>
                            <th>Tipo</th>
                            <th>Orgão Exp.</th>
                            <th>CPF</th>
                            <th>Residência</th>
                            <th>Cidade</th>
                            <th>Estado</th>
                            <th>País</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php 
                            include('../../conexao.php');
                
                            $result = mysqli_query($mysql, "select * from cliente;");
                                
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>
                                            <td>{$row['idCliente']}</td>
                                            <td>{$row['nome']}</td>
                                            <td>{$row['email']}</td>
                                            <td>{$row['senha']}</td>
                                            <td>{$row['telefone']}</td>
                                            <td>{$row['profissao']}</td>
                                            <td>{$row['nacionalidade']}</td>
                                            <td>{$row['dataNascimento']}</td>
                                            <td>{$row['genero']}</td>
                                            <td>{$row['numeroIdentidade']}</td>
                                            <td>{$row['tipoIdentidade']}</td>
                                            <td>{$row['orgaoExpedidorIdentidade']}</td>
                                            <td>{$row['cpf']}</td>
                                            <td>{$row['residencia']}</td>
                                            <td>{$row['cidade']}</td>
                                            <td>{$row['estado']}</td>
                                            <td>{$row['pais']}</td>
                                        </tr>";
                                    }
                                }       
                         ?>
                     </tbody>
                </table>                
                
                
            </section>
        </main>

        <footer class="mainFooter"></footer>
        
    </body>
</html>