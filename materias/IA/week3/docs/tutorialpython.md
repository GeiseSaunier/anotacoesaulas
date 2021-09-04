### Conceito de variável em Python


* O conceito de variável em Python é representado sempre por um objeto.
* No Python as variáveis armazenam endereços de memória e não os valores.
* Uma variável não tem um tipo fixo, mas sim apenas o tipo do conteúdo
* Para atribuir nomes as variáveis, pode-se utilizar letras, o caractere de sublinhado _ e números.
* Os comentários em Python são representados pelo símbolo # e colocado em cada linha.

~~~python
'''
valor = 10
comentário
'''

#pi = 3.14

x = [1,2,3]
y = x
x.append(4)
print(y)
~~~

### Tipos de váriáveis:

**inteiro:** para números inteiros;

**float:** representa números reais e que possuem sinal de expoente (e ou E).

**bool:** os valores do tipo bool podem representar dois valores completamente distintos: True (igual ao int 1) e False (igual ao int 0) para, respectivamente, verdadeiro e falso. Exemplo: a = True e b = False.

**none type:** é o tipo de None, uma constante embutida do Python que, assim como True e False, é frequentemente utilizada para representar a ausência de um valor, similar ao null na linguagem C e derivadas. Exemplo: a = None (o mesmo que null em Java).

**string:** para atribuirmos a uma variável uma referência do tipo string, basta que coloquemos entre aspas simples, duplas ou triplas.

### Entrada de dados

A leitura de dados do teclado é feita através da função input.

**Ex:** nome = input("Digite seu nome: ")

### Comandos de decisão

IF, ELIF, ELSE

Python não usamos as chaves { } para iniciar e finalizar um bloco de instruções. Para que você delimite onde cada bloco começa e acaba, basta identar o código, como mostra abaixo:

~~~python
dados = int(input("Você tem quantos anos? "))

if dados == 18:
  print("Você tem 18 anos")
elif dados > 18:
  print("Você tem mais de 18 anos")
else:
  print("Você é menor de idade")
~~~

### Função range( )

Existe também a função range(start, stop, step), que retorna um array, ou seja, elementos que são representados em uma sequência.

**Ex:** 
~~~python
print(list(range(10))) # [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
print(list(range(5, 10))) # [5, 6, 7, 8, 9]
~~~

### Exceções

As exceções podem ser tratadas utilizando o recurso do try...catch

~~~python
try:
  print(1 + 'st try')
except:
   print("Isto é uma exceção")
~~~

### Listas 

Uma lista é um conjunto de valores indexados por um número inteiro chamado de índice, que se inicia em zero.

Os elementos contidos em uma lista podem ser de qualquer tipo, até mesmo outras listas, e não precisam ser todos do mesmo tipo. Uma lista é delimitada por colchetes e seus elementos separados por vírgulas.

**Ex:**

~~~python
lista = [1, 2, 3]
print ("Tamanho de lista:", len(lista))
lista[0]=9

print("-----------")
for i in range(len(lista)):
  print(lista[i])

print("-----------")
for i, x in enumerate(lista):
  print("index: %s -> value: %s" %(i,x))
~~~

### Ordenação

~~~python
frutas=['laranja','banana','abacaxi']

frutas.sort()

print(frutas)

frutas[0]='framboesa';

for item in frutas:
  print(item.capitalize())
~~~

### Tuplas

Há outro tipo em Python chamado tupla (tuple), que é similar a uma lista, exceto por ser imutável. Sintaticamente, uma tupla é uma lista de valores separados por vírgulas e com aspas simples.

~~~python
frutas=('laranja','banana','abacaxi')

print(frutas)
#frutas[0]='framboesa';
for item in frutas:
  print (item.capitalize())
~~~

### Dicionário

Os dicionários em Python são estruturas de dados que permitem “traduzir” uma chave para um valor, ou seja, são estruturas de dados que implementam mapeamentos.

### Matriz com lista 

Em Python o conceito de arrays multidimensionais não existe. O que existe é uma alternativa, que são os arrays encadeados, ou seja, cada elemento do array corresponde a outro array, ou como uma list de list em Java.

### Funções

Assim como em outras linguagens, uma função pode receber alguns parâmetros e devolver um resultado. A sintaxe inicia-se com a palavra def, seguida do nome da função e dos parênteses que podem conter seus parâmetros.

**Ex:**

~~~python
def fib(n):  # return Fibonacci series up to n
    """Return a list containing the Fibonacci series up to n."""
    result = []
    a, b = 0, 1
    while a < n:
        result.append(a)    # see below
        a, b = b, a+b
    return result, a

# Now call the function we just defined:
fib(2000)
~~~

### Classes

~~~python
class Pessoa:
    def __init__(self, nome='', idade=0):
        self.nome = nome
        self.idade = idade

    def setNome(self, nome):
        self.nome = nome

    def setIdade(self, idade):
        self.idade = idade

    def getNome(self):
        return self.nome

    def getIdade(self):
        return self.idade

if __name__ == "__main__":
  pessoa = Pessoa()

  pessoa.setNome("Iano")

  print(pessoa.nome)
~~~

