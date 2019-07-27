<?php
$selected_value = (isset($dataTypeContent->{$row->field}) && !is_null(old($row->field, $dataTypeContent->{$row->field}))) ? old($row->field, $dataTypeContent->{$row->field}) : old($row->field);

?>
<select class="form-control select2" name="{{ $row->field }}">
    @foreach($dataTypeContent->getLayouts() as $layout)
        <option value="{{ $layout }}"
                @if ($selected_value === $layout)
                selected="selected"
                @endif
        >{{ $layout }}</option>
    @endforeach
</select>