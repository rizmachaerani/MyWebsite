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
                        <a class="nav-link" href="#aboutMe">About Me</a>
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
                    <h2><strong>hey,</strong></h2>
                </div>
                <div class="row justify-content-center row-one">
                    <h1><strong>it's Rizma!</strong></h1>
                </div>
            </div>
        </div>

        <div class="wrapper2">
            <!-- About Me -->
            <div class="second" id="aboutMe">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-pict text-center justify-content-sm-center">
                            <img src="../img/MyPict.svg" class="img-fluid" alt="Responsive image" id="myPict">
                        </div>
                        <div class="col-lg-8">
                            <div class="row row-white" id="aboutMeText">
                                <h1>About Me</h1>
                            </div>
                            <div class="row row-white row-p">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolorum tenetur, amet voluptas molestias sint doloribus neque facere ea saepe, temporibus impedit laborum maxime. Atque nihil earum molestias placeat ipsa esse hic nam reprehenderit veritatis deleniti blanditiis, illo explicabo labore saepe officia soluta dolor eligendi itaque impedit perspiciatis ullam omnis!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <img src="../img/clouds.svg" class="img-fluid" alt="Responsive image" id=clouds>

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h3 style="text-align: center" class="card-title">-education-</h3>
                                    <table class="card-item">
                                        <tr>
                                            <td class="image text-center"><img src="../img/smol1.svg" id="ui"></td>
                                            <td>
                                                <h5 class="place">University of Indonesia</h5>
                                                <h6>Information Systems</h6>
                                                <p>2019 - Present</p>
                                            </td>
                                        </tr>
                                        <tr class="middle">
                                            <td class="image text-center"><img src="../img/smol2.svg" id="sma17"></td>
                                            <td>
                                                <h5 class="place">SMA Plus Negeri 17 Palembang</h5>
                                                <p>2016 - 2019</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="image text-center"><img src="../img/smol3.svg" id="smp9"></td>
                                            <td>
                                                <h5 class="place">SMP Negeri 9 Palembang</h5>
                                                <p>2013 - 2016</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card h-100 text-center">
                                <div class="card-body d-flex flex-column align-content-center ">
                                    <h3 class="card-title p-2 d-flex flex-column justify-content-start h-25" style="text-align: center">-skills-</h3>
                                    <div class="card-item p-2 d-flex flex-column justify-content-center h-75" id="skillCard">
                                        <h5>html</h5>
                                        <h5>css</h5>
                                        <h5>bootstrap</h5>
                                        <h5>figma</h5>
                                        <h5>python</h5>
                                        <h5>java</h5>
                                        <h5>basic barista skill</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card h-100 text-center">
                                <div class="card-body d-flex flex-column justify-content-center">
                                    <h3 class="card-title" style="text-align: center">-interests-</h3>
                                    <div class="" id="skillCard">
                                        <h5>front-end web development</h5>
                                        <h5>ui/ux design</h5>
                                        <h5>photography</h5>
                                        <h5>coffee</h5>
                                        <h5>product packaging design</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact -->
            <div class="third">
                
            </div>
        </div>    
    </div>
@endsection