<textarea id="{{ $attributes->get('id') }}" name="{{ $attributes->get('name') }}"
        {{ $attributes->merge(['class' => 'form-input rounded-md shadow-sm']) }}
        >{{ $slot }}
</textarea>
