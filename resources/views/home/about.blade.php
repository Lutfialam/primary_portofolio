<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/ekko-lightbox.css">
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">

                <a class="navbar-brand" href=" {{ route('home') }} ">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href=" {{ route('home') }} ">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('about') }} ">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('portofolioo') }} ">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ route('contact') }} ">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section>
            <div class="container">
                <div class="row py-5">
                    <div class="retangle__main__second"></div>
                    <div class="col-lg-5">
                        <img src="/Lutfi.png" class="image__profile">
                    </div>
                    <div class="offset-lg-1 col-lg-5">
                        <div class="main__title text-left">
                            <h1>Let’s <br>
                                Introduce about <br>
                                myself</h1>
                            <p>
                                Hello My name is Lutfi Alamsyah, I live in Depok, West Java, Indonesia. my age this year
                                is 18
                            </p>
                            <p>
                                I love programming, web design and networking. because this is my pasion. and almost
                                every day I try and try to be able to create the best application.
                            </p>
                            <a class="btn btn__custom__primary" target="_blank"
                                href="CV - Lutfi Alamsyah.pdf"><span>Download
                                    CV</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="padd__top py-5 mt-5">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <h1 class="text-center">Experience</h1>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    @foreach ($experience as $item)
                        <div class="col-lg-12">
                            <div class="badges">
                                <div class="row">
                                    <div class="col-md-1">
                                        <h3>
                                            <span class="badge badge-primary"> {{ $item->year }} </span>
                                        </h3>
                                    </div>
                                    <div class="col-md-11">
                                        <h3>
                                            - {{ $item->title }}
                                        </h3>
                                        <p> {{ $item->description }} </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="padd__top py-5">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Education</h1>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="col-lg-12">
                        <div class="badges">
                            <div class="row">
                                <div class="col-md-1">
                                    <h3>
                                        <span class="badge badge-primary"> 2020 </span>
                                    </h3>
                                </div>
                                <div class="col-md-11">
                                    <h3>
                                        - Information Technology
                                    </h3>
                                    <p> at CCIT Fakultas Teknik Universitas Indonesia - starting in 2020 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="badges">
                            <div class="row">
                                <div class="col-md-1">
                                    <h3>
                                        <span class="badge badge-primary"> 2020 </span>
                                    </h3>
                                </div>
                                <div class="col-md-11">
                                    <h3>
                                        - Computer Network Engineering
                                    </h3>
                                    <p> at SMK Al-muhtadin Depok - Graduate in 2020 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-5">
            <div class="row">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">

                                <div class="col-lg-4">
                                    <h2><i class="fas fa-map"></i> My location</h2>
                                    <p>KP. pancoran mas, RT05/18, kelurahan pancoran mas, kecamatan pancoran mas, kota
                                        depok, jawa barat, indonesia</p>
                                </div>
                                <div class="col-lg-8">

                                    <div class="mapouter">
                                        <div class="gmap_canvas"><iframe width="700" height="500" id="gmap_canvas"
                                                src="https://maps.google.com/maps?q=pancoran%20mas&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                                frameborder="0" scrolling="no" marginheight="0"
                                                marginwidth="0"></iframe><a href="https://torrent9-site.org">torrent9
                                                search</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="btn__custom__primary">
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-5">
                        <h4>Do you want to recruit me?</h4>
                        <p>If you want to recruit me, please fill in the form next to this correctly and there will be
                            an automatic email coming from me. the email also includes the CV and certificate of
                            competition and training. or message to my whatsapp 083879926883</p>
                        <h1><a target="_blank" href="http://github.com/lutfialam">Github</a></h1>
                        <h1><a target="_blank" href="http://facebook.com/lutfi.alamsyah.543">Facebook</a></h1>
                        <h1><a target="_blank" href="http://instagram.com/lutfi_railfans_daop1">Instagram</a></h1>
                    </div>
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <form action=" {{ route('recruitment') }} " method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name" class="form-control-label text-black-50">recruiter's
                                            name</label>
                                        <input placeholder="name" class="form-control" type="text" name="name"
                                            id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="company" class="form-control-label text-black-50">Company
                                            Name</label>
                                        <input placeholder="company" class="form-control" type="text" name="company"
                                            id="company">
                                    </div>
                                    <div class="form-group">
                                        <label for="Position" class="form-control-label text-black-50">Position</label>
                                        <input placeholder="Position" class="form-control" type="text" name="Position"
                                            id="Position">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- General JS Scripts -->
    <script src="/assets/modules/jquery.min.js"></script>
    <script src="/assets/modules/popper.js"></script>
    <script src="/assets/modules/tooltip.js"></script>
    <script src="/assets/modules/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
