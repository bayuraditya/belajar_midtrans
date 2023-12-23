<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="m-5">TOKO DUREN</h1>
      <div class="card m-5" style="width: 18rem;">
        <img src="{{asset('assets\img\duren.jpg')}}" class="card-img-top" alt="...">
        
        <div class="card-body">
          <h5 class="card-title">Duren </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <form action="/checkout" method="POST">
            @csrf
            <div class="mb-3">
              <label for="qty" class="form-label">Quantity</label>
              <input type="number" class="form-control" id="qty" name="qty">
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nama </label>
              <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
              <label for="no telp" class="form-label">no telp</label>
              <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" name="address">
            </div>
            <button type="submit" class="btn btn-primary">Checkout</button>
          </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>