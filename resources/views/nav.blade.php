<nav class="nav p-2">
    <div class="container" style=" display: flex; justify-content: space-between; padding-top:10px;">

        <div><img src="{{asset("logo.png")}}" style="width: 100px;"></div>

        <div class="dropdown" style="display: inline-block">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" >
               {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu">
                <li>
                    <form action="{{route('logout')}}" method="POST" >
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="btn">
            @yield("btn")
        </div>
    </div>
</nav>
