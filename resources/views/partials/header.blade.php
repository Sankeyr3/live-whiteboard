<header><a class="link-none" href="{{route('index')}}"><h1>Live Whiteboard</h1>

{{-- if not logged, log in button. if logged, account settings button --}}
@if(!Auth::check())
    <a class="btn btn-primary" href="{{route('loginForm')}}">Log in</a>
    <a class="btn btn-primary" href="{{route('registerForm')}}">Register</a>
@else
    <a class="btn btn-primary" href="{{route('account')}}">Account</a>
@endif
    
    {{-- if logged, log out button --}}
    @if(Auth::check())
    <a class="btn btn-primary" href="{{route('logout')}}">Log out</a>
    @endif
</a></header>
