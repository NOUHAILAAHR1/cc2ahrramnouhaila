<style>
    .tabl{margin-top: 35px;
        margin-left: 150px;
        line-height: 30px;
        border: 1px ;
        width: 150px;
    }
    .tabl :hover{
        font-size: 23px
    }

     li{
        list-style: none;
    }
    table{
        border: 1rem solid;
    }
</style>



<div class="slid">
    <div class="tabl">
        <table  >

            <ul class="sub-menu">
            <tr><li><a href="{{route('admin.dashboard')}}">Dashboard</a></li></tr><hr>
            <tr><li><a href="{{route('admin.products')}}">Products</a></li></tr><hr>
            <tr><li><a href="{{route('admin.categories')}}">Categories</a></li></tr><hr>
            <tr><li><a href="{{route('admin.orders')}}">Orders</a></li></td><hr>
            <tr><li><a href="{{route('admin.users')}}">Users</a></li></td>

        </ul>
        </table>
    </div>



<div>
