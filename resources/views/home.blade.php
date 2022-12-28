<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 || Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blade Template</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Shows
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Tampilan</a></li>
            <li><a class="dropdown-item" href="#">Produk</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Data Barang</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<h1>Selamat Datang,{{ $name }}</h1>
<h2>Tentukan Kartu Lempar dadu,{{ $turn}}</h2>

<!--@if ($turn == 'pertama')
    <a href="">Next,Plays</a>
@elseif ($turn == 'kedua')
    <a href="">Wait,your turn</a>
@else ($turn == 'ketiga')
    <a href="">Time waiting...</a>
@endif-->

@switch($turn)
    @case($turn == 'pertama')
        <a href="">Roll,Dice</a>
        @break

        @case($turn == 'kedua')
        <a href="">Wait,your turn!!!</a>
        @break

        @case($turn == 'ketiga')
        <a href="">Masih,Lamaaaa....</a>
        @break
        @default
        <a href="">Kamu kalaaahhh..</a>

@endswitch
        <div><h4>________________________________________________________________________________________________________________</h4></div>
        <table class="table">
            <tr>
                <th>No</td>
                <th>Hobi</th>
            </tr>   
            @foreach($hobi as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$data}}</td>
            </tr>
@endforeach
        </table>

</div>

</head>
<body>
    <!-- bootstrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>