<select name="{{ $name }}" id="{{ $id }}" class="form-control">
    <option value="">--Chọn--</option>
    @foreach ($options as $option)
        <option value="{{ $option->id }}">{{ $option->name }}</option>
    @endforeach
</select>
