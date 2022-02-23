 <x-app>
     <main class="wrapper" data-barba="container" data-barba-namespace="banners">
         <x-header title="banners" />
         <x-banner name="Smart Car" content="smartcar" width="" height="">
             <x-banners.smartcar style="background-color:rgba(255, 255, 255, 1.00);" />
         </x-banner>
         <x-banner name="Metro Rapid">
             <x-banners.rapid />
         </x-banner>
         <x-banner name="La Brea Tar Pits" content="tarpits" width="310" height="260">
             <x-banners.tarpits />
         </x-banner>
     </main>
 </x-app>