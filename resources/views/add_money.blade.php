<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>add money</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <form  action="{{route('user.addmoneyinacc')}}" method="post" >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">AddMoney</label>
          <input type="number" class="form-control" name="addmoney" id="exampleInputEmail1" aria-describedby="emailHelp">
          <span class="text-danger"> @error('addmoney'){{$message}}@enderror</span>
          
        </div>
      
        <a class="nav-link active" aria-current="page" href=""></a>
        <button type="submit" class="btn btn-primary">AddMoney</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>