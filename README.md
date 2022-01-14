# PDWEL-IFA

### Instruções de *Deploy*

#### Pré-requisitos:
* Possuir o [XAMPP](https://www.apachefriends.org/pt_br/download.html) instalado;
* Possuir o [MySQL](https://www.mysql.com/downloads/) instalado;

#### Executar a aplicação:
1. Fazer o clone deste repositório em sua máquina (para possível referência: o projeto foi desenvolvido dentro do seguinte caminho: C:\xampp\htdocs\PDWEL-IFA);
2. Dentro do XAMPP, inicializar o Apache e o MySQL;
3. Abrir e executar os aquivos "Create_Database.php" e "Create_Table.php", respectivamente. Caso seja necessário, altere as informações de servername e porta;
   3.1. Caso exista alteração no servername ou porta, os arquivos: Insert.php, Delete.php, Update.php e Select.php também devem ser alterados com as novas informações. 
4. Acessar pelo navegador o endereço 'http://localhost/PDWEL-IFA/'.
