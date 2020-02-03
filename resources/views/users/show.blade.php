@extends('layouts.app')

@section('content')
    <form action="" method="">
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input disabled type="text" class="form-control" id="firstName" name="first_name" aria-describedby="firstNameHelp" value="{{ $user->first_name }}">
        </div>
        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input disabled type="text" class="form-control" id="lastName" name="last_name" aria-describedby="lastNameHelp" value="{{ $user->last_name }}">
        </div>
    </form>
@endsection
