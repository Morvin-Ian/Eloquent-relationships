@extends('layout')    

@section('content')
    <h2>User Role Table</h2>

    <table >
        <tr>
            <th>Name</th>
            <th>Role</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                

                <td><a href="{{route('user', $user->id)}}">{{$user->name}} </a></td>
            
                @foreach ($user->roles as $role)
                @php
                    $data = \App\Models\Role::find($role->id);
                @endphp
                    <td><a href="{{route('role', $role->id)}}">{{$data->title}}</a></td>
                @endforeach
            </tr>
        @endforeach
        
    </table>

    
@endsection
   