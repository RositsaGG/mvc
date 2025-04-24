<!DOCTYPE html>
@section('navigation')

    @show
<html>

<head>
    <meta charset="utf-8">
    <title>пекарна Слонче</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('css/offcanvas.css')}}" rel="stylesheet">
</head>

<body> 

<body>

<!-- FLASH ALERTS ТУК! -->
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <strong>Възникна грешка!</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">

    <div class="container">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-xs-12 col-sm-9">
                <p class="pull-right visible-xs"></p>
                <div class="jumbotron">
                    @section('maincontent')

                    @show
                </div>

            </div>

            <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                @section('sidebar')

                @show


            </div>
        </div>
        <footer>
        </footer>

    </div>

</body>

</html>