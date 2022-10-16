@extends ('layout.mainlayout')
@section('content')


<div class="row">
    <div class="col-8"> 
    <img src="https://cdn.iconscout.com/icon/free/png-256/avatar-370-456322.png"width="50" 
     height="50"  class="css-class" alt="alt text"> <a><strong> Name User  </strong></a>
</img></div>
    <div class="col-4"></div>
    <table>
  
    <br><br>
        <tr>
            <td><strong> ID:</strong> </td>
            <td> {{ $user-> id }}</td>
        </tr>

        <br>

        <tr>
            <td><strong> Name:</strong> </td>
           <td> {{  $user-> name }}</td>
        </tr>

        <tr>
            <td><strong> Email:</strong> </td>
            <td> {{  $user-> email }}</td>
        </tr>
     
        
  
    </table>
</div>
@endsection
