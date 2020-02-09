jQuery(function( $ ) {
	'use strict';

	$('.fci_wp_update').on('click', function(){

		var whatsapp = $('.fci_whatsapp').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_whatsapp',
				'whatsapp': whatsapp
			}
		);
		$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});


	$('.fci_telegram_update').on('click', function(){

		var telegram = $('.fci_telegram').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_telegram',
				'telegram': telegram
			}
		);
		$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('.fci_messenger_update').on('click', function(){

		var messenger = $('.fci_messenger').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_messenger',
				'messenger': messenger
			}
		);
		$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('.fci_instagram_update').on('click', function(){

		var instagram = $('.fci_instagram').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_instagram',
				'instagram': instagram
			}
		);
		$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('.fci_twitter_update').on('click', function(){

		var twitter = $('.fci_twitter').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_twitter',
				'twitter': twitter
			}
		);
		$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('.fci_email_update').on('click', function(){

		var email = $('.fci_email').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_email',
				'email': email
			}
		);
		$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('.fci_call_update').on('click', function(){

		var call = $('.fci_call').val();
		
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_call',
				'call': call
			}
		);
		$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('.fci_live_chat_update').on('click', function(){

		var live_chat = $('.fci_live_chat').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_live_chat',
				'live_chat': live_chat
			}
			);
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});


	$('.fci_size_update').on('click', function(){

		var size = $('.fci_size').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_size',
				'size': size
			}
			);
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('.fci_mobile_size_update').on('click', function(){

		var mobile_size = $('.fci_mobile_size').val();
				
		jQuery.post(
			ajaxurl,
			{
				'action': 'fixed_chat_icons_ajax_mobile_size',
				'mobile_size': mobile_size
			}
			);
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
		
	});

	$('#show_0').click(function () {
        if ($(this).is(':checked')) {
			var show = ($(this).val());
			jQuery.post(
				ajaxurl,
				{
					'action': 'fixed_chat_icons_ajax_show',
					'show': show
				}
			)
			}
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);

	});
	
	$('#show_1').click(function () {
        if ($(this).is(':checked')) {
			var show = ($(this).val());
			jQuery.post(
				ajaxurl,
				{
					'action': 'fixed_chat_icons_ajax_show',
					'show': show
				}
			);
			}
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
	});
	
	$('#show_2').click(function () {
        if ($(this).is(':checked')) {
			var show = ($(this).val());
			jQuery.post(
				ajaxurl,
				{
					'action': 'fixed_chat_icons_ajax_show',
					'show': show
				}
			);
			}
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
	});
	
	$('#show_3').click(function () {
        if ($(this).is(':checked')) {
			var show = ($(this).val());
			jQuery.post(
				ajaxurl,
				{
					'action': 'fixed_chat_icons_ajax_show',
					'show': show
				}
			);
			}
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
	});

	$('#align_0').click(function () {
        if ($(this).is(':checked')) {
			var align = ($(this).val());
			jQuery.post(
				ajaxurl,
				{
					'action': 'fixed_chat_icons_ajax_align',
					'align': align
				}
			);
			}
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
	});

	$('#align_1').click(function () {
        if ($(this).is(':checked')) {
			var align = ($(this).val());
			jQuery.post(
				ajaxurl,
				{
					'action': 'fixed_chat_icons_ajax_align',
					'align': align
				}
			);
			}
			$(".fci_updated_show").css("visibility", "visible");
			setTimeout(
			function() 
			{
				$(".fci_updated_show").css("visibility", "hidden");
			}, 2000);
	});

});