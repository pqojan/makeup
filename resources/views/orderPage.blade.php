
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Записаться</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <!-- Slick -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">

    {{-- DATA PICKER --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">
  
     <!-- Icons font CSS-->
     <link href="assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
     <link href="assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
     <!-- Font special for pages-->
     <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 
     <!-- Vendor CSS-->
     <link href="assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
     <link href="assets/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
 
     <!-- Main CSS-->
     <link href="assets/css/main.css" rel="stylesheet" media="all">

</head>

<body>
    
    <!-- Header -->
@include('layouts.header')
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

 

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row cntr">

                <!-- col end -->
                {{-- <div class="col-lg-8  mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Записаться</h1>
                            
                            <h6>Description:</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>

                                <script type="text/javascript">
                                    $(function () {
                                        $('#datetimepicker1').datepicker({
                                            format: "mm/dd/yy",
                                            weekStart: 0,
                                            calendarWeeks: true,
                                            autoclose: true,
                                            language: 'ru',
                                            todayHighlight: true, 
                                            orientation: "auto"
                                        });
                                    });
                                </script>
                        

                            <form action="" method="POST">
                                <div class="row ">
                                    <div class="col-6 d-grid">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Выберите дату..." name="date" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 d-grid">
                                        <select class="form-control" id="exampleFormControlSelect1" name="option">
                                            <option value="">Выберите услугу</option>
                                            <option>Макияж</option>
                                            <option>Укладкa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-grid">
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type='text' class="form-control" placeholder="Имя Фамилия" name="name"/>
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6 d-grid">
                                        <input type='text' class="form-control" placeholder="Email" name="email"/>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-6 d-grid">
                                        <div class="form-group">
                                            <div class='input-group' id=''>
                                                <input type="text" class="form-control phon" id="phone" placeholder="+7 (XXX) XXX-XX-XX">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg mt-3" name="submit" value="buy">Записаться</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> --}}

<div class="col-sm-12  mt-3">
    <div class="card card-4">
        <div class="card-body">
            <h2 class="title">Записаться</h2>
            <p class="mb-5">Пожалуйста заполняйте форму и в ближайшее время мы с вами свяжемся 💋</p>
            <form method="POST" action="{{ route('signup') }}">
                @csrf
                <div class="row row-space">
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">Имя</label>
                            <input class="input--style-4 aaa @error('first_name') is-invalid @enderror" type="text" name="first_name" value="{{ old('first_name') }}" >
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">Фамилия</label>
                            <input class="input--style-4 aaa @error('last_name') is-invalid @enderror" type="text" name="last_name" value="{{ old('last_name') }}">
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">
                        <label class="label">Дата </label>
                        <div class="input-group">

                            <div class="input-group-icon">
                                <input class="input--style-4 aaa js-datepicker @error('date') is-invalid @enderror" type="text" name="date" value="{{ old('date') }}">
                                <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="input-group">
                            <label class="label">Email</label>
                            <input class="input--style-4 aaa @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
                </div>
                <div class="row row-space">
                    <div class="col-2">                 
                            <label class="label">Телефон</label>
                            <input type="text" class="input--style-4 form-control phon @error('phone') is-invalid @enderror" name="phone_number" id="phone" placeholder="+7 (XXX) XXX-XX-XX" value="{{ old('email') }}">  
                    </div>
                    <div class="col-2">
                            <label class="label">Услуга</label>
                            <div class="rs-select2 js-select-simple select--no-search @error('subject') is-invalid @enderror">
                                <select name="subject" >
                                    <option disabled="disabled" selected="selected">Выберите услугу</option>
                                    <option>Макияж</option>
                                    <option>Укладкa</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                    </div>
                </div>

                <div class="p-t-15">
                    <button class="btn btn--radius-2 btn--blue mt-3" type="submit">Записаться</button>
                </div>
            </form>
        </div>
</div>
</div>

        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Мои работы</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">

                
            @foreach ($db as $item)
               <div class="p-2 pb-3">
                <div class="product-wap card rounded-0">
                    <div class="card rounded-0">
                        <img class="card-img rounded-0 img-fluid" src="assets/img/works/{{$item->photo}}">
                    </div>
                </div>
              </div> 
            @endforeach
 
            </div>


        </div>
    </section>
    <!-- End Article -->


    <!-- Start Footer -->
    @include('layouts.footer')
    <!-- End Footer -->

  <script>
      $('.aaa').keyup(function() {
             $(this).css("border", "none");
             
}); 
  </script>


    <!-- Start Script -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/locales/bootstrap-datepicker.ru.min.js"></script>
       <script src="assets/js/bootstrap.bundle.min.js"></script>
       <script src="assets/js/templatemo.js"></script>
       <script src="assets/js/custom.js"></script>
    <!-- End Script -->

    <!-- Start Slider Script -->
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/maskphone.js"></script>

    {{-- Bootstrap form Start --}}

    <!-- Jquery JS-->

    <!-- Vendor JS-->
    <script src="assets/vendor/select2/select2.min.js"></script>
    <script src="assets/vendor/datepicker/moment.min.js"></script>
    <script src="assets/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets/js/global.js"></script>

    {{-- Bootstrap form end --}}

    <script>
        $('#carousel-related-product').slick({
            infinite: true,
            arrows: false,
            slidesToShow: 4,
            slidesToScroll: 3,
            dots: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3
                    }
                }
            ]
        });
    </script>
    <!-- End Slider Script -->

</body>

</html>