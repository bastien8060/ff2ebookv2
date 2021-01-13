<?php
//header('Content-Type: application/json; charset=UTF-8');
header('Content-type: text/plain; charset=utf-8');
require_once("../sqlSession.php");
require_once("../class/class.FanFiction.php");
require_once("../class/class.ErrorHandler.php");
require_once("../class/class.FileManager.php");
require_once("../class/class.dbHandler.php");
session_start();


$error = new ErrorHandler();

if (!isset($_REQUEST["url"]))
    $error->addNew(ErrorCode::ERROR_CRITICAL, "No URL entered.");


$fic = new FanFiction($_REQUEST["url"], $error);

$return = Array();
$exist = false;

if (!isset($_REQUEST["force"]) || $_REQUEST["force"] === "false")
{
    try
    {
        $dbH = new dbHandler();
        $pdo = $dbH->connect();

        $query = $pdo->prepare(SQL_SELECT_FIC);
        $query->execute(Array(
            "id" => $fic->ficHandler()->getFicId(),
            "site" => $fic->getSource()
        ));

        if ($query->rowCount() === 1) // If this fic is already in archive and up to date
        {
            $result = $query->fetch();

            if ($fic->ficHandler()->getUpdatedDate() <= $result["updated"] && is_file("../archive/" . $result["filename"])) {
                $exist = true;
                $return["exist"] = true;
            }
        }
    }
    catch (PDOException $e)
    {
        $error->addNew(ErrorCode::ERROR_WARNING, $dbH->userFriendlyError($e->getCode()));
    }
}


$return["id"] = $fic->ficHandler()->getFicId();
$return["site"] = $fic->getSource();
$return["title"] = $fic->ficHandler()->getTitle();
$return["author"] = $fic->ficHandler()->getAuthor();
$return["chapCount"] = $fic->ficHandler()->getChapCount();
$return["updated"] = $fic->ficHandler()->getUpdatedDate();
$return["error"] = $error->getAllAsJSONReady();


        $return["title"] = utf8_encode(preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
            return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
        }, $return["title"]));
        
        $return["author"] = utf8_encode(preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {
            return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
        }, $return["author"]));
        

if (!$exist)
{
    $fm = new FileManager();
    $ficH = $fic->ficHandler();
    $ficH->setOutputDir($fm->createOutputDir());
    $ficH->setFileName($fic->getSource() . "_" . $ficH->getFicId() . "_" . $ficH->getUpdatedDate());

    $fm->createTitlePage($fic->ficHandler()->getOutputDir() . "/OEBPS/Content", $fic->ficHandler());
}



$_SESSION["encoded_fic"] = serialize($fic);

echo json_encode($return);
session_write_close();



