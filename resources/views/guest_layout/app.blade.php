<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="{{asset('image/icon.png')}}" type="image/x-icon">
        <title>Form Berita Acara - Baling</title>
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
        <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/fa5.3.10all.min.js') }}"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                  @yield('content')
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Baling 2020</div>
                            <div>
                                <a href="{{ url('/login') }}">Login</a>

                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('assets/js/jquery-2.2.4.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>
