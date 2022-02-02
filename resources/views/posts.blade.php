<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            All Category <a href="/add-post" class="btn btn-success">Add New</a>
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_deleted'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('post_deleted')}}
                            </div>
                            @endif
                           <table class="table table-striped">
                               <thead>
                                   <tr>
                                       <th>No</th>
                                       <th>Category Name</th>
                                       <th>Category Description</th>
                                        <th>Action</th>
                                    </tr>
                               </thead>
                               <tbody>
                                   @foreach($posts as $post)
                                   <tr>
                                       <td>{{$post->id}}</td>
                                       <td>{{$post->title}}</td>
                                       <td>{{$post->body}}</td>
                                        <td>
                                            <a href="/posts/{{$post->id}}" class="btn btn-info">Details</a>
                                            <a href="/edit-post/{{$post->id}}" class="btn btn-success">Edit</a>
                                            <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>