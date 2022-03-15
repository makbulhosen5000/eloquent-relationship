<x-app-layout>

@include('eloquent_relationship.header');

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- font awesome cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
      <ul>
          <li><a href="#" class="btn btn-warning my-2">OneToOne</a>
            <div class="container">
                <div class="row">
                     <div class="col-sm-12">
                         <table class="table table-bordered text-center mb-0">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Name</th>
                                     <th>Phone</th>
                                 </tr>
                                 <tbody>
                                     @foreach ($users as $user)
                                     <tr>
                                         <td>{{$user->id}}</td>
                                         <td>{{$user->name}}</td>
                                         <td>{{$user->phone->name}}</td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </thead>
                         </table>
                     </div>
                </div>
            </div>
          </li>

          <li><a href="#" class="btn btn-warning my-2">OneToMany</a>
            <div class="container">
                <div class="row">
                     <div class="col-sm-12">
                         <table class="table table-bordered text-center mb-0">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Post Title</th>
                                     <th>Comment</th>

                                 </tr>
                                 <tbody>
                                     @foreach ($posts as $post)
                                     <tr>
                                         <td>{{$post->id}}</td>
                                         <td>{{$post->title}}</td>
                                         <td>
                                             @foreach ($post->comments as $comment)
                                                 {{$comment->message}}
                                             @endforeach
                                         </td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </thead>
                         </table>
                     </div>
                </div>
            </div>
          </li>
          <li><a href="#" class="btn btn-warning my-2">ManyToMany</a>
            <div class="container">
                <div class="row">
                     <div class="col-sm-12">
                         <table class="table table-bordered text-center mb-0">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Category</th>
                                     <th>Post Title</th>

                                 </tr>
                                 <tbody>
                                     @foreach ($categories as $category)
                                     <tr>
                                         <td>{{$category->id}}</td>
                                         <td>{{$category->name}}</td>
                                         <td>
                                            @foreach ($category->posts as $post)
                                                {{$post->title}}
                                            @endforeach
                                        </td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </thead>
                         </table>
                     </div>
                </div>
            </div>
          </li>


      </ul>







    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

</x-app-layout>
