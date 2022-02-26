<?php $dirs = array_filter(glob('*'), 'is_dir'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link href="https://dshelmondgames.ml/faviecon/profileYT.png" rel="icon" type="image/x-icon" />
    <link href="https://dshelmondgames.ml/faviecon/profileYT.png" rel="shortcut icon" type="image/x-icon" />
    <link href="https://dshelmondgames.ml/faviecon/profileYT.png" rel="apple-touch-icon" type="image/x-icon" />
    <meta content="https://dshelmondgames.ml/faviecon/profileYT.png" property="og:image" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scaleble=0" />
    <meta name="category" content="Showcase/Website" />
    <meta name="description" content="Duncte's little showcase" />
    <meta name="author" content="Duncan Sterken" />
    <meta name="keywords" content="Duncan Sterken, duncte123, dunste123, DHG, dshelmondgames, dhg, DSHelmondGames, dev, duncan, sterken, good, web, site, developer" />
    <meta content="dev.duncte123.ml" property="og:site_name" />
    <meta content="Home | dev.duncte123.ml" property="og:title" />
    <meta content="website" property="og:type" />
    <meta content="Duncte's little showcase" property="og:description" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@duncte123" />
    <meta name="twitter:title" content="Home | dev.duncte123.ml" />
    <meta name="twitter:description" content="Duncte's little showcase" />
    <meta name="twitter:image" content="https://dshelmondgames.ml/faviecon/profileYT.png" />
    <title>Home | dev.duncte123.ml</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1 class="text-center">Hey and welcome.</h1>
        <h4 class="text-center">This is my development website/showcase webiste, which means that a lot of the stuff that I make for fun is displayed on here.</h4>
      </div>
      <div class="row">
        <h6>Over here you can find a list of the projects on this website.</h6>
        <?php foreach($dirs as $dir){
          echo "<p><a href=\"/$dir/\" target=\"_blank\">/$dir/</a></p>";
        }?>
      </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
