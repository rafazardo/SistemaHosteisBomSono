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
                <strong>Tabela Funcionario</strong>,<br> 
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
                            <th>Hotel</th>
                            <th>Cargo</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php 
                            include('../../conexao.php');
                
                            $result = mysqli_query($mysql, "
                                select Funcionario.idFuncionario, Funcionario.nome as nomeFuncionario, Funcionario.email, Funcionario.senha, Hotel.nome as nomeHotel, Cargo.nome as nomeCargo 
                                from Funcionario inner join Hotel on Funcionario.idHotel = Hotel.idHotel 
                                inner join Cargo on  Funcionario.idCargo = Cargo.idCargo order by Funcionario.idFuncionario;");
                                
                                if (mysqli_num_rows($result)) {
                                    while ($row = mysqli_fetch_array($result)) {
                                        echo "<tr>
                                            <td>{$row['idFuncionario']}</td>
                                            <td>{$row['nomeFuncionario']}</td>
                                            <td>{$row['email']}</td>
                                            <td>{$row['senha']}</td>
                                            <td>{$row['nomeHotel']}</td>
                                            <td>{$row['nomeCargo']}</td>
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