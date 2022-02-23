@props(['js' => '',
'container' =>'',
'exportRoot'=>'',
'composition'=>'',
'overlay' =>''
])
<banners.adobecc.adobe-enabler>
		<!-- Studio Enabler Required -->
		<script>
			var supportsTouch;

			function onLoadHandler() {
				console.log('PAGE LOADED');
				if (Enabler.isInitialized()) {
					enablerInitHandler();
				} else {
					Enabler.addEventListener(studio.events.StudioEvent.INIT, enablerInitHandler);
				}
			}

			function enablerInitHandler() {
				console.log('ENABLER INIT');
				if (Enabler.isPageLoaded()) {
					pageLoadedHandler();
				} else {
					Enabler.addEventListener(studio.events.StudioEvent.PAGE_LOADED, pageLoadedHandler);
				}
			}
			//Function to run with any animations starting on load, or bringing in images etc
			pageLoadedHandler = function() {
				//Assign All the elements to the element on the page
				supportsTouch = 'ontouchstart' in window;
				//-- Add expand and button events --//
				addListeners();
				init();
			}
			//Add Event Listeners
			addListeners = function() {
				Enabler.addEventListener(studio.events.StudioEvent.EXPAND_START, fullscreenExpandStartHandler);
				Enabler.addEventListener(studio.events.StudioEvent.EXPAND_FINISH, fullscreenExpandFinishHandler);
				Enabler.addEventListener(studio.events.StudioEvent.COLLAPSE_START, fullscreenCollapseStartHandler);
				Enabler.addEventListener(studio.events.StudioEvent.COLLAPSE_FINISH, fullscreenCollapseFinishHandler);
			}
			fullscreenHandler = function() {
				Enabler.requestExpand();
				Enabler.counter("Full Screen count")
			}
			fullscreenExpandStartHandler = function() {
				Enabler.finishExpand();
			}
			fullscreenExpandFinishHandler = function() {
				Enabler.startTimer("Full Screen duration")
			}
			fullscreenCollapseStartHandler = function() {
				Enabler.finishCollapse();
			}
			fullscreenCollapseFinishHandler = function() {
				//-- Stop timer if there's any --//
				Enabler.stopTimer("Full Screen duration");
			}
			fullscreenExitHandler = function() {
				Enabler.requestCollapse();
				Enabler.exit('HTML5_Background_Clickthrough');
			}
			collapseExitHandler = function() {
				Enabler.exit('HTML5_Background_Clickthrough');
			}
			closeButtonHandler = function() {
				Enabler.reportManualClose();
				Enabler.requestCollapse();
			}
			window.addEventListener('load', onLoadHandler);
		</script>
		<script src="{{$js}}"></script>
		<script>
			var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;

			function init() {
				canvas = document.getElementById("canvas");
				anim_container = document.getElementById("{{$container}}");
				dom_overlay_container = document.getElementById("dom_overlay_container");
				var comp = AdobeAn.getComposition("{{$composition}}");
				var lib = comp.getLibrary();
				var loader = new createjs.LoadQueue(false);
				loader.addEventListener("fileload", function(evt) {
					handleFileLoad(evt, comp)
				});
				loader.addEventListener("complete", function(evt) {
					handleComplete(evt, comp)
				});
				var lib = comp.getLibrary();
				loader.loadManifest(lib.properties.manifest);
			}

			function handleFileLoad(evt, comp) {
				var images = comp.getImages();
				if (evt && (evt.item.type == "image")) {
					images[evt.item.id] = evt.result;
				}
			}

			function handleComplete(evt, comp) {
				//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
				var lib = comp.getLibrary();
				var ss = comp.getSpriteSheet();
				var queue = evt.target;
				var ssMetadata = lib.ssMetadata;
				for (i = 0; i < ssMetadata.length; i++) {
					ss[ssMetadata[i].name] = new createjs.SpriteSheet({
						"images": [queue.getResult(ssMetadata[i].name)],
						"frames": ssMetadata[i].frames
					})
				}
				var exportRoot = new lib.hike(); 
 				stage = new lib.Stage(canvas);
				//Registers the "tick" event listener.
				fnStartAnimation = function() {
					stage.addChild(exportRoot);
					createjs.Ticker.setFPS(lib.properties.fps);
					createjs.Ticker.addEventListener("tick", stage);
				}
				//Code to support hidpi screens and responsive scaling.
				AdobeAn.makeResponsive(false, 'both', false, 1, [canvas, anim_container, dom_overlay_container]);
				AdobeAn.compositionLoaded(lib.properties.id);
				fnStartAnimation();
			}
		</script>
		<!-- write your code here -->
	<div id="{{$container}}" class="m-4 w-auto overflow-hidden  border border-black relative shadow-lg" {{ $attributes->merge(['style' => '', '','']) }}>	
	<canvas id="canvas" width="728" height="90" style=" display: block; background-color:rgba(255, 255, 255, 1.00);"></canvas>
		<div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:728px; height:90px; position: absolute; left: 0px; top: 0px; display: block;"></div>
	</div>
</banners.adobecc.adobe-enabler>