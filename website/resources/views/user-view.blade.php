<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
      <div class="container">

   <div class="table-responsive">

   <h1 class="text-center my-5"> user information </h1>

 <table class="table">

<thead class="table-dark">
   <tr>
  <th scope="col">user id</th>
  <th scope="col">user name</th>
  <th scope="col">user email</th>
  <th scope="col">Delete</th>
  <th scope="col">Update</th>
   </tr>
</thead>
<tbody>
    @foreach ($records as $item)
        
    
  <tr class="">
   <td scope="row">{{$item->id}}</td>
  <td>{{$item->name}}</td>
  <td>{{$item->email}}</td>
  <td><a class="btn btn-danger" href="{{route('delete', $item->id)}}">Delete</a></td>
  <td><a class="btn btn-success" href="{{route('update', $item->id)}}">Update</a></td>
  </tr>
  @endforeach
 

</tbody>






 </table>



   </div>





      </div>







        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>