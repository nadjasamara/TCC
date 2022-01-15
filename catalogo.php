
<?php
require_once "model/Livro.php";

if(isset($_GET["id"])){
    $Livro = Livro::getPorId($_GET["id"]);
    //print_r($bebida);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Catálogo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link href="styleCatalogo.css" rel="stylesheet" type="text/css" />

        
    </head>
    <body>
        <header> 
      <h5  id="color-h5" class="card-header" >Catálogo de Livros </h5>
      </header>
       
      <main class="text-center">
    <div class="card" >
    
    <?php
        $livro = Livro::listarTodos();
        
        foreach($livro as $b):
    ?>
     <div class="card card-w
            d-inline-block m-2 text-left">
        <div class="card-body">
    <h5 class="card-title"> <?php echo $b->getTitulo(); ?></h5>
<div class="card-text">
        <p>Autores: <?php echo $b->getAutores(); ?></p>
        <p> Números de páginas: <?php echo $b->getPaginas(); ?></p>
        <p>Idioma do livro: <?php echo $b->getIdioma(); ?></p>
            <p>Gênero do livro:  <?php echo $b->getGenero(); ?></p>
                
           
  </div>
  <a href="index.php?id=<?= $b->getId(); ?>"
    class="card-link">
    Editar
</a>
<a href="ws/deletar-livros.php?id=<?= $b->getId(); ?>"
    class="card-link" onclick="myFunction()">
    Deletar
</a>
<script>
   function myFunction() {
  confirm("Tem certeza que deseja excluir?");
}
</script>
  </div>
</div>
</div>
<?php 
   endforeach;
   ?>
</main>
   
               <div class="footer">
               <footer id="footer"> Componentes: Adrielle Hávila, Fernanda Karen, Lucas Gomes, Nadja Samara, Wemilly Cordeiro </footer>
               </div>
    </body>
</html>
