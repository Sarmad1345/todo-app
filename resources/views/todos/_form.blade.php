<div class="field">
    <label for="title">Title</label>

    <input type="text" id="title" name="title" value="{{ old('title', $todo->title ?? '') }}">

    @error('title')
        <span class="error">{{ $message }}</span>
    @enderror

</div>

<div class="field">
    <label for="description">Description (optional)</label>

    <textarea id="description" name="description" rows="4">{{ old('description', $todo->description ?? '') }}</textarea>

    @error('description')
        <span class="error">{{ $message }}</span>
    @enderror
</div>
