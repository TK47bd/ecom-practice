@auth
@if((Auth::user()->type == 'SuperUser'))
<a href="{{ url('/dashboard') }}" class="ms-2 btn btn-success">Dashboard</a>
@endif
<a href="{{ url('/logout') }}" class="ms-2 btn btn-danger">Logout</a>
@else
<a href="{{ route('login') }}" class="ms-2 btn btn-success">Login</a>
@endauth