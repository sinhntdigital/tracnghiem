<label >cấp độ :</label>
<select class="form-control" required="true" name="level_id">
	<option value="">chọn cấp độ</option>
	@foreach($listLevels as $listLevels)
		<option value="{{$listLevels->id}}">
		  {{$listLevels->title_level}}
		</option>
	@endforeach
</select>