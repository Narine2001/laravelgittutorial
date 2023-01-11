#laravelgittutorial
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script> -->
    <!-- <script type="text/javascript" src="{{asset('js/home.js')}}"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    
    <title>WebNar</title>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg  navbar-dark py-3 fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand">WebNar</a>
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navmenu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="#works" class="nav-link">Մեր աշխատանքները</a>
                </li>
                <li class="nav-item">
                    <a href="#learn" class="nav-link">Մեր մասին</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">կապնվել մեզ հետ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Showcase -->
<section class=" text-light p-5 p-lg-8 pt-lg-5 text-center text-sm-start webnar">
    <div class="container-fluid p-5">
        <div class="d-sm-flex align-items-center justify-content-between p-5">
            <div class="text-start p-5">
                <h1>Բարի գալուստ <span class="text-primary">WebNar</span></h1>
                <p class="lead my-4">
                    Դիմեք մեզ եւ կունենաք կայք ձեր կազմակերպության համար:
                    Այստեղ դուք կազմում եք ինքներդ ներդնելով ձեր նախասիրությունները...<br>
                    Իրականացնելը մեր վրա : )
                </p>
                <button class="button btn btn-primary btn-lg "
                        id="registerBtn"
                        data-bs-toggle="modal"
                        data-bs-target="#enroll">Գրանցվել
                </button>
            </div>
            <div class="video">
                <video width="800" height="650" src="{{ asset('videos/video.mp4') }}" autoplay controls loop></video>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter -->
<section class="bg-dark text-light p-5"></section>

<!-- Boxes =--------------  diteq mer ashxatanqneric----------------------- -->

<!-- <section class="p-5 id="works"">
  <div class="container">
    <div class="row text-center g-4">
      <h1>Դիտեք մեր աշխատանքներից</h1>
      <div class="col-md">
        <div class="card bg-dark text-light">
          <div class="card-body text center">
            <div class="h1 mb-3">
              <i class="bi bi-laptop"></i>
            </div>
            <h3 class="card-title mb-3">
              Virtual
            </h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, velit.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>

      <div class="col-md">
        <div class="card bg-secondary text-light">
          <div class="card-body text center">
            <div class="h1 mb-3">
              <i class="bi bi-person-square"></i>
            </div>
            <h3 class="card-title mb-3">
              Hybrid
            </h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, velit.
            </p>
            <a href="#" class="btn btn-dark">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card bg-dark text-light">
          <div class="card-body text center">
            <div class="h1 mb-3">
              <i class="bi bi-people"></i>
            </div>
            <h3 class="card-title mb-3">
              in person
            </h3>
            <p class="card-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, velit.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- Learn Sections -->
<section id="learn" class=" p-5 text-dark">
    <div class="container">
        <div class="row right align-items-center justify-content-between">
            <div class="col-md">
                <img src="{{ asset('images/BeFunky-sample.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-md p-5">
                <h2>Մեր մասին</h2>
                <p class="lead">
                    Կայքի պատրաստման ընթացքում աշխատելու եմ ես: Ես Նարինեն եմ: Տիրապետում եմ HTML, CSS, Bootstrap, JS,
                    PHP, Laravel, MySQL լեզուներին:
                    Ես սկսնակ եմ, բայց դա ինձ չի խանգարի արդարացնել ձեր պահանջները եւ սպասելիքները:</p>
                <!-- <a href="" class="btn btn-light mt-3">
                  <i class="bi bi-chervon-right"></i> Read more
              </a> -->
            </div>
        </div>
    </div>
</section>
<section id="learn" class="p-5 text-light">
    <div class="container">
        <div class="row left align-items-center justify-content-between">
            <div class="col-md p-5">
                <h2>Ինչու դիմել մեզ</h2>
                <p class="lead">
                    Կարող եք պատվիրել և այն պատրաստ կլինի 7 օրվա ընթացքում: Կայքի պատվերները <b>ԱՆՎՃԱՐ</b> են:
                </p>
                <!-- <a href="" class="btn btn-light mt-3">
                  <i class="bi bi-chervon-right"></i> Read more
              </a> -->
            </div>
            <div class="col-md">
                <img src="{{ asset('images/BeFunky-sample.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


