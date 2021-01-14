<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type='image/x-icon' href="ico/favicon.ico"/>
    <title>FreeFiction | Download any WattPad FanFictions for free.</title>
    <meta property="og:title" content="FreeFiction | Download any WattPad FanFictions for free." />
    <meta property="og:url" content=”http://freefiction.cf” />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="en_USs" />
    <meta property="og:site_name" content="FreeFiction" />

    <meta property="og:type" content="website"/>
    <meta name="twitter:site" content="#FreeFiction" />
    <meta name="twitter:card" value="summary_large_image" />
    <meta name="twitter:image" content="https://freefiction.cf/fanfiction.jpg" />
    <meta property="og:image" content="https://freefiction.cf/fanfiction.jpg" />
    <meta property="og:image:secure_url" content="https://freefiction.cf/fanfiction.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="250" />
    <meta property="og:image:height" content="167" />
    <meta property="og:image:alt" content="With FreeFiction, It becomes easier to Download FanFictions!" />

    <meta name="description" content="Convert FanFiction to ebook for free. Works for WattPad.com, FanFiction.net, FictionPress, FicWad... Download the story as ePub & Kindle books.">
    <meta property="og:description" content="Convert FanFictions like WattPad.com, FanFiction.net, FictionPress... Download the story as ePub & Kindle books." />
    <meta name="keywords" content="Wattpad, Wattpad Downloader, Wattpad to Epub, FanFiction, FanFiction Downloader, Epub">

    <link rel="stylesheet" href="./style.css">

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
  <h1 class="header__title bold"><span class="bold">Free<span class="highlight">Fiction</span></span> <span class="smaller">Ebook Downloader</span></h1>
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
          </div><br><br><span class="textcenter"><div class="centerme" id="status-text"></div></span>
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
             <img class="custom1" height="55px" alt="GitHub Mascotte's Icon" width="55px" src="https://github.githubassets.com/images/modules/logos_page/Octocat.png"/>
            <span class="custom2">
              <h2>Submit Issue/Ideas</h2><br>
              <p>Visit my GitHub (<a title="FreeFiction's GitHub Repo" target="_blank" href="https://github.com/bastien8060/ff2ebookv2/issues"><span class="xbold underline">link</span></a>)</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Supported Websites:</h2><br>
              <ul class="marginme">
                <li>Wattpad.com - <button class="tags green nogap xxsmall custom3">New</button></li></li> 
                <li>FanFiction.com - <button class="tags orange nogap xxsmall custom4">Partly Fixed</button></li>
                <li>FictionPress.com - <button class="tags red nogap xxsmall">Temporarily down</button></li>
                <li>FictionHunt.com</li>
                <li>FicWad.com</li>
                <li>HPFanFicArchive.com</li>
                <li>HarryPotterFanFiction.com <span class="custom5">(Use URL finishing with /viewstory.php?psid=######)</span></li>

             </ul>
               
            <span>
          </div>
          <div class="tabs__panel-card">
            <span>
              <h2>What is it?</h2><br>
              <p>FreeFiction is a FanFiction Downloader website. It can convert FanFictions to ebooks for free. It works for WattPad.com, FanFiction.net, FictionPress, FicWad and more as listed below. <br><br>The good thing is you can download the story as ePub, Mobi & Kindle books.<br><br>That means that whenever a FanFiction is deleted, you can check here if it is archived, and depending on the source, we might still be able to retrieve it even after!<br><br>With this tool you can read FanFictions offline, after a story has been deleted, or on an E-Ink device, such as a Kindle.<br><br>The best thing? It is free!</p>
            <span>
          </div>
           <div class="tabs__panel-card">
            <span>
              <h2>So, how does it work then?</h2><br>
              <p>If your FanFiction site is in the list above, then you can convert it to an ebook! <br><br> To start, enter the URL in the "URL" tab. <br>Then you may choose your settings in the "Settings" tab. <br>There, you can choose between a wide range of options, like the output file format (Only Epub and MOBI for now. PDF coming soon!), to force the website to refresh the FanFiction, to disable your browser from downloading the file automatically or to disable the FanFiction.net Archive Feature.<br><br>If you suspect any error(s), you can check the converter's log by going to the "Output" tab.<br><br>The Download Link will be under the download button. </p>
            <span>
          </div>

          <div class="tabs__panel-card">
            <span>
              <h2>Downloaded FanFiction has not the latest Chapters/Recent Update is missing?</h2><br>
              <p>Like explained below, FanFiction.net has started to block bots, which means it would be hard to get the chapters. <br><br>For this reason, I have introduced support for the "FanFiction.net Archive". <br><br>Note that it is not exactly the same as the <a title="Holy Archive" target="_blank" class="xbold underline" href="https://freefiction.cf/archive.php">FreeFiction Archive</a>. <br><br>The FreeFiction archive is an archive of all previously downloaded Fictions on this site. However, the FanFiction.net is an archive from <span class="underline">FictionHunt.com</span>, which contains about 670,000 different FanFictions. It doesn't contain them all.<br><br> While it is good, in the meantime I find out how to make FanFiction.net work again, it isn't perfect. Updates from author may not come through.<br><br>You can disable the FanFiction.net Archive support in "Settings". </p>
            <span>
          </div>

          <div class="tabs__panel-card">
            <span>
              <h2>Not Receiving Emails on Kindle?</h2><br>
              <p>Make sure to add ebook-sender@wattpad.cf to your spam filter or Kindle Approved Personal Document E-mail List. See <a title="Amazon's Guide to Whitelist an email for Kindle." href="https://www.amazon.com/gp/help/customer/display.html?nodeId=GX9XLEVV8G4DB28H" target="_blank"><span class="xbold underline">Amazon's Guide</span></a>, how to do it.</p>
            <span>
          </div>
           <div class="tabs__panel-card">
           <span>
            <h2>Is it Paid?</h2><br>
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
              <p>Fortunately and unfortunately, FanFiction.net took strong measures to block access on their sites to bots. That is because most bots were behind "spam" campaigns, via personal messages. The second reason FanFiction.net did this, is to prevent <a title="DDoS Explanation on WikiPedia.com" href="https://en.wikipedia.org/wiki/Denial-of-service_attack" target="_blank" class="xbold underline">DDoS Attacks</a>. However, this means our <span class="italic">bots</span> are blocked too. I found few solutions, however none are permanent. Stay tuned, until I find another solution. An idea is to use a browser extension or make use of sites that has archived old FanFictions.<br><br><span class="xbold underline">Tl;Dr</span><br><br><span class="xbold">You can try to use the Archive Option in settings and it may work!</span></p>
            <span>
          </div>
          <div class="tabs__panel-card">
            <span>
              <h2>Error Fetching Chapters/Infos</h2><br>
              <p>Please Submit an issue on GitHub (<a title="Project's Repo Page" href="https://github.com/bastien8060/ff2ebookv2/issues" target="_blank"><span class="xbold underline">On the repository page</span></a>)</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Your favorite FanFiction site isn't supported?</h2><br>
              <p>Most FanFiction sites don't take long to be added! Just give me the idea, and I will look into it. The good news is, it takes ruffly <span class="italic">1 day</span> in general to add a new supported site! You can drop an issue on the repository (link above), and I will fix that.</p>
            <span>
          </div>
          <div class="tabs__panel-card">
            <span>
              <h2>Mobi Output not working</h2><br>
              <p>Mobi is still a recent implementation on this site and may not be foolproof. There could be many reasons for Mobi not to work.<br><br> If Mobi doesn't work for you, you can try downloading it first as an Epub and download it, then visit the archive and download the Mobi Link.<br>This should work.</p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Are you a developer?</h2><br>
              <p>If you are willing, you can help this tool get better!<br>How?<br>Simple, you make make a fork, on my GitHub, and do anything you want: improve it, add a feature(s), fix a bug(s)... Then, you only need to make a merge request. After that, I will check the changes, and if all go well, you will be included in the collaborator of this project, and I will update this website. Your changes will also be reflected on the GitHub Repository. </p>
            <span>
          </div>
          <div class="tabs__panel-card">
           <span>
            <h2>Share</h2><br>
              <div class="linksshare">
                <ul>
                  <li class="social-share xbold facebooklink">Share on Facebook</li>
                  <li class="social-share xbold twitterlink">Share on Twitter</li>
                  <li class="social-share xbold linkedinlink">Share on LinkedIn</li>
                </ul>
              </div>
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
<div id="mySidenav" class="sidenav hidden-xs hidden-sm" onclick="">
  <a title="Check on Github" target="_blank" href="https://github.com/bastien8060/" id="about"><i class="fab fa-github"></i></a>
  <a title="Check on Reddit" target="_blank" href="https://www.reddit.com/user/oscar_hauey" id="blog"><i class="fab fa-reddit"></i></a>
  <a title="Check on instagram" target="_blank" id="projects" href="https://www.instagram.com/bstnccs/"><i class="fab fa-instagram"></i></a>
  <a title="Check on YouTube" target="_blank" id="contact" href="https://www.youtube.com/channel/UCrh-xCZR6rSDO6LdzpliS5g"><i class="fab fa-youtube"></i></a>
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
