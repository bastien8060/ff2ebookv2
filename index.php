<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WP2EBOOK :: Download your favorites WattPad stories.</title>
    <meta name="description" content="Convert to ebooks. Supports WattPad.com, FicWad, FanFiction.net, FictionPress, HarryPotterFanFiction & HPFanFicArchive. Download as ePub, MOBI & on your Kindle.">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">

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
<!--PEN HEADER-->
<div class="header">
  <h1 class="header__title bold"><span class="bold">WP<span class="highlight">2</span>Ebook</span></h1>
  <div class="header__btns btns"><a class="header__btn btn" href="https://github.com/bastien8060/ff2ebookv2" title="Check on Github" target="_blanc">Check on Github</a></div><br><br>
  <div class="header__btns btns"><a class="header__btn btn" href="archive.php" title="Check Archive" target="_blanc">Open the Holy Archive</a></div>
</div>
<!--PEN CONTENT-->
<div class="content">
  <!--content title-->
  <h2 class="content__title">Click to navigate through options</h2>
  <!--content inner-->
  <div class="content__inner">
    <!--tabs-->
    <div class="tabs">
      <!--tabs navigation-->
      <div class="tabs__nav">
        <ul class="tabs__nav-list">
          <li class="tabs__nav-item js-active">Url</li>
          <li class="tabs__nav-item">Settings</li>
          <li class="tabs__nav-item">Output</li>
          <li class="tabs__nav-item">FAQ/Issues</li>
        </ul>
      </div>
      <!--tabs panels-->
      <div class="tabs__panels">
        <!--single panel-->
        <div class="tabs__panel">
          <form class="form-group" id="fic-input-form">
          <div class="tabs__panel-card__no_padding">
            <input id="fic-url" placeholder="FanFiction/Story Url" class="story_url" type="url"/><br>
          </div>
          <div class="tabs__panel-card__no_padding_hidden">
                <button id="fic-input-submit" class="rkmd-btn btn-orange download_btn ripple-effect"><i class="material-icons">file_download</i>Download</button>
          </div><br><br><center><div class="centerme" id="status-text"></div></center>
      </form>
        </div>
        <!--single panel-->
        <div class="tabs__panel">
          
          <div class="tabs__panel-card">
            <span>
            <label><span class="marginme"><input id="force-update" type="checkbox"/></span><span class="centerme">Force Update</span></label><br><br>
            <label><span class="marginme"><input id="auto-dl" type="checkbox" checked="true"/></span><span class="centerme">Automatic Download</span></label>
              </span>
          </div>
          
            <span class="marginme">File Type:</span><span class="centerme">
              <select id="filetype" class="form-control ro-select" name="opts" placeholder="Select an option">
                <option value='epub'>epub</option>
                <option value='mobi'>mobi</option>
              </select>
            <span/><br><br><br>
          
             <span class="marginme">Your Email:</span><span class="centerme">
              <input id="kindle-email" class="form-control email-input" placeholder="Send Via Email (Optional)" type="email"/>
            </span><br><br><br>
              
            
            
          
    
          
          <div class="tabs__panel-card">
            <p>Add ebook-sender@wattpad.cf to your spam filter or Kindle Approved Personal Document E-mail List</p>
          </div>
        </div>
        <!--single panel-->
        <div class="tabs__panel">
          <div class="tabs__panel-card">
            <span>
              <h3>Output:</h3><br>
              <p id="output"></p>
            </span>
          </div>
        </div>
        <!--single panel-->
        <div class="tabs__panel">
          <div class="tabs__panel-card">
             <img height="55px" style="margin-left:10px" width="55px" src="https://github.githubassets.com/images/modules/logos_page/Octocat.png"/>
            <span style="margin-left:35px">
              <h2>Submit Issue/Ideas</h2><br>
              <p>Visit my GitHub (<a target="_blank" href="https://github.com/bastien8060/ff2ebookv2/issues"><u><b>link</b></u></a>)</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Supported Websites:</h2><br>
              <ul class="marginme">
                <li>Wattpad.com</li>
                <li>FanFiction.com</li>
                <li>FictionPress.com</li>
                <li>FictionHunt.com</li>
                <li>FicWad.com</li>
                <li>HPFanFicArchive.com</li>
                <li>HarryPotterFanFiction.com <span style="font-size:11px;">(Use URL finishing with /viewstory.php?psid=######)</span></li>

             </ul>
               
            <span>
          </div>
          <div class="tabs__panel-card">
            <span>
              <h2>Not Receiving Emails on Kindle?</h2><br>
              <p>Make sure to add ebook-sender@wattpad.cf to your spam filter or Kindle Approved Personal Document E-mail List. See <a href="https://www.amazon.com/gp/help/customer/display.html?nodeId=GX9XLEVV8G4DB28H" target="_blank"><u><b>here</b></u></a>, how to do it.</p>
            <span>
          </div>
          <div class="tabs__panel-card">
            <span>
              <h2>Error Fetching Chapters/Infos</h2><br>
              <p>Please Submit an issue on GitHub (<a href="https://github.com/bastien8060/ff2ebookv2/issues" target="_blank"><u><b>here</b></u></a>)</p>
            <span>
          </div>
           <div class="tabs__panel-card">
           <span>
            <h2>Pricing?</h2><br>
             <p><b>No.</b> This tool is completely <b><u>free</u></b> and will remain so.<br> You can use it as you wish!</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Archive</h2><br>
              <p>WP2Ebook Stores Ebooks downloaded, to the archive. If you wish, you can search old ebooks there.<br><br>If you think an ebook you are trying to download isn't properly updated/contains old content, try check the box, "Force Update", in Settings</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>blabla</h2><br>
              <p>lorem ipsum dolor si amet</p>
            <span>
          </div>
          <div class="tabs__panel-card">
            <div class="tabs__panel-content"></div>
          </div>
          <div class="tabs__panel-card">
            <div class="tabs__panel-content"></div>
            <div class="tabs__panel-content"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="./script.js"></script>
<script src="js/errorHandler.js"></script>
<script src="js/functions.js"></script>
<script src="js/ajax.functions.js"></script>
<script src="js/main.js"></script>
<script>

setTimeout(function(){
    var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
};

$("#fic-url").val(getUrlParameter("arg"))
},200);
</script>
