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

       
        <div>
            <label>Chef Name</label>
            <input style="color:blue;" type="text" name="speciality" >
        </div>

        <div>
            <label>Speciality</label>
            <input style="color:blue;" type="text" name="name" >
        </div>

        <div>
            <label>Old Image</label>
            <img height="200" width="200" alt="">
        </div>

        <div>
            <label>New Image</label>
            <input type="file" name="image">
        </div>

        <div>
            
            <input style="color:white;" type="submit" >
        </div>

       </form>

</div>

       @include("admin.adminscript")

   
  </body>

</html>