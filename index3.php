<?php
  $out = 7;
  $fn = fopen("res.txt","r");
  $out = fgets($fn);
  fclose($fn);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Hamed LAOUZ" content="" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SMART IRRIGATION SYSTEM FOR GREENHOUSES</title>

    <!-- Font Icon -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <link rel="stylesheet" href="style3.css" />
    <!-- Main css -->
  </head>

  <body>
    <div class="main">
      <div class="cnt">
        <h2>SMART IRRIGATION SYSTEM FOR GREENHOUSES</h2>
        <form method="POST" id="signup-form" class="signup-form">
          <div class="d-flex justify-content-between bard">
            <span class="title_text done"><img src="done.PNG" /> Air Data</span
            ><span class="sep"></span>
            <span class="title_text done"><img src="done.PNG" />Soil Data</span
            ><span class="sep"></span>
            <span class="title_text spd"><img src="3.PNG" />Results</span>
          </div>
          <fieldset>
              <div>
                <h2>Irrigation Water For Today:</h2>
                <h4><span><?php echo $out ?></span> L/m2</h4>
              </div>
              <div class="d-flex justify-content-between btm">
                <a href="index.html" class="prev">Home</a>
                <span>Final Result</span>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </body>
</html>
