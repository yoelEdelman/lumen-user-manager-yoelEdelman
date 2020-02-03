@extends('layouts.app')

@section('content')
    @if($notification)
        <div class="alert alert-success" role="alert">
            {{ $notification }}
        </div>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <a href="{{ route('users.create') }}" class="btn btn-success float-right m-2">Ajouter</a>


            <table class="table table-dark">
                <thead>
                <tr>
                    <th><span>#</span></th>
                    <th><span>User</span></th>
                    <th><span>Created</span></th>
                    <th><span>Email</span></th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td class="align-middle">{{ $user->id }}</td>
                            <td class="align-middle">{{ $user->first_name }} {{ $user->last_name }}</td>
                            <td class="align-middle">{{ $user->created_at }}</td>
                            <td class="align-middle">{{ $user->email }}</td>
                            <td class="d-flex">
                                <a href="{{ route('users.show', ['id' => $user->id]) }}" class="btn btn-primary mr-1">
                                    Voir
                                </a>
                                <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-warning mr-1">
                                    Modifier
                                </a>
                                <form action="{{ route('users.delete', ['id' => $user->id]) }}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                @else
                    <tr>
                        <td>
                            Aucun utilisateurs !
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
