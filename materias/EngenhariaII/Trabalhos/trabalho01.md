## <center>Trabalho 01 - Engenharia de Software II
<div align="justify">

**1. Explique Engenharia de Software baseada em componentes (CBSE).**

* Engenharia de Software baseada em componentes (CBSE) é uma abordagem de desenvolvimento de software que depende da reutilização de entidades chamadas de **componentes de software**. Surgiu da falha do desenvolvimento orientado a objetos para apoiar a reutilização efetiva. As classes de objetos são muito detalhadas e específicas, já os componentes são mais abstratos do que classes de objetos e podem ser considerados provedores de serviços individuais, sendo assim podem existir como entidades individuais.

**2. O que é Componente de Software? Cite três características.**

* Um componente é uma entidade executável independente que pode ser composta por um ou mais objetos executáveis. Esses commponentes, por sua vez, fornecem um serviço sem levar em conta onde o componente está sendo executado ou qual sua linguagem de programação.
  
**Características:**
* **Independente:** Um componente deve ser independente, deve ser possível compor e implantá-lo sem precisar usar outros componentes específicos. Nessas situações, em que o componente precisa dos serviços prestados externamente, estes devem ser explicitamente definidos em uma especificação de interface ‘requires’.
* **Documentado:** Os componentes devem ser completamente documentados para que os potenciais usuários possam decidir se satisfazem a suas necessidades. A sintaxe e, idealmente, a semântica de todas as interfaces de componentes devem ser especificadas.
* **Padronizado:** A padronização de componentes significa que um componente usado em um processo CBSE precisa obedecer a um modelo de componentes padrão. Esse modelo pode definir as interfaces de componentes, metadados de componente, documentação, composição e implantação.

**3. Diferencie Interface Provides e Interface Requires.**

* **Interface Provides:** Define os serviços que são fornecidos pelo componente a outros componentes.
Essa interface, essencialmente, é a API do componente. Ele define os métodos que podem ser chamados por um usuário do componente.Requer.

* **Interface Requires:** Define os serviços que especificam quais serviços devem ser disponibilizados para que o componente execute conforme especificado.
Isso não compromete a independência ou implantabilidade de um componente porque a interface "requires" não define como esses serviços devem ser fornecidos.

**4. O que são processos CBSE?**

* São processos de software que oferecem suporte à engenharia de software baseada em componentes.
Eles levam em consideração as possibilidades de reutilização e as diferentes atividades do processo envolvidas no desenvolvimento e na utilização de componentes reutilizáveis. 

**5.  Cite e explique três benefícios e dois problemas do Reuso de Software.**

 **Benefícios:**

* **Custos de desenvolvimento mais baixos**, isto é, os custos de desenvolvimento são proporcionais ao tamanho do software que está sendo desenvolvido. Reutilizar software significa que menos linhas de código precisam ser escritas.
* **Maior confiabilidade**, ou seja, o software reutilizado, que foi experimentado e testado em sistemas operacionais, deve ser mais confiável do que o novo software. Suas falhas de projeto e implementação deveriam ter sido encontradas e corrigidas.
* **Desenvolvimento acelerado**, isso porque levar um sistema ao mercado o mais cedo possível é geralmente mais importante do que os custos gerais de desenvolvimento. Reutilizar software pode acelerar a produção do sistema porque o tempo de desenvolvimento e validação pode ser reduzido.

 **Problemas:**

* **Aumento dos custos de manutenção**, ou seja, se o código-fonte de um sistema ou componente de software reutilizado não estiver disponível, os custos de manutenção podem ser maiores porque os elementos reutilizados do sistema podem se tornar cada vez mais incompatíveis com as mudanças do sistema.
* **Criação, manutenção e uso de uma biblioteca de componentes**, isto é, preencher uma biblioteca de componentes reutilizáveis ​​e garantir que os desenvolvedores de software possam usar essa biblioteca pode ser caro. Os processos de desenvolvimento devem ser adaptados para garantir que a biblioteca seja usada. 

**6. Explique linhas de produtos de software ou famílias de aplicações.**

* As linhas de produtos de software ou famílias de aplicações são aplicativos com funcionalidade genérica que podem ser adaptados e configurados para uso em um contexto específico.
Uma linha de produtos de software é um conjunto de aplicativos com uma arquitetura comum e componentes compartilhados, com cada aplicativo especializado para refletir diferentes requisitos.

**7. Explique reuso.**

* O reuso de software visa reaproveitar grande parte do software produzido e informações associadas em novos projetos, diminuindo o custo, aumentando a produtividade no desenvolvimento e proporcionando o compartilhamento do conhecimento durante as fases de desenvolvimento. A ideia básica é que componentes de software sejam especificados e projetados de forma que possam ser reusados em aplicações diferentes.

