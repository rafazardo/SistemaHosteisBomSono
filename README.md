# Sistema Hostéis Bom-Sono

O sistema é uma implementação web capaz de gerenciar toda estrutura de uma rede de hoteis. Implementado especialmente para atender a rede Hoteis Bom Sono, 
ele promete facilitar a locação de um quarto por parte de um cliente, bem como resolver as dificuldades dos funcionários de fazer manipulações nos dados 
empresa. 

# Proposta

O sistema foi criado com o intuito de praticar tecnologias de front-end, back-end e banco de dados. O sistema foi criado juntamente com mais 2 integrantes,
contudo o conteudo desse repositório esta presente somente as partes realizadas por mim. 

# Atividades Realizadas

# Telas 

## Tela Inicial

Após o funcionário fazer login em nosso sitema, ele sera direcionado para tela inicial, a qual possui um header estatico com informacoes do funcionario logado e um botao para o mesmo sair do sistema, alem disso nesta tela o usuario podera navegar por todos banco de dados do sistema, para fazer alteracoes neles em alto nivel, basta selecionar o banco e clicar em algum dos botoes de acao: Adicionar, Remover ou Consultar.

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_inicial.png)

## Tela Adicionar

Apos o funcionário clicar no botao de Adicionar em uma determinada tabela do banco de dados, o mesmo sera direcionado numa tela personalizada, onde a ela possui os devidos campos para preenchimento para ser adicionado uma nova tupla no banco de dados. Para que seja respeitado o relacionamento em nossas tabelas, colocamos campos de seleção em chaves estrangeiras, ou seja, o usuario so selecionara itens de outras tabelas que existem.

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_adicionar.png)

## Tela Remover

Apos o funcionário clicar no botao de Remover em uma determinada tabela do banco de dados, será exibido em formato de tabela, todos os dados armazenados nesta tabela, com um botão deletar, que apos clicar naquele mesmo botao, a tupla sera deletada e nao sera mais exibida no site, nem no banco de dados.  

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_remover.png)

## Tela Consultar

Apos o funcionário clicar no botao de Consultar em uma determinada tabela do banco de dados, sera exibido em formato de tabela, todos os dados armazenados no banco de dados daquela tabela.

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_consultar.png)
