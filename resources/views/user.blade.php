@extends('layout')    

@section('content')
    <h4>User & Roles</h4>
        
      <table >
      <tr>
        <th>Name</th>
        <th>Roles</th>

      </tr>
        <tr>
            <td>{{$user->name}}</td>
            @foreach ($user->roles as $role)
              @php
                $data = \App\Models\Role::find($role->id);
              @endphp
              <td>{{$data->title}}</td>
            @endforeach

        </tr>
          
     
      </table>
            
@endsection