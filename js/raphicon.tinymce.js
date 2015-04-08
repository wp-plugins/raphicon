(function($){
tinymce.PluginManager.add( 'RAphicon' , function(editor){
	editor.addButton('RAphicon', {
		id: 'raphicon',	icon: 'icon dashicons-admin-generic', title: 'Insert Icon Fonts', text: 'RAphicon',
		onclick:function(){
			var minHeight = $('body').innerHeight();
			if ( minHeight < 600 ) {
				wTinymce = $(window).innerWidth();
				hTinymce = $(window).innerHeight();
				$('body').css('overflow','hidden');
			} else {
				wTinymce = $('body').innerWidth()-50;
				hTinymce = $('body').innerHeight()-90;
			}
			tinymce.activeEditor.windowManager.open({
				title: 'Choose Icon', url: pluginUrl+'inc/lists.php',width: wTinymce, height: hTinymce
			});
		}
	});
});
})(jQuery);