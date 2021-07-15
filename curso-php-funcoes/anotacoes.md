#  Interpolação

**intercalação de palavras e variáveis em uma string**, nós podemos interpolar valores dentro de um array associativo em uma string, usamos o **nome do valor do valor sem as aspas simples**, ou então **dentro de chaves, mas com aspas simples** , como podemos ver no exemplo



#  separando funções em outro arquivo

também vimos que por **boas praticas**, é importante separarmos partes do código em outro arquivo, como as funções.



#  include vs require

mas quando separamos o código em outro arquivo, nós temos que "importar" o mesmo para o arquivo principal, para isso usamos o **include e o require**.

o **include**, tenta incluir o arquivo, mas caso não consiga pois não achou o mesmo, ele da um aviso mas continua a execução do código principal.

já o **require**, ele tenta incluir o arquivo e caso não consiga, ele da um erro e não continua a execução do arquivo.

também temos o **require_once**, que tem a mesma propriedade do require, mas ele apenas importa esse arquivo uma vez, então caso ele já tenha sido importado ele não importa novamente

