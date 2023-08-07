<!DOCTYPE html>/
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checklist</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check your order</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route()}}">Add Product</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message}}</p>
         </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Cost</th>
                <th>Date Ordered</th>
                <th>Date Delivered</th>
                <th>Mode of Payment</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->$id }}</td>
                    <td>{{ $product->$name }}</td>
                    <td>{{ $product->$quantity }}</td>
                    <td>{{ $product->$cost }}</td>
                    <td>{{ $product->$date_ordered }}</td>
                    <td>{{ $product->$date_delivered }}</td>
                    <td>{{ $product->$status }}</td>
                    <td>
                    <form action="{{ route('companies.destroy',$company->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $products->links !!}
    </div>
</body>
</html>
