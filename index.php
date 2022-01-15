<?php
require_once "model/Livro.php";

if(isset($_GET["id"])){
    $livro = Livro::getPorId($_GET["id"]);
    
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8" lang="PT-BR">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="style3.css" rel="stylesheet" type="text/css" />
    </head>  
    <body>
        <script>
        function validar1(){
    var titulo = document.getElementById("titulo");
    var autores = document.getElementById("autores");
    var paginas = document.getElementById("paginas");
    var idioma = document.getElementById("idioma");
    var genero = document.getElementById("genero");
  
    
   
    if (titulo.value == "") {
    alert("titutlo não informado");
    titulo.focus();
    return;
    }
   if (autores.value == "") {
    alert("Autores não informado");
    autores.focus();
    return;
  }
    if (paginas.value == "") {
    alert("Quantidade de páginas não informada");
    paginas.focus();
    return;
  }
   if (idioma.value == "") {
    alert("Idioma não informado");
    idioma.focus();
    return;
  }
     if (genero.value == "") {
    alert("Gênero não informado");
    genero.focus();
    return;
    }
    alert("Item Cadastrado com sucesso");
}



        </script>
       
    <div class="container">
     <div class="card">
      <header> 
      <h5  id="color-h5" class="card-header" >Cadastro Livros </h5>
      </header>
           <div class="card-body" >
        	<form action="ws/salvar-livros.php" name="form1">
                    <div class="mb-3">
                        
                        <label>Título:</label>
                        <input type="text" class="form-control" placeholder="Digite o título" name = "titulo" id="titulo"  value="<?= 
            isset($livro) ? $livro->getTitulo() : ''; ?>"  required >
                    
                        </div>
                    <div class="mb-3">
                        <label >Autores:</label>
                        <input type="text" class="form-control" placeholder="Digite o nome dos autores" name="autores" id="autores" value="<?= 
            isset($livro) ? $livro->getAutores() : ''; ?>" required>
                        
                    </div>
                    <div class="mb-3">
                        <label >Quantidade de Páginas:</label>
                        <input type="number"  class="form-control" placeholder="Digite a quantidade de páginas" name="paginas" id="paginas" value="<?= 
            isset($livro) ? $livro->getPaginas() : ''; ?>" required>
                        
                    </div>
                    <div class="mb-3">
                        <label >Idioma:</label>
                        <input type="text" class="form-control" placeholder="Digite o idioma" name="idioma" id="idioma"  value="<?= 
            isset($livro) ? $livro->getIdioma() : ''; ?>" required>
                        
                    </div>
                    <div class="mb-3">
                        <label >Gênero:</label>
                        <input type="text" class="form-control" placeholder="Digite o gênero" name="genero" id="genero" value="<?= 
            isset($livro) ? $livro->getGenero() : ''; ?>" required>
                        
                    </div>
                   
                        
                    <input type="hidden" name="id"
        value="<?= 
            isset($livro) ? $livro->getId() : ''; ?>">
        <input type="submit"
        value="Salvar" 
        class="btn btn-success" onclick="validar1()">
                    
                    
                </form>
    </div>
         
       </div>
        </div>
        <p></p>
        <footer id="footer"> Componentes: Adrielle Hávila, Fernanda Karen, Lucas Gomes, Nadja Samara, Wemilly Cordeiro </footer>
   



        </body>
    
   
</html>
