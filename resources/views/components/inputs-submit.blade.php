@props([
    'label' => 'Confirmar',
])
<div class="md:grid sm:grid-cols-1 md:grid-cols-3 mb-3">
    <div></div>
    <div class="md:col-span-2 mt-2">
    <button type="submit" {{ $attributes->merge(['class'=>'btn btn-primary']) }}>
    {{ $label }}
    </button>
</div>
