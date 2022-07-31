<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
  <ul class="nav">
    <li class="nav-item">
       <a class="nav-link active text-white" aria-current="page" href="#">Ujikom-2022</a>
    </li>
    @guest
       <li class="nav-item">
           <a class="nav-link text-white" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link text-white" href="{{route('login')}}">Login</a>
        </li>
    @endguest

    @auth
        @if (auth()->user()->role == 'admin')
            <li class="nav-item">
                 <a class="nav-link text-white" href="{{route('admin.produk')}}">Produk</a>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('pelanggan.keranjang') }}">Keranjang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('pelanggan.summary')}}" tabindex="-1" aria-disabled="true">Summary</a>
            </li>
        @endif
            <li class="nav-item">
                <a class="nav-link text-white" href="{{route('logout')}}">Logout</a>
            </li>
    @endauth
    {{-- 
    <li class="nav-item">
      <a class="nav-link text-white" href="#" tabindex="-1" aria-disabled="true">Checkout</a>
     </li>--}}
 </ul>
</nav>