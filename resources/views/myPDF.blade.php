<!DOCTYPE html>
<html>
<head>
    <title>PDF Facture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


    <p>Hi {{$order->firstname}} {{$order->lasttname}}</p>


    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>subtotal</th>
            <th>Tax</th>
            <th>Total</th>
        </tr>
        @foreach($order as $user)
        <tr>
            <td colspan='3' style="border-top:1px solid #ccc;"></td>
            <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc">Subtotal : ${{$order->subtotal}}</td>
        </tr>
        <tr>
            <td colspan='3' ></td>
            <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc">Tax : ${{$order->tax}}</td>
        </tr>
        <tr>
            <td colspan='3' style="border-top:1px solid #ccc;"></td>
            <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc">Shipping : Free shipping</td>
        </tr>
        <tr>
            <td colspan='3' style="border-top:1px solid #ccc;"></td>
            <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc">Total : ${{$order->total}}</td>
        </tr>
        @endforeach
    </table>

</body>
</html>
