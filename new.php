<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.3.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WP2EBOOK :: Download your favorites WattPad stories.</title>
    <meta name="description" content="Convert to ebooks. Supports WattPad.com, FicWad, FanFiction.net, FictionPress, HarryPotterFanFiction & HPFanFicArchive. Download as ePub, MOBI & on your Kindle.">
    <META NAME="ROBOTS" CONTENT="INDEX, NOFOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:300,400,700|Orbitron|Roboto+Condensed:300,400,700'>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L8DTX7VT5V"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-L8DTX7VT5V');
    </script>
</head>

<body>
    <!-- partial:index.partial.html -->

    <body>
        <div class="topnav" id="myTopnav">
            <a href="#home" class="active" style="font-size: 20px">WP<span class=highlight>2</span>Ebook</a>
            <a href="index.php">Home</a>
            <a href="archive.php">Archive</a>
            <a href="https://github.com/p0ody/ff2ebook/">Credits</a>
            <a href="https://github.com/bastien8060/ff2ebook/issues">Issues</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>




        <div class="config" style="display:none;">
            <div class="checkbox">
                <label><input id="force-update" type="checkbox">Force update</label>
            </div>
            <div class="checkbox">
                <label><input id="auto-dl" type="checkbox" checked="checked">Automatic Download</label>
            </div>
            <select class="form-control" id="filetype">
                <option value="epub">ePub</option>
                <option value="mobi">Mobi</option>
                <option value="pdf" disabled>PDF</option>
            </select>
            <label for="kindle-email">eMail:</label><input type="email" id="kindle-email" class="form-control" placeholder="Send via eMail (Optional)" />
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="collapse-bg text-left" data-collapse-hidden="true">
                        <div class="collapse-header">Output: <span id="warning-icon" class="glyphicon glyphicon-warning-sign text-warning" style="display: none"></span> <span id="critical-icon" class="glyphicon glyphicon-remove-circle text-critical" style="display: none"></span><span class="float-right">(Click to toggle)</span></div>
                        <div class="collapse-content" id="output"></div>
                    </div>
                </div>
            </div>
        </div>


        <center>
            <div class="wrapper">
                <div class="card">
                    <div class="card__year">
                        <input id="fic-url" placeholder="https://wattpad.com/story/168710404-that-awesome-story" type="text" /><br>
                        <button id="show fic-input-submit"> Convert </button>
                    </div>
                    <div class="card__cometOuter">
                    </div>
                    <div class="card__comet card__comet--second">
                    </div>
                </div>
                <div class="card__circle"></div>
                <div class="card__smallCircle"></div>
                <div class="card__orangeShine"></div>
                <div class="card__greenShine"></div>
                <div class="card__thankyou">
                    WattPad<br />Url
                </div>
                <div class="card__outer-year">
                    <span id="show">•</span>
                    <span>•</span>
                    <span>•</span>
                    <span>•</span>
                </div>
            </div>
        </center>
        <div class="source">
            <strong>Source:</strong> <a href="https://dribbble.com/shots/3186204-Thank-you" target="_blank">https://dribbble.com/shots/3186204-Thank-you</a>
        </div>
        </div>
    </body>
    <!-- partial -->

    <script src="./script.js"></script>

    <script type="text/javascript">
        window.onload = function(){
        $.getScript("js/errorHandler.js")
        $.getScript("js/functions.js")
        $.getScript("js/ajax.functions.js")
        $.getScript("js/main.js")
    };
    </script>
</body>

</html>