<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confermation</title>
</head>
<body>
    <p>Hi {{$order->firstname}} {{$order->lasttname}}</p>
    <p>Your order has been successufully placed</p>
    <br>
    <table>




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
/


    </table>

</body>
</html>
