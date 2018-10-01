@if (Route::has('login'))
@auth
@else
<div class="card" style="background-color: #ECECEA;">
  <div class="card-header">{{ __('Login') }}</div>
  <div class="card-body">
    <form class="form-signin"  action="{{ route('login') }}" method="POST">
      @csrf
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required name="email">
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me">{{ __('Remember Me') }}
        </label>
      </div>
      <button class="btn btn-primary float-none " type="submit">Sign in</button>
      <p>New User??</p>
      <a href="/signup" class="btn  btn-success btn-block">Sign up</a>
    </form>
  </div>
</div>
@endauth
@endif
