console.log("teste");



$( "#map_split" ).click(function() {

    window.location.href = "split.php";
  });

  $( "#map_ascent" ).click(function() {

    window.location.href = "ascent.php";
  });
  $( "#main_menu" ).click(function() {

    window.location.href = "index.php";
  });
  



// metodo para exibir os botoes posicao 


  $( "#mc1" ).click(function() {

    $("#po1").toggle();
  });

  $( "#mc2" ).click(function() {

    $("#po2").toggle();
  });

  $( "#mc3" ).click(function() {

    $("#po3").toggle();
  });

  $( "#mc4" ).click(function() {

    $("#po4").toggle();
  });

  $( "#mc5" ).click(function() {

    $("#po5").toggle();
    $("#po6").toggle();
  });



  //metodo direciornar 

  $( "#map_split" ).click(function() {

    window.location.href = "split.php";
  });

  $( "#po1" ).click(function() {

    window.location.href = "flecha.php?posicao=1";
  });
  
  $( "#po2" ).click(function() {

    window.location.href = "flecha.php?posicao=2";
  });
  
  $( "#po3" ).click(function() {

    window.location.href = "flecha.php?posicao=3";
  });
  
  $( "#po4" ).click(function() {

    window.location.href = "flecha.php?posicao=4";
  });
  
  $( "#po5" ).click(function() {

    window.location.href = "flecha.php?posicao=5";
  });
  
  $( "#po6" ).click(function() {

    window.location.href = "flecha.php?posicao=6";
  });
  
  