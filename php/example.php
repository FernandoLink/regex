$regexp = '~(\d\d)(\w)~';
$alvo = '11a22b33c';
$achou = preg_match($regexp, $alvo, $match);
echo $achou;
print_r($match);
$achou = preg_match_all($regexp, $alvo, $match);
echo $achou;
print_r($match);
echo $match[2][2];
$achou = preg_match_all($regexp, $alvo, $match, PREG_OFFSET_CAPTURE);
print_r($match);

$string = 'Setembro 21';
$regex = '~(\w+)\s(\d+)~';
$novoTexto = '$2 de $1';
$resultado = preg_replace($regex, $novoTexto, $string);
echo $resultado; // 21 de Setembro

$string = '2007-12-31';
$regex = '~(\d{4})-(\d{2})-(\d{2})~';
$novoTexto = '$3-$2-$1';
$resultado =  preg_replace($regex, $novoTexto, $string);
echo $resultado;

$string = '31-12-2007';
$regex = '~-~';
$novoTexto = '/';
$resultado =  preg_replace($regex, $novoTexto, $string);
echo $resultado; // 31/12/2007