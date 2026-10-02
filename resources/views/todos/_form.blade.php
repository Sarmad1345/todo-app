<div class="field">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" value="{{ $todo->title ?? '' }}">
</div>

<div class="field">
    <label for="description">Description (optional)</label>
    <textarea id="description" name="description" rows="4">{{ $todo->description ?? '' }}</textarea>
</div>
