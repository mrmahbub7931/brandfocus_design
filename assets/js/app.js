(function ($) {

    "use strict";

    $('.navbar-menu .menu-item-has-children').hover(function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();

    });

    

    $('.right-menu-nav .menu-item-has-children').hover(function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();

    });



    var mainMenu,mainMenuWdith, mainMenuChildren,mainMenuChildrenParent, mChildrenWidth = 0;

    

    mainMenu = document.querySelector('#primary-navbar');

    mainMenuChildrenParent = document.querySelectorAll('#primary-navbar #navbar-menu');

    mainMenuChildren = document.querySelectorAll('#primary-navbar #navbar-menu li');

    if(mainMenu){

        mainMenuWdith = mainMenu.clientWidth;

    }

    

    mainMenuChildren = Array.prototype.slice.call(mainMenuChildren);



    for (var i = 0; i < mainMenuChildren.length; i++) {

        mChildrenWidth += mainMenuChildren[i].offsetWidth;

    }



    if (mainMenuChildren.length > 6) {

        var ul = $('<ul class="sub-menu"/>').append(mainMenuChildren.slice(6));

        ul.wrap('<li class="menu-item-has-children" />').parent().appendTo(mainMenuChildrenParent).prepend("<a href='#'>সব খবর</a>");



        $('.navbar-menu .menu-item-has-children').hover(function() {

            $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();

        }, function() {

            $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();

        });

    }

    $('.l-search-icoin').on('click',function() {
        $('.l-search').toggleClass('show');
    });

    // mobile menu

    $('.navbar-menu').clone().appendTo("#mNav");

    $('.mobile_menu .menu-item-has-children').hover(function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.mobile-header .m-menu-toggler').on('click',function(){

        $('.mobile_menu').toggleClass('show');

    });

    $('.m-menu-close').click(function(){

            $('.mobile_menu').removeClass('show');

    });

    $('.m-menu-search').on('click',function(){
        $('.mobile-header .search-form').toggleClass('show');
    });



    // append child item to parent div video section

    var singleItem = $('.video_news_parent .single_video_news');

    if (singleItem.length) {

        if (singleItem.length > 1) {

            var divVideo = $('<div class="single_video_news_child"/>').append(singleItem.slice(1));

            divVideo.wrap('<div class="single_video_news_right" />').parent().appendTo('.video_news_parent')

        }

        // console.log(document.querySelector('.single_video_news_child').length);
        
        if (document.querySelector('.single_video_news_child')) {

            var singleVideoList = document.querySelector('.single_video_news_child').children;
            var singleVideo = Array.prototype.slice.call(singleVideoList);
            singleVideo.forEach(e => {
                e.classList.remove('single_video_news');
                e.classList.add('single_video_list_right');

            });
        }

    }


	$(window).on('scroll', load_posts_ajax); 

    function load_posts_ajax(){
    	var archive, author, query, that;
        var that = $('#load-post-btn');
        var page = $('#load-post-btn').data('page');
        var newPage = page+1;
		var ajaxurl = $('#load-post-btn').data('url');
        if ($('#load-post-btn').data('archive')) {

            archive = $('#load-post-btn').data('archive');
            query = archive;

        } else {
            archive = '';
        }
        if($('#load-post-btn').data('author')) {

            author = $('#load-post-btn').data('author');

            query = author;
        } else {
            author = '';
        }
        // $(window).scrollTop() == $(document).height() - $(window).height()
        // $(window).scrollTop() + window.innerHeight >= (document.body.scrollHeight)
        if ($(window).scrollTop() + window.innerHeight >= (document.body.scrollHeight)) {
        	$.ajax({
            url : ajaxurl,
            type : 'post',
            data : {
                page : page,
                archive : archive,
                author : author,
                action : 'load_posts_by_ajax'
            },
            error: function(response) {
                console.log(response);
            },
            success : function( response ){
                if (response) {
                    $('#load-post-btn').data('page',newPage);
                    $('.'+query+'-main .row').append(response);
                } else {
                    $('#load-post-btn').hide();
                }

            }

        });
        }
    }

    $(window).on('scroll',function(){
        if ($(window).scrollTop() >= 150) {
            $('.tm_navbar').addClass('sticky');
            $('.mobile-header').addClass('m_sticky');
        }else {
            $('.tm_navbar').removeClass('sticky');
            $('.mobile-header').removeClass('m_sticky');
        }
    });


    var team_member = $('.tm-team-member-slide');
    team_member.owlCarousel({
        items: 3,
        loop: true,
        margin: 30,
        nav: true,
        navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 1,
                nav: false,
            },
            // breakpoint from 480 up
            480 : {
                items: 1,
                nav: false,
            },
            // breakpoint from 768 up
            768 : {
                items: 2,
                nav: false,
            },
            992 : {
                items: 3,
                nav: true,
            }
        }
    });

    var testimonials_slide = $('.tm-testimonials-slide');
    testimonials_slide.owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        navText: ['<i class="fas fa-arrow-left"></i>','<i class="fas fa-arrow-right"></i>'],
        
    });
    var brand_logo = $('.brand-logo-slide');
    brand_logo.owlCarousel({
        items: 6,
        loop: true,
        nav: false,
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 2,
            },
            // breakpoint from 480 up
            480 : {
                items: 3,
            },
            // breakpoint from 768 up
            768 : {
                items: 4,
            },
            992 : {
                items: 6,
            }
        }
        
    });

    // mobile menu

    $('.master-menu-list').clone().appendTo(".menu-box");
    // console.log($('.tsoebd-menu').clone());

    $('.menu-box .master-menu-list .menu-item-has-children').hover(function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(250).slideDown();

    }, function() {

        $(this).find('.sub-menu').first().stop(true, true).delay(100).slideUp();

    });

    $('.left-sidebar-menu-controller').on('click',function(){

        $('.mobile-header-menu').toggleClass('show');

    });

    $('.mobile-header-menu .close-btn').click(function(){
            $('.mobile-header-menu').removeClass('show');
    });


     /*-------------------------------------
		  Buble Background On Hover
		  -------------------------------------*/
		  $('.animated-bg-wrap').on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
			  relX = e.pageX - parentOffset.left,
			  relY = e.pageY - parentOffset.top;
			if ($(this).find('.animated-bg-wrap .animated-bg')) {
			  $('.animated-bg-wrap .animated-bg').css({
				top: relY,
				left: relX,
			  });
			}
		  });
		  $('.animated-bg-wrap').on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
			  relX = e.pageX - parentOffset.left,
			  relY = e.pageY - parentOffset.top;
			if ($(this).find('.animated-bg-wrap .animated-bg')) {
			  $('.animated-bg-wrap .animated-bg').css({
				top: relY,
				left: relX,
			  });
			}
		  });




})(jQuery)