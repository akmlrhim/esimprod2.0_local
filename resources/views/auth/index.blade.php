<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  >
  <meta
    http-equiv="X-UA-Compatible"
    content="ie=edge"
  >
  <meta
    name="csrf-token"
    content="{{ csrf_token() }}"
  >
  <title>ESIMPROD - Login</title>
  <link
    rel="stylesheet"
    href="{{ asset('css/login.css') }}"
  >
  <link
    rel="shortcut icon"
    href="{{ asset('img/assets/esimprod_logo_bg.png') }}"
    type="image/x-icon"
  >
</head>

<body>
  <div class="left-container">
  </div>
  <div class="right-container">
    <div class="right-container__box">
      <div class="right-container-box">
        <h3 class="right-container__h2">Login</h3>
        <p class="right-container__p">Scan QR Anda Untuk Masuk</p>
      </div>
      <div class="input-container">
        <form
          action=""
          method="GET"
        >
          @csrf
          <input
            type="text"
            class="right-container__input"
            placeholder=""
            autofocus
            name="kode_user"
          />
      </div>
      </form>
      <button
        onclick="window.location.href='{{ route('login.v2') }}'"
        class="btn"
        style="font-size: 12px"
      >Tidak bisa masuk menggunakan QR Code?</button>
    </div>
  </div>
</body>

</html>
