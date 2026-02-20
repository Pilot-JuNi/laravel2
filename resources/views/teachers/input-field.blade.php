@props([
    'label',
    'name',
    'type' => 'text',
    'require' => false ,
    'value' => null ,
])
<div>
    <label for="{{ $name }}">
        {{ $lable }}
    </label>
    <input 
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        @if($required) required @endif
        value="{{ old($name, $value) }}"
        {{ $atributes->merge(['class' => 'mt-i-block w-full rounded-md border-gray-300'])}}
    >
    
    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>