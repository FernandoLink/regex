# regex
Tutorial de Expressões Regulares

.   - qualquer caracter exceto quebra de linha;
\.  - somente ponto;
\d  - qualquer dígito de 0 a 9;
\w  - qualquer caracter alfanumérico e underscore;
\s  - qualquer espaço;
\D  - negação do \d;
\W  - negação do \w;
\S  - negação do \s;
\t  - tab;
\n  - linefeed;
\r  - carriage return;
[]  - lista;
[^] - negação da lista;
?   - opcional (0 ou 1);
*   - 0 ou mais;
+   - 1 ou mais (igual ao asterisco);
{}  - repetições da entidade anterior;
^   - começo da linha;
$   - fim da linha;
\b  - borda de palavra;
()  - grupo;
\1  - retrovisor;

Não gulosos
*?     - zero ou mais;
+?     - um ou mais;
??     - zero ou um; 
{n,m}? - mínimo n, máximo m;

???
(?#texto) - comentário;
(?:ER)    - não é guardado na contagem de grupos;
(?=ER)    -
(?!ER)    - 
etc

------------------------------------------------------------------------
VIM

:help regex or :h regex
:help :s_flags
:set hls is  -  hlsearch, deixa highlight o texto casado;
:magic       - opção-padrão a mais aconselhável de usar;
:s/a/b/g     - troca todos os a por b na linha atual;
:1,5s/^/#    - comenta as cinco primeiras linhas;
:.,$s/^/#/   - comenta até o final do arquivo;
:%s/^.//     - apaga a primeira letra de cada linha;
:%s/^./\u&/c - torna maiúsculo o primeiro caractere;

------------------------------------------------------------------------
FIND

find . -name 'index.html'
find . -name '*.html'
find . -not -name '*.html'
find . -regex 'RE'
find . -iregex - ignorar maiúsculas e minúsculas
find . -name -type * - somente arquivos

 -regextype     Metacaracteres (GNU/Linux)
emacs           .  ^  $  *  +  ?  |  [ ]      \(\)  \1
posix-basic     .  ^  $  * \+ \? \|  [ ] \{\} \(\)  \1
posix-extended  .  ^  $  *  +  ?  |  [ ]  { }  ( )  \1
posix-awk       .  ^  $  *  +  ?  |  [ ]  { }  ( )  \1
posix-egrep     .  ^  $  *  +  ?  |  [ ]  { }  ( )  \1

------------------------------------------------------------------------
GREP

grep '^r' * - procura nos arquivos as linhas que começam com r
grep -P - regex do perl mais avançado
grep -o - mostra somente o texto casado
grep -v - inverter a expressão
grep -w - forçar o casamento de uma palavra inteira
grep -x - para casar uma linha inteira

