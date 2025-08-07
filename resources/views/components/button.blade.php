<button {{ $attributes->merge(['class' => 'bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded transition duration-200']) }}>
    {{ $slot }}
</button>
