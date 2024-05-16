{{-- tableau donnes --}}
@extends('layouts.backoffice')
@section('content')


    <div class="grid grid-cols-1 lg:grid-cols-1 p-4 gap-4">
        <a href="{{url('/admin/products/create')}}" type="button" class=" container text-amber-900	  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 " style=background-color:#f8f9f0>
            
            Create Product
            </a>
          <!-- table -->
          <div class="overflow-x-auto">
            <table class="min-w-full bg-white font-[sans-serif]">
              <thead class="bg-gray-800 whitespace-nowrap">
                <tr>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Id
                  </th>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Name
                  </th>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Image 
                  </th>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Price
                  </th>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Category
                  </th>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Description
                  </th>
                
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Created At
                  </th>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Updated At
                  </th>
                  <th class="px-6 py-3 text-left text-sm font-semibold text-white">
                    Actions
                  </th>
                </tr>
              </thead>
              <tbody class="whitespace-nowrap divide-y divide-gray-200 text-stone-950">
                @foreach ($products as $product)
                <tr class="hover:bg-blue-50">
                
                    <td class="px-6 py-4 text-sm">
                      {{$product->id}}
                    </td>
                    <td class="px-6 py-4 text-sm">
                      {{$product->nom}}
                    </td>
                    <td class="px-6 py-4 text-sm">
                      <img src="{{asset('storage/product').'/'. $product->image }}" width="50px" alt="">
                      
                    </td>
                    <td class="px-6 py-4 text-sm">
                      {{$product->prix}}
                    </td>
                    <td class="px-6 py-4 text-sm">
                      {{$product->category->nom}}
                    </td>
                    <td class="px-6 py-4 text-sm">
                      {{$product->description}}
                    </td>
                  
                    <td class="px-6 py-4 text-sm">
                      {{$product->created_at}}
                    </td>
                    <td class="px-6 py-4 text-sm">
                      {{$product->updated_at}}
                    </td>
                    <td class="px-6 py-4">
                      <a href="{{ url('admin/products/destroy').'/'.$product->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24">
                          <path 
                          d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                          data-original="#000000" />
                        <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                          data-original="#000000" />
                        </svg>
                      </a>
                    </td>
                    <td class="px-6 py-4">
                     <a href="{{ url('admin/products/edit').'/'.$product->id }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
                        viewBox="0 0 348.882 348.882">
                        <path
                          d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                          data-original="#000000" />
                        <path
                          d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                          data-original="#000000" />
                      </svg>
                      </a> 
                      {{-- <button class="mr-4" title="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-blue-500 hover:fill-blue-700"
                          viewBox="0 0 348.882 348.882">
                          <path
                            d="m333.988 11.758-.42-.383A43.363 43.363 0 0 0 304.258 0a43.579 43.579 0 0 0-32.104 14.153L116.803 184.231a14.993 14.993 0 0 0-3.154 5.37l-18.267 54.762c-2.112 6.331-1.052 13.333 2.835 18.729 3.918 5.438 10.23 8.685 16.886 8.685h.001c2.879 0 5.693-.592 8.362-1.76l52.89-23.138a14.985 14.985 0 0 0 5.063-3.626L336.771 73.176c16.166-17.697 14.919-45.247-2.783-61.418zM130.381 234.247l10.719-32.134.904-.99 20.316 18.556-.904.99-31.035 13.578zm184.24-181.304L182.553 197.53l-20.316-18.556L294.305 34.386c2.583-2.828 6.118-4.386 9.954-4.386 3.365 0 6.588 1.252 9.082 3.53l.419.383c5.484 5.009 5.87 13.546.861 19.03z"
                            data-original="#000000" />
                          <path
                            d="M303.85 138.388c-8.284 0-15 6.716-15 15v127.347c0 21.034-17.113 38.147-38.147 38.147H68.904c-21.035 0-38.147-17.113-38.147-38.147V100.413c0-21.034 17.113-38.147 38.147-38.147h131.587c8.284 0 15-6.716 15-15s-6.716-15-15-15H68.904C31.327 32.266.757 62.837.757 100.413v180.321c0 37.576 30.571 68.147 68.147 68.147h181.798c37.576 0 68.147-30.571 68.147-68.147V153.388c.001-8.284-6.715-15-14.999-15z"
                            data-original="#000000" />
                        </svg>
                      </button> --}}
                     
                      {{-- <button class="mr-6" title="Delete">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 fill-red-500 hover:fill-red-700" viewBox="0 0 24 24"></svg>
                          <form  method="POST" action="{{route('products.destroy',$product)}}">
                          @csrf
                          @method('DELETE')
                            <input type="submit" value="delete">
                          </form>
                          <path
                            d="M19 7a1 1 0 0 0-1 1v11.191A1.92 1.92 0 0 1 15.99 21H8.01A1.92 1.92 0 0 1 6 19.191V8a1 1 0 0 0-2 0v11.191A3.918 3.918 0 0 0 8.01 23h7.98A3.918 3.918 0 0 0 20 19.191V8a1 1 0 0 0-1-1Zm1-3h-4V2a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v2H4a1 1 0 0 0 0 2h16a1 1 0 0 0 0-2ZM10 4V3h4v1Z"
                            data-original="#000000" />
                          <path d="M11 17v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Zm4 0v-7a1 1 0 0 0-2 0v7a1 1 0 0 0 2 0Z"
                            data-original="#000000" />
                        
                      </button>  --}}
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- table -->
    </div>
    
@endsection
        