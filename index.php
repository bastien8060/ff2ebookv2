<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type='image/x-icon' href="ico/favicon.ico"/>
    <title>FreeFiction | Download for free any WattPad FanFictions.</title>

    <meta name="description" content="Convert FanFictions to ebooks for free. Works with WattPad.com, FanFiction.net, FictionPress, HPFanFicArchive & FicWad. Download the story as ePub, MOBI & on your Kindle.">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'><link rel="stylesheet" href="./style.css">
    <meta name="keywords" content="Wattpad, Wattpad Downloader, Wattpad to Epub, FanFiction, FanFiction Downloader, Epub">

    <meta name="theme-color" content="#FD8541">
    <meta name="msapplication-navbutton-color" content="#FD8541">
    <meta name="apple-mobile-web-app-status-bar-style" content="#FD8541">
    <meta name="application-name" content="FreeFiction"/>


    <link rel="shortcut icon" type="image/vnd.microsoft.icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon" type="image/png" href="ico/apple-touch-icon.png"><!-- iPhone -->
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="ico/apple-touch-icon.png"><!-- iPad -->
    <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="ico/apple-touch-icon.png"><!-- iPhone4 -->
    <link rel="icon" type="image/png" href="ico/android-chrome-192x192.png"><!-- Opera Speed Dial, at least 144×114 px -->


    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="ico/apple-touch-icon.png" />
    <meta name="msapplication-TileColor" content="#FD8541" />
    <meta name="msapplication-TileImage" content="ico/android-chrome-192x192.png" />
    <meta name="msapplication-square70x70logo" content="ico/android-chrome-192x192.png" />
    <meta name="msapplication-square150x150logo" content="ico/android-chrome-192x192.png" />
    <meta name="msapplication-wide310x150logo" content="ico/android-chrome-192x192.png" />
    <meta name="msapplication-square310x310logo" content="ico/android-chrome-192x192.png" />






    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L8DTX7VT5V"></script>
    <script>
      localStorage.tracked = false;
      var host = window.location.hostname;
      if((host == "localhost"||host=="127.0.0.1"))
      {localStorage.notrack="!True"}
      if (localStorage.notrack!="!True"){
        localStorage.tracked = true;
        localStorage.notrack="!False"
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-L8DTX7VT5V');
      }else{
        localStorage.notrack="!True"
        localStorage.tracked = false;
      }
    </script>

</head>
<body>
<!-- partial:index.partial.html -->
<!--PEN HEADER-->
<div class="header">
  <h1 class="header__title bold"><span class="bold">Free<span class="highlight">Fiction</span></span></h1>
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
            <label><span class="marginme"><input id="use_archive" type="checkbox"/></span><span class="centerme">Use FanFiction.net Archive (Sometime works)</span></label><br><br>
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
            <p>Whitelist postman@wattpad.cf from your email's spam folder, or, add it to the Kindle's Approved Personal Document E-mail List</p>
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
             <img height="55px" alt="GitHub Mascotte's Icon" style="margin-left:10px" width="55px" src="https://github.githubassets.com/images/modules/logos_page/Octocat.png"/>
            <span style="margin-left:35px">
              <h2>Submit Issue/Ideas</h2><br>
              <p>Visit my GitHub (<a target="_blank" href="https://github.com/bastien8060/ff2ebookv2/issues"><span class="xbold underline">link</span></a>)</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Supported Websites:</h2><br>
              <ul class="marginme">
                <li>Wattpad.com - <button class="tags green nogap xxsmall" style="margin-bottom: 2px !important;">New</button></li></li> 
                <li>FanFiction.com - <button class="tags orange nogap xxsmall" style="margin-bottom: 2px !important;">Partly Fixed</button></li>
                <li>FictionPress.com - <button class="tags red nogap xxsmall">Temporarily down</button></li>
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
              <p>Make sure to add ebook-sender@wattpad.cf to your spam filter or Kindle Approved Personal Document E-mail List. See <a href="https://www.amazon.com/gp/help/customer/display.html?nodeId=GX9XLEVV8G4DB28H" target="_blank"><span class="xbold underline">here</span></a>, how to do it.</p>
            <span>
          </div>
          <div class="tabs__panel-card">
            <span>
              <h2>Error Fetching Chapters/Infos</h2><br>
              <p>Please Submit an issue on GitHub (<a href="https://github.com/bastien8060/ff2ebookv2/issues" target="_blank"><span class="xbold underline">here</span></a>)</p>
            <span>
          </div>
           <div class="tabs__panel-card">
           <span>
            <h2>Pricing?</h2><br>
             <p><span class="xbold">No.</span> This tool is completely <span class="xbold underline">free</span> and will remain so.<br> You can use it as you wish!</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Archive</h2><br>
              <p>FreeFiction Stores Ebooks downloaded, to the archive. If you wish, you can search old ebooks there.<br><br>If you think an ebook you are trying to download isn't properly updated/contains old content, try check the box, "Force Update", in Settings</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>FanFiction.net Not Working!</h2><br>
              <p>Fortunately and unfortunately, FanFiction.net took strong measures to block access on their sites to bots. That is because most bots were behind "spam" compains, via personal messages. The second reason FanFiction.net did this, is to prevent <a href="https://en.wikipedia.org/wiki/Denial-of-service_attack" target="_blank" class="xbold underline">DDoS Attacks</a>. However, this means our <span class="italic">bots</span> are blocked too. I found few solutions, however none are permanent. Stay tuned, until I find another solution. An idea is to use a browser extension or make use of sites that has archived old FanFictions.</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Your favorite FanFiction site isn't supported?</h2><br>
              <p>Most FanFiction sites don't take long to be added! Just give me the idea, and I will look into it. The good news is, it takes ruffly <span class="italic">1 day</span> in general to add a new supported site! You can drop an issue on the repo (link above), and I will fix that.</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Are you a developper?</h2><br>
              <p>If you are willing, you can help this tool get better!<br>How?<br>Simple, you make make a fork, on my GitHub, and do anything you want: improve it, add a feature(s), fix a bug(s)... Then, you only need to make a merge request. After that, I will check the changes, and if all go well, you will be included in the collaborator of this project, and I will update this website. Your changes will also be reflected on the GitHub Repo. </p>
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
