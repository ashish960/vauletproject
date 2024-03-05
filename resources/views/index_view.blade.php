<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vaulet System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    @php
          $allData = session()->all();
        // print_r($allData);
      @endphp
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}/index">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}/signup">SignUp</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/')}}/index">CheckBalance</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">TransferMoney</a>
               
              </li>
            <ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul><ul></ul>

            
          <!-- loginindicator -->
          @if(isset($allData['name']))
               
             <button type='button' class='btn btn-secondary position-relative' style = 'border-radius: 100px; margin-right:10px'>
              {{ $allData['name'];}}
             <span class='position-absolute top-0 start-100 translate-middle p-2 bg-success border border-light rounded-circle' >
             <span class='visually-hidden'>New alerts</span>
             </span>
             </button>
          @endif
         <!-- LOGININDICATOR -->

           <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
           <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
       </div>
     </div>


     <!-- logoutbutton -->
     @if(isset($allData['name']))
           
         <button type='button' class='btn btn-primary position-relative' style = 'border-radius: 100px; margin-right:10px'><a href='{{route('user.sessionend')}}'>Logout</a>
                 
            
           </button>
     @endif
     <!-- LOGOUTBUTTON -->
      </nav>        

      




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>