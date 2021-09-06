### <center> Fundamentos de Design de Software: Acoplamento, Coesão, Decomposição e Encapsulamento
<div align="justify">

### Definição de Projeto de Software

Em resumo, o primeiro objetivo de projeto de software é decompor um problema em partes menores. Além disso, deve ser possível implementar tais partes de forma independente.

Brooks defende que um sistema não pode ser um amontoado de funcionalidades, sem coerência e coesão entre elas. Integridade conceitual é importante porque facilita o uso e entendimento de um sistema por parte de seus usuários. 

### Coesão

A implementação de qualquer classe deve ser coesa, isto é, toda classe deve implementar uma única funcionalidade ou serviço. Especificamente, todos os métodos e atributos de uma classe devem estar voltados para a implementação do mesmo serviço. Uma outra forma de explicar coesão é afirmando que toda classe deve ter uma única responsabilidade no sistema.

**Vantagens:**
* Facilita a implementação de uma classe, bem como o seu entendimento e manutenção.
* Facilita a alocação de um único responsável por manter uma classe.
* Facilita o reúso e teste de uma classe, pois é mais simples reusar e testar uma classe coesa do que uma classe com várias responsabilidades.

**Separação de interesses:** 

Para tal, temos as seguintes recomendações:
* (1) uma classe deve ter uma única responsabilidade; 
* (2) uma classe deve implementar um único interesse; 
* (3) uma classe deve ser coesa.

**Acoplamento**

O acoplamento pode ser de grande utilidade, principalmente quando ocorre com a interface de uma classe estável que presta um serviço relevante para a classe de origem. Já o acoplamento ruim deve ser evitado, pois é um acoplamento não mediado por interfaces. Mudanças na classe de destino do acoplamento podem facilmente se propagar para a classe de origem.

**Acoplmento aceitável:** 

* Classe A depende de uma classe B:
* Mas a classe B possui uma interface estável
* Classe A somente chama métodos da interface de B


**Acoplamento ruim:** 

* A Classe A depende de uma classe B:
* Mas interface da classe B é instável ou então a dependência não ocorre via interface de B;






  
### 📌 Referências

[Material disponibilizado pelo professor](https://docs.google.com/presentation/d/1xiYYRU85Hxv2crDgkiw3Ldo4Th7dN0ROzTnBv_yYKDw/edit#slide=id.ged442a0007_1_0)