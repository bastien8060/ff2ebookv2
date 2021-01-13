/*
____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################


UI Theme JAVASCRIPT

____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################
*/

$('.ro-select').filter(function() {
    var $this = $(this),
        $sel = $('<ul>', { 'class': 'ro-select-list' }),
        $wr = $('<div>', { 'class': 'ro-select-wrapper' }),
        $inp = $('<input>', {
            type: 'hidden',
            name: $this.attr('name'),
            'class': 'ro-select-input'
        }),
        $text = $('<div>', {
            'class': 'ro-select-text ro-select-text-empty',
            text: $this.attr('placeholder')
        });
    $opts = $this.children('option');

    $text.click(function() {
        $sel.show();
    });

    $opts.filter(function() {
        var $opt = $(this);
        $sel.append($('<li>', { text: $opt.text(), 'class': 'ro-select-item' })).data('value', $opt.attr('value'));
    });
    $sel.on('click', 'li', function() {
        $text.text($(this).text()).removeClass('ro-select-text-empty');
        $(this).parent().hide().children('li').removeClass('ro-select-item-active');
        $(this).addClass('ro-select-item-active');
        $inp.val($this.data('value'));
    });
    $wr.append($text);
    $wr.append($('<i>', { 'class': 'fa fa-caret-down ro-select-caret' }));
    $this.after($wr.append($inp, $sel));
    $this.remove();
});



function getProgress() {
    return Math.round(100 / ($("body").width() / $("#progress").width()) - ((100 / ($("body").width() / $("#progress").width())) / 19.03))
}

function move_progress(obj, percentage) {
  n = percentage;
    if (n == 100 || n == "100") {
        return $(obj).width("101%").delay(100);
    } else {
        n = n + "%";
        return $(obj).width(n).delay(100);
    }
}

function end_progress(obj) {
    $(obj).width("101%").delay(100).fadeOut(1000, function() {
        // ..then remove it.
        $(this).remove();
    });
}

// in this demo, it is triggered by a click event
// you may use any trigger in your apps
setTimeout(function() {
    if ($("#progress").length === 0) {
        // inject the bar..
        $("body").append($("<div><b></b><i></i></div>").attr("id", "progress"));

        // animate the progress..
        move_progress("#progress", "0");
    }
}, 500)


"use strict";

const DOM = {
    tabsNav: document.querySelector('.tabs__nav'),
    tabsNavItems: document.querySelectorAll('.tabs__nav-item'),
    panels: document.querySelectorAll('.tabs__panel')
}; //set active nav element

const setActiveItem = elem => {
    DOM.tabsNavItems.forEach(el => {
        el.classList.remove('js-active');
    });
    elem.classList.add('js-active');
}; //find active nav element


const findActiveItem = () => {
    let activeIndex = 0;

    for (let i = 0; i < DOM.tabsNavItems.length; i++) {
        if (DOM.tabsNavItems[i].classList.contains('js-active')) {
            activeIndex = i;
            break;
        }

        ;
    }

    ;
    return activeIndex;
}; //find active nav elements parameters: left coord, width


const findActiveItemParams = activeItemIndex => {
    const activeTab = DOM.tabsNavItems[activeItemIndex]; //width of elem

    const activeItemWidth = activeTab.offsetWidth - 1; //left coord in the tab navigation

    const activeItemOffset_left = activeTab.offsetLeft;
    return [activeItemWidth, activeItemOffset_left];
}; //appending decoration block to an active nav element


const appendDecorationNav = () => {
    //creating decoration element
    let decorationElem = document.createElement('div');
    decorationElem.classList.add('tabs__nav-decoration');
    decorationElem.classList.add('js-decoration'); //appending decoration element to navigation

    DOM.tabsNav.append(decorationElem); //appending styles to decoration element

    return decorationElem;
}; //appending styles to decoration nav element


const styleDecorElem = (elem, decorWidth, decorOffset) => {
    elem.style.width = `${decorWidth}px`;
    elem.style.transform = `translateX(${decorOffset}px)`;
}; //find active panel


const findActivePanel = index => {
    return DOM.panels[index];
}; //set active panel class


const setActivePanel = index => {
    DOM.panels.forEach(el => {
        el.classList.remove('js-active');
    });
    DOM.panels[index].classList.add('js-active');
}; //onload function


