<rapid>

        <div class="ml-4 text-xs"   >
            <button onclick="runMetro()"  >click to start</button>
        </div>
        <div  class= "svg-rapid-wrapper m-4 overflow-hidden border border-black shadow-2xl">
            <div id="bus"></div>
            <div id="metroLogo"></div>
            <div id="rapidText">Rapid</div>
        </div>
    
    <script  type="text/javascript">
        let metroDone = false;

        let runMetro =  () => {  
            console.log(metroDone);

            if (!metroDone) {
                rapidMetro = gsap.timeline();
                // Move bus
                rapidMetro.to('#bus', { left: 270, ease: Power2.easeout, duration: .7, delay:1 })
                    .to('#metroLogo',{opacity: 1, duration: .7, delay: .5 })
                    .to('#rapidText',{opacity: 1, duration: .7 })
                    .call(done, [])
            } else {
                metroDone = false;
                rapidMetro.restart();
            }
        }

        function done() {
            console.log("DONE");
            metroDone = true;
        }

        //rapidMetro.restart();

    </script>
        
</rapid>