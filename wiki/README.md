# Estudos Laravel.

### Até o momento:

- Views (básico)
- Controllers (básico)
- Model (básico)
- Rotas (básico)
- Configuração da database
- CSRF

### Estudando:

- Validações
- Funções do Model

--

### Funções do Model

#### Table::all() 
_Mostra todos os itens da tabela_

#### Table::create() 
_Cria uma tupla baseada em um array associativo_
-> $request->all(), $request->only([]) e $request->except([])
-> Para ser utilizada, precisa ser decidido os campos que serão fillables. 
-> O laravel ignora todos que não sejam $fillable.

#### Table::destroy()
_Exclui uma tupla com base em alguma informação desta_
