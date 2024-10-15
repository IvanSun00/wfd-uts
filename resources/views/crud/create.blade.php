@extends('base.base')

@section('styles')
@endsection

@section('content')
<div class="outer min-h-svh">
    <div class="max-w-screen-lg mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4 text-center">Formulir Pendaftaran</h2>
        <div class="mb-4">
            <a href="{{ route('crud.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-800 font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" class="mr-2">
                    <path d="M15 18l-6-6 6-6" stroke="#0000FF" stroke-width="2" stroke-linecap="round" fill="none"/>
                </svg>
                Back
            </a>
        </div>
    
        <form action="#" method="POST">
            <!-- Nama -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-medium mb-2">Nama Lengkap</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan nama lengkap" required />
            </div>
    
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan email" required />
            </div>
    
            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-medium mb-2">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Masukkan password" required />
            </div>
    
            <!-- Tombol Submit & Reset -->
            <div class="flex items-center justify-between">
                <button
                    type="reset"
                    class="px-6 py-2 bg-gray-400 text-white font-bold rounded-lg shadow-md hover:bg-gray-500 focus:ring-2 focus:ring-gray-400 focus:outline-none">
                    Reset
                </button>
                <button
                    type="submit"
                    class="px-6 py-2 bg-blue-500 text-white font-bold rounded-lg shadow-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    Submit
                </button>
            </div>
        </form>
    </div>
    

</div>

@endsection

@section('scripts')
@endsection