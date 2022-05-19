<x-guest-layout title="Login">
    <x-auth-card>
        <main>
        <section class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 ">
                          <!-- Session Status -->
              <x-auth-session-status class="mb-4" :status="session('status')" />

              <!-- Validation Errors -->
              <x-auth-validation-errors class="mb-4" :errors="$errors" />

              <form class="form-back" action="{{ route('login') }}" class="" method="POST">
              @csrf
              
                <div class="form-group">
                  <label for="exampleFormControlInput1" class="form-label":value="__('Email')">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" :value="old('email')" required autofocus placeholder="name@example.com" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1" class="form-label" :value="__('Password')">Password</label>
                  <input type="password" name="password" class="form-control eye-cont" id="password" placeholder="Password" required autocomplete="current-password">
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">{{ __('Remember me') }}</label>
                  </div>
                </div>
                <button type="submit" class="btn btn-block btn-primary login-primary">{{ __('Log In') }}</button>
              </form>

              <div class="text-center login-text ">
                <p>Don’t have an account? <a href="/register" class="login-link">Register</a></p>
                <p><a href="{{ route('password.request') }}" class="login-link">{{ __('Forgot your password?') }}</a></p>
              </div>
            </div>
            
            <div class="col-lg-6">
              
              <div class="login-img h-500">
              <marquee behavior="" direction="left" class=""><h1 class="restrict">Restricted Area</h1></marquee>
              <p class="tex h-800 fa fa-solid fa-film"> </p>
              </div>
            </div>
          </div>
        </section>
      </main>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,229.3C384,213,480,107,576,96C672,85,768,171,864,186.7C960,203,1056,149,1152,138.7C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </x-auth-card>
</x-guest-layout>
