@extends ('layout.mainlayout')
@section('content')

<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
 
    <ul>
     
            <li>{{ $users->name }}</li>

    </ul>
</div>

@endsection