<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- Styles -->
    @section('styles')
    <link rel="stylesheet" type="text/css" href="{{asset("../css/app.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("../css/sidebar.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("../css/bootstrap.css")}}">
    @show
</head>