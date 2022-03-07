<x-app>
    <div class="wrapper" data-barba="container" data-barba-namespace="animations">
        <x-header title="animations" />

    </div>
    <script>
        /*
        
                <div style="margin:100px 0px 1200px 600px;align-items:center">
            <div class="box1"></div>
            <div class="box2"style="margin-top:50px"></div>
            <div class="box3"  style="margin-top:50px;"></div>
        </div> 
        gsap.registerPlugin(ScrollTrigger)
        gsap.to(".box2", {
            scrollTrigger: {
                trigger: ".box2",
                start:  "top 205",/*relates to trigger element , relates to scroller/view port   */
                                     /* numbers % are to the top */
               /* endTrigger: ".box3",
                end :   "center 300px",
                markers:true,
                toggleActions: "restart pause resume pause"
            },
            x: 1100,
            rotation: 360,
            duration: 1 
        })

    </script>

</x-app>