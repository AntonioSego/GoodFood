<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin=anonymous>
  <title>Admin Dashboard</title>
</head>
<body>
    <div >
      <div >
        <div ></div>
        <div >
          <div >
            <div >
              <h1>Administrator</h1>
              <a href="/" class="btn btn-primary">Odjavi se</a>
              <br>
              <hr>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3>Narudbe</h3>
                    @foreach ($data as $item)
                        <hr>
                        <ul>
                            <li>ID narudbe: {{$item->id}}</li>
                            <li>Iznos narudbe: {{$item->cijena}} KM</li>
                            <li>Ime korisnika: {{$item->ime}}</li>
                            <li>Telefon: {{$item->adresa}}</li>
                            <li>Adresa: {{$item->telefon}}</li>
                        </ul>
                        <button class="btn btn-danger">Izbrisi</button>
                        <hr>
                    @endforeach
                </div> 
                <div class="col-md-6">
                    <h3>Korisnici</h3>
                    @foreach ($users as $user)
                    <hr>
                        <ul>
                            <li>ID korisnika: {{$user->id}}</li>
                            <li>Ime korisnika: {{$user->name}}</li>
                            <li>Email korisnika: {{$user->email}}</li>
                        </ul>
                        <button class="btn btn-danger">Izbrisi</button>
                        <hr>
                    @endforeach
                </div>      
            </div>
          </div>
          
        </div>
        <div ></div>
      </div>
    </div>
</body>
</html>