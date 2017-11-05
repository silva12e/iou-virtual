        <nav class="navbar navbar-default navbar-static-top">
            <div class="container" >
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a style="font-family: 'Dosis', sans-serif;"  href="{{ url('/') }}" style="">
                       <img  src="{{url('/img/iou-logo.png')}}" alt="Image"/>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li ><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{-- <i class="glyphicon glyphicon-user"></i> --}}
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    
                                    <li>
                                        <a href=""><i class="glyphicon glyphicon-pencil"></i> Edit Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                           <i class="glyphicon glyphicon-log-out"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                            </li>
                            <li>
                                <a href="#"><i class="glyphicon glyphicon-globe"></i> Notifications</a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>