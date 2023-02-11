<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MidProject</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
  <div class="mx-5 mt-5">
    <h1>Add Data</h1>
<form action="/store-data" method="POST">
    @csrf
    <div class="col-md-4">
      <label for="validationDefault01" class="form-label">Name</label>
      <input type="text" class="form-control" id="validationDefault01" name="Name" required minlength="5" maxlength="20">
    </div>
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Age</label>
        <input type="number" class="form-control" id="validationDefault01" name="Age" required min="20">
      </div>
      <div class="col-md-4">
        <label for="validationDefault01" class="form-label">Address</label>
        <input type="text" class="form-control" id="validationDefault01" name="Address" required minlength="10" maxlength="40">
      </div>
    <div class="col-md-4">
      <label for="validationDefaultUsername" class="form-label">Telephone</label>
      <div class="input-group">
        <span class="input-group-text" id="inputGroupPrepend2">08</span>
        <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="Telephone" required minlength="7" maxlength="10">
      </div>
    </div>
    <div class="col-12">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="submit">Submit</button>
    </div>
  </form>

  </div>
    
</body>
</html>