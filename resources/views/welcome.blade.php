<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MidProject</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">PT. Meksiko</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create-data">Add</a>
              </li>
              
            
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <div class="m-2">
        <h1>Data Karyawan PT. Meksiko</h1>
        @foreach ( $karyawan as $karyawan2 )
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h3 class="card-title">Name:  {{$karyawan2->Name}} </h3>
                <h3 class="card-title"> Age: {{$karyawan2->Age}} </h3>
                <h3 class="card-title">Address:  {{$karyawan2->Address}} </h3>
                <h3 class="card-text">Telephone: 08{{$karyawan2->Telephone}} </h3>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
              

                <a href="{{route('edit', $karyawan2->id)}}" class="btn btn-success">Edit</a>
                <form action="{{route('delete', $karyawan2->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Delete</button>
                </form>

            </div>
        </div>
    @endforeach
    </div>
</body>
</html>
