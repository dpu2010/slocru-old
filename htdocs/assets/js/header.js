/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var checker = function(item1, item2, item3) {
    if (item1 || item2 || item3) {
        jQuery('.subcatagories').toggleClass('hidden');
    }
    if (item1) {
        //window.alert(item1);
        temp = '.menu-' + item1;
        $(temp).css({
            "background-color": "#ffffff"
        });
        temp = '#' + item1 + '-links';
        jQuery( temp).toggleClass('hidden');
    }
    if (item2) {
        temp = '.menu-' + item2;
        $(temp).css({
            "background-color": "#ffffff"
        });
        temp = '#' + item2 + '-links';
        jQuery( temp).toggleClass('hidden');
    }
    if (item3) {
        temp = '.menu-' + item3;
        $(temp).css({
            "background-color": "#ffffff"
        });
        temp = '#' + item3 + '-links';
        jQuery( temp).toggleClass('hidden');
    }
};

var main = function() {
    var about, involvement, resources, media;
    $('.menu-about').click(function() {
        if (about) {
            about = "";
            //window.alert(about);
            $(this).css({
                "background-color": "#ffffff"
            });
        } else {
            about = 'about';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625"
            });
        }
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
        checker(involvement, resources, media);
        involvement = resources = media = "";
        jQuery('#about-links, .subcatagories').toggleClass('hidden');
    });
    
    $('.menu-involvement').click(function() {
        if (involvement) {
            involvement = "";
            //window.alert(about);
            $(this).css({
                "background-color": "#ffffff"
            });
        } else {
            involvement = 'involvement';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625"
            });
        }
        checker(about, resources, media);
        about = resources = media = "";
        jQuery('#involvement-links, .subcatagories').toggleClass('hidden');
    });
    
    $('.menu-resources').click(function() {
        if (resources) {
            resources = "";
            //window.alert(about);
            $(this).css({
                "background-color": "#ffffff"
            });
        } else {
            resources = 'resources';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625"
            });
        }
        checker(involvement, about, media);
        involvement = about = media = "";
        jQuery('#resources-links, .subcatagories').toggleClass('hidden');
    });
    
    $('.menu-media').click(function() {
        if (media) {
            media = "";
            //window.alert(about);
            $(this).css({
                "background-color": "#ffffff"
            });
        } else {
            media = 'media';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625"
            });
        }
        checker(involvement, resources, about);
        involvement = resources = about = "";
        jQuery('#media-links, .subcatagories').toggleClass('hidden');
    });
};

$(document).ready(main);