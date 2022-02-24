$(window).on("load", function () {
    $(".youtube-popup").each(function () {
        $(this).videoPopup({
            // autoplay on open
            autoplay: true,
            // shows video controls
            // showControls: true,
            // colors of controls
            // controlsColor: null,
            // infinite loop
            // loopVideo: false,
            // shows video information
            // showVideoInformations: true,
            // width
            // width: "70%",
        });
    });
});
