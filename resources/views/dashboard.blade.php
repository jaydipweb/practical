
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                     <a class="navbar-brand" href="#">Product</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="product">Add Product</a></li>
                    <li><a href="{{ route('loginpage') }}">Logout</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <table id="ProductList" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Product category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $products)
                    <tr>
                        <td>{{$products['name']}}</td>
                        <td>{{$products['description']}}</td>
                        <td>{{$products['price']}}</td>
                        <td>{{$products['category']}}</td>
                        <td> <a href="{{ route('edit', $products['id']) }}" >Edit</a> | <a href="{{ route('delete', $products['id']) }}" onclick="return confirm(' you want to delete?');">Delete</a></td>
                    </tr> 
                @endforeach
                
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#ProductList').DataTable();
        } );
    </script>
    </body>
</html>
