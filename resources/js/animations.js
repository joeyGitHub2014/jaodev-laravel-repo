

//let gsap = window.gsap;
//import { gsap } from 'gsap';



 export function runAnimation() {
    var tl1 = gsap.timeline();
    var tl2 = gsap.timeline();

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

        // add disclaimer button 
        .to('#theSkinny', { opacity: 1, y: -30, duration: .3 }, '-=.3')
        .to('#replayBtn', { opacity: 1, x: 25, duration: .3 }, '-=.3')
        
    function carOff() {
        tl2.to('#car', { opacity: 0, ease: Power2.easeout, delay: 3, duration: .2 });
    }

    function bounceTire() {
        gsap.to(['#svg-wheelFront-image'], { y: -6, x: -5, repeat: 15, yoyo: true, ease: Bounce.easeinout, duration: .1 });
        gsap.to(['#svg-wheelBack-image'], { y: -6, x: 5, repeat: 15, yoyo: true, ease: Bounce.easeinout, duration: .1 });
        gsap.to(['#svg-wireframe-image'], { rotation: 1, repeat: 15, yoyo: true, ease: Bounce.easeinout, duration: .1 }, '-=.1');
    }

    function showText() {
        gsap.to(['#text12'], { x: 788, ease: Linear.easeout, duration: .4 });
    }
    
    function hideText() {
        gsap.to(['#text12'], { x: -790, ease: Linear.easeout, duration: .4 });
    }
    
    function replay() {
        tl1.restart();
        tl2.restart();
        //window.location.reload(true);
    }

}



 

