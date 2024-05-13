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

       </table>

       
</div>

       @include("admin.adminscript")

   
  </body>

</html>