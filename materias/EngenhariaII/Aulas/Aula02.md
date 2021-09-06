## <center>Processos CBSE
<div align="justify">

Os processos CBSE são processos de software que oferecem suporte à engenharia de software baseada em componentes. Eles levam em consideração as possibilidades de reutilização e as diferentes atividades do processo envolvidas no desenvolvimento e na utilização de componentes reutilizáveis.

**Desenvolvimento para reutilização:** este processo está relacionado ao desenvolvimento de componentes ou serviços que serão reutilizados em outros aplicativos. Geralmente envolve a generalização de componentes existentes.

**Desenvolvimento com reutilização:** esse processo é o processo de desenvolvimento de novos aplicativos usando componentes e serviços existentes.

### CBSE para reutilização

CBSE para reutilização concentra-se no desenvolvimento de componentes.
Os componentes desenvolvidos para uma aplicação específica geralmente precisam ser generalizados para torná-los reutilizáveis.
É mais provável que um componente seja reutilizável se estiver associado a uma abstração de domínio estável (objeto de negócios).

### Componentes do sistema legado

Os sistemas legados existentes que cumprem uma função de negócios útil podem ser embalados novamente como componentes para reutilização.
Isso envolve escrever um componente de invólucro que implementa fornece e requer interfaces e, em seguida, acessa o sistema legado.

### Reutilização de componentes

Deve refletir abstrações de domínio estáveis;
Deve ocultar a representação do estado;
Deve ser o mais independente possível;
Deve publicar exceções por meio da interface do componente.

Existe uma compensação entre reutilização e usabilidade: quanto mais geral for a interface, maior será a capacidade de reutilização, mas ela é mais complexa e, portanto, menos utilizável.

### Mudanças para reutilização

Remova os métodos específicos do aplicativo.
Mude os nomes para torná-los gerais.
Adicione métodos para ampliar a cobertura.
Torne o tratamento de exceções consistente.
Adicione uma interface de configuração para adaptação de componentes.
Integre os componentes necessários para reduzir as dependências.

### Manipulação de exceção

Os componentes não devem tratar exceções por conta própria, porque cada aplicativo terá seus próprios requisitos para tratamento de exceções. Em vez disso, o componente deve definir quais exceções podem surgir e deve publicá-las como parte da interface.

### Componentes reutilizáveis

O custo de desenvolvimento de componentes reutilizáveis ​​pode ser maior do que o custo de equivalentes específicos. Esse custo de aprimoramento da capacidade de reutilização extra deve ser uma organização em vez de um custo de projeto.

### Gerenciamento de componentes

O gerenciamento de componentes envolve decidir como classificar o componente para que ele possa ser descoberto, disponibilizando o componente em um repositório ou como um serviço, mantendo informações sobre o uso do componente e acompanhando as diferentes versões do componente.

### CBSE com reutilização

Ao reutilizar componentes, é essencial fazer concessões entre os requisitos ideais e os serviços realmente fornecidos pelos componentes disponíveis.
Isso involve:
* Desenvolvimento de requisitos básicos;
* Pesquisar componentes e, em seguida, modificar os requisitos de acordo com a funcionalidade disponível.
* Pesquisando novamente para descobrir se há componentes melhores que atendam aos requisitos revisados.
* Compondo componentes para criar o sistema.

### Validação de componente

A validação de componentes envolve o desenvolvimento de um conjunto de casos de teste para um componente (ou, possivelmente, a extensão de casos de teste fornecidos com aquele componente) e o desenvolvimento de um equipamento de teste para executar testes de componente.

### 📌 Referências

[Material disponibilizado pelo professor](https://docs.google.com/presentation/d/14GO2kFBOJnagrCI71zrWmkhK7BUhqkncCSnFU0NqPl0/edit#slide=id.p39)