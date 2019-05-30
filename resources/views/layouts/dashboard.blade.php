<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>

</head>


<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Back to main page</a>

    <a class="navbar-brand col-sm-3 col-md-2 mr-0 logout" href="{{ route('logout') }}"
       onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">
        {{ __('Log out') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/dashboard">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/about">
                            <span data-feather="users"></span>
                            Resume
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/publications">
                            <span data-feather="bar-chart-2"></span>
                            Publications
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/services">
                            <span data-feather="bar-chart-2"></span>
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/works">
                            <span data-feather="bar-chart-2"></span>
                            Book reviews
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/calculators">
                            <span data-feather="bar-chart-2"></span>
                            Calculator reviews
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/softwares">
                            <span data-feather="bar-chart-2"></span>
                            Software reviews
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/contacts">
                            <span data-feather="bar-chart-2"></span>
                            Contacts
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/achievements">
                            <span data-feather="bar-chart-2"></span>
                            Achievments
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/privacy">
                            <span data-feather="file"></span>
                            Privacy policy
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/cookiepolicy">
                            <span data-feather="file"></span>
                            Cookie policy
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/social">
                            <span data-feather="file"></span>
                            Social-media policy
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard/legal">
                            <span data-feather="file"></span>
                            Legal policy
                        </a>
                    </li>

        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('content')
        </main>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')

</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()

    CKEDITOR.replace('textEd');

</script>

</body>

</html>
