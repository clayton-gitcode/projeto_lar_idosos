@props(['title','name'])

{{-- Campo de Email --}}
<div class="form-control">
    <label class="label">
        <span class="label-text">{{ $title }}</span>
    </label>
    <input name="{{ $name }}"{{ $attributes }}
        class="input input-bordered w-full @error('$email') input-error @enderror" />
    @error($name)
        <label class="label">
            <span class="label-text-alt text-error">{{ $message }}</span>
        </label>
    @enderror
</div>
