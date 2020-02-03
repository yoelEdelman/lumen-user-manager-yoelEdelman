@extends('layouts.app')

@section('content')
    <form action="{{ route('users.store') }}" method="post" class="mt-3">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" aria-describedby="firstNameHelp">
            <small id="firstNameHelp" class="form-text text-muted">We'll never share your first name with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" aria-describedby="lastNameHelp">
            <small id="lastNameHelp" class="form-text text-muted">We'll never share your last name with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <small id="emailNameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" id="password" name="password" aria-describedby="passwordHelp">
            <small id="passwordHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

