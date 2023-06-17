@extends('layouts/main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create New User</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">User</li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">

            <form action="{{Route('user.store')}}" method="POST">
                {{-- security --}}
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Roles</label>
                    <select class="form-select" aria-label="Default select example" id="role" name="role">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id}}">{{ $role->name }}</option>
                        @endforeach

                      </select>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="myFunction()">
                    <label class="form-check-label" >Show Password</label>
                </div>

                <a href="#"></a><button type="submit" class="btn btn-primary">Submit</button></a>
                <a href="{{route('user.index')}}"><button type="button" class="btn btn-outline-primary">Cancel</button></a>

            </form>

            </div>
        </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</main>
@endsection
