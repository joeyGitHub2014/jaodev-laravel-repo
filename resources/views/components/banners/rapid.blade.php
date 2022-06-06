<rapid>
    <div class=" svg-rapid-wrapper m-4 overflow-hidden border border-black shadow-2xl pointer"  >
        <div id="bus"></div>
        <div id="metroLogo"></div>
        <div id="rapidText">Rapid</div>
    </div>
    <script>
             rapidMetro = gsap.timeline();
            // Move bus
            rapidMetro.to('#bus', { left: 270, ease: Power2.easeout, duration: .7, delay:2 })
                .to('#metroLogo',{opacity: 1, duration: .7, delay: .5 })
                .to('#rapidText',{opacity: 1, duration: .7 })
    </script>
        
</rapid>