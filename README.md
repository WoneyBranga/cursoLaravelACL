Git para registro dos estudos de ACL baseado no treinamento gratuíto da EspecializaTi disponibilidado no youtube a partir do link: [Treinamento ACL Laravel](https://www.youtube.com/playlist?list=PLVSNL1PHDWvTch1r8uTSluw9SkzSA9cDJ);

## Aula 04

Nesta aula é apresenado modo de se habilitar modulos de autenticação no laravel 
Acontece que curso baseado em lara5.2 e estamos com 6.12 como corrente.

realizados ajustes conforme segue:
```bash
# de:
# php artisan make:auth
# para: 
composer require laravel/ui
php artisan ui vue --auth
npm install && npm run dev
```

criação das migrations
```bash
#php artisan make:model Notice -m
php artisan make:model Post -m
```
