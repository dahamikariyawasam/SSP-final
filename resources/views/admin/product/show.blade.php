<x-admin-layout>
<head>
<style>
      .\31  { /* Escaped class name '1' */
        background-color:#36b9cc ;
        color: white; /* Ensures the text is readable */
        padding: 0.5rem 1rem; /* Adds some padding */
        border-radius: 0.5rem; /* Adds rounded corners */
      }
      .\31 :hover { /* Escaped class name '1' for hover state */
        background-color: #20c9a6; /* Changes color on hover */
      }
    </style>
</head>

<div class="container mx-auto px-4 sm:px-8">
  <div class="py-8">
    <div class="flex justify-between">
      <h2 class="text-2xl font-semibold leading-tight">Properties</h2>
      <a href="{{url('creste')}}">
      <button class="1">Add Properties</button></a>

    </div>
    <div class="mt-4">
      <div class="overflow-x-auto">
        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
          <table class="min-w-full leading-normal">
            <thead>
              <tr>
                <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Main City</th>
                <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Address</th>
                <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Price</th>
                <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Description</th>
                <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Image</th>
                <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Actions</th>
              </tr>
            </thead>



            <tbody>

            @foreach($products as $productss)


              <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$productss->MainCity}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$productss->address}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$productss->price}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{$productss->description}}</td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">                <img src="{{ asset('images/' . $productss->image) }}" alt="{{ $productss->MainCity }}" style="width: 100px; height: auto; margin-top: 10px;">
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
 <a href="{{ url('edit', $productss->id) }}" class="btn btn-primary">Edit</a>
               <style>



  .bg-red-500 {
    background-color: #f56565; /* Example red color */
  }
  .text-white {
    color: white;
  }
  .px-3 {
    padding-left: 0.75rem;
    padding-right: 0.75rem;
  }
  .py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
  }
  .rounded-lg {
    border-radius: 0.5rem;
  }
  .hover\:bg-red-700:hover {
    background-color: #c53030; /* Example dark red color */
  }
</style>

<button class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-700">Delete</button>

              </tr>

@endforeach


              <!-- Add more rows as needed -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



</x-admin-layout>
