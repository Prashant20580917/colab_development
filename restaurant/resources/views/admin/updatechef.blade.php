<x-app-layout>
  
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include("admin.admincss")
   
  </head>
  <body>
  <div class="container-scroller">
   
       @include("admin.navbar")

<<<<<<< HEAD
       <form action="{{url('/updatefoodchef',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label>Chef Name</label>
            <input style="color:blue;" type="text" name="speciality" value="{{$data->speciality}}">
=======
       
        <div>
            <label>Chef Name</label>
            <input style="color:blue;" type="text" name="speciality" >
>>>>>>> 8e1c9aee83bb7a949eea05899cb7c0a825ed2a58
        </div>

        <div>
            <label>Speciality</label>
<<<<<<< HEAD
            <input style="color:blue;" type="text" name="name" value="{{$data->name}}">
=======
            <input style="color:blue;" type="text" name="name" >
>>>>>>> 8e1c9aee83bb7a949eea05899cb7c0a825ed2a58
        </div>

        <div>
            <label>Old Image</label>
<<<<<<< HEAD
            <img height="200" width="200" src="/chefimage/{{$data->image}}" alt="">
=======
            <img height="200" width="200" alt="">
>>>>>>> 8e1c9aee83bb7a949eea05899cb7c0a825ed2a58
        </div>

        <div>
            <label>New Image</label>
            <input type="file" name="image">
        </div>

        <div>
            
<<<<<<< HEAD
            <input style="color:white;" type="submit" value="Update Chef"  required="">
=======
            <input style="color:white;" type="submit" >
>>>>>>> 8e1c9aee83bb7a949eea05899cb7c0a825ed2a58
        </div>

       </form>

</div>

       @include("admin.adminscript")

   
  </body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 8e1c9aee83bb7a949eea05899cb7c0a825ed2a58
