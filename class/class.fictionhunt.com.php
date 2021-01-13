<?php
require_once("class.base.handler.php");
require_once("class.ErrorHandler.php");
require_once("class.Chapter.php");
require_once("class.ProxyManager.php");


class FHunt extends BaseHandler
{

    function populate()
    {
        
        $this->setFicId($this->popFicId());

        $infosSource = $this->getPageSource(1, false);
        $mainUrl = $this->getStoryPageUrl($infosSource);
        $mainsource = $this->curlit($mainUrl);

        $this->setTitle($this->popTitle($infosSource));
        $this->setAuthor($this->popAuthor($infosSource));

        $this->setFicType($this->popFicType($mainsource));
        $this->setSummary($this->popSummary($mainsource));
        $this->setWordsCount($this->popWordsCount($mainsource));
        $this->setFandom($this->popFandom($mainsource));
        $this->setPairing($this->popPairing($mainsource));
        $this->setUpdatedDate($this->popUpdated($mainsource));
        $this->setPublishedDate($this->popPublished($mainsource));
        $this->setCompleted($this->popCompleted($mainsource));
        $this->setChapCount($this->popChapterCount($mainsource));
    }
    
    public function getSite(){
        return "ff.net";
    }

    public function getChapter($number)
    {

        $source = $this->getPageSource($number);

        $text = false;
        $title = false;

        if (preg_match("#<h2 class=\"js-chapter-title\">(.+?)</h2>#si", $source, $matches) === 1)
            $title = $matches[1];
        else
            $title = "Chapter $number";


        // Updated to match the recent change in page source (2019-06-20)
        if (preg_match("#<div class=\"StoryChapter__text\">(.+?)</div>#si", $source, $matches) === 1)
            $text = $matches[1];
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't find chapter($number) text.");
            return false;
        }

