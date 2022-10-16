@extends ('layout.mainlayout')
@section('content')


<div class="row">
    <div class="col-8"> 
    <img src="https://swhs.org/wp-content/uploads/2019/10/Facebook-logo.png"width="50" 
     height="50"  class="css-class" alt="alt text"> <a><strong>tester activities </strong></a>
</img></div>
    <div class="col-4"></div>
    <table>
  
        <tr>
        @foreach ($users as $user)
            <td><strong> Name1:</strong> </td>
            <td>{{$user->name}}</td>
            <td><strong> Name2:</strong> </td>
            <td>{{$user->email}}</td>
            <td><strong> Name2:</strong> </td>
            <td> {{$user->created_at}}
        @endforeach
        </tr>
  
    </table>
</div>
@endsection
