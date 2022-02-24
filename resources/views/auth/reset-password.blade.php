<x-app>
    <main class="wrapper 	 mb-2" data-barba="container" data-barba-namespace="resetpassword">

        <x-header title="Reset Password" />

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

        <form method="POST" action="/reset-password" style="background-color:#f7f7f7">
            @csrf
            
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="form-group row w-3">
                <label for="email">Email: </label>
                <input class="form-control" name="email" id="email" value="{{ old('email', $request->email) }}" >
            </div>

            <div class="form-group row w-3">
                <label for="password">Password: </label>
                <input class="form-control" name="password" id="password" type="password">
            </div>

            <div class="form-group row w-3">
                <label for="password_confirmation">Password Conformation: </label>
                <input class="form-control" name="password_confirmation" id="password_confirmation" type="password">
            </div>

            <div class="form-group ml-10">
                <button type="submit" class="btn btn-primary btn-sm ">Reset Password</button>
            </div>

        </form>

</main>
</x-app>