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
   
   <div style="position: relative; top: 60px; right: -150px">

    <table bgcolor="gray" border="3px">

      <tr>              
        <th style="padding: 30px">Name</th>
        <th style="padding: 30px">Email</th>
        <th style="padding: 30px">Action</th>
      </tr>
      @foreach ($users as $user)
      <tr align="center">
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        @if($user->usertype == '0')
                <td><a href="{{url('/deleteuser',$user->id)}}">Delete</a></td>
        @else
                <td><a>Not Allowed</a></td>
        @endif
      </tr>
      @endforeach

    </table>

  </div>
</div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include("admin.adminscript")
    
  </body>
</html>