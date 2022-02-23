<x-app>
    <main class="wrapper 	 mb-2" data-barba="container" data-barba-namespace="create">
        <x-header title="Register a User" />
        @if ($errors->any())
            <div class="text-center alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="POST" action="/register" style="background-color:#f7f7f7">
         @csrf
         <div class="form-group row ">
                <label for="name">Name: </label>
                <input class="form-control" name="name" id="name" type="text">
            </div>
            <div class="form-group row">
                <label for="password">Password: </label>
                <input class="form-control" name="password" id="password" type="text">
            </div>
            <div class="form-group row">
                <label for="email">Email: </label>
                <input class="form-control" name="email" id="email" type="text">
            </div>
            <button>
                Register
            </button>
        </form>

</main>
</x-app>