## <center>Trabalho 02 - Engenharia de Software II
<div align="justify">

**1. Explique Decomposição.**

A decomposição está diretamente ligada ao conceito de "quebrar um problema grande em partes menores", isto é, quebrar o problema inicial, que pode ser bastante complexo, em partes pequenas. Para grandes estudiosos do assunto, a resolução (ou implementação) das partes menores resolvem (ou implementam) o "problema grande". Sendo assim, vale mais a pena lidar com problemas menores do que necessariamente com o problema como um todo. Porém, não é simplesmente quebrar o problema maior em partes menores, mas sim compreender que na etapa de desenvolvimento é crucial que cada uma das partes do projeto possa ser resolvida (ou implementada) de forma independente, evitando assim problemas futuros.

**2. Explique Integridade Conceitual.**

A integridade conceitual defende que um sistema não pode ser um amontoado de funcionalidades, sem coerência e coesão entre elas, mas deve possuir funcionalidades coerentes com o desenvolvimento. Para que haja integridade conceitual em projetos de Software, é necessário coerência e padronização tanto nas funcionalidades, quanto nos projetos e na implementação. Ressalta-se que a integridade conceitual é importante porque facilita o uso e entendimento de um sistema por parte de seus usuários, visto que segue padrões que o usuário já está familiarizado desde o início.

**3. Explique Ocultamento de Informação.**

O ocultamento de informação defende a ideia de que decisões de projeto que são sujeitas a mudanças devem ser mantidas de forma oculta, visto que, primeiramente, deve-se entender melhor as decisões de projeto, os requisitos, para então pensar no algoritmo/estrutura. 
O ocultamento de informação traz alguns benefícios, sendo eles:
* **Desenvolvimento em paralelo:** quando algumas classes ocultam suas principais informações, fica mais fácil implementá-las em paralelo por desenvolvedores diferentes;
* **Flexibilidade a mudanças:** suponha que descobrimos que determinada classe é responsável pelos problemas de desempenho do sistema. Quando detalhes de implementação dessa classe são ocultados do resto do sistema, fica mais fácil trocar sua implementação por uma outra classe que use estruturas de dados e algoritmos mais eficientes;
* **Facilidade de entendimento:** se um novo desenvolvedor contratado pela empresa for alocado para trabalhar em algumas classes, por exemplo, ele não precisará entender toda a complexidade do sistema, mas apenas a implementação das classes pelas quais ficou responsável.

**4. Explique Coesão.**

A coesão diz-se que toda classe deve implementar uma única funcionalidade ou serviço. Especificamente, todos os métodos e atributos de uma classe devem estar voltados para a implementação do mesmo serviço. Uma outra forma de explicar coesão é afirmando que toda classe deve ter uma única responsabilidade no sistema. Ou, ainda, afirmando que deve existir um único motivo para modificar uma classe.

**5. Explique Acoplamento.**

O acoplamento diz-se o quanto uma classe depende da outra para funcionar. E quanto maior for esta dependência entre ambas, dizemos que elas estão fortemente acopladas. 
Existem dois tipos de acoplamento entre classes: o acoplamento ruim e o acomplamento aceitável. Em essência, o que caracteriza o acoplamento ruim é o fato de que a dependência entre as classes não é mediada por uma interface estável. Por exemplo, quando uma classe altera o valor de uma variável global, ela não tem consciência do impacto dessa mudança em outras partes do sistema. Nesse sentido, o acoplamento ruim deve ser evitado. Já o acoplamento aceitável é quando a classe A usa apenas métodos públicos da classe B, por exemplo, isso não impactará em mudanças drásticas em B e nem terão impacto na classe A. Logo, pode ser utilizado.

**6. Separação da interface e implementação.**

O principal objetivo deste princípio é proteger os clientes de um componente e seus detalhes de implementação, buscando assim apenas prover a eles a especificação da interface do componente e diretrizes de uso. Além disso, este princípio permite que você implemente a funcionalidade de um componente, independentemente de seu uso por outros componentes. A separação de interface é como o encapsulamento, uma técnica para alcançar a ocultação de informações, o princípio que afirma que 'Um cliente deve saber apenas o que precisa saber'.

**7. Completude e simplicidade (primitividade).**

Alcançar suficiência, completude e simplicidade significa garantir que um componente de software capture todas as características importantes de uma abstração, isto é, cada componente de um sistema de software deve ser suficiente, completo e primitivo.'. Entenda suficiente como o fato de o componente capturar essas características de uma abstração que são necessárias para permitir uma interação significativa e eficiente com o componente. Já a 'Completude' significa que um componente deve capturar todas as características relevantes de sua abstração; enquanto a primitividade significa que todas as operações que um componente pode executar deve ser implementada facilmente.























 