Mediante a utilização de padrões de projeto, temos vários níveis de reúso de software, abaixo cito alguns:"
* **nível de abstração:** nesse nível, você não reúsa o software diretamente, mas usa o conhecimento das abstrações de sucesso no projeto de seu software. Os padrões de projeto e de arquitetura são formas de representar o conhecimento abstrato para reúso.
* **nível de objeto:** nesse nível, você reúsa objetos diretamente de uma biblioteca em vez de escrever um código. Para implementar esse tipo de reúso, você tem de encontrar bibliotecas adequadas e descobrir se os objetos e métodos oferecem a funcionalidade que você precisa.
* **nível de componentes:** componentes são coleções de objetos e classes de objetos que funcionam em conjunto para fornecer funções e serviços relacionados. Muitas vezes, você tem de se adaptar e ampliar o componente adicionando um código próprio.
* **nível de sistema:** nesse nível, você reúsa os sistemas de aplicação inteiros, o que geralmente envolve algum tipo de configuração desses sistemas. Essas configurações podem ser feitas por meio da adição e modificação do código (se você estiver reusando uma linha de produtos de software) ou pelo uso de interface de configuração do próprio sistema.  

**8. Explique Arquitetura de Software baseada em componentes.**

A ideia principal do modelo baseado em componentes é construir sistemas usando componentes pré-existentes.
Isto traz várias consequências pro ciclo de desenvolvimento. Primeiro, o processo de desenvolvimento de sistemas baseados em componentes é separado do processo de desenvolvimento dos componentes, os componentes poderiam já ter sido desenvolvidos e possivelmente utilizados em outros produtos. Segundo, um novo processo separado vai aparecer: encontrar e avaliar os componentes. Terceiro, as atividades nos processos serão diferentes das atividades em uma abordagem não baseada em componentes. Para o desenvolvimento do sistema, a ênfase estará em encontrar os componentes adequados e verificá-los, e para o desenvolvimento de componentes, projetar pensando no reuso é a principal preocupação. Vale ressaltar que, os componentes arquiteturais devem ser definidos, implementados, mantidos e evoluídos por arquitetos e desenvolvedores de software, sempre tendo suas principais caraterísticas preservadas. Exemplos destas características essenciais para os componentes são padronização, independência, capacidade de interagir com outros componentes, alta capacidade de ser implantado, documentação atualizada e definida de forma clara.

**9. Explique o processo do SCRUM.**

* Scrum é um framework utilizado para gestão dinâmica de projetos, sendo muitas vezes aplicado para o desenvolvimento ágil de um software. É um processo iterativo e incremental, que possui 3 pilares centrais:

* **TRANSPARÊNCIA** dos processos, dos requisitos de entrega e status. Todos os aspectos significativos do processo como um todo devem estar visíveis e alinhados com todos os responsáveis pelos resultados.

* **INSPEÇÃO** constante de tudo o que está sendo feito.

* **ADAPTAÇÃO** tanto do processo, quanto do produto, que podem sofrer mudanças que necessitam de adaptação. Também é importante adaptar o SCRUM para a realidade e cultura da empresa.

* Quanto as funcionalidades: elas são organizadas por ordem de prioridade e o projeto é planejado em Sprints que são períodos de tempo onde os itens selecionados no Product Backlog serão construídos e entregues. As Sprints são planejadas respeitando o time-boxed: precisam ter a mesma duração fixa que varia entre 1 e 4 semanas, sendo mais utilizado o padrão de 2 semanas.
* Antes de cada Sprint começar é feita uma reunião de planejamento (Sprint Planing), onde é criado o Sprint Backlog, que leva em consideração as capacidades e velocidade de entrega do team para definir quantas histórias poderão ser construídas e entregues dentro de uma Sprint.
* Ao término de uma Sprint, deve ser entregue um Incremento do produto (no caso de desenvolvimento, por exemplo, é importante que seja entregue uma parte do software funcionando, ainda que não esteja finalizada). Após a entrega do incremento, é realizada uma Sprint Review, momento em que o Product Owner verifica ser serão inseridas mudanças ou alterações no produto. Essas mudanças são inseridas no backlog, também por prioridades.
* Além disso, há uma reunião realizada antes do início de uma Sprint, onde é construído o Sprint Backlog, chamada de sprint planing.

**10. Cite as três perguntas realizadas no SCRUM DAILY MEETING e explique os três papéis do SCRUM.**

**PERGUNTAS REALIZADAS:**

* O que eu fiz ontem que ajudou o Time de Desenvolvimento a atingir a meta da Sprint?
* O que eu farei hoje para ajudar o Time de Desenvolvimento atingir a meta da Sprint?
* Eu vejo algum obstáculo que impeça a mim ou o Time de Desenvolvimento no atingimento
da meta da Sprint?

**PAPÉIS:**

**SCRUM MASTER:** responsável por ajudar todo o time a entender e manter vivos os princípios e práticas do SCRUM no dia-a-dia. É como um coach, um facilitador para o trabalho, remove impedimentos, refina itens da próxima Sprint junto ao Product Owner.

**PRODUCT OWNER:** responsável pelos poderes de liderança sobre o produto. Decide quais recursos serão construídos, qual a ordem de prioridade de produção no PRODUCT BACKLOG.

**TEAM:** equipe desenvolvedora do projeto. É o team que define como as coisas serão feitas e quais e quantas tarefas são possíveis de entregar. O team se auto organiza para atingir as metas estabelecidas pelo Product Owner.

















 

