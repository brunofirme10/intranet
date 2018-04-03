##Instruções para criar um módulo

- Cria a migration da tabela
```
php artisan make:migration tb_tabela
```
- Configure a migration, com os dados para criação da tabela no banco

- Cria o arquivo da model
```
php artisan make:model Nome_da_sua_model
```
- Configure a model, com seus respectivos campos
- Roda o migrate, para refletir no banco a migration criada
```
php artisan migrate
```