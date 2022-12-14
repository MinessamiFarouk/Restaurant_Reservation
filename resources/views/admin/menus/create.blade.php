<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.menus.index') }}" class="px-4 py-2 text-gray-200 text-sm bg-gray-700 hover:bg-gray-500 rounded-lg">
                    Back to Menus
                </a>
            </div>
            <div class="m-2 p-2">
                <form action="{{ route("admin.menus.store") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label
                            for="name"
                            class="inline-block text-lg mb-2"
                            >Name</label
                        >
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{old('name')}}"
                        />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                
                    <div class="mb-6">
                        <label for="logo" class="inline-block text-lg mb-2">
                            Image
                        </label>
                        <input
                            type="file"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="image"
                            value="{{old('image')}}"
                        />
                        @error('image')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label
                            for="price"
                            class="inline-block text-lg mb-2"
                            >Price</label
                        >
                        <input
                            type="number"
                            min="0.00"
                            max="10000.00"
                            step="0.01"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="price"
                            value="{{old('price')}}"
                        />
                        @error('price')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-16">
                        <label
                            for="categories"
                            class="inline-block text-lg mb-2"
                        >
                            Categories
                        </label>
                        <select name="categories[]" id="" multiple class="block form-multiselect rounded p-2 w-full">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('categoies')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                
                    <div class="mb-16">
                        <label
                            for="description"
                            class="inline-block text-lg mb-2"
                        >
                            Description
                        </label>
                        <textarea
                            class="border border-gray-200 rounded p-2 w-full"
                            name="description"
                            rows="10"
                        >{{old("description")}}</textarea>
                        @error('description')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                
                    <div class="mb-6">
                        <button
                            class="px-4 py-2 text-gray-200 text-sm bg-gray-700 hover:bg-gray-500 rounded-lg"
                        >
                            Create Menu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
