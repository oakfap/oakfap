

Alert boxes in JavaScript can only display pure text. You could use a JavaScript library like jQuery to display a modal instead?

This might be useful: http://jqueryui.com/dialog/

You can do it like this:

<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>jQuery UI Dialog - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <script>
  body {
    font-family: "Trebuchet MS", "Helvetica", "Arial",  "Verdana", "sans-serif";
    font-size: 62.5%;
}

  </script>
  <script>
  $(function() {
    $( "#dialog" ).dialog();
  });
  </script>
</head>
<body>


  <img id="dialog" src="http://placehold.it/50x50" alt="Placeholder Image" />



</body>
</html>
