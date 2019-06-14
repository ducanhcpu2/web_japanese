<!DOCTYPE html>
<html lang="html">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"> 

  <meta property="og:title" content="MORELINKCOIN - THE BIGGEST BLOCKCHAIN 3.0 NETWORK" />
  {{--<meta name="og:description" content="MoreLinkCoin is a 3rd Generation Blockchain Technology invested by Relam Investments LLC, an international investment company headquartered in Dubai. The Hetachain ecosystem consists of Hetacoin, Heta Wallets, smart contracts, Heta App Store and Blockchain feature-enablers that enhance its applicability and make it the most revolutionary technology in its class." />--}}
  {{--<meta property="og:image" itemprop="thumbnailUrl" content="https://morelinkcoin.com/assets/images/rectangle-2@2x.png" />--}}
  <link rel="canonical" href="https://morelinkcoin.com" />
  <meta property="og:url" content="https://morelinkcoin.com" />
  <link rel="icon" href="{{asset('images/landing/logo.png')}}">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="base-url" content="{{ url('/') }}">
{{--  <!-- @if (Auth::check() && !Auth::user()->isAdmin())--}}
{{--      <meta name="authenticated" content="1">--}}
{{--  @endif -->--}}


  <title>{{ config('app.name', 'MoreCoin') }}</title>
  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
  <script src="https://use.fontawesome.com/04dc6ccda2.js"></script>
  <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=default,Array.prototype.includes"></script>
  <!-- @if (Request::is('dashboard'))
    Global site tag (gtag.js) - Google Analytics
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127054429-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-127054429-1');
    </script>
  @endif -->
</head>
<body>
  <div id="app">
      <app></app>
  </div>
  <script src="{{ mix('/js/app.js') }}"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.compatibility.js"></script> -->
</body>
</html>
