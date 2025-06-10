# Ambiente de produção Laravel com Docker

O objetivo  é disponibilizar um Ambiente de produção Laravel com Docker

# Tecnologias
- Docker
- Nginx
- PHP
- Composer
- Node
- MySQL
- Postgre

# Instalação

## Requisito
- Docker

## Clone repositório do projeto
```bash
# git clone https://github.com/ldevapp/docker-laravel-production.git
```

## Execute 
Acesse a pasta
```bash
# cd docker-laravel-production
```
Todos os container
```bash
# docker compose up -d
```
Ou execute apenas os continers desejados
```bash
# docker compose up -d nginx php8.2-fpm postgres
```

## Acesso
- Abrir o navegador
- Acesse http://[IP-SERVIDOR ou localhost]:8080
