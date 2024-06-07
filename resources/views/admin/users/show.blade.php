<x-admin-layout>


     <!-- Users Section -->
     <div class="py-8 mt-8">
                <div class="flex justify-between">
                    <h2 class="text-2xl font-semibold leading-tight">Users</h2>
                    
                </div>
                <div class="mt-4">
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                            <table class="min-w-full leading-normal">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Name</th>
                                        <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Email</th>
                                        <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Registered At</th>
                                        <th scope="col" class="px-5 py-3 bg-gray-200 text-gray-600 text-left text-sm uppercase font-semibold">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->name }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->email }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">{{ $user->created_at }}</td>
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <a href="{{ route('user.edit', $user->id) }}">
                                                    <button class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-700">Edit</button>
                                                </a>
                                                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-700">Delete</button>
                                                </form>
                                            </td>
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
