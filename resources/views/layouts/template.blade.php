<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{$title}} | PPIK</title>
    <link rel="stylesheet" href="{{asset('public/template/back/compiled/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/back/compiled/css/app-dark.css') }}">
    <link rel="stylesheet" href="{{asset('public/template/back/compiled/css/iconly.scss') }}">
    <link rel="shortcut icon" href="{{asset('public/template/back/compiled/svg/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('public/template/back/compiled/svg/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{asset('public/template/back/extensions/simple-datatables/style.css') }}"/>
    <link rel="stylesheet" href="{{asset('public/template/back/compiled/css/table-datatable.css') }}" />
    <link rel="stylesheet" href="{{asset('public/template/style_time.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/style_profil.css')}}">
    <link rel="stylesheet" href="{{asset('public/template/back/extensions/@icon/dripicons/dripicons.css') }}"/>
    <link rel="stylesheet" href="{{asset('public/template/back/extensions/sweetalert2/sweetalert2.min.css') }}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/template/back/extensions/choices.js/public/assets/styles/choices.css') }}"/>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- {% block styles %}{% endblock %} -->
</head>

<body>
    <script src="{{asset('public/template/back/static/js/initTheme.js') }}"></script>
    <div id="app">
        <div id="sidebar">
        @include('layouts.sidemenu')
        </div>
        <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

        @yield('page-heading')
        
        @yield('page-content')

        @yield('container')
        

        <footer>
        @include('layouts.footer')
        </footer>
      </div>
    </div>
    <script src="{{asset('public/template/back/static/js/components/dark.js') }}"></script>
    <script src="{{asset('public/template/back/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    
    <!-- {% if isDev %}
    <script src="assets/js/app.js" type="module"></script>
    {% else %} -->
    <script src="{{asset('public/template/back/compiled/js/app.js') }}"></script>
    <script src="{{asset('public/template/back/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{asset('public/template/back/static/js/pages/simple-datatables.js') }}"></script>
    <script src="{{asset('public/template/back/extensions/choices.js/public/assets/scripts/choices.js') }}"></script>
    <script src="{{asset('public/template/back/static/js/pages/form-element-select.js') }}"></script>
    <script src="{{asset('public/template/back/extensions/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{asset('public/template/back/static/js/pages/sweetalert2.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/conh6akldvf0pu23ph6dyjniwgm3w4qyjjnmdpqblain7fhc/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <!-- {% endif %} -->
    @stack('lib-js')

    <!-- {% block js %}{% endblock %} -->
</body>

</html>
