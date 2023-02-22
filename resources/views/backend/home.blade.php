<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center t-color">
                    {{ __("laravel9Repository認証テスト") }}
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="pb-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">

                        <form method="post" action="{{ route('home.entry') }}">
                            @csrf
                            <div class="grid grid-cols-2 text-black">

                                <div class="grid grid-cols-1 px-5 text-black">

                                    <div class="bg-100">
                                        <div class="grid grid-cols-1">
                                            <div class="mb-6">
                                                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">氏名</label>
                                                <input type="text" id="name" name="name" value="{{ old('name',$edit_list->name ) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="大阪太郎">
                                                @error('name')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-100">
                                        <div class="grid grid-cols-2">
                                            <div class="mb-6">
                                                <label for="post_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">郵便番号(123-4566)</label>
                                                <input type="text" id="post_number" name="post_number" value="{{ old('post_number',$edit_list->post_number ) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="\d{3}-?\d{4}" placeholder="545-0021">
                                                @error('post_bumber')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-100">
                                        <div class="grid grid-cols-1">
                                            <div class="mb-6">
                                                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">住所</label>
                                                <input type="text" id="address" name="address" value="{{ old('address',$edit_list->address) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="">
                                                @error('address')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-100">
                                        <div class="grid grid-cols-2">
                                            <div class="mb-6">
                                                <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">TEL (123-456-7890)</label>
                                                <input type="tel" id="tel" name="tel" value="{{ old('tel',$edit_list->tel) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                                                @error('tel')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-100">
                                        <div class="grid grid-cols-2">
                                            <div class="mb-6">
                                                <label for="fax" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">FAX (123-456-7890)</label>
                                                <input type="fax" id="fax" name="fax" value="{{ old('fax',$edit_list->fax) }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com">
                                                @error('fax')
                                                    <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bg-100">
                                        <div class="grid grid-cols-2">
                                            <div class="mb-6">
                                                <input type="hidden" id="id" name="id" value="{{$edit_list->id}}" class="">
                                            </div>
                                        </div>
                                    </div>
                            
                                </div>

                                <div class="grid grid-cols-1 px-5 text-black">

                                    <div class="bg-100">
                                        <div class="grid grid-cols-1">
                                            <div class="mb-6">
                                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

                                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                            <tr class="text-center">
                                                                <th scope="col" class="hidden px-4 py-2">
                                                                   id
                                                                </th>
                                                                <th scope="col" class="px-1 py-3">
                                                                    name
                                                                </th>
                                                                <th scope="col" class="px-1 py-3">
                                                                    post
                                                                </th>
                                                                <th scope="col" class="px-1 py-3">
                                                                    address
                                                                </th>
                                                                <th scope="col" class="px-1 py-3">
                                                                    tel
                                                                </th>
                                                                <th scope="col" class="px-1 py-3">
                                                                    <span class="sr-only">Edit</span>
                                                                </th>
                                                                <th scope="col" class="px-1 py-3">
                                                                    <span class="sr-only">DEL</span>
                                                                </th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            @foreach($user_list as $user)
                                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                                                <td scope="row" class="hidden px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    {{$user->id}}
                                                                </td>
                                                                <td scope="row" class="px-4 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    {{$user->name}}
                                                                </td>
                                                                <td class="px-4 py-4">
                                                                    {{$user->post_number}}
                                                                </td>
                                                                <td class="px-4 py-4">
                                                                    {{$user->address}}
                                                                </td>
                                                                <td class="px-4 py-4">
                                                                    {{$user->tel}}
                                                                </td>
                                                                <td class="px-4 py-4 text-right">
                                                                    <!-- 第2引数にパラメーターを設定 -->
                                                                    <a href="{{ route('home.showEdit', ['id'=>$user->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                                                </td>
                                                                <td class="px-4 py-4 text-right">
                                                                    <!-- 第2引数にパラメーターを設定 -->
                                                                    <a href="{{ route('home.delete', ['id'=>$user->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">del</a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                        
                                        @if( count($user_list) > 0)
                                            {{ $user_list->links('vendor.pagination.tailwind') }}
                                        @endif
                                    </div>

                                </div>
                            </div>

                           <div class="flex justify-center mb-6">
                                <button type="button" class="mx-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="location.href='{{ route('home.index') }}' ">SEARCH</button>
                                <button type="submit" class="mx-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">SUBMIT</button>
                                <button id="ajax" class="mx-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">AJAX</button>
                                <button type="button" class="mx-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="location.href='{{ route('slack') }}' ">SLACK</button>
                                <button type="button" class="mx-5 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" onclick="location.href='{{ route('mail') }}' ">MAIL</button>
                           </div>
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
