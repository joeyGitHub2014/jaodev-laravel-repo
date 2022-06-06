<banners.tarpits>
    <style type=text/css>
        .animation_container {
            overflow: hidden;
            border: 8px solid #fff;
            position: relative;
            background-color: #000;
            top: 0;
            left: 0;
            cursor: pointer;
            width: 310px;
            height: 260px;
            animation-play-state: paused;
        }

        .animation_container>div {
            position: absolute;
            animation: animateTarPits 16s ;
            opacity: 0;
         }

        .animation_container>div:nth-child(2) {
            animation-delay: 4s;
        }

        .animation_container>div:nth-child(3) {
            animation-delay: 8s;
        }

        .animation_container>div:nth-child(4) {
            animation-delay: 12s;
        }

        @keyframes animateTarPits {
            0% {
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

        }
    </style>

    <div class="animation_container m-4  shadow-lg" onclick="playPauseAnimation()">

        <div style="opacity:1;"><img src="/htmlBanners/LaBreaTarPits/300x250/tarPits.png"></img> </div>

        <div><img src="/htmlBanners/LaBreaTarPits/300x250/Sloth.jpg"></img></div>

        <div><img src="/htmlBanners/LaBreaTarPits/300x250/SaborTooth.jpg"></img></div>

        <div><img src="/htmlBanners/LaBreaTarPits/300x250/Mamoth.jpg"></img></div>

    </div>        

    <script>
 
        function playPauseAnimation() {
            objAry = document.getElementsByClassName("animation_container");
            console.log(objAry[0].style.animationPlayState)
            if (objAry[0].style.animationPlayState === "paused" || objAry[0].style.animationPlayState == "") {
                objAry[0].style.animation = "animateTarPits 16s 1;";
                objAry[0].style.animationPlayState = "running";
            } else {
                objAry[0].style.animation ='none'
                objAry[0].style.animationPlayState = "paused";
            }
        }
    </script>

</banners.tarpits>