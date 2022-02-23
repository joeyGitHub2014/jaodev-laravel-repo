 <x-app :projects='$projects'>
     <main class="calendar-container wrapper" data-barba="container" data-barba-namespace="projects">
         <x-header title="projects" />
         <section class="events" style="padding-top:5em">
             <div class="row-xl">
                 <div class="events__grid">
                     @foreach($projects as $project)
                     <article class="event-card">
                         <a href={{ $project->id}}>
                             <figure class="event-card__img js-imgbg" style="background-image: url('images/{{$project->image}}')">
                                 <img src="images/{{$project->image}}" />
                             </figure>
                             <div class="event-card__date">
                                 <span class="event-card__numb">{{$project->type}} </span>
                             </div>

                             <div class="event-card__info">
                                 <h4 class="event-card__title">
                                     <div>
                                         {{$project->title}}
                                     </div>
                                 </h4>
                                 <time class="event-card__time">{{$project->excerpt}}</time>
                                 <footer class="event-card__footer">
                                     <span class="event-card__link"> MORE INFO </span>
                                 </footer>
                             </div>
                         </a>
                     </article>
                     @endforeach
                 </div>
             </div>
         </section>
     </main>


 </x-app>