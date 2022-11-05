<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Dashboard') }}
        </h2>
    </x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- <div class="flex justify-end m-2 p-2">
            <a href="{{ route('categories.create') }}" class="px-4 py-2 bg-indigo-500 hover-bg-indigo-700 rounded-lg text-white">
               Category Create
            </a>

        </div> --}}
           
<div class="overflow-x-auto relative">
    
<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        
<form>
    
  
        <div class="mb-6">
            <label for="default-input" class="block mb-2 text-sm font-medium text-white">Category Name</label>
            <input type="text" id="default-input" class="mb-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="mb-6 mt-4 ">
           <label for="default-input" class="block mb-2 text-sm font-medium text-white">Description</label>
           <textarea name="" id="" cols="30" rows="10" class="mt-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
        </div>
        <div class="mb-6 mt-4">
            <label for="default-input" class="block mb-2 text-sm font-medium text-white">Upload Image</label>
            <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
            
        </div>

        <div class="mt-4">
            <button type="submit" class="bg-indigo-500 px-2 py-2 hover-bg-indigo-700 text-white rounded-lg">Store</button>
        </div>

    
</form>

   
    </div>
</div>

</div>

</div>
</div>
</x-admin-layout>