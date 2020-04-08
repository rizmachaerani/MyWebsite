@extends('layout.main')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Rizma's</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutMeRow">About Me</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <!-- Landing Page -->
        <div class="first">
            <div class="container">
                <div class="row justify-content-center row-one">
                    <h2 class="hey"><strong>hey,</strong></h2>
                </div>
                <div class="row justify-content-center row-one">
                    <h1><strong>it's Rizma!</strong></h1>
                </div>
            </div>
        </div>

        <div class="wrapper2">
            <!-- About Me -->
            <div class="second">
                <div class="container" id="aboutMe">
                    <div class="row pt-5" id="aboutMeRow">
                        <div class="col-lg-4 col-pict text-center justify-content-sm-center">
                            <img src="../img/MyPict.svg" class="img-fluid" alt="Responsive image" id="myPict">
                        </div>
                        <div class="text-col col-lg-8">
                            <div class="row row-white row-t text-center">
                                <h2 class="pt-0" id="aboutMeTitle">About Me</h2>
                            </div>
                            <div class="row row-white row-p">
                                <p>I'm currently an undergradate student majoring in Information Systems at University of Indonesia. I'm an occasional tech-enthusiast on the outside with a proffesional baker talent on the inside (jk). Trying new things has always been my passion. I love to create and explore my ideas in a mission to share positive impacts.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clouds">
                    <img src="../img/clouds.svg" class="img-fluid" alt="Responsive image" id=clouds>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="card-col col-lg-4">
                            <div class="card h-100 rounded" style="border-radius: 25px !important">
                                <div class="card-body d-flex flex-column align-content-center">
                                    <h3 class="card-title p-2 d-flex flex-column justify-content-start" style="text-align: center; font-weight: bold; letter-spacing: 10px">education</h3>
                                    <table class="card-item p-2 d-flex flex-column justify-content-center">
                                        <tr>
                                            <td class="image text-center"><img src="../img/smol1.svg" id="ui"></td>
                                            <td>
                                                <h5 class="place" style="font-weight: bold;">University of Indonesia</h5>
                                                <h6>Information Systems</h6>
                                                <p>2019 - Present</p>
                                            </td>
                                        </tr>
                                        <tr class="middle">
                                            <td class="image text-center"><img src="../img/smol2.svg" id="sma17"></td>
                                            <td>
                                                <h5 class="place" style="font-weight: bold;">SMA Plus Negeri 17 Palembang</h5>
                                                <p>2016 - 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="image text-center"><img src="../img/smol3.svg" id="smp9"></td>
                                            <td>
                                                <h5 class="place" style="font-weight: bold;">SMP Negeri 9 Palembang</h5>
                                                <p>2013 - 2016</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card-col col-lg-4">
                            <div class="card h-100 text-center rounded" style="border-radius: 25px !important">
                                <div class="card-body d-flex flex-column align-content-center">
                                    <h3 class="card-title p-2 d-flex flex-column justify-content-start" style="text-align: center; font-weight: bold; letter-spacing: 10px">skills</h3>
                                    <div class="card-item p-2 d-flex flex-column justify-content-center h-75" id="skillCard">
                                        <h5 class="p-1" style="font-weight:600;">HTML</h5>
                                        <h5 class="p-1" style="font-weight:600;">CSS</h5>
                                        <h5 class="p-1" style="font-weight:600;">Bootstrap</h5>
                                        <h5 class="p-1" style="font-weight:600;">Figma</h5>
                                        <h5 class="p-1" style="font-weight:600;">Python</h5>
                                        <h5 class="p-1" style="font-weight:600;">Java</h5>
                                        <h5 class="p-1" style="font-weight:600;">Basic Barista Skill</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-col col-lg-4">
                            <div class="card h-100 text-center rounded" style="border-radius: 25px !important">
                                <div class="card-body d-flex flex-column align-content-center">
                                    <h3 class="card-title p-2 d-flex flex-column justify-content-start" style="text-align: center; font-weight: bold; letter-spacing: 10px">interests</h3>
                                    <div class="card-item p-2 d-flex flex-column justify-content-center h-75" id="skillCard">
                                        <h5 class="p-1" style="font-weight:600;">Front-end Web Development</h5>
                                        <h5 class="p-1" style="font-weight:600;">UX Design</h5>
                                        <h5 class="p-1" style="font-weight:600;">Photography</h5>
                                        <h5 class="p-1" style="font-weight:600;">Coffee and Cakes</h5>
                                        <h5 class="p-1" style="font-weight:600;">Product Packaging Design</h5>
                                        <h5 class="p-1" style="font-weight:600;">More to come...</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper3">
                <!-- Contact -->
                <div class="third" id="contact">
                    <div class="container justify-content-center" id="contactMe">
                        <div class="row pb-5">
                            <div class="col">
                                 <h2 id="contactMeTitle">contact me</h2>
                            </div>
                        </div>
                        <div class="contact-row row">
                            <div class="col-lg-7">
                                <div class="row text-center">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 flex-fill align-self-center"><img class="contact-icon" src="../img/mail.svg"></div>
                                        <div class="contact-info p-2 flex-fill align-self-center"><h2><a style="color: white;" href="mailto: rizmachaerani@gmail.com" target="_blank">rizmachaerani@gmail.com</a></h2></div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 flex-fill align-self-center"><img class="contact-icon" src="../img/linkedin.svg"></div>
                                        <div class="contact-info p-2 flex-fill align-self-center"><h2><a style="color: white;" href="https://www.linkedin.com/in/rizma-chaerani-heidy-p-149359194/" target="_blank">Rizma Chaerani</a></h2></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row text-center">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 flex-fill align-self-center"><img class="contact-icon" src="../img/instagram.svg"></div>
                                        <div class="contact-info p-2 flex-fill align-self-center"><h2><a style="color: white;" href="https://www.instagram.com/rizmachaeranii" target="_blank">rizmachaeranii</a></h2></div>
                                    </div>
                                </div>
                                <div class="row text-center">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 flex-fill align-self-center"><img class="contact-icon" src="../img/whatsapp.svg"></div>
                                        <div class="contact-info p-2 flex-fill align-self-center"><h2><a style="color: white;" href="https://api.whatsapp.com/send?phone=6282281019116" target="_blank">(+62)82281019116</a></h2></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection