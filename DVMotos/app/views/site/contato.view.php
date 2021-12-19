<!DOCTYPE html>

<html>

    <head>
      <title>Contato | DVMotos Store</title>

        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../public/css/stylesGabriel.css">

        <link rel="shortcut icon" href="../../../public/assets/favicon-circulo2.png">
    </head>

    <body>

      <?php require('navbar.php'); ?>

      <div class = "conteudo-pagina">
        <div class="instrucoes">
          <h1>Contato</h1>
          <p>Como entrar em contato com a nossa equipe? Preencha os campos seguintes, sua resposta chegará antes do que você imagina!</p>
          <p>Fique tranquilo, suas informações estão seguras!</p>
        </div>
              
        
        <div class="entrar-contato">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Nome" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Nome</label>
          </div>
    
    
          <div class="form-floating">
            <textarea class="form-control" placeholder="E-mail" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">E-mail</label>
          </div>
    
    
          <div class="form-floating">
            <textarea class="form-control" placeholder="Assunto" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Assunto</label>
          </div>
    
    
          <div class="form-floating">
            <textarea class="form-control" placeholder="Mensagem" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Mensagem</label>
          </div>
    
    
          <div class="form-floating">
            <textarea class="form-control" placeholder="Telefone" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Telefone</label>
          </div>
        </div>


        <div class="mapa">
          <h1>Onde estamos</h1>
          <iframe class="local" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3705.0559566221455!2d-43.37300671602066!3d-21.778095246070144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b9fc81b22cb%3A0x5f6adc6fc7d3f365!2sInstituto%20de%20Ci%C3%AAncias%20Exatas%20-%20Pr%C3%A9dio%20Antigo%20-%20Bloco%20%C3%9Anico!5e0!3m2!1spt-BR!2sbr!4v1635468199228!5m2!1spt-BR!2sbr" width="500px" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


        <div class="telefone">
          <h3>Telefone para contato:<h3> 
          <h3>(XX) XXXXX-XXXX</h3>
        </div>
      </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>