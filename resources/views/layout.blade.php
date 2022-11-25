<h1>APP MIMAKE | @yield('title')</h1>
<nav>
    <ul>
        {{-- http://localhost:8000/home --}}
        <li><a href="{{ url('home') }}">home</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('barang') }}">Barang</a></li>
        <li><a href="{{ url('konsumen') }}">Konsumen</a></li>
    </ul>
</nav>
<hr>
<div>
    @yield('content')
</div>