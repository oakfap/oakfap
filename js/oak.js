$(function() {
    $( ".dialog" ).click( {param1: "Hello", "} ,function (){

        $('#dialog').append('<img src="media/images/SmarMeter.png"/><br/>').append($(this).html());
        $('#dialog').dialog({
            resizable:false,

        });
    }
  });


  $(document).ready(function(){
    $("#btn1").click(function(){
    alert("Text: ");
    });
  });

  $(document).ready(function() {
   $('#target').click(function() {

                $('#dialog').dialog('open');

   return false;
   });

   $('img').click(function() {

        $('#dialog').dialog('close');

   });
   });
