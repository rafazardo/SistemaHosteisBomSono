# Sistema Hotéis Bom-Sono

O sistema é uma implementação web capaz de gerenciar toda estrutura de uma rede de hotéis. Implementado especialmente para atender a rede Hotéis Bom Sono, ele promete facilitar a locação de um quarto por parte de um cliente, bem como resolver as dificuldades dos funcionários de fazer manipulações nos dados da empresa. 

# Proposta

O sistema foi criado com o intuito de praticar tecnologias de front-end, back-end e banco de dados. O sistema foi criado juntamente com mais 2 integrantes,
contudo o conteúdo desse repositório possui somente as partes realizadas por mim. 

# Atividades Realizadas

* Dividir as demandas do trabalho em telas, dividindo em Telas de Login, Telas do Cliente e Telas do Funcionário e designando cada uma dessas partes para cada integrante do grupo desenvolver.
* Realizar a documentaçao do Modelo Lógico e Modelo Relacional do banco de dados, em seguida criar um banco de dados SQL, utilizando comandos MySql para criação do zero do banco de dados, além de utilizar técnicas de relacionamento e triggers para respeitar as regras de normalização.
* Utilizar as tecnologias de front-end, HTML, CSS e BootStrap para criação das telas do Funcionário, para obter um design de alto nivel de gerenciamento de banco de dados, para facilitar a navegação do funcionário dentro do sistema. 
* Aplicar as tecnologias de back-end, PHP e MySql para realizar a interação com o banco de dados dentro do sistema web, tais quais inserções e remoção de tuplas, bem como consulta de dados registrados em uma tabela.
* Utilizar a versão gratuita da Oracle Cloud para criar um servidor linux, com o fim de hospedar o banco de dados e a implementação do sistema web. 
* Criar um repositório no Github e realizar versionamento do código, em cada atividade realizada durante o processo de desenvolvimento do Software. 

# Telas 

## Tela Inicial

Após o funcionário fazer login em nosso sitema, ele será direcionado para tela inicial, a qual possui um header estático com informações do funcionário logado e um botão para este sair do sistema. Além disso, nesta tela o usuário poderá navegar por todos os bancos de dados do sistema. Para fazer alterações neles em alto nível, basta selecionar o banco e clicar em algum dos botões de ação: Adicionar, Remover ou Consultar.

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_inicial.png)

## Tela Adicionar

Após o funcionário clicar no botão de Adicionar em uma determinada tabela do banco de dados, este será direcionado a uma tela personalizada, a qual possui os devidos campos para preenchimento para ser adicionado uma nova tupla no banco de dados. Para que seja respeitado o relacionamento nas tabelas, coloquei campos de seleção em chaves estrangeiras, ou seja, o usuário só selecionará itens de outras tabelas que existem.

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_adicionar.png)

## Tela Remover

Após o funcionário clicar no botão de Remover em uma determinada tabela do banco de dados, será exibido, em formato de tabela, todos os dados armazenados nela, com um botão deletar, que, ao ser acionado, deleta a tupla.

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_remover.png)

## Tela Consultar

Após o funcionário clicar no botão de Consultar em uma determinada tabela do banco de dados, será exibido, em formato de tabela, todos os dados armazenados no banco de dados daquela tabela.

![alt text](https://github.com/rafazardo/RepositorioImagens/blob/main/tela_consultar.png)
