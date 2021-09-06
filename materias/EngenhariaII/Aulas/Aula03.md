## <center> Reúso de Software
<div align="justify">

### Engenharia de software baseada em reuso

**Reutilização do sistema:** sistemas completos, que podem incluir vários programas aplicativos, podem ser reutilizados.

**Reutilização de aplicativos:** um aplicativo pode ser reutilizado incorporando-o sem alteração em outro ou desenvolvendo famílias de aplicativos.

**Reutilização de componentes:** os componentes de um aplicativo, de subsistemas a objetos individuais, podem ser reutilizados.

**Reutilização de objetos e funções:** componentes de software de pequena escala que implementam um único objeto ou função bem definida podem ser reutilizados.

### Benefícios do Reuso de Software

**Desenvolvimento acelerado:** levar um sistema ao mercado o mais cedo possível é geralmente mais importante do que os custos gerais de desenvolvimento. Reutilizar software pode acelerar a produção do sistema porque o tempo de desenvolvimento e validação pode ser reduzido.
**Uso eficaz de especialistas:** em vez de fazer o mesmo trabalho repetidamente, os especialistas em aplicativos podem desenvolver software reutilizável que encapsula seu conhecimento.
**Maior confiabilidade:** o software reutilizado, que foi experimentado e testado em sistemas operacionais, deve ser mais confiável do que o novo software. Suas falhas de projeto e implementação deveriam ter sido encontradas e corrigidas.

### Problemas com o reúso

**Criação, manutenção e uso de uma biblioteca de componentes:** preencher uma biblioteca de componentes reutilizáveis ​​e garantir que os desenvolvedores de software possam usar essa biblioteca pode ser caro. Os processos de desenvolvimento devem ser adaptados para garantir que a biblioteca seja usada.
**Encontrar, compreender e adaptar componentes reutilizáveis:** os componentes de software devem ser descobertos em uma biblioteca, compreendidos e, às vezes, adaptados para funcionar em um novo ambiente. Os engenheiros devem estar razoavelmente seguros de encontrar um componente na biblioteca antes de incluir uma pesquisa de componente como parte de seu processo normal de desenvolvimento.
**Aumento dos custos de manutenção:**s e o código-fonte de um sistema ou componente de software reutilizado não estiver disponível, os custos de manutenção podem ser maiores porque os elementos reutilizados do sistema podem se tornar cada vez mais incompatíveis com as mudanças do sistema.

### Frameworks de Aplicação

Frameworks são entidades moderadamente grandes que podem ser reutilizadas. Eles estão em algum lugar entre a reutilização do sistema e do componente.
Frameworks são um projeto de subsistema composto de uma coleção de classes abstratas e concretas e as interfaces entre elas.

### Classes de Framework

**Estruturas de infraestrutura do sistema:** apoiar o desenvolvimento de infraestruturas de sistemas como comunicações, interfaces de usuário e compiladores.
**Frameworks de integração de middleware:** padrões e classes que apóiam a comunicação de componentes e a troca de informações.
**Estruturas de aplicativos corporativos:** apoiar o desenvolvimento de tipos específicos de aplicativos, como telecomunicações ou sistemas financeiros.

### Linhas de produtos de software

As linhas de produtos de software ou famílias de aplicações são aplicativos com funcionalidade genérica que podem ser adaptados e configurados para uso em um contexto específico.
Uma linha de produtos de software é um conjunto de aplicativos com uma arquitetura comum e componentes compartilhados, com cada aplicativo especializado para refletir diferentes requisitos.

A adaptação pode envolver:
* Configuração de componentes e sistemas;
* Adicionando novos componentes ao sistema;
* Seleção de uma biblioteca de componentes existentes;
* Modificando componentes para atender aos novos requisitos.

**O reúso de software é possível em vários níveis diferentes:**

* O nível de abstração. Nesse nível, você não reúsa o software diretamente, mas usa o conhecimento das abstrações de sucesso no projeto de seu software. Os padrões de projeto e de arquitetura são formas de representar o conhecimento abstrato para reúso.
* O nível de objeto. Nesse nível, você reúsa objetos diretamente de uma biblioteca em vez de escrever um código. Para implementar esse tipo de reúso, você tem de encontrar bibliotecas adequadas e descobrir se os objetos e métodos oferecem a funcionalidade que você precisa. 
* O nível de componentes. Componentes são coleções de objetos e classes de objetos que funcionam em conjunto para fornecer funções e serviços relacionados. Muitas vezes, você tem de se adaptar e ampliar o componente adicionando um código próprio.
* O nível de sistema. Nesse nível, você reúsa os sistemas de aplicação inteiros, o que geralmente envolve algum tipo de configuração desses sistemas. Essas configurações podem ser feitas por meio da adição e modificação do código (se você estiver reusando uma linha de produtos de software) ou pelo uso de interface de configuração do próprio sistema. 

Ao reusar softwares existentes, você pode desenvolver novos sistemas mais rapidamente, com menos riscos de desenvolvimento e custos mais baixos. Como o software reusado foi testado em outras aplicações, deve ser mais confiável que o novo software. No entanto, existem **custos** associados ao reúso:

* Os custos de tempo gasto na procura do software para reúso e na avaliação sobre ele atender ou não às necessidades. Talvez você precise testar o software para ter certeza de que vai funcionar em seu ambiente, sobretudo se ele for diferente do ambiente de desenvolvimento.
* Quando se aplicam os custos de aquisição do software reusável. Para grandes sistemas de prateleira, esses custos podem ser muito elevados.
* Os custos de adaptação e configuração dos componentes de software reusável ou sistemas para refletir os requisitos do sistema que você está desenvolvendo.
  
### 📌 Referências

[Material disponibilizado pelo professor](https://docs.google.com/presentation/d/1_1KEDHnbYDXvw4zp5HZ0ecWhRPQD4W6N5oraeXG7kjI/edit#slide=id.ge9fd81b3b0_1_80)