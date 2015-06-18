jQuery(document).ready(function($){
	var _custom_media = true,
	_orig_send_attachment = wp.media.editor.send.attachment;
 
	$('.upload_logo_button').click(function(e) {
		e.preventDefault();
		var send_attachment_bkp = wp.media.editor.send.attachment;
		var button = $(this);
		input = button.prev();
		_custom_media = true;
		wp.media.editor.send.attachment = function(props, attachment){
			if ( _custom_media ) {
				input.val(attachment.url);
				$('.theme_options_logo').attr('src',attachment.url);
			} else {
				return _orig_send_attachment.apply( this, [props, attachment] );
			};
		}
 
		wp.media.editor.open(button);
		return false;
	});

	$('.upload_bg_button').click(function(e) {
		e.preventDefault();
		var send_attachment_bkp = wp.media.editor.send.attachment;
		var button = $(this);
		input = button.prev();
		_custom_media = true;
		wp.media.editor.send.attachment = function(props, attachment){
			if ( _custom_media ) {
				input.val(attachment.url);
				$('.theme_options_bg').attr('src',attachment.url);
			} else {
				return _orig_send_attachment.apply( this, [props, attachment] );
			};
		}
 
		wp.media.editor.open(button);
		return false;
	});
 
});