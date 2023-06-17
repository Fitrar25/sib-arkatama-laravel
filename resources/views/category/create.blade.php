@extends('layouts/main')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create New Category</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Category</li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">

            <form action="{{Route('category.store')}}" method="POST">
                {{-- security --}}
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Input Category</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <a href="#"><button type="submit" class="btn btn-primary">Submit</button></a>
                <a href="{{route('category.index')}}"><button type="button" class="btn btn-outline-primary">Cancel</button></a>
            </form>

            </div>
        </div>
    </div>
</main>
@endsection
