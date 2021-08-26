# <center>Programação para computação móvel
<div align="justify">

**Aula 02** - Arquitetura Android

### Pilha de Software

* Uma pilha de software pode ser definida como um grupo de programas que trabalham em conjunto para produzir um resultado ou atingir um objetivo comum. Para que esse objetivo em comum seja atingido, a utilização de uma pilha de software traz consigo alguns benefícios, sendo eles:

    * Fornecem soluções predefinidas para problemas e às vezes são as melhores soluções.
    * Fornecem o software mínimo necessário para atingir os objetivos pretendidos.
    * Pilhas de software podem ser instaladas em sistemas individuais ou adicionadas a modelos de computador para instalação automática.

### Características da arquitetura android

 * Segundo (Lecheta, 2009), a arquitetura Android é divida em camadas, onde cada parte é responsável por gerenciar os seus respectivos processos.

### As camadas estão divididas em:

* **Camada de aplicações:** onde estão localizados todos os aplicativos que são executados sobre o sistema operacional, tais como, cliente de SMS e MMS, cliente de email, navegador, mapas, calculadora, dentre outros.
* **Camada de Bibliotecas:** é a camada que possui as bibliotecas C/C++ que são utilizadas pelo sistema, e também bibiliotecas de multimídia, visuzalização de camdas 2D e 3D, funções para navegadores web, funções de aceleradores de hardware, renderização 3D, funções para gráficos, fontes bitmap e vetorizadas e funções de acesso a banco de dados SQlite.
* **Camada de Runtime:** nessa camada se instancia a máquina virtual Dalvik, criada para cada aplicação, executada no Android. Essa máquina virtual é a melhor referente a desempenho, maior integração com a nova geração de hardware e projetada como executar vários processos paralelamente.
* **Camada de Kernel Linux:** o núcleo do sistema operaional Android é derivado do kernel 2.6 do Linux, herdando diversas características dessa plataforma. Parte importante que se utiliza do Linux na concepção do Google Android é o de controle de processos, gerenciarem memória, threads, protocolos de rede, modelo de drives e a segurança dos arquivos.

### Kernel Linux Android



### Camada HAL

* O principal objetivo de um HAL é ocultar diferentes arquiteturas de hardware do sistema operacional, fornecendo uma interface uniforme para os periféricos do sistema, ou seja, é uma divisão lógica de código que serve como uma camada de abstração entre o hardware físico de um computador e seu software. Ele fornece uma interface de driver de dispositivo que permite que um programa se comunique com o hardware. Para tal, a HAL fornece alguns benefícios:
* Permite que os aplicativos extraiam o máximo de desempenho possível dos dispositivos de hardware;
* Habilita o funcionamento do sistema operacional independentemente da arquitetura de hardware;
* Habilita drivers de dispositivo para fornecer acesso direto a cada dispositivo de hardware, o que permite que os programas sejam independentes do dispositivo;
* Permite que programas de software se comuniquem com os dispositivos de hardware em um nível geral;
* Facilita a portabilidade;

### Android Runtime

Quando construímos nosso aplicativo e geramos APK, parte desse APK são arquivos .dex . Esses arquivos contêm o código-fonte de nosso aplicativo, incluindo todas as bibliotecas que usamos no código de baixo nível projetado para um intérprete de software - o bytecode .

Quando um usuário executa nosso aplicativo, o bytecode escrito em arquivos .dex é traduzido pelo Android Runtime em código de máquina - **um conjunto de instruções que pode ser entendido diretamente pela máquina e é processado pela CPU.** Vale ressaltar que o Android Runtime também gerencia memória e coleta de lixo. 
