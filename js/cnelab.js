function GetLatestReleaseInfo() {
	$.getJSON("https://api.github.com/repos/captainjtx/CNELAB/releases/latest").done(function (release) {
		if (release.assets.length!=0)
		{
			var asset = release.assets[0];
			var downloadCount = 0;
			for (var i = 0; i < release.assets.length; i++) {
				downloadCount += release.assets[i].download_count;
			}
			/*
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
			   */
			var releaseInfo = "CNELab "+ release.tag_name + " ( "+downloadCount.toLocaleString()+" downloads)";
			$("#cnelab-download-link").attr("href", asset.browser_download_url);
		}
		else
		{
			var releaseInfo = "CNELab "+ release.tag_name;
			$("#cnelab-download-link").attr("href", release.zipball_url);
		}

		$("#cnelab-download-link").text(releaseInfo);
		$("#cnelab-download-link").fadeIn("slow");
	});
}

$(document).ready(function(){
        GetLatestReleaseInfo();
    });

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

$(function (){
		$(".navbar-toggle").blur(
				function(event){
					if(window.innerWidth<768){
						$("#collapsable-nav").collapse('hide');
					}
				}
		 );
	}
);

(function (global){
	var cnelab={};

	var insertHtml=function(selector,html){
		var targetElem=document.querySelector(selector);
		targetElem.innerHTML=html;
	};
	var showLoading=function(selector){
		var html="<div class='text-center'>";
		html+="<img src='images/ajax-loader.gif'></div>";
		insertHtml(selector,html);
	};

	var asynInsertHtml=function(selection,html){
		var xhttp=new XMLHttpRequest();
		//ajax dynamic loading
		xhttp.onreadystatechange=function(){
			if (xhttp.readyState==4&&xhttp.status==200){
				insertHtml(selection,xhttp.responseText);
			}
		};
		xhttp.open("GET",html,true);
		xhttp.send();
	};

	var switchPage=function(html){
		//showLoading("#main-content");
		asynInsertHtml("#main-content",html);
	};
	var switchPageWithSupportSidebar=function(html){
		//showLoading("#main-content");
		//ajax dynamic loading
		var xhttp=new XMLHttpRequest();

		xhttp.onreadystatechange=function(){
			if (xhttp.readyState==4&&xhttp.status==200){
				insertHtml("#main-content",xhttp.responseText);
				asynInsertHtml("#side-bar","snippets/support-side-bar.html");
			}
		};
		xhttp.open("GET",html,true);
		xhttp.send();
	}

	cnelab.insertHtml=insertHtml;
	cnelab.showLoading=showLoading;	
	cnelab.asynInsertHtml=asynInsertHtml;
	cnelab.switchPage=switchPage;
	cnelab.switchPageWithSupportSidebar=switchPageWithSupportSidebar;

	var homeHtml="snippets/home-snippet.html";

	document.addEventListener("DOMContentLoaded",function(event){
		switchPage(homeHtml);
	});

	global.$cnelab=cnelab;
})(window);

function loadScript(url){
    var script = document.createElement("script")
    script.type = "text/javascript";

    if (script.readyState){  //IE
        script.onreadystatechange = function(){
            if (script.readyState == "loaded" ||
                    script.readyState == "complete"){
                script.onreadystatechange = null;
            }
        };
    } else {  //Others
        script.onload = function(){
        };
    }
    script.src = url;
    document.getElementsByTagName("head")[0].appendChild(script);
}

$(function (){
		$( "#home-page" ).click(function() {
			$("#main-content").load("snippets/home-snippet.html");
		});
		$( "#download-page" ).click(function() {
			$cnelab.switchPageWithSupportSidebar("snippets/download-snippet.html");
		});

		$("#quick-start-page").click(function(){
			$("#main-content").load("snippets/quickstart-snippet.html");
		});

		$("#publication-page").click(function(){
			$cnelab.switchPageWithSupportSidebar("snippets/publication-snippet.html");
		});

		$("#about-page").click(function(){
			$cnelab.switchPageWithSupportSidebar("snippets/about-snippet.html");
		});
});


