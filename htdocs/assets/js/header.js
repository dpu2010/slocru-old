/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var checker = function(item1, item2, item3) {
    if (item1) {
        $('menu-' + item1).css({
            "background-color": "#ffffff"
        });
        //window.alert(item1);
        jQuery(item1 + '-links' + ', .subcatagories').toggleClass('hidden');
    }
    if ('menu-' + item2) {
        $(item2).css({
            "background-color": "#ffffff"
        });
        //window.alert(item2);
        jQuery(item2 + '-links' + ', .subcatagories').toggleClass('hidden');
    }
    if ('menu-' + item3) {
        $(item3).css({
            "background-color": "#ffffff"
        });
        //window.alert(item3);
        jQuery(item1 + '-links' + ', .subcatagories').toggleClass('hidden');
    }
};

var main = function() {
    var about, involvement, resources, media;
    $('.menu-about').click(function() {
        about = 'about';
        //window.alert(about);
        $(this).css({
            "background-color": "#f9b625"
        });
        jQuery('#about-links, .subcatagories').toggleClass('hidden');
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
        checker(involvement, resources, media);
    });
    
    $('.menu-involvement').click(function() {
        involvement = 'involvement';
        $(this).css({
            "background-color": "#f9b625"
        });
        jQuery('#involvement-links, .subcatagories').toggleClass('hidden');
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
    });
    
    $('.menu-resources').click(function() {
        resources = 'resources';
        $(this).css({
            "background-color": "#f9b625"
        });
        jQuery('#resources-links, .subcatagories').toggleClass('hidden');
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
    });
    
    $('.menu-media').click(function() {
        media = 'media';
        $(this).css({
            "background-color": "#f9b625"
        });
        jQuery('#media-links, .subcatagories').toggleClass('hidden');
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
    });
};

$(document).ready(main);