        return new Chapter($number, $title, $text);

    }

   protected function getPageSource($chapter = 1, $mobile = true) // $mobile is weither or not we use mobile version of site. (Mobile version is faster to load)
    {
        $url = "https://fictionhunt.com/read/". $this->getFicId() ."/". $chapter;
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // Page source seems gzip compressed, so we tell cURL to accept all encodings, otherwise the output is garbage (2019-06-20)
        curl_setopt($curl, CURLOPT_ENCODING, '');
        curl_setopt($curl, CURLOPT_URL, $url);
        //curl_setopt($curl, CURLOPT_PROXY, $proxy);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, 'curl/7.19.7 (x86_64-redhat-linux-gnu) libcurl/7.19.7 NSS/3.44 zlib/1.2.3 libidn/1.18 libssh2/1.4.2');
        //curl_setopt($curl, CURLOPT_REFERER, 'https://www.domain.com/');
        
        $source = curl_exec($curl);
        //$info = curl_getinfo($curl);
        //$proxyM->updateLatency($proxy, $info['total_time'] * 1000);
        curl_close($curl);

        if ($source === false)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source for chapter $chapter.");


        if (preg_match("#https://fictionhunt.com/stories/(.+?)/#", $source, $matches) === 1)
            return $source;
        else
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Fic ID Does not exist at FictionHunt.");
        
        return $source;
    }


    protected function curlit($url) // $mobile is weither or not we use mobile version of site. (Mobile version is faster to load)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        // Page source seems gzip compressed, so we tell cURL to accept all encodings, otherwise the output is garbage (2019-06-20)
        curl_setopt($curl, CURLOPT_ENCODING, '');
        curl_setopt($curl, CURLOPT_URL, $url);
        //curl_setopt($curl, CURLOPT_PROXY, $proxy);
        curl_setopt($curl, CURLOPT_TIMEOUT, 10);
        curl_setopt($curl, CURLOPT_USERAGENT, 'curl/7.19.7 (x86_64-redhat-linux-gnu) libcurl/7.19.7 NSS/3.44 zlib/1.2.3 libidn/1.18 libssh2/1.4.2');
        //curl_setopt($curl, CURLOPT_REFERER, 'https://www.domain.com/');
        
        $source = curl_exec($curl);
        //$info = curl_getinfo($curl);
        //$proxyM->updateLatency($proxy, $info['total_time'] * 1000);
        curl_close($curl);

        if ($source === false)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get main source from FictionHunt.");
        
        return $source;
    }


    private function popFicId()
    {
        if (preg_match("#fanfiction.net/s/([0-9]+)#", $this->getURL(), $matches) === 1)
            return $matches[1];
        else
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't find Fic ID.");
    }

    private function popTitle($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#<h1 class=\"Story__title\" style=\"font-size:16px\"><a href=\"https://fictionhunt.com/stories/.*?\">(.+?)</a></h1>#si", $source, $matches) === 1)
            return $matches[1];
        else {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find title.");
            return "Untitled";
        }

    }

    private function popAuthor($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#By <a href=\"https://fictionhunt.com/users/.*?\">(.+?)</a>#si", $source, $matches) === 1)
        {
            $this->setAuthorProfile("https://www.fanfiction.net/u/". $matches[1]);
            return $matches[1];
        }
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find author.");
            return "No Author.";
        }
    }

    private function popFicType($source)
    {
       if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match_all("#.*?unt\.com/discover/search\?q=.*?genres=.*?\">(.*?)</a>#si", $source, $matches))
            return implode(', ',$matches[1]);
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find pairing (No pairing?).");
            return false;
        }

    }

    private function popFandom($source)
    { 
        //echo $source;
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#.*?unt\.com/discover/search\?q=.*?fandoms=.*?\">(.*?)</a>#si", $source, $matches) === 1)
            $fandom = $matches[1];
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find fic fandom.");
            return false;
        }
    $fandom = preg_replace('/\s+/', ' ',$fandom);
    return $fandom;
    }

    private function getStoryPageUrl($source){
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#<h1 class=\"Story__title\" style=\"font-size:16px\"><a href=\"(.+?)\">.*?</a></h1>#si", $source, $matches) === 1)
            return $matches[1];
        else {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find title.");
            return "Untitled";
        }
    }

    private function popSummary($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#<div class=\"text-justify\">(.+?)</div>#si", $source, $matches) === 1)
            return $matches[1];
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find summary.");
            return false;
        }

    }

    private function popPublished($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#<div><label>Published:</label> <time datetime=\"(.+?)\">.*?</time></div>#si", $source, $matches) === 1)
            $res = $matches[1];
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find published date.");
            return false;
        }

        $res = strtotime($res);
        return $res;

    }

    private function popUpdated($source)
    {
 if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#<div><label>Last Updated:</label> <time datetime=\"(.+?)\">.*?</time></div>#si", $source, $matches) === 1)
            $res = $matches[1];
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find published date.");
            return false;
        }

        $res = strtotime($res);
        return $res;

    }

    private function popWordsCount($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match("#<span><i class=\"icon icon-sm icon-font-download\"></i> (.+?) words</span>#si", $source, $matches) === 1)
            $wordcount = $matches[1];
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find words count.");
            return false;
        }
        $count = null;
        $returnValue = preg_replace('#k#si', '000', $wordcount, -1, $count);
        return $returnValue;
    }

    private function popChapterCount($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");


        if (preg_match_all("#<li class=\"font-md \"><a class=\"d-flex\" href=\"https://fictionhunt.com/stories/(.+?)<span class=\"stats font-sm text-muted\">.*?</span></a></li>#si", $source, $matches) < 1)
            return 1;
        else
            return count($matches[1]);


        // Cleaner way but sometimes ffnet doesnt show the right number of chapter...
        /*if (preg_match("#- Chapters: ([0-9]+)#si", $source, $matches) === 1)
            return $matches[1];
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find chapter count (One shot fic?).");
            return 1;
        }*/
    }

    private function popPairing($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (preg_match_all("#.*?unt\.com/discover/search\?q=.*?characters=.*?\">(.*?)</a>#si", $source, $matches))
            return implode(', ',$matches[1]);
        else
        {
            $this->errorHandler()->addNew(ErrorCode::ERROR_WARNING, "Couldn't find pairing (No pairing?).");
            return false;
        }
    }

    private function popCompleted($source)
    {
        if (strlen($source) === 0)
            $this->errorHandler()->addNew(ErrorCode::ERROR_CRITICAL, "Couldn't get source.");

        if (strpos($source, "<label class=\"in-progress\">In Progress</label>") !== false)
            return false;


        return "Completed";
    }
}



