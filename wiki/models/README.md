# Models

Utilizado para simular objetos, peças, ou pessoas envolvidos nas regras de negócio reais do projeto. Quando criados pelo pelo _artisan_, ficam atrelados às suas respectivas tabelas no banco de dados. Também há possibilidade de criá-los manualmente.

### Criando Models

``` php artisan make:model ModelSample ```

### Funções do Model

#### Table::all() 
_Mostra todos os itens da tabela_
- **Parâmetros**:
Nenhum (até o momento)

#### Table::create() 
_Cria uma tupla baseada em um array associativo_

- **Parâmetros**:
-> \$request->all(), \$request->only([]) e \$request->except([])
<br>
- **Outras informações**: 
-> Para ser utilizada, precisa ser decidido os campos que serão fillables. 
-> O laravel ignora todos que não sejam $fillable.

#### Table::destroy()
_Exclui uma tupla com base em alguma coluna desta_

- **Parâmetros**: 
O mais comum é ID