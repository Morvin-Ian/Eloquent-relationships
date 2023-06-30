@extends('layout')    

@section('content')

    <h4>Roles & Users</h5>
        
        <table >
        <tr>
          <th>Role</th>
          <th>Users</th>
  
        </tr>
          <tr>
              <td>{{$role->title}}</td>
              @foreach ($role->users as $user)
                @php
                  $data = \App\Models\User::find($user->id);
                @endphp
                <td>{{$data->name}}</td>
              @endforeach
  
          </tr>
            
       
        </table>
 
@endsection