window.addEventListener('load', () => {
    //find active nav item
    const activeItemIndex = findActiveItem(); //find active nav item params

    const [decorWidth, decorOffset] = findActiveItemParams(activeItemIndex); //appending decoration element to an active elem

    const decorElem = appendDecorationNav(); //setting styles to the decoration elem

    styleDecorElem(decorElem, decorWidth, decorOffset); //find active panel

    findActivePanel(activeItemIndex); //set active panel

    setActivePanel(activeItemIndex);
}); //click nav item function

DOM.tabsNav.addEventListener('click', e => {
    const navElemClass = 'tabs__nav-item'; //check if we click on a nav item

    if (e.target.classList.contains(navElemClass)) {
        const clickedTab = e.target;
        const activeItemIndex = Array.from(DOM.tabsNavItems).indexOf(clickedTab); //set active nav item

        setActiveItem(clickedTab); //find active nav item

        const activeItem = findActiveItem(); //find active nav item params

        const [decorWidth, decorOffset] = findActiveItemParams(activeItem); //setting styles to the decoration elem

        const decorElem = document.querySelector('.js-decoration');
        styleDecorElem(decorElem, decorWidth, decorOffset); //find active panel

        findActivePanel(activeItemIndex); //set active panel

        setActivePanel(activeItemIndex);
    }
});




/*
____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################


Material Design Buttons

____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################
*/
  

$(document).ready(function() {
    $('.ripple-effect').rkmd_rippleEffect();
});

(function($) {
    $.fn.rkmd_rippleEffect = function() {
        var btn, self, ripple, size, rippleX, rippleY, eWidth, eHeight;

        btn = $(this).not('[disabled], .disabled');

        btn.on('mousedown', function(e) {
            self = $(this);

            // Disable right click
            if (e.button === 2) {
                return false;
            }

            if (self.find('.ripple').length === 0) {
                self.prepend('<span class="ripple"></span>');
            }
            ripple = self.find('.ripple');
            ripple.removeClass('animated');

            eWidth = self.outerWidth();
            eHeight = self.outerHeight();
            size = Math.max(eWidth, eHeight);
            ripple.css({ 'width': size, 'height': size });

            rippleX = parseInt(e.pageX - self.offset().left) - (size / 2);
            rippleY = parseInt(e.pageY - self.offset().top) - (size / 2);

            ripple.css({ 'top': rippleY + 'px', 'left': rippleX + 'px' }).addClass('animated');

            setTimeout(function() {
                ripple.remove();
            }, 800);

        });
    };
}(jQuery));








/*
____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################


ERRORHANDLER.JS

____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################
*/




// Same as PHP
var ERROR_CRITICAL   = 0;
var ERROR_WARNING   = 1;


function getErrorType(code)
{
    switch(code)
    {
        case ERROR_CRITICAL:
            return "Critical Error";

        case ERROR_WARNING:
            return "Warning";

        default:
            return "";
    }
}

function getErrorColorClass(code)
{
    switch(code)
    {
        case ERROR_CRITICAL:
            return "text-critical";

        case ERROR_WARNING:
            return "text-warning";

        default:
            return "";
    }
}

function newError(code, message)
{
    printError(code, message);
    if (code === ERROR_CRITICAL)
        changeState(STATE_ERROR);
}

function checkForError(data)
{
    var errors = [];
    if (data.error !== "undefined")
    {
        $.each(data.error, function(key, value) {
            var header, number;

            //header = key.substr(0, key.indexOf("_")).trim();
            number = parseInt(key.substr(key.indexOf("_") + 1))

            if (key.substr(0, key.indexOf("_")) === "code")
            {
                var temp = { code: value, message: data.error["message_"+number] };
                errors[number] = temp;
            }
        });
    }

    return errors;
}

function printError(code, message)
{
    $("#output").append("<div class=\""+ getErrorColorClass(code) +"\">"+  getErrorType(code) +": "+ message +"</div>");

    if (code === ERROR_WARNING)
        $("#warning-icon").show();

    if (code === ERROR_CRITICAL)
        $("#critical-icon").show();
}






/*
____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################


FUNCTIONS.JS

____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################
*/

