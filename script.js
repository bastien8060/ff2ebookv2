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





















/* -----------------------------------------------------
  Material Design Buttons
  https://codepen.io/rkchauhan/pen/NNKgJY
  By: Ravikumar Chauhan
  Find me on -
  Twitter: https://twitter.com/rkchauhan01
  Facebook: https://www.facebook.com/ravi032chauhan
  GitHub: https://github.com/rkchauhan
  CodePen: https://codepen.io/rkchauhan
-------------------------------------------------------- */
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