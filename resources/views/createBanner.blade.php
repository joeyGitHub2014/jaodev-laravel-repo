
<x-app>
    <x-header title="Create /Update project" />
<form method="POST" action="/store">
    @csrf
    <div class="form-group row">
        <label for="title">Ad Title: </label>
        <input class="form-control" name="title" id="title" type="text">
    </div>
    <div class="form-group row">
        <label for="width">Width: </label>
        <input class="form-control" name="width" id="width" type="text">
        <label for="height">Height: </label>
        <input class="form-control" name="height" id="height" type="text">
    </div>
    <div class="form-group row">
        <label for="javaScript">JavaScript file names for animations?: </label>
        <input class="form-control" name="javaScript" type="text">
    </div>
    <div class="form-group row">
        <label for="type">Animate CC?: </label>
        <input class="form-control" name="type" type="text">
    </div>
    <div class="form-group row">
        <label for="description">Description: </label>
        <textarea class="form-control" name="description" id="description" type="textarea" rows="4" cols="50"> </textarea>
    </div>
    <div class="form-group row">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</x-app>
