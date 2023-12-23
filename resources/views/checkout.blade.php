<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{config('midtrans.client_key')}}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
  </head>
  </head>
  <body>
    
    <h1 class="m-5">TOKO DUREN</h1>
      <div class="card m-5" style="width: 18rem;">
        <img src="{{asset('assets\img\duren.jpg')}}" class="card-img-top" alt="...">
        
        <div class="card-body">
          <h5 class="card-title">Duren </h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <table>
                <tr>
                    <td>Nama</td>
                    <td> : {{$order->name}}</td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td> : {{$order->phone}}</td>
                </tr>  <tr>
                    <td>Alamat</td>
                    <td> : {{$order->address}}</td>
                </tr>  <tr>
                    <td>Qty</td>
                    <td> : {{$order->qty}}</td>
                </tr>  <tr>
                    <td>Total Harga</td>
                    <td> : {{$order->total_price}}</td>
                </tr>
            </table>
            <button class="btn btn-primary" id="pay-button">Bayar Sekarang</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{$snapToken}}', {
          onSuccess: function(result){
            /* You may add your own implementation here */
            //alert("payment success!");
            window.location.href = 'invoice/{{$order->id}}'
            console.log(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!"); console.log(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!"); console.log(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
          }
        })
      });
    </script>
  </body>
</html>