@extends ('layout.mainlayout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
            @endif

            <div class="card">
               <div class="card-header  pt-3 pb-3 ">{{ __('Portfolio Listing') }}
                      {{-- <a href="#"><button class="btn btn-primary float-end"type="submit">Add new user</button></a>           --}}
                </div>
               
                <table class="table ">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                      
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- display all product from database --}}
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                       
                        <td><a href="#"><button class="btn btn-primary"type="submit">Edit</button></a></td>
                        <td>
                            <form action="#"method="#"onsubmit="return confirm('Are you sure you want to delete {{$user->name}}?')">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger text-white"type="submit">Delete</button></td>
                            </form>     
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{-- //nama objek sama mcm kt controller --}}
                
            </div>
        </div>
    </div>
    
</div>
@endsection
