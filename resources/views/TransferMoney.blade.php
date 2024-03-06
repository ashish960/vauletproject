<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TransferMoney</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <form  action="{{route('user.TransferMoneyInAcc')}}" method="post" >
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Recipient's Name</label>
          <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
          <span class="text-danger"> @error('name'){{$message}}@enderror</span>
        </div>
        <label for="exampleInputEmail1" class="form-label">Account No</label>
          <input type="number" class="form-control" name="accountno" id="exampleInputEmail1" aria-describedby="emailHelp">
          <span class="text-danger"> @error('name'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Recipient's Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <span class="text-danger"> @error('email'){{$message}}@enderror</span>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Transfer Amount</label>
            <input type="number" class="form-control" name="amount" id="exampleInputEmail1" aria-describedby="emailHelp">
            <span class="text-danger"> @error('amount'){{$message}}@enderror</span>
          </div>
        
        <button type="submit" class="btn btn-primary">Transfer</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>