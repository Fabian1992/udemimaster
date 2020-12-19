@extends('layaut')

@section('content')
    <div class="container">
        {!! $users->links() !!}
            <table class="table table-light">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Acciones</th>                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td></td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>
          
        
    </div>
@endsection