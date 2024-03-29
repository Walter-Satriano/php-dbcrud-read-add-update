$(document).ready(function() {

  getBevande();

  $("#add_button").click(addBevanda);
  $(document).on("click", ".bevande_list .delete_btn", deleteBevande);
  $(document).on("click", ".bevande_list .update_btn", updateBevande);


  //funzione per pulire il contenitore ad ogni chiamata getRooms
  function reset() {
    $(".bevande_container").html("");
  }

  //funzione per ottenere i dati delle bevande
  function getBevande() {

    reset();

    $.ajax({

      url: "api-bevande-get.php",
      method: "GET",

      success: function(data) {

        printBevande(data);
        console.log(data);
      },
      error: function () {
        alert("Errore in getBevande");
      }
    });
  }

  //funzione per stampare a schermo i risultati
  function printBevande(data) {

    var source   = $("#template_bevanda").html();
    var template = Handlebars.compile(source);

    for (var i = 0; i < data.length; i++) {
      var d = data[i];

      var bevanda_id = d.id;
      var nome_bevanda = d.nome_bevanda;
      var marca = d.marca;
      var prezzo = d.prezzo;
      var dataScadenza = d.data_di_scadenza;

      var context = {
        id: bevanda_id,
        nome_bevanda: nome_bevanda,
        marca: marca,
        prezzo: prezzo,
        data_di_scadenza: dataScadenza
      };

      var html = template(context);

      $(".bevande_container").append(html);
    }
  }

  //funzione per aggiungere bevande
  function addBevanda() {

    var addBtn = $(this);

    var nomeBev = $(".nome_bev").val();
    var marcaBev = $(".marca_bev").val();
    var prezzoBev = $(".prezzo_bev").val();
    var scadenzaBev = $(".scad_bev").val();


    $(".nome_bev").val("");
    $(".marca_bev").val("");
    $(".prezzo_bev").val("");
    $(".scad_bev").val("");

    $.ajax({

      url: "api-bevande-add.php",
      method: "GET",
      data: {
        nome_bevanda: nomeBev,
        marca: marcaBev,
        prezzo: prezzoBev,
        data_di_scadenza: scadenzaBev
      },

      success: function(data) {

        getBevande();
        console.log("bevanda: " + nomeBev + "marca: " + marcaBev + "prezzo: " + prezzoBev + "data scadenza: " + scadenzaBev);
      },
      error: function() {
        alert("Errore in addBevande");
      }
    });
  }

  function thisDrinkId(me) {

    var drink = me.parent();
    var id = drink.data("id");

    return id;
  }

  //funzione per eliminare le bevande
  function deleteBevande() {

    var idDel =thisDrinkId($(this));

    $.ajax({

      url: "api-bevande-delete.php",
      method: "GET",
      data: {id: idDel},

      success: function(data) {

        getBevande();
        console.log("dentro delete", data);
      },
      error: function(){

        alert("Errore in deleteBevande")
      }
    });

  }

  //funzione di aggiornamento bevande
  function updateBevande() {

    var idUpdate = thisDrinkId($(this));

    var nomeBev = $(".nome_bev").val();
    var marcaBev = $(".marca_bev").val();
    var prezzoBev = $(".prezzo_bev").val();
    var scadenzaBev = $(".scad_bev").val();


    $(".nome_bev").val("");
    $(".marca_bev").val("");
    $(".prezzo_bev").val("");
    $(".scad_bev").val("");

    $.ajax({

      url: "api-bevande-update.php",
      method: "GET",
      data: {
        id: idUpdate,
        nome_bevanda: nomeBev,
        marca: marcaBev,
        prezzo: prezzoBev,
        data_di_scadenza: scadenzaBev
      },

      success: function(data) {

        getBevande();
        console.log("dentro update", data);
      },
      error: function(){

        alert("Errore in updateBevande");
      }

    });
  }

});
