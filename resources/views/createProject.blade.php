<x-app>
    <main class="wrapper 	 mb-2" data-barba="container" data-barba-namespace="create">
        <x-header title="Create Project" />

        @if ($errors->any())
            <div class="text-center alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="/store" style="background-color:#f7f7f7">
            @csrf
            <div class="form-group row">
                <label for="title">Title: </label>
                <input class="form-control" name="title" id="title" type="text">
            </div>
            <div class="form-group row">
                <label for="image">Image: </label>
                <input class="form-control" name="image" id="image" type="text">
            </div>
            <div class="form-group row">
                <label for="excerpt">Excerpt: </label>
                <textarea class="form-control" name="excerpt" id="excerpt" type="textarea" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group row">
                <label for="description">Description: </label>
                <textarea class="form-control" name="description" id="description" type="textarea" rows="4" cols="50"> </textarea>
            </div>
            <div class="form-group row">
                <label for="type">Type: </label>
                <input class="form-control" name="type" type="text">
            </div>
            <div class="form-group row">
                <label for="skills">Skills: </label>
                <input class="form-control" name="skills" type="text">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
</x-app>