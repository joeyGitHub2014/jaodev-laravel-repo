<x-app>
    <main class="wrapper mb-2" data-barba="container" data-barba-namespace="edit">
        <x-header title="Edit Project" />
        @if ($errors->any())
        <div class="text-center alert alert-danger">
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="  flex flex-row " style="background-color:#f7f7f7">
            @foreach ($projects as $project)
            <div class="card" style="width: 15rem; text-align:center;">
                <a href="/edit/{{$project->id}}">
                    <figure class="event-card__img js-imgbg" 
                        style="background-image: url('/images/{{$project->image}}')">
                            <img src="images/{{$project->image}}" />
                    </figure>
                    <h4 class="event-card__title ">{{$project->title}}</h4>
                </a>
            </div>
            @endforeach
        </div>

        </hr>
        @if ($projectToEdit != null)

        <form method="POST" action="/update/{{$projectToEdit->id}}" style="background-color:#f7f7f7">
            @csrf
            <div class="form-group ml-40 ">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <div class="form-group row">
                <label for="title">Title: </label>
                <input class="form-control" name="title" id="title" type="text" value="{{($projectToEdit->title)}}">


            </div>
            <div class="form-group row">
                <label for="image">Image: </label>
                <input class="form-control" name="image" id="image" type="text" value="{{$projectToEdit->image}}">
            </div>
            <div class="form-group row">
                <label for="excerpt">Excerpt: </label>
                <textarea class="form-control" name="excerpt" id="excerpt" type="textarea" rows="4" cols="50">{{$projectToEdit->excerpt}}</textarea>
            </div>
            <div class="form-group row">
                <label for="description">Description: </label>
                <textarea class="form-control" name="description" id="description" type="textarea" rows="4" cols="50">{{$projectToEdit->description}} </textarea>
            </div>
            <div class="form-group row">
                <label for="type">Type: </label>
                <input class="form-control" name="type" type="text" value="{{$projectToEdit->type}}">
            </div>
            <div class="form-group row">
                <label for="skills">Skills: </label>
                <input class="form-control" name="skills" type="text" value="{{$projectToEdit->skills}}">
            </div>

        </form>
        @endif
    </main>
</x-app>