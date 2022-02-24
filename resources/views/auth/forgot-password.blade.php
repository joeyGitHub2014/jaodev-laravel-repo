<x-app>
    <main class="wrapper 	 mb-2" data-barba="container" data-barba-namespace="register">
        <x-header title="Forgot Password" />
        @if ($errors->any())
            <div class="text-center alert alert-danger">
                @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if (session('status')) 
            <div class="text-center ">
                <p>{{ session('status') }}</p>
            </div>        
        @endif

        <form method="POST" action="/forgot-password" style="background-color:#f7f7f7">
         @csrf

            <div class="form-group row w-3">
                <label for="email">Email: </label>
                <input class="form-control" name="email" id="email" type="email">
            </div>
            <div class="form-group ml-10">
                <button type="submit" class="btn btn-primary btn-sm ">Send Email Link</button>
            </div>
        </form>

</main>
</x-app>