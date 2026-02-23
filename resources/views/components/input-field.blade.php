@props([
    'label' => null,
    'name',
    'type' => 'text',
    'required' => false,
    'value' => null,
])
<div>
    @if($label)
        <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    @endif
    <input
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        @if($required) required @endif
        value="{{ old($name, $value) }}"
        {{ $attributes->merge(['class' => 'form-control']) }}
    >

    @error($name)
        <div class="invalid-feedback d-block">{{ $message }}</div>
    @enderror
</div>