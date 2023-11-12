## Requisitos

* PHP 8.2 ou superior
* Composer
* GIT

## Como rodar o projeto baixado
Instalar as dependências
```
composer install
```

Duplicar o arquivo ".env.example" e renomear para ".env"

Gerar a chave
```
php artisan key:generate
```

## Sequencia para criar o projeto
Criar o projeto com Laravel
```
composer create-project laravel/laravel laravel-meu-projeto
```

Acessar op diretório onde está o projeto
```
cd laravel-meu-projeto
```

Iniciar o projeto criado com Laravel
```
php artisan serve
```

Acessar o conteúdo padrão do Laravel
```
http://127.0.0.1:8000/
```

## Enviar para o GitHub
Iniciar novo packet com GIT na máquina 
```
git init
```

Definir as configurações do usuário
```
git config --local user.name Cesar
```
```
git config --local user.email cesar@meuemail.com.br
```

Baixar os arquivos do Git
```
git clone --branch <branch_name> <repository_url>
```
```
git clone --branch dev-master https://github.com/celkecursos/laravel-meu-projeto.git
```

Verificar a branch
```
git branch  
```

Baixar as atualizações
```
git pull
```
