<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
  @include("admin.admincss")
   
  </head>
  <body>
  <div class="container-scroller">
   
       @include("admin.navbar")
       
<<<<<<< HEAD
       <form action="{{url('/uploadchef')}}" method="POST" enctype="multipart/form-data">
        @csrf
=======
       
>>>>>>> 8e1c9aee83bb7a949eea05899cb7c0a825ed2a58
        <div>
            <label>Name</label>
            <input style="color:blue" type="text" name="name" required="" placeholder="Enter Name">
        </div>

        <div>
            <label>Speciality</label>
            <input style="color:blue" type="text" name="speciality" required="" placeholder="Enter Speciality">
        </div>

        <div>
            <input type="file" name="image" required="">
        </div>

        <div>
            <input type="submit" value="Save">
        </div>

       </form>


       <table bgcolor="black">
        <tr>
            <th style="padding:30px;">Chef Name</th>
            <th style="padding:30px;">Speciality</th>
            <th style="padding:30px;">Image</th>
            <th style="padding:30px;">Action</th>
            <th style="padding:30px;">Action2</th>
        </tr>
<<<<<<< HEAD
@foreach($data as $data)
        <tr align="center">
            <td>{{$data->name}}</td>
            <td>{{$data->speciality}}</td>
            <td><img height="100" width="100" src="/chefimage/{{$data->image}}" alt=""></td>
            <td><a href="{{url('/updatechef',$data->id)}}">Update</a></td>
            <td><a href="{{url('/deletechef',$data->id)}}">Delete</a></td>
        </tr>

        @endforeach
=======

>>>>>>> 8e1c9aee83bb7a949eea05899cb7c0a825ed2a58
       </table>

       
</div>

       @include("admin.adminscript")

   
  </body>

</html>