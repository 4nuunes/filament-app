# Projeto Laravel com FilamentPHP: Guia Completo

## Introdução

Este projeto tem como objetivo criar um painel administrativo intuitivo, utilizaremos o Laravel como framework principal e o FilamentPHP para construir a interface de usuário.

## Pré-requisitos

* **Docker** e **Docker Compose:** Para rodar o ambiente de desenvolvimento isolado.
* **PHP:** Versão 8.2 ou superior.
* **Composer:** Para gerenciar as dependências do projeto.

## Instalação

### 1. Clone o repositório

Clone este repositório para sua máquina local:

```bash
git clone https://github.com/NunesTec/fillament-app.git
cd fillament-app
```

###  2. Instale as dependências
Instale as dependências do Composer:

```sh
composer install
```

###  3. Configuração do ambiente
Este projeto utiliza o Docker com o Laravel Sail para configurar o ambiente de desenvolvimento. Execute o comando abaixo para iniciar os containers:

```bash
./vendor/bin/sail up -d
```
Isso iniciará os containers do Docker em segundo plano.

###  4. Configuração do ambiente
Copie o arquivo de configuração .env.example para criar o seu próprio .env:

```sh
cp .env.example .env
```
Agora, configure as variáveis de ambiente no arquivo .env conforme necessário (como banco de dados, chave de aplicativo, etc.).

###  5. Gerar a chave do aplicativo
Gere a chave de criptografia para o Laravel:

```sh
./vendor/bin/sail artisan key:generate
```

###  6. Migração do Banco de Dados
Se o seu projeto usar um banco de dados, você pode rodar as migrações com:

```sh
./vendor/bin/sail artisan migrate
```
###  7. Acessar o Aplicativo
Agora, o aplicativo estará rodando dentro dos containers Docker. Você pode acessar o aplicativo no navegador utilizando:


Copiar código
http://localhost/admin

para acessar o painel administrativo crie um usuário para o seu sistema utilizando o comando abaixo
```sh
./vendor/bin/sail artisan make:filament-user
```

#### Pacotes Instalados
Dependências principais:
- FilamentPHP: filament/filament — Framework de administração para Laravel, com uma interface de usuário moderna e flexível.
- Filament Breezy: jeffgreco13/filament-breezy — Pacote para autenticação e controle de usuários, com integração no Filament.
- Laravel Framework: laravel/framework — Framework PHP robusto para o desenvolvimento de aplicações web.
- Flysystem S3: league/flysystem-aws-s3-v3 — Sistema de arquivos para integração com o Amazon S3.
#### Dependências de desenvolvimento:
- Laravel Sail: laravel/sail — Ferramenta de desenvolvimento local utilizando Docker.
- Laravel Debugbar: barryvdh/laravel-debugbar — Ferramenta para depuração da aplicação em desenvolvimento.
- Captainhook: captainhook/captainhook — Sistema de hooks para automatizar tarefas no Git.
- Faker: fakerphp/faker — Biblioteca para gerar dados falsos para testes e populações de banco de dados.
- Pest: pestphp/pest — Framework de testes para Laravel, com uma sintaxe limpa e expressiva.
- Mockery: mockery/mockery — Biblioteca para criação de mocks em testes unitários.

### Usando o Docker e Sail
Este projeto usa Docker e Sail para fornecer um ambiente de desenvolvimento isolado, garantindo que todos os desenvolvedores tenham o mesmo ambiente de execução.

### Comandos úteis:
Subir o ambiente:

```bash
./vendor/bin/sail up -d
```
Parar os containers:
```bash
./vendor/bin/sail down
```

Executar comandos Artisan dentro do container:
```bash
./vendor/bin/sail artisan <comando>
```

Acessar o shell do container:
```bash
./vendor/bin/sail shell
```

### Configuração do Docker
> A configuração do Docker para o Laravel Sail está definida no arquivo docker-compose.yml e o arquivo > de configuração do .env define as variáveis necessárias para configurar os containers corretamente.

### Contribuições
> Se você quiser contribuir para este projeto, fique à vontade para abrir issues ou enviar pull requests. Certifique-se de que os testes estejam passando antes de enviar uma contribuição.


## Licença

Este projeto está licenciado sob a MIT License.
**Free Software, By Alessandronuunes!**
