<smartcar>
    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet" type="text/css">
    <figure>    
    <div class="ml-4 flex justify-center	 text-xs"  >
        <button id="runBtn"  >click to start</button>
    </div>
    <div class="m-4   overflow-hidden  border border-black relative shadow-lg " {{ $attributes->merge(['style' => '']) }} id="smartCar">
        <div id="car"></div>
        <div class="svg-mask-wrapper">
            <svg viewbox="0 0 720 90">
                <defs>
                    <rect id="rectYellow" width="90" height="24" rx="12" ry="12" style="fill: #FFCC00" /> 
                    <clipPath id="rectRedClipPathId">
                        <rect id="rectRed" x="-90" y="0" width="90" height="24" rx="12" ry="12" style="fill: #990000" />
                    </clipPath>
                    <clipPath id="clipPathId">
                        <rect x="493" y="70" width="128" height="20" style="fill: #000" />
                    </clipPath>
                    <mask id="svg-mask" maskUnits="userSpaceOnUse" maskContentUnits="userSpaceOnUse">
                        <image id="svg-mask-wireframe-img" x="622" y="9" width="128" height="76" xlink:href="/htmlBanners/SmartCar/assets/mask.png" />
                    </mask>
                    <mask id="svg-mask-tridion" maskUnits="userSpaceOnUse" maskContentUnits="userSpaceOnUse">
                        <image id="svg-mask-img" x="622" y="9" width="74" height="59" xlink:href="/htmlBanners/SmartCar/assets/tridionMask.png" />
                    </mask>

                </defs>
                <g id="bumps" clip-path="url(#clipPathId)">
                    <path d="
                           M 621 90
                           L 621 80 
                           C 621 70 631 70 631 85 
                           C 631 88 641 88 641 80 
                           C 641 70 651 70 651 85 
                           C 651 88 661 88 661 80 
                           C 661 70 671 70 671 85 
                           C 671 88 681 88 681 80 
                           C 681 70 691 70 691 85 
                           C 691 88 701 88 701 80 
                           C 701 70 711 70 711 85 
                           C 711 88 721 88 721 80 
                           C 721 70 731 70 731 85 
                           C 731 88 741 88 741 80 
                           C 741 70 751 70 751 85 
                           C 751 88 761 88 761 80
                           C 761 70 771 70 771 85 
                           C 771 88 781 88 781 80
                           C 781 70 791 70 791 85 
                           C 791 88 801 88 801 80
                           C 801 70 811 70 811 85 
                           C 811 88 821 88 821 80
                           C 821 70 831 70 831 85 
                           C 831 88 841 88 841 80
                           C 841 70 851 70 851 85 
                           C 851 88 861 88 861 80
                           C 861 70 871 70 871 85 
                           C 871 88 881 88 881 80
                           C 881 70 891 70 891 85 
                           C 891 88 901 88 901 80
                           C 901 70 911 70 911 85
                           C 911 88 921 88 921 80
                           C 921 70 931 70 931 85                              
                           C 931 88 941 88 941 80
                           C 941 70 951 70 951 85
                           C 951 88 961 88 961 80
                           C 961 70 971 70 971 85
                           C 971 88 981 88 981 80
                           C 981 70 991 70 991 85
                           L 991 90 Z " fill="red">
                    </path>
                </g>
                <image id="svg-wheelBack-image" mask="url(#svg-mask)" width="29" height="29" y="54" x="499" xlink:href="/htmlBanners/SmartCar/assets/wheelBack.png" />
                <image id="svg-wheelFront-image" mask="url(#svg-mask)" width="29" height="29" y="55" x="587" xlink:href="/htmlBanners/SmartCar/assets/wheelFront.png" />
                <image id="svg-wireframe-image" mask="url(#svg-mask)" width="128" height="76" y="9" x="493" xlink:href="/htmlBanners/SmartCar/assets/wireframe.png" />
                <image id="svg-tridion-image" mask="url(#svg-mask-tridion)" width="74" height="59" y="9" x="510" xlink:href="/htmlBanners/SmartCar/assets/tridion.png" />

                <g transform="translate(531 31)  rotate(-98)">
                    <ellipse id="arbag2" rx="0" ry="0" fill="#FF6600" opacity=".7" />
                </g>
                <g transform="translate(543 42)  rotate(-130)">
                    <ellipse id="arbag3" rx="0" ry="0" fill="red" opacity=".7" />
                </g>
                <g transform="translate(560 35)  rotate(-70)">
                    <ellipse id="arbag4" rx="0" ry="0" fill="red" opacity=".7" />
                </g>
                <g transform="translate(574 53)  rotate(-135)">
                    <ellipse id="arbag5" rx="0" ry="0" fill="red" opacity=".7" />
                </g>
                <g transform="translate(567 32)  rotate(-58)">
                    <ellipse id="arbag6" rx="0" ry="0" fill="#FF6600" opacity=".7" />
                </g>

                <use x="540" y="36" xlink:href="#rectYellow" clip-path="url(#rectRedClipPathId)" />
                <text id="findTxt" style="font-size:10px; fill:#666666; opacity:0" x="475" y="51">find a dealer</text>
            </svg>
        </div>
        <div id="ramp"></div>
        <div id="sign"></div>
        <div id="exit"></div>
        <div id="safty"></div>
        <div id="carAngle"></div>
        <div id="smartBtn"></div>

        <div id="replayBtn" onmousedown="replay()"></div>

        <div class="textStyle" id="text1">the 2019 smart car</div>
        <div class="textStyle" id="text2">with <b>8</b> full-size <b>airbags</b></div>
        <div class="textStyle" id="text3">
            <p class="leading-9">Electronic <b>Stability</b><br>Program (ESP) </p>
        </div>
        <div class="textStyle" id="text4"><b>hill start</b> assist</div>
        <div class="textStyle" id="text5">
            <p class="leading-9"><b>crash management</b><br>system</p>
        </div>
        <div class="textStyle" id="text6">
            <p class="leading-9">and a racecar-inspired<br><b>tridion safety cell</b></p>
        </div>
        <div class="textStyle" id="text7">small on size.</div>
        <div class="textStyle" id="text8">big on safty.</div>
        <div class="textStyle" id="text9" style="padding-left:70px"><b>unworry.</b></div>
        <div class="textStyle" id="text10" style="padding-left:135px"><b>uncar.</b></div>
        <div class="textStyle" id="text11" style="font-size:.8rem;padding-left:17px">
            <p class="leading-10">lease for $99/month for 3 months*</p>
        </div>
        <div id="findBtn"></div>
        <div class="textStyle" id="theSkinny" onmouseover="showText()" onmouseout="hideText()">the skinny</div>
        <div class="textStyle" id="text12"> <textarea rows="11" cols="116">Mercedes-Benz USA, LLC ("MBUSA") appreciates your interest in its products and  your visit to its Internet site, MBUSA.com (the "Site"). Your privacy is important to us and we want you to feel comfortable visiting our Site. Protecting your privacy in the processing of your personal data is an important concern to which we pay special attention. Therefore, this online privacy statement tells you about the information MBUSA collects through the services available on our Site, how we use that information, and how you can opt out of certain uses of information we may collect. By using our services and accessing our Site, you are consenting to the information collection and use practices described in this online privacy statement, as modified from time to time by us. If we decide to change this online privacy statement, we will post a new online privacy statement on our Site an websites for additional details.</textarea></div>
        <div id="smart_bg" onclick="removeBgPlay()"></div>

    </div>

    </figure>

    <script  type="text/javascript">
        document.getElementById("runBtn").addEventListener("click", function() {    

 
        const tl1 = gsap.timeline();
        const tl2 = gsap.timeline();
        const running = false;

        function removeBgPlay () {
            el=document.querySelector("#smart_bg")
            el.opacity = 0;            
            runAnimation();
        }

        
            const runBtn = document.getElementById('runBtn');
            runBtn.disabled  = true;
            this.running = true;
            console.log("running smart car animation")
            CSSPlugin.defaultSmoothOrigin = false;
            // Move car
            tl1.to('#car', { left: 491, ease: Power2.easeout, duration: .7, delay: 1 })
                .to('#text1', { opacity: 1, y: 20, duration: .5 })

                // Remove car and show wireframe
                .to('#svg-mask-wireframe-img', { attr: { x: 494 }, onComplete: carOff(), duration: .4, delay: .5 })
                .to('#text1', { opacity: 0, duration: .4 })

                .to('#svg-wireframe-image', { x: 1, y: 1, rotation: 3.5, transformOrigin: '50% 50%', ease: Power2.easeout, duration: .3 }, '-=.7')
                .to('#svg-wireframe-image', { x: -1, y: -1, rotation: -3.5, ease: Power2.easeout, duration: .3 }, '-=.4')
                .to('#svg-wireframe-image', { x: -1, y: 1, rotation: 0, ease: Power2.easeout, duration: .2 }, '-=.3')
                .to('#svg-wireframe-image', { x: .5, ease: Power2.easeout, duration: .1 }, '-=.2')

                // Pump airbags
                .to('#text2', { opacity: 1, y: 20, duration: .5 })
                //.to('#arbag1', .5, {attr:{rx:7,ry:5},   ease:Power2.easeout}, '-=.5' )
                .to('#arbag2', { attr: { rx: 6, ry: 3 }, ease: Power2.easeout, duration: .5 }, '-=.5')
                .to('#arbag3', { attr: { rx: 10, ry: 7 }, ease: Power2.easeout, duration: .5 }, '-=.5')
                .to('#arbag4', { attr: { rx: 15, ry: 6 }, ease: Power2.easeout, duration: .5 }, '-=.5')
                .to('#arbag5', { attr: { rx: 6, ry: 4 }, ease: Power2.easeout, duration: .5 }, '-=.5')
                .to('#arbag6', { attr: { rx: 7, ry: 4 }, ease: Power2.easeout, duration: .5 }, '-=.5')
                .to('#svg-wireframe-image', { x: 1, y: 1, rotation: 3.5, ease: Power2.easeout, duration: .3 }, '-=.5')
                .to('#svg-wireframe-image', { x: -1, y: -1, rotation: -3.5, ease: Power2.easeout, duration: .3 }, '-=.3')

                // Deflate airbags
                .to(['#arbag1', '#arbag2', '#arbag3', '#arbag4', '#arbag5', '#arbag6'], { attr: { rx: 0, ry: 0 }, ease: Power2.easeout, delay: 1, duration: .5 })
                .to('#text2', { opacity: 0, duration: .5 }, '-=.3')

                // Start road bumps
                .to('#text3', { opacity: 1, duration: .5 })
                .to('#svg-wireframe-image', { scale: .90, y: -7, ease: Power2.easeout, duration: .5 }, '-=.5')
                .to('#svg-wheelBack-image', { scale: .90, x: 4.5, y: -9, ease: Power2.easeout, transformOrigin: '50% 50%', duration: .5 }, '-=.5')
                .to('#svg-wheelFront-image', { scale: .90, x: -5, y: -9, ease: Power2.easeout, transformOrigin: '50% 50%', duration: .5 }, '-=.5')
                .to('#bumps path', { attr: { x: 621 - 128 }, duration: .2 })
                .to('#bumps', { attr: { opacity: 1, duration: .7 } })
                .to(['#svg-wheelBack-image', '#svg-wheelFront-image'], { rotation: 1600, ease: Linear.easeNone, duration: 1.6 })
                .to('#bumps path', { x: -370, ease: Linear.easeNone, duration: 1.6 }, '-=1.6')
                .call(bounceTire, [], "-=1.6")
                // .call(bounceTire,[], null,"-=1.6" )
                .to('#bumps', { opacity: 0, duration: .5 })
                .to('#text3', { opacity: 0, duration: .5 }, "-=.3")

                // Start up ramp
                .to('#text4', { opacity: 1, y: 20, duration: .5 })
                .to('#svg-wireframe-image', { scale: 1, y: 4, ease: Power2.easeout, duration: .2 }, "-=1")
                .to('#svg-wireframe-image', { y: 0, ease: Power2.easeout, duration: .2 }, "-=1")
                .to(['#svg-wheelFront-image', '#svg-wheelBack-image'], { scale: 1, x: 0, y: 0, ease: Bounce.easeout, duration: .2 }, "-=1")
                .to('#svg-wireframe-image', { scale: .85, x: 4, y: -6, rotation: -33, duration: .2 })
                .to('#svg-wheelFront-image', { scale: .85, x: 2, y: -30.5, duration: .2 }, '-=.2')
                .to('#svg-wheelBack-image', { scale: .85, x: 26, y: 8, duration: .2 }, '-=.2')
                .to(['#ramp', '#sign'], { opacity: 1, duration: .2 }, '-=.2')
                .to(['#svg-wheelBack-image', '#svg-wheelFront-image'], { rotation: -360, ease: Linear.easeNone, duration: 1.2 })
                .to('#sign', { x: -150, y: 90, ease: Linear.easeNone, duration: 1 }, '-=1.2')
                .to(['#ramp', '#sign'], { opacity: 0, duration: .2 })
                .to('#svg-wireframe-image', { scale: 1, x: 1, y: -1, rotation: 4, ease: Power2.easeout, duration: .2 }, '-=.2')
                .to('#svg-wireframe-image', { x: 0, y: 0, rotation: -2, ease: Power2.easeout, duration: .4 })
                .to('#svg-wireframe-image', { rotation: 0, ease: Power2.easeout, duration: .4 })
                .to(['#svg-wheelFront-image', '#svg-wheelBack-image'], { scale: 1, x: -1, y: 0, ease: Bounce.easeout, duration: .2 }, '-=1')
                .to('#text4', { opacity: 0, duration: .5 }, '-=1')

                //  display safty features 
                .to('#text5', { opacity: 1, duration: .5 })
                .to('#safty', { opacity: 1, repeat: 5, yoyo: true, ease: Linear.easeNone, duration: .2 })
                .to('#text5', { opacity: 0, duration: .5 })
                .to('#text6', { opacity: 1, duration: .5 })
                .to('#svg-mask-tridion image', { attr: { x: 506 }, duration: .4 })
                .to('#svg-tridion-image', { opacity: 0, repeat: 5, yoyo: true, ease: Linear.easeNone, duration: .2 })
                .to('#svg-tridion-image', { opacity: 0, ease: Linear.easeNone, delay: 1, duration: .1 })
                .to('#text6', { opacity: 0, duration: .5 })

                // Send wire frame off screen
                .to(["#svg-wireframe-image", "#svg-wheelBack-image", "#svg-wheelFront-image"], { x: 300, ease: Linear.easeNone, delay: .5, duration: .3 })

                // Slide angled black car in
                .to("#carAngle", { x: 210, ease: Linear.easeOut, duration: .2 })

                // Display smart button angle car
                .to("#smartBtn", { opacity: 1, ease: Linear.ease, duration: .4 }, "-=.2")

                // Start text Small car...  
                .to('#text7', { opacity: 1, y: 10, duration: .5 })
                .to('#text8', { opacity: 1, y: 10, duration: .5 })
                .to(['#text7', '#text8'], { opacity: 0, delay: 1, duration: .5 })

                // Start text Unworry...  
                .to('#text9', { opacity: 1, y: 20, duration: .5 })
                .to('#text9', { x: -60, duration: .5 })
                .to('#text10', { opacity: 1, y: 20, duration: .5 })
                .to('#text11', { opacity: 1, y: 45, duration: .5 })

                // animate find button
                .to('#findBtn', { scale: 1.2, transformOrigin: '50% 50%', ease: Elastic.easeOut, duration: .3 })
                .to('#findBtn', { scale: 1.0, transformOrigin: '50% 50%', ease: Elastic.easeOut, duration: .3 })
                .to('#rectYellow', { x: -90, ease: Bounce.easeout, duration: .1 })
                .to('#findBtn', { x: -80, ease: Elastic.easeout, duration: .1 }, '-=.1')
                .to('#findBtn', { x: -70, ease: Elastic.easeout, duration: .1 })
                .to('#findTxt', { opacity: 1, duration: .3 })

                // add disclaimer replay buttons 
                .to('#theSkinny', { opacity: 1, y: -30, duration: .3 }, '-=.3')
                .to('#replayBtn', { opacity: 1, x: 25, duration: .3 }, '-=.3')
                .call(doneSmartCar, [], "-=1.6")


            function bounceTire() {
                gsap.to(['#svg-wheelFront-image'], { y: -6, x: -5, repeat: 15, yoyo: true, ease: Bounce.easeinout, duration: .1 });
                gsap.to(['#svg-wheelBack-image'], { y: -6, x: 5, repeat: 15, yoyo: true, ease: Bounce.easeinout, duration: .1 });
                gsap.to(['#svg-wireframe-image'], { rotation: 1, repeat: 15, yoyo: true, ease: Bounce.easeinout, duration: .1 }, '-=.1');
            }
            function carOff() {
                tl2.to('#car', { opacity: 0, ease: Power2.easeout, delay: 3, duration: .2 });
            }

        function doneSmartCar() {
            this.running = false;
        }


        function showText() {
            gsap.to(['#text12'], { x: 788, ease: Linear.easeout, duration: .4 })
        }

        function hideText() {
            gsap.to(['#text12'], { x: -790, ease: Linear.easeout, duration: .4 })
        }

    })
    
    document.getElementById("replayBtn").addEventListener("click", function() {    
        tl1.restart();
        tl2.restart();
    })

    </script>

</smartcar>