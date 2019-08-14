
var extraWatchAjaxLinkDecoded = decodeURIComponent(extraWatchAjaxLink);


(function() {

	var ew_img = document.createElement('img');

    ew_img.src = extraWatchAjaxLinkDecoded + "img&rand="+ Math.random() +"&env=" + extraWatchEnv + "&ref="+ew_Utf8Encoder.ew_encodeURIComponent(ew_Utf8Encoder.ew_encodeURIComponent(document.referrer))+"&title="+ew_Utf8Encoder.encode(document.title)+"&uri="+ew_Utf8Encoder.ew_encodeURIComponent(window.location.pathname)+"&referringQuery="+ew_Utf8Encoder.ew_encodeURIComponent("")+"&params="+ew_Utf8Encoder.ew_encodeURIComponent(location.search);

    })();

	(function() {

        var ewHeatmapIncludeJS = document.createElement('script');
        ewHeatmapIncludeJS.type = 'text/javascript'; ewHeatmapIncludeJS.async = true;

        ewHeatmapIncludeJS.src = extraWatchAjaxLinkDecoded + "heatmap.include.js&env=" + extraWatchEnv + "&amp;id=0&amp;extraWatchHeatmap=&amp;extraWatchDay=&amp;params="+encodeURIComponent("getParams=" + encodeURIComponent(location.search)) + "&title=" + document.title + "&uri=" + location.pathname;

        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ewHeatmapIncludeJS, s);

        })();


(function() {	//onload ajax request which deactivates user
    window.addEventListener('beforeunload', function() {
        downloadUrl(extraWatchAjaxLinkDecoded + "unloaded", function (e) {}, true, true);
    })
})();
