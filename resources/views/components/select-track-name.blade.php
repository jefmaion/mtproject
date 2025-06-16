@props([
    'value' => null,
    'id' => 0,
    'name' => null
])
<select id="my-select" class="form-control track-name" name="{{ $name }}">
    <option></option>
    @foreach($tracks as $track)
    <option value="{{ $track }}" {{ $track == ($value ?? null) ? 'selected' : '' }}>{{ $track }}</option>
    @endforeach

</select>