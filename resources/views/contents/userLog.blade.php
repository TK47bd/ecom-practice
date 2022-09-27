@auth
@if((Auth::user()->type == 'SuperUser'))
<a href="{{ url('/dashboard') }}" class="nav-link text-success">Dashboard</a>
@endif
<a href="{{ url('/logout') }}" class="nav-link text-danger">Logout</a>
@else
<a href="{{ route('login') }}" class="nav-link text-success">Login</a>
@endauth