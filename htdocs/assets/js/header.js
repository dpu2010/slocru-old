/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var main = function() {
    $('.menu-about').click(function() {
        $(this).css({
            "background-color": "#f9b625"
        });
        jQuery('#about-links, .subcatagories').toggleClass('hidden');
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
    });
    
    $('.menu-get-involved').click(function() {
        $(this).css({
            "background-color": "#f9b625"
        });
        jQuery('#involvement-links, .subcatagories').toggleClass('hidden');
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
    });
    
    $('.menu-resources').click(function() {
        $(this).css({
            "background-color": "#f9b625"
        });
        jQuery('#resources-links, .subcatagories').toggleClass('hidden');
        /*$('.subcatagories').css({
            "background-color": "#f9b625"
        });*/
    });
    
    $('.menu-media').click(function() {
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