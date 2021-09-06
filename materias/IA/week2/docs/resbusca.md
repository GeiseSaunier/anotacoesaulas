### Resolução de problemas por meio da busca


Este capítulo introduziu métodos que um agente pode usar para selecionar ações em ambientes
determinísticos, observáveis, estáticos e completamente conhecidos. Em tais casos, o agente pode construir sequências de ações que alcançam seus objetivos; esse processo é chamado de **busca**.

* Antes de um agente poder começar a procurar soluções, ele deve **identificar um objetivo** e
**formular um problema bem definido**.
* Um problema consiste em **cinco partes:** o **estado inicial**, um **conjunto de ações**, um **modelo de transição** descrevendo os resultados dessas ações, **uma função teste de objetivo** e **uma função custo de caminho**. O ambiente do problema é representado por um espaço de estados. Um
caminho pelo espaço de estados a partir do estado inicial até um estado objetivo é uma solução.
* Algoritmos de busca tratam estados e ações como atômicos: sem considerar qualquer estrutura
interna que possam ter.
* Um algoritmo genérico de BUSCA-EM-ÁRVORE considera todos os caminhos possíveis para
encontrar uma solução, enquanto um algoritmo de BUSCA-EM-GRAFO evita a consideração de
caminhos redundantes.
* Os algoritmos de busca são analisados em termos de completeza, otimização, complexidade de
tempo e complexidade de espaço. A complexidade depende de b, o fator de ramificação no
espaço de estados, e de d, a profundidade da solução mais rasa.

Métodos de busca não informados têm acesso apenas à definição do problema. Os algoritos
básicos são os seguintes:
* A **busca em largura** seleciona para expansão os nós mais rasos; ela é completa, ótima para
passos de custo unitário, mas tem complexidade de tempo exponencial.
* A **busca de custo uniforme** expande o nó com o menor custo de caminho, g(n) e é ótima para
passos de custos genéricos.
* A **busca em profundidade** expande o nó não expandido mais profundo. Ela não é completa
nem ótima, mas tem complexidade espacial linear. A busca em profundidade limitada
adiciona um limite em profundidade.
* A busca de **aprofundamento iterativo** chama a busca em profundidade com limites
crescentes de profundidade até encontrar um objetivo. Ela é completa, ótima para passos de
custo unitário, tem complexidade de tempo comparável à busca em largura e tem
complexidade de espaço linear.
* A **busca bidirecional** pode reduzir enormemente a complexidade de tempo, mas nem sempre é
aplicável e pode exigir muito espaço.

Os métodos de busca informada podem ter acesso a uma função heurística h(n) que estima o
custo de uma solução a partir de n.

* O algoritmo geral de busca de melhor escolha seleciona um nó para a expansão de acordo
com uma função de avaliação.
* A busca gulosa de melhor escolha expande os nós com h(n) mínimo. Não é ótima, mas pode
ser eficiente.
* Uma busca A* expande os nós com f(n) = g(n) + h(n) mínimo. A* é completa e ótima, desde que h(n) seja admissível (para a BUSCA-EM-ÁRVODE) ou consistente (para a BUSCA-EM- GRAFO). A complexidade de espaço do A* ainda é proibitiva.
* RBFS (busca recursiva de melhor escolha) e SMA* (A* de memória limitada simplificada) são algoritmos robustos, de busca ótima, que utilizam porções limitadas de memória; dado um tempo suficiente, podem resolver os problemas que A* não pode resolver, por ficar sem memória.
* O desempenho de algoritmos de busca heurística depende da qualidade da função heurística.
Pode-se, por vezes, construir uma boa heurística, através do relaxamento da definição do
problema, armazenando os custos de solução pré-computados dos subproblemas em um banco de
dados de padrões ou aprendendo a partir da experiência com uma classe de problemas.