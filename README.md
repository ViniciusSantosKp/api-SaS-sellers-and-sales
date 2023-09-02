# Api tray sales and sellers

Projeto criado utilizando PHP/Laravel e Kool com o objetivo de criar uma api para:
 - cadastrar vendedores e vendas.
 - Listar Vendedores
 - Listar vendas totais.
 - Listar vendas de vendedores específicos.


O motivo de usar o Kool.dev no projeto é simplificar as configurações docker e diminuir a necessidade de muitos comandos.
as configurações do docker estão nos arquivos docker-compose.yml e Dockerfile normalmente.

### Environment Requirements

- **[Instalar o Docker](https://docs.docker.com/get-docker/)**
- **[Instalar Docker compose v2](https://docs.docker.com/compose/install/)**
- **[Kool](https://kool.dev/)**


### Setup

**Clone o repositório no diretório à sua escolha**
Clone o projeto para o diretório de sua escolha.
Em seguida rode os seguintes comandos no terminal (dentro do diretório do projeto)

```bash
    kool run setup
    kool run artisan migrate
```
Para verificar os comandos disponíveis do Kool, acessar o arquivo Kool.yml

Para consumir essa api, foi criado um outro projeto. Pararodar os dois localmente, é necessário rodar o seguinte comando no terminal (no diretório desse projeto)

```bash
    kool run artisan serve --port=8989
```
acessar o localhost na porta 8989 que o serve utiliza.

Para acessar as funcionalidades de fila, schedule e emails localmente, além de configurar alguma ferramenta de email à sua escolha (como por exemplo o mailtrap) os seguintes comandos serão necessários em terminais distintos:

```bash
    kool run artisan queue:work
    kool run artisan schedule:work
```

Lista de endpoints e payloads esperados:
- **[Documentação API](https://documenter.getpostman.com/view/17242571/2s9Y5cuLqQ)**
