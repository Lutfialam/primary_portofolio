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
        <div class="retangle__main__blue"></div>
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

        <section class="header">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-7">
                        <h3>Hello</h3>
                        <h1>Im Lutfi Alamsyah</h1>
                        <h5>Web developer</h5>
                        <a target="_blank"
                            href="https://mail.google.com/mail/?view=cm&fs=1&to=lutfialamsyah1003@gmail.com"
                            class="btn btn__custom__primary">Hire me</a>
                        <a href="CV - Lutfi Alamsyah.pdf" target="_blank" class="btn btn__custom__primary">View CV</a>
                    </div>
                    <div class="col-lg-5">
                        <img src="/undraw_Designer_by46.svg" class="img__header">
                    </div>
                </div>
            </div>
        </section>

        <section class="padd__top">
            <div class="container">
                <div class="row py-5">
                    <div class="retangle__main__second"></div>
                    <div class="col-lg-5">
                        <img src="/about-us.png" class="about__image">
                    </div>
                    <div class="offset-lg-1 col-lg-5">
                        <div class="main__title text-left">
                            <h1>Let’s <br>
                                Introduce about <br>
                                myself</h1>
                            <p>
                                Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven
                                midst their. Beast creepeth. Fish days.
                            </p>
                            <p>
                                Is give may shall likeness made yielding spirit a itself together created after sea
                                is in beast beginning signs open god you're gathering whose gathered cattle let.
                                Creature whales fruit unto meat the life beginning all in under give two.
                            </p>
                            <a class="btn btn__custom__primary" href="CV - Lutfi Alamsyah.pdf"
                                target="_blank"><span>Download CV</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="padd__top">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-5">
                        <div class="main__title text-left">
                            <h1>Latest Project</h1>
                            <p>
                                Whose given. Were gathered. There first subdue greater. Bearing you Whales heaven
                                midst their. Beast creepeth. Fish days.
                            </p>
                            <p>
                                Is give may shall likeness made yielding spirit a itself together created after sea
                                is in beast beginning signs open god you're gathering whose gathered cattle let.
                                Creature whales fruit unto meat the life beginning all in under give two.
                            </p>
                            <a class="btn btn__custom__primary mb-3" href="http://github.com/lutfialam"><span>View
                                    repositori</span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 pr-5">
                        <a href="{{ $latest->image }}" data-toggle="lightbox" data-gallery="example-gallery">
                            <img src=" {{ $latest->image }} " width="460">
                        </a>
                    </div>
                    <div class="small__retangle__right"></div>
                    <div class="small__retangle__left"></div>
                </div>
            </div>
        </section>

        <section class="padd__top">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Service Offer</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-center">
                                    <i class="fas fa-terminal"></i>
                                </h1>
                                <h4 class="text-center">Web developer</h4>
                                <p class="text-center">Create or developing a website</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-center">
                                    <i class="fas fa-network-wired"></i>
                                </h1>
                                <h4 class="text-center">Networking</h4>
                                <p class="text-center">maintance or install Networking</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="text-center">
                                    <i class="fab fa-uikit"></i>
                                </h1>
                                <h4 class="text-center">UI/UX Designer</h4>
                                <p class="text-center">Create mockup for web design</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="retangle__main__third"></div>
        </section>

        <section class="padd__top">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="text-center">Newest Project</h1>
                    </div>
                    @foreach ($data as $item)
                        <div class="col-lg-4 pr-5 pb-3">
                            <a href="{{ $item->image }}" data-toggle="lightbox" data-gallery="example-gallery"
                                class="col-sm-4">
                                <img src=" {{ $item->image }} " class="img-fluid shadow-lg">
                            </a>
                        </div>
                    @endforeach
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
                            competition and training. or message to my whatsapp 083879926883 and send email to
                            lutfialamsyah1003@gmail.com</p>
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
                                        <input placeholder="Position" class="form-control" type="text" name="position"
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
    <script src="/assets/js/ekko-lightbox.min.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

    </script>
</body>

</html>
