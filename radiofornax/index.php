<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RadioFornax Mobile</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Set a shorter title for iOS6 devices when saved to home screen -->
    <meta name="apple-mobile-web-app-title" content="Ratchet">

    <!-- Include the compiled Ratchet CSS -->
    <link rel="stylesheet" href="css/ratchet.min.css">

    <!-- Intro paragraph styles. Delete once you start using this page -->
    <style>
        .welcome {
          line-height: 1.5;
          color: #555;
        }
    </style>

  </head>
  <body>

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
	<a class="icon icon-compose pull-right" href="http://richg.info/radiofornax/request/"></a>
      <h1 class="title">RadioFornax</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <p class="welcome">To request a song, click the "Compose" button in the upper-right corner.</p>
      <div class="card">
        <ul class="table-view">
          <li class="table-view-cell">
                          <strong><audio controls="controls">
						  <source src="http://213.73.138.240:10000" type="audio/ogg"/>
						  </audio></strong>
                      </li>
					  

        </ul>
      </div>
    </div>

    <!-- Include the compiled Ratchet JS -->
    <script src="js/ratchet.min.js"></script>
  </body>
</html>
