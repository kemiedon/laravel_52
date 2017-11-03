<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>@yield('document_title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="{{ asset('_libs/jquery-ui/themes/smoothness/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('_libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('_libs/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('_libs/bootstrap/dist/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css">

<script src="{{ asset('_libs/jquery/dist/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('_libs/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('_libs/tinymce/tinymce.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('_libs/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>

<style>
    div.mce-fullscreen {
        z-index: 1050;
    }
</style>


@yield ('head')