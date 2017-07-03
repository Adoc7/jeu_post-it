<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>index</title>
        <link rel="stylesheet" href="style.css">
        <script src="jquery.js"></script>
        <script src="jquery-ui.js"></script>
    </head>

    <body>
    <section >
      <img  class="mms" src="mms_blue.png" alt="mms bleu"/>
      <img  class="mms" src="mms_brown.png" alt="mms marron"/>
      <img  class="mms" src="mms_green.png" alt="mms vert"/>
      <img  class="mms" src="mms_orange.png" alt="mms orange"/>
      <img  class="mms" src="mms_yellow.png" alt="mms jaune"/>
    </section>

    <section>
    <img id="pack_mms" src="paquet.png" alt="pacquet d'MMS"/>
    <script>
    $(function() {
      $(".mms").draggable();
      var mms=$('mms').length;
      var coup=0;
  });

        $("#pack_mms").droppable({
      drop:function(){

        coup ++;
        if (coup==mms){
        alert('Mms dans le paquet');
      }
    }
    });



      </script>
    </section>
    </body>
</html>
