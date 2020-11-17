<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Website mini</title>
  </head>
  <body>
    @if (Session::has('success-message'))
      <div class="alert alert-success alert-bean">
        {{ Session::get('success-message') }}
      </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                    @if(!empty($errors->first('email')))
                    <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('email') }}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    @if(!empty($errors->first('nama')))
                    <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('nama') }}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" name="nohp" class="form-control" value="{{ old('nohp') }}">
                    @if(!empty($errors->first('nohp')))
                    <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('nohp') }}</p>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" value="{{ old('alamat') }}">
                    @if(!empty($errors->first('alamat')))
                    <p class="text-red"><i class="icon fa fa-ban"></i> {{ $errors->first('alamat') }}</p>
                    @endif
                  </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <div class="col-6">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">email</th>
                      <th scope="col">Nama</th>
                      <th scope="col">No HP</th>
                      <th scope="col">Alamat</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $u)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $u->email }}</td>
                      <td>{{ $u->nama }}</td>
                      <td>{{ $u->nohp }}</td>
                      <td>{{ $u->alamat }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>