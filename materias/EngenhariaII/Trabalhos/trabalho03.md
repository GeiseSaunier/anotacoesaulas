## <center>Trabalho 03 - Engenharia de Software II
<div align="justify">

## Explique:

### **1. Concorrência**

A concorrência ocorre quando existem dois ou mais processos executados em simultâneo; mais especificamente, o termo é utilizado quando processos disputam o acesso a recursos partilhados. Com efeito, a gestão da concorrência entre processos é a fonte de inúmeras dificuldades no desenvolvimento de software; o acesso descoordenado a um recurso (a chamada condição de corrida) induz no sistema um comportamento imprevisível.
A concorrência é naturalmente dividida nos seguintes níveis:
* Instrução:  execução  de  duas  ou  mais  instruções  de  máquina  simultaneamente  (não  envolve  questões  de linguagens de programação);
* Comando: execução de dois ou mais comandos simultaneamente;
* Unidade: execução de duas ou mais unidades, ou subprogramas, simultaneamente;
* Programa:  execução  de  dois  ou  mais  programas  simultaneamente  (não  envolve  questões  de  linguagens  de programação)


### **2. Controle e tratamento de eventos**

Uma das maneiras de tentar estabelecer uma comunicação organizada e controlada entre os componentes que formam o conjunto de sistemas de uma empresa/departamento seria utilizar a ocorrência de um fato, ou seja, um evento, pois desta forma teríamos a comunicação entre as partes mantida com um baixo acoplamento, onde emissores e assinantes estariam ligados apenas pela criação destes eventos. Mas, para evitar futuras incoerências com a ocorrência de certos eventos, é importante realizar o que chamamos de controle e tratamento de eventos.  Os controles permitem a especificação de métodos de eventos. Os métodos de evento fornecem uma maneira para um controle notificar de forma assíncrona seu cliente de que algo ocorreu. Os métodos de evento são especialmente úteis quando você não deseja que os recursos do cliente sejam associados a uma solicitação de rede ou a uma operação de longa duração. Em vez de forçar o cliente a desperdiçar recursos esperando que o controle retorne um valor, o cliente pode se desligar do controle e se envolver em outros processos enquanto escuta um evento do controle. Um evento de controle faz com que algo aconteça no código do cliente. Quando um método de evento de controle é disparado, ele envia um evento ao cliente, fazendo com que um manipulador de eventos (implementado no cliente) seja executado. O manipulador de eventos é um método como qualquer outro, exceto que o código do cliente não determina quando ele é chamado; em vez disso, o método de evento de controle determina quando o manipulador de eventos é executado.

### **3. Persistência de dados**

A persistência dos dados pode ser compreendida como a garantia de que um dado foi salvo e que poderá ser recuperado quando necessário no futuro. Esta, por sua vez, tem o objetivo de garantir que as informações serão armazenadas em um meio em que possam ser recuperadas de forma consistente. Ou seja, são registros permanentes e que não são perdidos quando há o encerramento da sessão.


### **4. Distribuição**

Este problema de design está relacionado a como distribuir o software em todo o hardware (incluindo hardware de computador e hardware de rede), como os componentes se comunicam e como o middleware pode ser usado para lidar com software heterogêneo.

### **5. Tratamento de erro e exceção,  tolerância a falhas**

Os erros em desenvolvimento de software são bem comuns, visto que estes são desenvolvidos por seres humanos e eles estão sujetos a falhas. Mas, para contornar tais erros, utiliza-se os mecanismos de tratamento de exceções. Estes, por sua vez, permitem que o desenvolvedor implemente estruturas que serão invocadas quando algo de errado ocorrer na execução da aplicação, permitindo assim que ela continue executando, recuperando-se do erro. 
Quanto a tolerância a falhas, a prevenção e remoção de falhas não são suficientes quando o sistema exige alta confiabilidade  ou  alta  disponibilidade.  Nesses  casos  o  sistema  deve  ser  construído usando  técnicas  de  tolerância  a  falhas.  Essas  técnicas  garantem  funcionamento  correto do  sistema  mesmo  na  ocorrência  de  falhas  e  são  todas  baseadas  em  redundância,
exigindo  componentes  adicionais  ou  algoritmos  especiais.  Tolerância  a  falhas  não
dispensa  as  técnicas  de  prevenção  e  remoção.  Sistemas  construídos  com  componentes
frágeis  e  técnicas  inadequadas  de  projeto  não  conseguem  ser  confiáveis  pela  simples
aplicação de tolerância a falhas.
As técnicas de tolerância a falhas são de duas classes disjuntas:
* mascaramento ou
* detecção, localização e reconfiguração

Na  primeira  classe,  mascaramento,  falhas  não  se  manifestam  como  erros,  pois  são
mascaradas  na  origem.  A  primeira  classe  geralmente  emprega  mais  redundância  que  a
segunda e, por não envolver os tempos gastos para as tarefas de detecção, localização e
reconfiguração, é a preferida para sistemas de tempo real críticos.

### **6. Interação e apresentação, e segurança**

Este problema de design está relacionado a como estruturar e organizar as interações com os usuários, bem como a apresentação de informações (por exemplo, separação de apresentação e lógica de negócios usando a abordagem Model-View-Controller). 




















 

