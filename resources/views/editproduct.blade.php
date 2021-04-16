
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form method="POST" action="{{ route('editData', $product[0]['id']) }}">
        @csrf
        <h2>Edit Product</h2>
        <div class="container" style="margin-top:60px;">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$product[0]['name']}}" required>
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" required>{{$product[0]['description']}}</textarea>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" class="form-control" name="price"  id="price" value="{{$product[0]['price']}}" required>
            </div>
            <div class="form-group">
                <label>choose category</label>
                <div class="checkbox">
                     <label><input type="checkbox" name="category[]" value="A">A</label>
                </div>
                <div class="checkbox">
                     <label><input type="checkbox" name="category[]" value="B">B</label>
                </div>
                <div class="checkbox">
                     <label><input type="checkbox" name="category[]" value="C">C</label>
                </div>
            </div>
            <div class="form-group">
                 <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
     </div>
    </body>
</html>
