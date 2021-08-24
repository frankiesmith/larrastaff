jQuery(document).ready(function($) {
	    /* Modal */
$('.show').click(function(e){
        $(e.currentTarget).siblings('.modal-overlay').addClass('active').find('.modal').addClass('active');
    });

    $('.close-modal, .modal-overlay').click(function(e){
        $('.modal, .modal-overlay').removeClass('active');
    });


  /*Show All Jobs*/
jQuery('.view-all').click(function(e){
  jQuery('li.wp-block-rss__item:nth-child(n+5)').addClass('show');
  jQuery(e.target).hide();
});

});