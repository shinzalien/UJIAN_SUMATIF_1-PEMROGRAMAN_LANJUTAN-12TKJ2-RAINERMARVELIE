@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<h1 class="text-3xl font-bold mb-6 text-center">Daftar Siswa</h1>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
    @foreach ($students as $student)
    <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
        <img src="{{ $student['foto'] }}" alt="{{ $student['nama'] }}" class="w-24 h-24 rounded-full mb-4 object-cover" />
        <h2 class="text-xl font-semibold">{{ $student['nama'] }}</h2>
        <p class="text-gray-500 text-sm mb-2">{{ $student['username'] }}</p>
        <p class="text-gray-700 text-center text-sm">{{ $student['deskripsi'] }}</p>
        <a href="{{ route('students.show', $student['id']) }}" class="mt-4 w-full">
            <x-button>Detail</x-button>
        </a>
    </div>
    @endforeach
</div>
@endsection
