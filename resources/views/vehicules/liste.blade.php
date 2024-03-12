<div>
    @yield('contents')
    <div>
        <h1 class="font-bold text-2xl ml-3">Home Product List</h1>
        <a href="{{ route('admin/vehicules/create') }}"
            class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add
            Product</a>
        <hr />
        @if (Session::has('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Photo</th>
                    <th scope="col" class="px-6 py-3">Marque</th>
                    <th scope="col" class="px-6 py-3">Tarif</th>
                    <th scope="col" class="px-6 py-3">Annee</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($vehicule->count() > 0)
                    @foreach ($vehicule as $rs)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td>
                                {{ $rs->photo }}
                            </td>
                            <td>
                                {{ $rs->marque }}
                            </td>
                            <td>
                                {{ $rs->tarif }}
                            </td>
                            <td>
                                {{ $rs->annee }}
                            </td>
                            <td class="w-36">
                                <div class="h-14 pt-5">
                                    <a href="{{ route('admin/vehicules/show', $rs->id) }}"
                                        class="text-blue-800">Detail</a> |
                                    <a href="{{ route('admin/vehicules/edit', $rs->id) }}"
                                        class="text-green-800 pl-2">Edit</a> |
                                    <form action="{{ route('admin/vehicules/destroy', $rs->id) }}" method="POST"
                                        onsubmit="return confirm('Delete?')" class="float-right text-red-800">
                                        @csrf
                                        @method('DELETE')
                                        <button>Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="5">Product not found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
