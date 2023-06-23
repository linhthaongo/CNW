<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deparment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

<body>
    
    <div style="display: flex; justify-content: space-between;" class="my-3">
            <h3>Deparments Details</h3>
            <a href="{{route('departments.create')}} " class="btn btn-success btn-sm">+ Add Deparment</a>
        </div>

    @if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif

    <form action="{{ route('departments.index')}}" method="post" class="justify-content-start">
        @csrf
        
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Location</th>
                <th scope="col">Action</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>

            @foreach($department as $item)
            <tr>
                <th scope="row">{{$item->id }}</th>
                <td>{{$item->Name}}</td>
                <td>{{$item->Location}}</td>
 
 
                <td>
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('departments.show', $item->id) }}" class="btn btn-primary btn-sm me-1 ">View</a>
                        <a href="{{ route('departments.edit', $item->id) }}"  class="btn btn-warning btn-sm me-1">Edit</a>
                        <form action="{{ route('departments.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete" />
                        </form>
                    </div>
                </td>
                
            </tr>
            @endforeach
        </tbody>
        
    </table>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>