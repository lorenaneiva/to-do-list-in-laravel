# 📝 To-Do List – Guia de Instalação

Este é o passo a passo para instalar e executar o projeto Laravel To-Do List na sua máquina.

Siga exatamente na ordem e tudo vai funcionar sem erros.

---

## 🚀 Passo 1 – Instalar o XAMPP

Baixe e instale:
https://www.apachefriends.org/pt_br/index.html

Depois, abra o XAMPP e ative apenas o MySQL.

---

## 🚀 Passo 2 – Instalar o Composer

Baixe e instale o Composer seguindo este vídeo (recomendado):
https://www.youtube.com/watch?v=Dimtx-pQPuA

O Composer é o gerenciador de dependências do PHP.

---

## 🚀 Passo 3 – Iniciar o MySQL

Abra o XAMPP e clique em Start no MySQL.

---

## 🚀 Passo 4 – Criar o banco de dados

Abra o phpMyAdmin e crie um banco com este nome EXATO:

to_do_list

---

## 🚀 Passo 5 – Clonar o projeto

1. Abra a pasta onde você quer manter o projeto no VSCode
2. Abra o terminal (Ctrl + `)
3. Clone o repositório:

git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git

---

## 🚀 Passo 6 – Configurar o projeto

IMPORTANTE: o banco to_do_list precisa estar criado antes de rodar o migrate.

1. Entre na pasta do projeto:

cd nome-da-pasta-do-projeto

2. Execute os comandos de configuração:

cp .env.example .env  
composer install  
php artisan key:generate  
php artisan migrate  
php artisan serve

---

## 🚀 Passo 7 – Acessar o sistema

Abra no navegador:

http://localhost:8000

Se essa página abrir, está tudo funcionando! 🎉

---

## ✔️ Pronto!

O projeto está instalado e rodando na sua máquina.
Qualquer dúvida, é só chamar no grupo.
