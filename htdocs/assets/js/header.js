/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var main = function() {
    $('li.menu-about').click(function() {
        $('.menu-about').css({
            "background-color": "#f9b625"
        });
        $('#about-links').toggle();
        $('.subcatagories').css({
            "background-color": "#f9b625"
        });
    });
};

$(document).ready(main);