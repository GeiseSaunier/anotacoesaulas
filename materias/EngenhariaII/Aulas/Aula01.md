## <center>Engenharia de Software baseada em componentes
<div align="justify">

Quando falamos em componentes, pensamos em reuso de código e aproveitamento de algo que já está implemenatado.

A engenharia de software baseada em componentes surgiu na década de 1990 como uma abordagem para softwares de desenvolvimento de sistemas com base no reúso de componentes de softwares. Sua criação foi motivada pela frustração de projetistas, pois o desenvolvimento orientado a objetos não levou a um amplo reúso, como se havia sugerido. As classes de objetos foram muito detalhadas e específicas e muitas vezes precisavam ser associadas com uma aplicação em tempo de compilação. Era preciso ter conhecimento detalhado das classes para usá-las e isso geralmente significava que era necessário ter o código-fonte do componente, o que significava que vender ou distribuir objetos como componentes reusáveis individuais era praticamente impossível.

### Fundamentos da CBSE

**Componentes Independientes** - especificados por suas interfaces.
**Padrões de Componentes facilita** - integração de componentes.
**Middleware** - que fornece suporte de software para a integração de componentes.
**Um processo de Desenvolvimento** que é voltado para a reutilização.

### CBSE e princípios do projeto

* Componentes são independentes, portanto, não interferem uns com os outros;
* As implementações de componentes estão ocultas;
* A comunicação é feita por meio de interfaces bem definidas;
* Um componente pode ser substituído por outro se sua interface for mantida;
* As infraestruturas de componentes oferecem uma gama de serviços padrão.

### Componentes

Os componentes fornecem um serviço sem levar em conta onde o componente está sendo executado ou sua linguagem de programação;
Um componente é uma entidade executável independente que pode ser composta por um ou mais objetos executáveis;
A interface do componente é publicada e todas as interações são feitas por meio da interface publicada;

### Características dos componentes

* Documentado: os componentes devem ser completamente documentados para que os potenciais usuários possam decidir se satisfazem a suas necessidades. A sintaxe e, idealmente, a semântica de todas as interfaces de componentes devem ser especificadas;
* Independente: um componente deve ser independente, deve ser possível compor e implantá-lo sem precisar usar outros componentes específicos. Nessas situações, em que o componente precisa dos serviços prestados externamente, estes devem ser explicitamente definidos em uma especificação de interface ‘requires’;
* Padronizado: a padronização de componentes significa que um componente usado em um processo CBSE precisa obedecer a um modelo de componentes padrão. Esse modelo pode definir as interfaces de componentes, metadados de componente, documentação, composição e implantação

**Interface Provides:** define os serviços que são fornecidos pelo componente a outros componentes. Essa interface, essencialmente, é a API do componente. Ele define os métodos que podem ser chamados por um usuário do componente.
**Interface Requires:** define os serviços que especificam quais serviços devem ser disponibilizados para que o componente execute conforme especificado. Isso não compromete a independência ou implantabilidade de um componente porque a interface "requires" não define como esses serviços devem ser fornecidos.

### Acesso aos Componentes

Os componentes são acessados ​​por meio de chamadas de procedimento remoto (RPCs).
Cada componente possui um identificador exclusivo (geralmente um URL) e pode ser referenciado a partir de qualquer computador em rede.
Portanto, ele pode ser chamado de maneira semelhante a um procedimento ou método executado em um computador local.

### 📌 Referências

[Material disponibilizado pelo professor](https://docs.google.com/presentation/d/1TVWGJEqfFL1smvpG_prUMx22nbUi1zfPqWN94vSSq0U/edit#slide=id.ge9e5376dd6_2_80)