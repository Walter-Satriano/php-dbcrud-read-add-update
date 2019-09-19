<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="item-template" type="text/x-handlebars-template">
    </script>

    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">
    <!-- JS: MY SCRIPT -->
    <script src="script.js" charset="utf-8"></script>

    <title>CRUD BEVANDE</title>
  </head>
  <body>

    <div class="title">
      <h1>BEVANDE</h1>
    </div>

    <div class="add_container">
      <input class="nome_bev" type="text" name="" value="" placeholder="Inserisci nome">
      <input class="marca_bev" type="text" name="" value="" placeholder="Inserisci marca">
      <input class="prezzo_bev" type="text" name="" value="" placeholder="Inserisci prezzo">
      <input class="scad_bev" type="text" name="" value="" placeholder="Inserisci scadenza">
      <button id="add_button" type="button" name="button">AGGIUNGI</button>
    </div>


    <div class="bevande_container">
      <!-- script handlebars -->
    </div>


    <script id="template_bevanda" type="text/x-handlebars-template">
      <div class="bevande_list" data-id={{id}}>
        <p>Nome: {{nome_bevanda}}</p>
        <p>Marca: {{marca}}</p>
        <p>Prezzo: {{prezzo}}</p>
        <p>Data di Scadenza: {{data_di_scadenza}}</p>
        <button class="delete_btn" type="button" name="button">CANCELLA</button>
        <button class="update_btn" type="button" name="button">AGGIORNA</button>
      </div>
    </script>

  </body>
</html>
