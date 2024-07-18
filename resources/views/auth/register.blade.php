@vite('resources/css/app.css')

<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
        <div class="w-full bg-white rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
              Create an account</p>
            <div class="form-group">
                <label class="block mb-2 text-sm font-medium text-gray-900" for="name">Name</label>
                <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

    <div class="form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900" for="email">Email</label>
        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900" for="password">Password</label>
        <input type="password" id="password" name="password" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 @error('password') is-invalid @enderror" required autocomplete="new-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label class="block mb-2 text-sm font-medium text-gray-900" for="password_confirmation">Confirm Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5 @error('password_confirmation') is-invalid @enderror" required autocomplete="new-password">
        @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <button type="submit" class="w-full bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  focus:ring-blue-800 text-white">Register</button>
</form>