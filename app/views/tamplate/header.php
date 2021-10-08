<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">

<div class="container">
    <a class="navbar-brand" href="">PHP MVC</a>
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="<?= BASEURL;?>">Home</a>
      <a class="navbar-brand" href="<?= BASEURL;?>/mahasiswa">Mahasiswa</a>
      <a class="navbar-brand" href="<?= BASEURL;?>/about">About</a>
     
    </div>
  </div>

  </div>
</nav>
</body>