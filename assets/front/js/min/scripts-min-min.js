!function($){"use strict";var e={Android:function(){return navigator.userAgent.match(/Android/i)},BlackBerry:function(){return navigator.userAgent.match(/BlackBerry/i)},iOS:function(){return navigator.userAgent.match(/iPhone|iPad|iPod/i)},Opera:function(){return navigator.userAgent.match(/Opera Mini/i)},Windows:function(){return navigator.userAgent.match(/IEMobile/i)},any:function(){return e.Android()||e.BlackBerry()||e.iOS()||e.Opera()||e.Windows()}};if($("body").on("click","a.ct-social-box__link--popup",function(e){return window.open(this.href,"","menubar=no,toolbar=no,resizable=yes,scrollbars=no,height=600,width=600"),!1}),$(function(){$(".ct-main-navigation > .menu-item").on("mouseenter mouseleave",function(e){if($(".sub-menu",this).length){var t=$(".sub-menu:first",this),a=t.offset(),n=a.left,i=t.width(),o=$(".ct-header").height();n+i<=$(".ct-header").width()?$(this).removeClass("edge"):$(this).addClass("edge")}}),$(".ct-main-navigation > ul > .page_item").on("mouseenter mouseleave",function(e){if($(".children",this).length){var t=$(".children:first",this),a=t.offset(),n=a.left,i=t.width(),o=$(".ct-header").height();n+i<=$(".ct-header").width()?$(this).removeClass("edge"):$(this).addClass("edge")}})}),$("#ct-header__hero-navigator").length>0)var t=new Waypoint({element:$("#ct-header__hero"),handler:function(e){"down"===e?$("#ct-header__hero-navigator").addClass("is_stuck"):$("#ct-header__hero-navigator").removeClass("is_stuck")},offset:"bottom-in-view"});var a=new Waypoint({element:$(".ct-footer"),handler:function(e){"down"===e?$(".bullets-container").removeClass("fadeIn").addClass("fadeOut"):$(".bullets-container").removeClass("fadeOut").addClass("fadeIn")},offset:function(){return screen.height-parseInt($(".ct-footer").outerHeight())}});if(!e.any()&&!1===arte_theme_data.menu.sticky)var n=$(".ct-header__toolbar").outerHeight(),i=new Waypoint.Sticky({element:$(".ct-header__wrapper"),offset:-n,wrapper:'<div class="ct-header__logo-nav--sticky" />',stuckClass:"ct-header__wrapper--stuck"}),o=$($("#ct-header__hero").length>0?"#ct-header__hero":".ct-content"),r=new Waypoint({element:o,handler:function(e){},offset:$(".ct-header__logo-nav").outerHeight()});$("body").on("click","a.ct-lightbox",function(e){e.preventDefault(),$.magnificPopup.open({items:{src:$(this).attr("href"),type:"image"}})}),$(document).ready(function(){if($("a.ct-lightbox").magnificPopup({type:"image",closeBtnInside:!1}),$("a.ct-lightbox-video").magnificPopup({type:"iframe",closeBtnInside:!1}),$(".gallery-item a[href*=jpg], .gallery-item a[href*=jpeg], .gallery-item a[href*=png], .gallery-item a[href*=gif], .gallery-item a[href*=gif]").magnificPopup({type:"image",closeBtnInside:!1}),$("a.xtd-ninja-modal-btn").magnificPopup({type:"inline",preloader:!1}),jQuery().masonry&&$(".ct-posts").length>0){var t=$(".ct-posts").masonry({itemSelector:".ct-post",percentPosition:!0,resizable:!0,masonry:{columnWidth:".ct-post"}});t.imagesLoaded().progress(function(){t.masonry("layout")}),$(".ct-posts > .ct-post iframe").on("load",function(){t.delay(2e3).masonry("layout")})}$(".ct-gallery--carousel").each(function(){var e=$(this);imagesLoaded(e,function(){e.owlCarousel({items:1,nav:!1,navText:["",""],dots:!0,loop:!0,dotsSpeed:700,autoplay:!0,autoplayTimeout:3e3,autoplayHoverPause:!0,autoHeight:!1,onInitialized:function(){t.masonry("layout")}})})}),!e.any()&&$(".parallax-image").length>0&&$.stellar({horizontalScrolling:!1,parallaxBackgrounds:!1,hideDistantElements:!1}),e.any()})}(jQuery);