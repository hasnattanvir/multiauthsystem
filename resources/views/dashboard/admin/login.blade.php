<!doctype html>
<html lang="en">
  <head>
    <title>Admin Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body class="bg-info">
      <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top:60px; ">
                <h4>Admin Login</h4>
                <form action="{{route('admin.check')}}" method="post" autocomplete="off">
                  @csrf
                  @if (Session('success'))
                    <div class="alert alert-success">
                      {{ Session('success') }}
                    </div>
                  @endif
                  @if (Session('fail'))
                    <div class="alert alert-success">
                      {{ Session('fail') }}
                    </div>
                  @endif
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{old('email')}}">
                    <span class="text-danger">
                      @error('email')
                        {{$message}}
                      @enderror
                    </span>
                    <br>
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" value="{{old('password')}}">
                    <span class="text-danger">
                      @error('password')
                        {{$message}}
                        
                      @enderror
                    </span>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Login">
                </form>
            </div>
        </div>
      </div>




    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>