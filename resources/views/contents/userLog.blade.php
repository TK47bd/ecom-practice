@auth
@if((Auth::user()->type == 'SuperUser'))
<a href="{{ url('/dashboard') }}" class="me-2 text-info">Dashboard</a>
@endif
<a href="{{ url('/logout') }}" class="text-danger me-2">Logout</a>
@else
<a href="{{ route('login') }}" class="me-2 text-info">Login</a>
@if (Route::has('register'))
<a href="{{ route('register') }}" class="me-2 text-dark">Register</a>
@endif
@endauth