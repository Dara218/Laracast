<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <form action="/sessions" method="POST" class="mb-3 border d-flex flex-column">
                @csrf
                <h1 class="font-bold">Login</h1>

                @if (session()->has('error'))
                    <p class="text-danger">{{ session('error') }}</p>
                @endif

                  @error('username')
                      <span class="bg-red-200">{{ $message }}</span>
                  @enderror

                  <div class="d-flex flex-column">
                    <label for="" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" class="col-6" value="{{ old('email') }}">
                  </div>

                    @error('email')
                        <span class="bg-red-200">{{ $message }}</span>
                    @enderror

                  <div class="d-flex flex-column">
                    <label for="" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" class="col-6">
                  </div>

                  @error('password')
                        <span class="bg-red-200">{{ $message }}</span>
                    @enderror

                  <button type="submit" class="btn btn-primary bg-gray-200" name="submit-btn">Submit</button>

            </form>
        </main>
    </section>
</x-layout>
