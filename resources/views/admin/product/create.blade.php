<x-admin-layout>
    <form action="{{ url('store') }}" method="post" enctype="multipart/form-data" style="padding-left: 20px;">
        @csrf
        <div class="form-group" style="text-align: left;">
            <label for="MainCity">Main City</label>
            <input type="text" name="MainCity" class="form-control" id="MainCity" placeholder="Enter Main City" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" placeholder="Enter Slug" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" class="form-control" id="price" placeholder="Enter Price" required>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Enter Description"></textarea>
        </div>
        <div class="form-group" style="text-align: left;">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 20px;">Submit</button>
    </form>
</x-admin-layout>