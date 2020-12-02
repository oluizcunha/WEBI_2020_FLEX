<?php
 
 try {
    $conexao = new PDO("mysql:host=localhost; dbname=minhafazenda", "root", "docker");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    echo "Erro na conexão:" . $erro->getMessage();
}
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agenda de contatos</title>
    </head>
    <body>
        <form action="?act=save" method="POST" name="form1" >
          <h1>Agenda de contatos</h1>
          <hr>
          <input type="hidden" name="id" />
          Nome:
          <input type="text" name="nome" />
          E-mail:
          <input type="text" name="email" />
          Celular:
         <input type="text" name="celular" />
         <input type="submit" value="salvar" />
         <input type="reset" value="Novo" />
         <hr>
       </form>
    </body>
</html>
?>