<!-- question accordian -->
<div class="harcer accordion" id="accordionPanelsStayOpenExample">
    <h2 class="text-center m-3">Հաճախակի տրվող հարցեր</h2>
    <div class="accordion-item "> 
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button m-3 " type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                Հնարավոր է դուք օգնեք կայքի դիզայնի հարցում:
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
             aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <strong>Այո իհարկե գրանցվեք, ձեր տվյալները տեսնելուն պես կկապվենք ձեր հետ:</strong>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed m-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                Ինչպես կարող եմ կապվել ձեր հետ:
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
             aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <strong>Կայքի վերջում կա էլ. հասցե եւ հեռախոսահամար: Հարցերի դեպքում կարող եք դիմել:</strong>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed m-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                Էլ չգիտեմ ինչ հարց գրեմ:
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
             aria-labelledby="panelsStayOpen-headingThree">
            <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse
                plugin adds the appropriate classes that we use to style each element. These classes control the overall
                appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with
                custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go
                within the <code>.accordion-body</code>, though the transition does limit overflow.
            </div>
        </div>
    </div>
</div>


<!-- Contact and Map-->

<section class="p-5 mt-2 mb-2 text-light" id="contact">
    <div class="container color-#1a3561">
        <div class="info row g-4 ">
            <div class="col-md ">
                <h2 class="text-center mg-4 m-3">Հարցերի դեպքում կապնվել ինձ հետ՝</h2>
                <ul class="list-group list-group-flush lead">
                    <li class="list-group-item bg-transparent text-light m-3">
                        <span class="fw-bold">Անուն` </span>Նարինե
                    </li>
                    <li class="list-group-item bg-transparent text-light m-3">
            <span class="fw-bold">Էլ. հասցե` <span>narine.avagyan.2001@mail.ru
                    </li>
                    <li class="list-group-item bg-transparent text-light m-3">
                        <span class="fw-bold">հեռ.` </span>+374-93-020-792
                    </li>
                </ul>
            </div>
            <div class="col-md"></div>
        </div>
    </div>
</section>

<!-- footer -->

<footer class="footer p-2 text-white text-center position-relative">
    <div class="container">
        <p class="lead">Բարձրանալ վերեւ</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
            <i class="bi bi-arrow-up-circle h1"></i>
        </a>
    </div>

</footer>

<!-- Modal -->
<div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="enrollLabel">Մենք կկապնվենք Ձեր հետ : )</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('home.register') }}" method="POST">
                <div class="modal-body">
                    <p class="lead">Լրացրեք տվյալները՝</p>

                    @csrf
                    <div class="mb-3">
                        <label for="first-name" class="col-form-label">
                            Անուն:
                        </label>
                        <input type="text" class="form-control" id="first-naeme" name="name" autocomplete="off"
                               value="{{ old('name') }}"
                               >
                        @error('name')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="first-name" class="col-form-label">
                            Ազգանուն:
                        </label>
                        <input type="text" class="form-control" id="first-naeme" name="surname" autocomplete="off"
                               value="{{ old('surname') }}"
                               >

                        @error('surname')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">
                            էլ. հասցե:
                        </label>
                        <input type="text" class="form-control" id="first-name" name="email" autocomplete="off"
                               value="{{ old('email') }}"
                               >

                        @error('email')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="col-form-label">
                            Phone:
                        </label>
                        <input type="text" class="form-control" id="phone" name="phone" autocomplete="off"
                               >

                        @error('phone')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Փակել</button>
                    <button type="submit" value="save" class="btn btn-primary">Պահպանել տվյալները</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

@if($errors->any())
    <script>
        $('#registerBtn').trigger('click');
    </script>
@endif

@if(session()->has('orderSuccess'))
    <div class="toast show bg-primary" style="position: fixed;top: 10px;right: 10px;z-index: 1031" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">վերջ</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body bg-light">
            Դուք հաջողությամբ գրանցվել եք :)
        </div>
    </div>
@endif




</body>
</html>

