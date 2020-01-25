$(function(e) {
    $('.heades-name li').click(function(){
		$('.heades-name li').removeClass('active');
		$(this).addClass('active');
		if( $(this).data('filter') == 'all' ) {
			$('.list-table table tbody tr').show();
		}else {
			$('.list-table table tbody tr').hide();
			$('.list-table table tbody tr[filter-data="'+$(this).data('filter')+'"]').show();
		}
	});
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
});