function changeState(newState)
{
    switch(newState)
    {
        case STATE_READY:
            _state = newState;
            disableForm(false);
            //resetOutput();
            _ajaxFicInfosTry = 0;
            _ajaxChapterTry = [];
            setStatusText("Ready!");
            break;

        case STATE_INFOS:
            _state = newState;
            setPct(PCT_MIN);
            resetOutput();
            disableForm(true);
            statusOutput("<span class='text-ok'>Collecting Fiction infos...</span>");
            ajax_getFicInfos();
            setStatusText("Collecting infos...");
            break;

        case STATE_CHAPTERS:
            _state = newState;
            disableForm(true);
            statusOutput("<span class='text-ok'>Collecting chapters data...</span>");
            setStatusText("Collecting chapters data...");

            if (typeof _ficData.chapCount === "undefined")
                newError(ERROR_CRITICAL, "Couldn't find chapter count.");

            for (i = 1 ; i <= _ficData.chapCount ; i++)
            {
                ajax_getChapter(i);
            }
            ajaxQueueHandler();

            break;

        case STATE_ERROR:
            setTimeout(function(){setStatusText("Error, check output")},500);
            _state = newState;
            disableForm(false);
            //resetOutput();
            _ajaxFicInfosTry = 0;
            _ajaxChapterTry = [];
            _state = newState;
            //newError(ERROR_CRITICAL, "An error has occured, please try again.")
            
            throw new Error("An error has occured and the script has been stopped.");
            break;

        case STATE_FILE_CREATION:
            _state = newState;
            disableForm(true);
            statusOutput("<span class='text-ok'>Creating archive file....</span>");
            ajax_createFile();
            break;

        case STATE_CONVERSION:
            _state = newState;
            disableForm(true);
            statusOutput("<span class='text-ok'>Converting to desired file format...</span>");
            ajax_convert();
            break;

        default:
            changeState(STATE_READY);
            break;
    }
}


function nextState()
{
    if (_state < STATE_MAX_STATE)
        changeState(_state + 1);
    else
        changeState(STATE_READY);
}

function disableForm(bool)
{
    $("#fic-input-submit").attr("disabled", bool);
    $("#filetype").attr("disabled", bool);
    $("#auto-dl").attr("disabled", bool);
    $("#force-update").attr("disabled", bool);
    $("#kindle-email").attr("disabled", bool);
}

function statusOutput(text)
{
    $("#output").append(text +"<br />");
}

function resetOutput()
{
    $("#output").html("");
    $("#warning-icon").hide();
    $("#critical-icon").hide();
}

function setStatusText(text)
{
    $("#status-text").html(text);

}

function addPct(pct)
{
    pct = parseFloat(pct);
    if (!isNumber(pct))
        return;

    var old = getProgress();

    move_progress("#progress",(old + pct).toString());
}

function setPct(pct)
{
move_progress("#progress",(pct).toString());
}

function isNumber(obj)
{
    return !isNaN(parseFloat(obj));
}

function hasAutoDownload()
{
    return $("#auto-dl").is(':checked');
}

function downloadLink(source, id, linkText)
{
    filetype = $(".ro-select-text").text()
    if (!filetype.includes("mobi") || !filetype.includes("epub")){
        filetype = "epub";
    }
    return "<a id=\"download-link\" href=\"download.php?source="+ source +"&id="+ id +"&filetype="+ filetype +"\">"+ linkText +"</a>";
}

function downloadReady(source, id)
{
    setStatusText(downloadLink(source, id, "Download here!"));

    if (hasAutoDownload())
    {
        statusOutput("<span class='text-ok'>Starting download...</span>");
        $("#download-link")[0].click();
    }

    if ($("#kindle-email").val().length > 0)
    {
        ajax_sendToKindle();
    }
} 




/*
____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################


AJAX.FUNCTIONS.JS

____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################
*/


/**
 * Created by p0ody on 2015-06-26.
 */


function ajax_saveCookies()
{
    var /*vSplit, vFont, */vFiletype, vEmail, vAutoDL;

    /*vSplit = $("#is-split").prop("checked");
    vFont = $("#fonttype").find(":selected").val();*/
    vFiletype = $(".ro-select-text").text()
    if (!vFiletype.includes("mobi") || !vFiletype.includes("epub")){
        vFiletype = "epub";
    }

    vEmail = $("#kindle-email").val();
    vAutoDL = hasAutoDownload();

    $.ajax
    ({
        url: "ajaxPHP/ajax.saveCookies.php",
        method: "POST",
        data: { /*isSplit: vSplit, font: vFont,*/ filetype: vFiletype, email: vEmail, autodl: vAutoDL },
        dataType: "json"
    });

}

