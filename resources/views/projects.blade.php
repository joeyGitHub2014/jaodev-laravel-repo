 <x-app :projects='$projects'>
     <main class="calendar-container wrapper" data-barba="container" data-barba-namespace="projects">
         <x-header title="projects" />
            <section style="background-color:darkgray: rgb(243, 123, 123);padding: 50px;max-width:1900px; margin:auto;">
                <my-card-list>
                    @foreach ($projects as $project)
                        <my-card
                            name="{{ $project->title }}"
                            img="img/{{ $project->image }}"
                            number={{ $project->id }}
                            supertype="Pokémon"
                            subtypes=["Basic"]
                            rarity="Rare Holo"
                        />
                    @endforeach
                </my-card-list>
            </section>
        <section class="events" style="padding-top:5em">
            <div class="row-xl">

                 <div class="events__grid">
                     @foreach ($projects as $project)
                         <article class="event-card">
                             <button type="button" data-toggle="modal" data-target="#detail{{ $project->id }}">
                                 <figure class="event-card__img js-imgbg"
                                     style="background-image: url('images/{{ $project->image }}')">
                                     <img src="images/{{ $project->image }}" />
                                 </figure>
                                 <div class="event-card__date">
                                     <span class="event-card__numb">{{ $project->type }} </span>
                                 </div>

                                 <div class="event-card__info">
                                     <h4 class="event-card__title">
                                         <div>
                                             {{ $project->title }}
                                         </div>
                                     </h4>
                                     <time class="event-card__time">{{ $project->excerpt }}</time>
                                     <footer class="event-card__footer">
                                         <span class="event-card__link"> MORE INFO </span>
                                     </footer>
                                 </div>
                             </button>
                         </article>
                         <!-- Modal -->
                         <div class="modal fade" id="detail{{ $project->id }}" tabindex="-1" role="dialog"
                             aria-labelledby="detail{{ $project->id }}Title" aria-hidden="true">
                             <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                 <div class="modal-content ">
                                     <div class="modal-header {{$project->styles}}" >
                                         <h5 class="title__header  " id="exampleModalLongTitle">{{ $project->title }}
                                         </h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <div class="modal-body">
                                         {{ $project->description }}
                                        <div class="projects">
                                            {{ $project->skills }}
                                        </div>
                                     </div>
                                     <div class="modal-footer">
                                    </div>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         </section>


     </main>
 </x-app>
