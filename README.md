# 
To-Do List em Laravel.

Este é um projeto simples de To-Do List desenvolvido em Laravel, criado com o objetivo de fixar os conhecimentos iniciais no framework, incluindo:
Rotas, Controllers, Validações,Views com Blade,Migrations e Models.

O foco deste projeto é aprender a estrutura do Laravel na prática, entendendo o fluxo completo entre Model → Controller → View → Banco de Dados.

⭐ Funcionalidades

Criar tarefas
Listar tarefas
Editar tarefas
Excluir tarefas
Marcar tarefa como concluída / não concluída
Interface simples usando Blade
Validação de formulários

🧠 Objetivo do Projeto

Este projeto foi desenvolvido como parte dos estudos iniciais do framework Laravel, servindo como base para:

Aprender organização de pastas,
Entender o ciclo de requisição HTTP no Laravel,
Criar CRUDs completos,
Usar validações,
Configurar banco de dados,
Usar o artisan na prática

Ele não possui foco em design, mas sim em lógica e estrutura profissional.

🛠️ Tecnologias Utilizadas

PHP 8+
Laravel 11
MySQL
Composer
Blade Templates
HTML/CSS básico

📝 Guia de Instalação

Este é o passo a passo para instalar e executar o projeto Laravel To-Do List na sua máquina.

Siga exatamente na ordem e tudo vai funcionar sem erros.

🚀 Passo 1 – Instalar o XAMPP

Baixe e instale:
https://www.apachefriends.org/pt_br/index.html

Depois, abra o XAMPP e ative apenas o MySQL.

🚀 Passo 2 – Instalar o Composer

Baixe e instale o Composer seguindo este vídeo (recomendado):
https://www.youtube.com/watch?v=Dimtx-pQPuA

O Composer é o gerenciador de dependências do PHP.

🚀 Passo 3 – Iniciar o MySQL

Abra o XAMPP e clique em Start no MySQL.

🚀 Passo 4 – Criar o banco de dados

Abra o phpMyAdmin ou o MySQL Workbench e crie um banco com este nome EXATO:

to_do_list

🚀 Passo 5 – Clonar o projeto

Abra a pasta onde você quer manter o projeto no VSCode

Abra o terminal (Ctrl + `)

Clone o repositório:

git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git

🚀 Passo 6 – Configurar o projeto

⚠️ IMPORTANTE: o banco to_do_list precisa estar criado antes de rodar o migrate.

Entre na pasta do projeto:

cd nome-da-pasta-do-projeto


Execute os comandos de configuração:

cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve

🚀 Passo 7 – Acessar o sistema

Abra no navegador:

http://localhost:8000


Se essa página abrir, está tudo funcionando! 🎉

✔️ Pronto!