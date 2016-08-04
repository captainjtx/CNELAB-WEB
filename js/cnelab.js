$(document).ready(function(){
        GetLatestReleaseInfo();
    });

    function GetLatestReleaseInfo() {
        $.getJSON("https://api.github.com/repos/captainjtx/CNELAB/releases/latest").done(function (release) {
            var asset = release.assets[0];
            var downloadCount = 0;
            for (var i = 0; i < release.assets.length; i++) {
                downloadCount += release.assets[i].download_count;
            }
            var oneHour = 60 * 60 * 1000;
            var oneDay = 24 * oneHour;
            var dateDiff = new Date() - new Date(asset.updated_at);
            var timeAgo;
            if (dateDiff < oneDay)
            {
                timeAgo = (dateDiff / oneHour).toFixed(1) + " hours ago";
            }
            else
            {
                timeAgo = (dateDiff / oneDay).toFixed(1) + " days ago";
            }
            var releaseInfo = release.name + " was updated " + timeAgo + " and downloaded " + downloadCount.toLocaleString() + " times.";
            $("#cnelab-download-link").attr("href", asset.browser_download_url);
            $("#cnelab-download-link").text(releaseInfo);
            $("#cnelab-download-link").fadeIn("slow");
        });
    }
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