function ajax_loadOptionsCookies()
{
    $.ajax
    ({
        url: "ajaxPHP/ajax.getCookies.php",
        dataType: "json"
    }).done(function(data)
    {
        if (data.length <= 0)
        {
            $("#options-collapse").children(".collapse-content").show();
            return;
        }

        /*if (data.isSplit)
            $("#is-split").prop("checked", data.isSplit ? true : false);*/

        /*if (data.font)
            $("#fonttype").val(data.font);*/

        if (data.filetype)
        {
            $("#filetype").val(data.filetype);
            $("#filetype").trigger("change");
        }

        if (data.email)
            $("#kindle-email").val(data.email);

        if (data.autodl)
            $("#auto-dl").prop('checked', data.autodl == "true");
    });
}

function ajax_getFicInfos()
{
    var url = $("#fic-url").val();
    var force = $("#force-update").is(':checked');

    _ajaxFicInfosTry = _ajaxFicInfosTry + 1;
    if (_ajaxFicInfosTry > AJAX_MAX_TRY)
        newError(ERROR_CRITICAL, "Failed to get Fic Infos, please try again later.");


    else if (_ajaxFicInfosTry > 1)
        newError(ERROR_WARNING, "Failed to get Fic Infos (Attempt "+ _ajaxFicInfosTry +"/"+ AJAX_MAX_TRY +"), attempting again.");

    $.ajax
    ({
        url: "ajaxPHP/ajax.getFicInfos.php", // Need URL
        method: "POST",
        data: { url: url, force: force },
        dataType: "json",
    }).done(function(data)
    {
        var errors = checkForError(data);

        $.each(errors, function(index, error)
        {
            newError(error.code, error.message)
        });

        _ficData = data;

        if (data["exist"] == true)
        {
            if (data["site"] === "undefined" && data["id"] === "undefined")
                return;

            statusOutput("<span class='text-ok'>File already on server...</span>");

            changeState(STATE_CONVERSION);
        }
        else
        {
            addPct(PCT_FIC_INFOS);
            nextState();
        }
    }).fail(function()
    {
        ajax_getFicInfos()
    });
}

function ajax_getChapter(num)
{

    if (_ajaxChapterTry[num] === undefined)
        _ajaxChapterTry[num] = 0;

    _ajaxChapterTry[num] = _ajaxChapterTry[num] + 1;

    if (_ajaxChapterTry[num] > AJAX_MAX_TRY)
        newError(ERROR_CRITICAL, "Failed to get chapter #"+ num +", please try again later.");
    else if (_ajaxChapterTry[num] > 1)
        newError(ERROR_WARNING, "Failed to get chapter #"+ num +" (Attempt "+ _ajaxChapterTry[num] +"/"+ AJAX_MAX_TRY +"), attempting again.");

    _ajaxQueue.push(function()
    {
        $.ajax
        ({
            url: "ajaxPHP/ajax.getChapter.php",
            method: "POST",
            data: {chapNum: num},
            dataType: "json"
        }).done(function (data) {
            var errors = checkForError(data);

            $.each(errors, function (index, error) {
                newError(error.code, error.message)
            });

            statusOutput("<span class='text-ok'>Received chapter #" + data.chapNum + " data.</span>");

            if (typeof _ficData.chapReady === "undefined")
                _ficData.chapReady = [];

            _ficData.chapReady.push(data.chapNum);

            setStatusText("Chapters: " + _ficData.chapReady.length + "/" + _ficData.chapCount);
            addPct(PCT_CHAPTERS / parseFloat(_ficData.chapCount));

            if (_ficData.chapReady.length === parseInt(_ficData.chapCount))
                nextState();

        }).fail(function ()
        {
            ajax_getChapter(num);
        }).always(function()
        {
            substractCurrentCalls();
        });
    });

}

function ajax_createFile()
{
    setStatusText("Creating eBook...");
    $.ajax
    ({
        url: "ajaxPHP/ajax.createFile.php",
        method: "POST",
        dataType: "json"
    }).done(function(data)
    {
        var errors = checkForError(data);

        $.each(errors, function(index, error)
        {
            newError(error.code, error.message)
        });

        if (_ficData["site"] === "undefined" || _ficData["id"] === "undefined")
            changeState(STATE_ERROR);


        addPct(PCT_FILE_CREATION);
        nextState();

    });
}


