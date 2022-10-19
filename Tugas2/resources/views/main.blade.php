<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  <nav class=" navbar navbar-expand-lg navbar-light bg-light justify-content-between">
      <div class=" container collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Dosen") ? 'active ' : '' }}" href="/DosenEloquent">Dosen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Mahasiswa") ? 'active' : '' }}" href="/MahasiswaRaw">Mahasiswa</a>
          </li>
          <li class="nav-item" >
            <a class="nav-link {{ ($title === "Mata Kuliah") ? 'active' : '' }}" href="/MatkulQuery">Mata Kuliah</a>
          </li>
      </div>
  </nav>
  <div class="container py-5">
    @yield('container')
  </div>

  <footer class="text-center">
    <p>Muhammad Nurfathullah - 2010631170100</p>
  </footer>
  
</body>
</html>