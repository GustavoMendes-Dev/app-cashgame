<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title') - Cash Game</title>

  <link rel="shortcut icon" href="{{ url('assets/media/logos/favicon.ico')}}" />
  <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" />
  <link href="{{ url('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
    type="text/css" />
  <link href="{{ url('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ url('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
  <script src="{{ url('assets/js/jquery-3.6.0.min.js') }}"></script>

</head>