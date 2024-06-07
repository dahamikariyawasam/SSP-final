<x-admin-layout>
    <form action="{{ route('update', $product->id) }}" method="post" enctype="multipart/form-data" style="padding-left: 20px;">
        @csrf
        <div class="form-group" style="text-align: left;">
            <label for="MainCity">Main City</label>
            <input type="text" name="MainCity" class="form-control" id="MainCity" value="{{ $product->MainCity }}" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" value="{{ $product->slug }}" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" value="{{ $product->address }}" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description">{{ $product->description }}</textarea>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
            @if($product->image)
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->MainCity }}" style="width: 100px; height: auto; margin-top: 10px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 20px;">Submit</button>
    </form>
</x-admin-layout>
