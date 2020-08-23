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
        <nav class="navbar navbar-expand-lg navbar-light btn__custom__primary">
            <div class="container">

                <a class="navbar-brand text-white" href=" {{ route('home') }} ">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="mr-auto"></ul>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href=" {{ route('home') }} ">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href=" {{ route('about') }} ">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href=" {{ route('portofolioo') }} ">Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href=" {{ route('contact') }} ">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="padd__top">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Portofolio</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
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
