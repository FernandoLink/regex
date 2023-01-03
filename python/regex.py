import re
regexp = r'(\d\d)(\w)'
target = '11a22b33c'
result = re.search(regexp, target)
print(result.group())
print(result.group(0))
print(result.group(1))
print(result.group(2))
print(result.start())
print(result.end())
results = re.finditer(regexp, target)
for resultado in results:
    print('{0} | {1} | {2} [{3},{4}]'.format(resultado.group(0), resultado.group(1), resultado.group(2), resultado.start(), resultado.end()))
    
alvo = '2007-12-31'
regex = '\s-\s'
novotexto = ': '
alura = 'Alura - Regex'
resultado = re.sub(regex, novotexto, alura)
print(resultado)


regex = '-'
novotexto = '/'
alvo = '2007-12-31'
resultado = re.sub(regex, novotexto, alvo)
print(resultado)