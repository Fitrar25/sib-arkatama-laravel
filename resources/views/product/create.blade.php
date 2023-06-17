@extends('layouts/main')

@section('content')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Create New Product</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Product</li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">

            <form action="{{Route('product.store')}}" method="POST">
                {{-- security --}}
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Categories</label>
                    <select class="form-select" aria-label="Default select example" id="category" name="category">
                        @foreach ($categories as $cat)
                        <option value="{{ $cat->id}}">{{ $cat->name }}</option>
                        @endforeach

                      </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Product Names</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sale Price</label>
                    <input type="number" class="form-control" id="sale_price" name="sale_price" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Brands</label>
                    <select class="form-select" aria-label="Default select example" id="brands" name="brands">
                        @foreach ($brands as $br)
                        <option value="{{ $br->id}}">{{ $br->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Rating</label>
                    <input type="number" class="form-control" id="rating" name="rating" >
                </div>


                <a href="#"></a><button type="submit" class="btn btn-primary">Submit</button></a>
                <a href="{{route('product.index')}}"><button type="button" class="btn btn-outline-primary">Cancel</button></a>

            </form>

            </div>
        </div>
    </div>
</main>
@endsection
