"use strict";

jQuery(document).ready(function () {
    // Header fixed
    function headerFix() {
        var wH = jQuery(window).height();
        var wS = jQuery(window).scrollTop();
        var header = jQuery('.header');

        if (wS >= wH) {
            header.addClass('fixed').css({
                opacity: 1
            });
        } else if (wS <= wH) {
            header.removeClass('fixed').css({
                opacity: 1
            });
        }
    }

    jQuery(window).scroll(function () {
        clearTimeout(jQuery.data(this, 'scrollTimer'));
        jQuery('.header').css({
            opacity: 0
        });
        jQuery.data(this, 'scrollTimer', setTimeout(function () {
            headerFix();
        }, 900));

        if (jQuery(window).scrollTop() < jQuery(window).height()) {
            jQuery('.header').removeClass('fixed').css({
                opacity: 1
            });
        }
    });
    jQuery(document).ready(function () {
        headerFix();
    }); // Header fixed - end
    // Header nav dropdown

    jQuery('.header-nav-dd-btn').click(function () {
        jQuery(this).toggleClass('active');

        if (jQuery(this).hasClass('active')) {
            jQuery(this).find('.header-nav-dd').slideDown();
        } else {
            jQuery(this).find('.header-nav-dd').slideUp();
        }
    });
    jQuery('body').click(function () {
        jQuery('.header-nav-dd-btn').removeClass('active');
        jQuery('.header-nav-dd').slideUp();
    });
    jQuery('.header-nav-dd-btn, .header-nav-dd').on('click', function (e) {
        e.stopPropagation();
    }); // Header nav dropdown - end
    // Video play

    if (jQuery('.video-content').length) {
        jQuery('.video-content').on('ended', function () {
            jQuery(this).playedThrough = true;
            jQuery(this).addClass('played');
        });
        jQuery(window).scroll(function () {
            var video = jQuery('.video-content'),
                videoPT = video.offset().top,
                videoH = video.outerHeight(),
                videoPB = videoPT + videoH,
                videoCenter = videoH / 2,
                wS = jQuery(this).scrollTop(),
                wH = jQuery(window).height(),
                scrollBottom = wS + wH;

            if (scrollBottom > videoPT + videoCenter && scrollBottom < videoPB) {
                if (video.hasClass('played')) {
                    video[0].pause();
                } else {
                    video[0].play();
                }
            }
        });
    } // Video play - end
    // Accordion


    jQuery('.accordion-heading').click(function () {
        var parent = jQuery(this).parent();
        parent.addClass('active').siblings().removeClass('active');
    });
    jQuery(window).on('load', function () {
        jQuery('.accordion-heading:eq(0)').trigger('click');
    }); // Accordion - end
    // Info slider

    jQuery('.info-slider-text').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: jQuery('.problem-prev'),
        nextArrow: jQuery('.problem-next'),
        asNavFor: '.info-slider-img-wrap',
        speed: 800
    });
    jQuery('.info-slider-img-wrap').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.info-slider-text',
        dots: false,
        arrows: false,
        centerMode: false,
        focusOnSelect: false,
        fade: true,
        speed: 800
    }); // Info slider - end
    // Big slider

    jQuery('.big-slider-wrap').each(function () {
        jQuery('.big-slider-wrap').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            infinite: true,
            centerMode: true,
            variableWidth: true,
            variableHeight: true,
            prevArrow: jQuery('.big-slider-prev'),
            nextArrow: jQuery('.big-slider-next')
        });
    });
    jQuery('.big-slider-elem').click(function () {
        var slideNo = jQuery(this).data('slick-index');
        jQuery('.big-slider-wrap').slick('slickGoTo', slideNo);
    }); // Big slider - end
    // Article slider

    jQuery('.article-slider-wrap').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        infinite: false,
        prevArrow: jQuery('.article-prev'),
        nextArrow: jQuery('.article-next'),
        responsive: [{
            breakpoint: 1401,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }, {
            breakpoint: 521,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    }); // Article slider - end
    // FAQ Tab

    jQuery('body').on('click', '.nice-select .option, .faq-tab-link', function () {
        var tabVal = jQuery(this).data('value');
        var answ = jQuery('.faq-answer').find("[data-tab='".concat(tabVal, "']"));
        jQuery(this).addClass('active').siblings().removeClass('active');
        answ.addClass('active').siblings().removeClass('active');
    }); // FAQ Tab - end
    // FAQ accordion

    jQuery('.faq-answer-question').click(function () {
        var parent = jQuery(this).parent();
        parent.toggleClass('active').siblings().removeClass('active');
        jQuery('.faq-answer-dropdown').slideUp();

        if (parent.hasClass('active')) {
            parent.find('.faq-answer-dropdown').slideDown();
        }
    }); // FAQ accordion - end
    // Custom select

    jQuery('.custom-select').each(function () {
        jQuery('.custom-select').niceSelect();
    }); // Custom select - end
    // Back to top button

    jQuery('.post-up-btn').click(function () {
        jQuery('body,html').animate({
            scrollTop: 0
        }, 400);
    }); // Back to top button - end
    // Modal

    function initModal(button) {
        button.click(function (event) {
            var buttonVal = jQuery(this).data("modal-btn");
            var showModal = jQuery('.modal').filter('[data-modal = "' + buttonVal + '"]');
            var modalInput = showModal.find('.modal-input');

            if (button.hasClass('disabled')) {
                jQuery(this).addClass('showMsg');
            } else {
                jQuery('body').addClass('modal-active');
                showModal.fadeIn();
                modalInput[0].focus();
            }
        });
    }

    initModal(jQuery('.modal-o-btn'));
    jQuery('.modal-cancel, .modal-close, .modal-bg').click(function () {
        closeModal();
    });
    jQuery(document).keyup(function (e) {
        if (e.keyCode === 27) {
            closeModal();
        }
    });

    function closeModal() {
        jQuery('.modal').fadeOut();
        jQuery('body').removeClass('modal-active');
        setTimeout(function () {
            jQuery('.modal-success-wrap').hide();
            jQuery('.modal-content-wrap').show();
        }, 200);

        if (jQuery('.modal-input').hasClass('input_error')) {
            jQuery('.modal-input').removeClass('input_error');
            jQuery('.modal-input-error-msg').hide();
            jQuery('.modal-form').trigger('reset');
            jQuery('.modal-input-icon').removeClass('error');
        }
    } // Modal - end
    // Form validate


    jQuery('body').on('submit', '.form-validate', function (e) {
        e.preventDefault();
        var $this = jQuery(this);
        var action = jQuery('input[name="action"]').val();
        var type = jQuery(this).find('input[name="type"]').val();

        if (!action) {
            console.log('У формы отсутствует атрибут action, не знаю куда посылать данные');
            return false;
        }

        ;

        if (validation.verificationFields($this)) {
            let keep_me_updated = jQuery('form #demo-checkbox').is(':checked');
            let formData = new FormData();
            if (type == 'demo') {
                formData.append('Form', 'Book Demo');
                formData.append('Full name', jQuery('form #full_name').val());
                formData.append('Company name', jQuery('form #company_name').val());
                formData.append('Business email', jQuery('form #business_email').val());
                formData.append('Keep me updated', keep_me_updated ? 'yes' : 'no');
            } else if (type == 'faq') {
                formData.append('Form', 'FAQ');
                formData.append('Name', jQuery('form #faq_name').val());
                formData.append('Your email', jQuery('form #faq_email').val());
                formData.append('Message', jQuery('form #faq_message').val());
            }

            jQuery.ajax({
                url: action,
                type: 'POST',
                dataType: 'json',
                processData: false,
                contentType: false,
                data: formData,
                success: function (data) {
                    console.log(data);

                    jQuery('.modal-content-wrap').hide();
                    jQuery('.modal-success-wrap').show();
                    validation.resetForm($this);
                },
                error: function (error) {
                    console.log('error' + error);
                },
            });
        }

        ;
        return false;
    });
    jQuery('body').on('keyup', '.modal-input', function (e) {
        var $t = jQuery(this);
        validation.verificationFields($t.closest('.modal-input-label'));
    }); // Form validate - end
    // Team tab

    jQuery('.about-team-nav-link').click(function () {
        jQuery(this).addClass('active').siblings().removeClass('active');
        var navData = jQuery(this).data('team-pos-tab');
        var teamMember = jQuery('.about-team-elem');
        var showMember = teamMember.filter('[data-team-pos = "' + navData + '"]');
        teamMember.show();

        if (navData == 'all') {
            teamMember.show();
        } else {
            teamMember.not(showMember).hide();
        }
    }); // Team tab - end
    // Mobile menu

    jQuery('.header-menu-btn').click(function () {
        var menu = jQuery('.mobile-menu');
        jQuery(this).toggleClass('active');

        if (jQuery(this).hasClass('active')) {
            menu.show();
            setTimeout(function () {
                menu.addClass('active');
            });
            jQuery('body').addClass('modal-active');
        } else {
            menu.removeClass('active');
            setTimeout(function () {
                menu.hide();
            }, 500);
            jQuery('body').removeClass('modal-active');
        }
    }); // Mobile menu - end
    // Mobile menu dropdown

    jQuery('.mobile-menu-dd-btn').click(function () {
        jQuery(this).toggleClass('active');
        jQuery(this).find('.mobile-menu-dd').slideToggle();
    }); // Mobile menu dropdown - end
    // Text area resize

    jQuery('.modal-textarea').on('keyup keypress', function () {
        jQuery(this).height(0);
        jQuery(this).height(this.scrollHeight);
    }); // Text area rersize - end
    // Cookies Accept

    jQuery('.cookies-accept').click(function () {
        jQuery('.cookies').fadeOut();
        jQuery('.modal-o-btn').removeClass('disabled');
        localStorage.setItem('cookiesAccepted', 'true');
    });
    jQuery(window).on('load', function () {
        var cookies = localStorage.getItem('cookiesAccepted');

        if (cookies == "true") {
            jQuery('.cookies').fadeOut();
            jQuery('.modal-o-btn').removeClass('disabled');
        } else {
            jQuery('.cookies').fadeIn();
            jQuery('.modal-o-btn').addClass('disabled');
        }
    }); // Cookies Accept - end
});