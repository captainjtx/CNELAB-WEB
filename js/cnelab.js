$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});

function clearSelection(ele)
{

	if (window.getSelection) {
		if (window.getSelection().empty) {  // Chrome
			window.getSelection().empty();
		} else if (window.getSelection().removeAllRanges) {  // Firefox
			window.getSelection().removeAllRanges();
		}
	} else if (document.selection) {  // IE?
		document.selection.empty();
	}
}

var clipboard = new Clipboard('.copy-btn');
clipboard.on('success', function(e) {
	console.log(e);
	var ele=$(event.target);
	if(ele.attr('class')!='copy-btn') 
	{
		ele=$(event.target.parentNode);	
	}

	ele.attr('data-original-title', 'Copied').tooltip('show');
	clearSelection();
});

clipboard.on('error', function(e) {
	console.log(e);

	var ele=$(event.target);
	if(ele.attr('class')!='copy-btn') 
	{
		ele=$(event.target.parentNode);	
	}

	ele.attr('data-original-title', 'Failed').tooltip('show');
});
$('[data-toggle="tooltip"]').hover(
		function(){
			$('[data-toggle="tooltip"]').attr('data-original-title', 'Copy to clipboard');
		}
);
var msg="Hello world";
