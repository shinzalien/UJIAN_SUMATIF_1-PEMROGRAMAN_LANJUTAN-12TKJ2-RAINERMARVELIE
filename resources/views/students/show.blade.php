@extends('layouts.app')

@section('title', $student['nama'])

@section('content')
<div class="max-w-md mx-auto bg-white rounded-lg shadow p-6 flex flex-col items-center space-y-4">
    <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-32 h-32 rounded-full object-cover" />
    <p class="text-gray-500 text-sm">{{ $student['username'] }}</p>
    <h1 class="text-2xl font-bold flex items-center space-x-2">
        <span>{{ $student['nama'] }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
    </h1>
    <p class="text-gray-700 text-center text-sm">{{ $student['kelas'] }} | {{ $student['hobi'] }}</p>
    <p class="text-gray-700 text-center text-sm">{{ $student['deskripsi'] }}</p>
    <div class="flex space-x-4">
        <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded hover:bg-gray-400 transition duration-200">Edit Profile</button>
        <button class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded hover:bg-gray-400 transition duration-200">Delete Account</button>
    </div>
</div>
@endsection
