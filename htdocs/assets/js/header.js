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
                "background-color" : "#ffffff",
                "font-family" : "FreightSansProLight",
                "color" : "#666062"
        });
        temp = '#' + item1 + '-links';
        jQuery( temp).toggleClass('hidden');
    }
    if (item2) {
        temp = '.menu-' + item2;
        $(temp).css({
                "background-color" : "#ffffff",
                "font-family" : "FreightSansProLight",
                "color" : "#666062"
        });
        temp = '#' + item2 + '-links';
        jQuery( temp).toggleClass('hidden');
    }
    if (item3) {
        temp = '.menu-' + item3;
        $(temp).css({
                "background-color" : "#ffffff",
                "font-family" : "FreightSansProLight",
                "color" : "#666062"
        });
        temp = '#' + item3 + '-links';
        jQuery( temp).toggleClass('hidden');
    }
};

var main = function() {
    var about, involvement, resources, media;
    $('.menu-about, #about-links').mouseover(function() {
        if (!about) {
            about = 'about';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625",
                "color": "#ffffff",
                "font-family" : "FreightSansProSemiBold"
            });
            jQuery('#about-links, .subcatagories').toggleClass('hidden');
        }
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
        checker(involvement, resources, media);
        involvement = resources = media = "";
    });
    
    /*$('.menu-about, #about-links').mouseout(function() {
        //window.alert("leaving");
        if (!$('#about-links').mouseover()) {
            //window.alert("not entering links");
            about = "";
            //window.alert(about);
            $('.menu-about').css({
                "background-color" : "#ffffff",
                "font-family" : "FreightSansProLight",
                "color" : "#666062"
            });
            jQuery('#about-links, .subcatagories').toggleClass('hidden');
        }
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*//*
        checker(involvement, resources, media);
        involvement = resources = media = "";
    });*/
    
    $('.menu-involvement').mouseenter(function() {
        if (!involvement) {
            involvement = 'involvement';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625",
                "color": "#ffffff",
                "font-family" : "FreightSansProSemiBold"
            });
            jQuery('#involvement-links, .subcatagories').toggleClass('hidden');

        }
        checker(about, resources, media);
        about = resources = media = "";
    });
    
    $('.menu-resources').mouseenter(function() {
        if (!resources) {
            resources = 'resources';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625",
                "color": "#ffffff",
                "font-family" : "FreightSansProSemiBold"
            });
            jQuery('#resources-links, .subcatagories').toggleClass('hidden');
        }
        checker(involvement, about, media);
        involvement = about = media = "";
    });
    
    $('.menu-media').mouseenter(function() {
        if (!media) {
            media = 'media';
            //window.alert(about);
            $(this).css({
                "background-color": "#f9b625",
                "color": "#ffffff",
                "font-family" : "FreightSansProSemiBold"
            });
            jQuery('#media-links, .subcatagories').toggleClass('hidden');
        }
        checker(involvement, resources, about);
        involvement = resources = about = "";
        
    });
};

$(document).ready(main);