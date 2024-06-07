<x-admin-layout>
    <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="MainCity">Main City</label>
            <input type="text" name="MainCity" class="form-control" id="MainCity" value="{{ $product->MainCity }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" value="{{ $product->slug }}" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ $product->address }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            <img src="{{ url('uploads/product/' . $product->image) }}" alt="{{ $product->MainCity }}" width="100">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-admin-layout>
