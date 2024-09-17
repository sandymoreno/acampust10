<div class="space-y-1.5">
    <!-- Label -->
    <label for="{{ $name }}"
           class="@error($name) text-rose-500 @else text-gray-900 @enderror block text-sm font-medium">
        {{ $label }}
    </label>

    <!-- Input -->
    <input
        name="{{ $name }}"
        id="{{ $name }}"
        type="{{ $type }}"
        value="{{ $value }}"
        {{ $disabled ? 'disabled' : '' }}
        class="@error($name) border-red-500 @else border-gray-300 @enderror border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
    />

    <!-- Error Message -->
    @error($name)
    <p class="text-rose-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
