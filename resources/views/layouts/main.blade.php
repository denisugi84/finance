<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>@yield("title")</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="{{ asset('assets/css/apple/app.min.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/plugins/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
@yield ("custom-css")
</head>
<body>

<div id="page-loader" class="fade show">
<span class="spinner"></span>
</div>

@include("layouts.header")
@include("layouts.sidebar")

@yield("content")

@include("layouts.footer")


<script src="../assets/js/app.min.js" type="c54a6f63a1fa6d350fd9edeb-text/javascript"></script>
<script src="../assets/js/theme/apple.min.js" type="c54a6f63a1fa6d350fd9edeb-text/javascript"></script>

<script src="../assets/js/rocket-loader.min.js" data-cf-settings="c54a6f63a1fa6d350fd9edeb-|49" defer=""></script></body>

@yield("custom-js")

</html>