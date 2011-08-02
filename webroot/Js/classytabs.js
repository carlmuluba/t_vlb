(function($) {
    $.fn.extend({
        classytabs: function(options) {

            var settings = $.extend({
                roottitle: 'Home',
                rooturl: '',
                showbreadcrumb: true,
                selectedtab: 0,
                ontabclick: null
            }, options);

            return this.each(function() {
                var tabs = $('.tabs li');
                var breadcrumb;
                $('.tab-contents div.tab-content').css('display', 'none');
                $('.tabs li a:eq(' + settings.selectedtab + ')').addClass('selected').css('display', 'block'); // make first tab visible on load
                $('.tab-contents div.tab-content:eq(' + settings.selectedtab + ')').css('display','').addClass('selected');
                $('.tabs li a:first').addClass('first');
                $('.tabs li a:last').addClass('last');
                breadcrumb = $('<ul/>').addClass('breadcrumb').append($('<li/>').append($('<a/>').attr('href', '#').html(settings.roottitle).attr('id', 'bc-root')))
						.append($('<li/>').append($('<span/>').attr('id', 'bc-current').text($('.tabs li a:eq(' + settings.selectedtab + ')').attr('title'))));
                    $('.tabs').after(breadcrumb);
                
				if(!settings.showbreadcrumb)
					breadcrumb.css({display:'none'});


                var root = settings.roottitle;
                var rootlink = settings.rooturl;
                $('a#bc-root').text(root);
                $('a#bc-root').attr('href', rootlink);
                $('a#bc-root').after("/");

                $('a').click(function() {
                    $(this).parents('ul')
						.find('a').removeClass('selected')
						.end()
						.end()
						.addClass('selected');

                    var link = $(this).attr('href');
                    var equalPosition = link.indexOf('#'); //Get the position of '#'
                    var number = link.substring(equalPosition + 1, 10); //Split the string and get the number.
                    $('.tab-contents div.tab-content').css('display', 'none');

                    $('div#' + number).fadeIn("100");
                    $('div#' + number).css('display', 'block');
                    if (settings.ontabclick != null)
                        settings.ontabclick(number);

                    var currentTitle = $(this).attr('title');

                    $('span#bc-current').text(currentTitle);
                    return false;

                });

            });
        }

    });
})(jQuery);