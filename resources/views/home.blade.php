@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($users as $user)
                    <tr>
                    <td>{{ $user->id }}</td>
                    
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    
                    <td>{{ $user->teachers }}</td>
                    <td>{{ $user->majors }}</td>
                    </tr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
