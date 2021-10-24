
   <nav class="navbar navbar-expand-lg navbar-light shadow ">      
    <div class="container d-flex justify-content-between align-items-center" >
        <a class="navbar-brand text-success logo h1 align-self-center" href="/">
            <img src="assets/img/logo.png">
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
            <div class="flex-fill">
                <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Домой</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">Обо мне</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                    </li>
                    @if (!Request::is('order'))
                    <li class="nav-item">
                        <p class="text-center"><a href="{{ route('order') }}" class="btn btn-success text-white">Записаться</a></p>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</nav> 

