<x-app>
    <main class="wrapper mb-2" data-barba="container" data-barba-namespace="login">
        <x-header title="Login" />
        @if ($errors->any())
            <div class="text-center alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="/login" style="background-color:#f7f7f7">
         @csrf
            <div class="form-group row w-3">
                <label for="email">Email: </label>
                <input class="form-control" name="email" id="email" type="text">
            </div>
            <div class="form-group row w-3">
                <label for="password">Password: </label>
                <input class="form-control" name="password" id="password" type="password">
            </div>
            <div class="form-group ml-10">
                <button type="submit" class="btn btn-primary btn-sm ">Login</button>
            </div>
        </form>

</main>
</x-app>