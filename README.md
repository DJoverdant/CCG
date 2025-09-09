<img width="1905" height="812" alt="image" src="https://github.com/user-attachments/assets/7d7cc722-279e-4dbc-adc0-f8721a430a94" />

# CCG - Sistema de Adoção e Voluntariado

Este projeto é um sistema web desenvolvido em **PHP + MySQL**, com frontend em **HTML, CSS e JavaScript**, que permite gerenciar adoção de animais, cadastro de voluntários e autenticação de usuários.

## Estrutura do Projeto

* `BD/ccg.sql` → Script para criação e população do banco de dados
* `CCG/` → Arquivos principais da aplicação

  * `index.html` → Página inicial
  * `login.html` → Login de usuários
  * `signup.html` → Cadastro de usuários
  * `adocao.html` → Página de adoção
  * `voluntariar.html` → Cadastro de voluntários
  * `css/` → Estilos da aplicação
  * `js/` → Scripts JavaScript
  * `php/` → Lógica do backend em PHP

## Como Rodar o Projeto

Antes de rodar o projeto, instale:

* [XAMPP](https://www.apachefriends.org/) (contém Apache + MySQL + PHP)

1. **Clonar ou extrair o projeto:**
   Coloque a pasta `CCG-main` dentro do diretório `htdocs` do XAMPP (ou `www` do WAMP).

2. **Configurar o banco de dados:**

   * Inicie o Apache e MySQL no XAMPP/WAMP.
   * Acesse `http://localhost/phpmyadmin`.
   * Crie um banco de dados chamado `ccg`.
   * Importe o arquivo `BD/ccg.sql`.

3. **Configurar conexão com o banco:**
   Verifique o arquivo `CCG/php/config.php` e ajuste caso seu usuário/senha MySQL sejam diferentes:

   ```php
   <?php
   $host = "localhost";
   $user = "root"; // seu usuário
   $pass = "";     // sua senha (padrão vazio no XAMPP)
   $db   = "ccg";
   $conn = new mysqli($host, $user, $pass, $db);
   if ($conn->connect_error) {
       die("Erro de conexão: " . $conn->connect_error);
   }
   ?>
   ```

4. **Rodar o sistema:**

   * Abra o navegador e acesse:

     ```
     http://localhost/CCG-main/CCG/
     ```

5. **Funcionalidades:**

   * Cadastro e login de usuários
   * Cadastro de voluntários
   * Página de adoção de animais
   * Painel administrativo básico