function ajax_sendToKindle()
{
    statusOutput("<span class='text-ok'>Sending email to "+ $("#kindle-email").val() +"...</span>");

    vFiletype = $(".ro-select-text").text()
    if (!vFiletype.includes("mobi") || !vFiletype.includes("epub")){
        vFiletype = "epub";
    }

    $.ajax
    ({
        url: "ajaxPHP/ajax.sendToKindle.php",
        method: "POST",
        data: {
            email: $("#kindle-email").val(),
            title: _ficData["title"],
            author: _ficData["author"],
            file: _ficData["site"] + "_" + _ficData["id"] + "_" + _ficData["updated"] + "." + vFiletype,
            filetype: vFiletype
        },
        dataType: "json"
    });
}

function ajax_convert()
{
    addPct(PCT_CONVERSION);

    vFiletype = $(".ro-select-text").text()
    if (!vFiletype.includes("mobi") || !vFiletype.includes("epub")){
        vFiletype = "epub";
    }

    if (vFiletype == "epub")
    {
        setPct(100);
        changeState(STATE_READY);
        downloadReady(_ficData["site"], _ficData["id"]);
        return;
    }

    $.ajax
    ({
        url: "ajaxPHP/ajax.convert.php",
        method: "POST",
        data: {
            filetype: vFiletype
        },
        dataType: "json"
    }).done(function (data)
    {
        var errors = checkForError(data);
        $.each(errors, function (index, error) {
            newError(error.code, error.message)
        });
        setPct(100);
        changeState(STATE_READY);
        downloadReady(_ficData["site"], _ficData["id"]);
    });
}

function ajaxQueueHandler()
{
    if (_ajaxQueue.length > 0)
        setTimeout(ajaxQueueHandler, AJAX_CALLS_DELAY_MS);

    if (_ajaxQueue.length > 0 && _ajaxCurrentCalls < AJAX_MAX_CALLS)
    {
        var newCalls = _ajaxQueue.splice(0, AJAX_MAX_CALLS - _ajaxCurrentCalls);

        $.each(newCalls, function(index, value)
        {
            value();
            addCurentCalls();
        });
    }
}

function substractCurrentCalls()
{
    if (_ajaxCurrentCalls > 0)
        _ajaxCurrentCalls--;

}

function addCurentCalls()
{
    _ajaxCurrentCalls++;
}



/*
____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################


MAIN.JS (MAIN FANFICTION DOWNLOADER SCRIPT) 

____________________________________________________________________________________________________________________________________________________________________________________
####################################################################################################################################################################################
*/


/**
 * Created by p0ody on 2015-05-08.
 */

var STATE_ERROR         = -1;
var STATE_READY         = 0;
var STATE_INFOS         = 1;
var STATE_CHAPTERS      = 2;
var STATE_FILE_CREATION = 3;
var STATE_CONVERSION    = 4;
var STATE_MAX_STATE     = 5;
var AJAX_MAX_TRY        = 3;
var AJAX_MAX_CALLS      = 100;
var AJAX_CALLS_DELAY_MS = 2000;
var PCT_FIC_INFOS       = 20;
var PCT_CHAPTERS        = 65;
var PCT_FILE_CREATION   = 5;
var PCT_CONVERSION      = 5;
var PCT_MAX             = 100;
var PCT_MIN             = 0;

var _ficData = null;
var _state = STATE_READY;
var _ajaxFicInfosTry = 0;
var _ajaxChapterTry = [];
var _ajaxCurrentCalls = 0;
var _ajaxQueue = [];

$(document).ready(
    function() {
        // Functions to run right after document is ready
        ajax_loadOptionsCookies();
        changeState(STATE_READY);


        // Fix the top right menu focus shadow
        $(".menu-button").focus(function (event) // Remove button focus outline
        {
            event.target.blur();
        });

        // handler for collapse box
        $(".collapse-header").click(toggleCollapse);

        /*// Hide collapse box when has collapse-hidden = true
        $(".collapse-bg[data-collapse-hidden='true']").children(".collapse-content").hide();*/


        $("#fic-input-submit").click(function (e) {
            try{e.preventDefault();}catch{}
            console.log("Starting")
            ajax_saveCookies();

            if ($("#fic-url").val().length === 0)
                return;

            if (_state != STATE_READY)
                return;

            changeState(STATE_INFOS);
        });

    }
);

function toggleCollapse(event)
{
    $(this).next(".collapse-content").toggle("slow");
}


