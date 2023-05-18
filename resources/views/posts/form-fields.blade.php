<label>
    Title
    <input name="title" class="form-control" type="text" value="{{old('title',$post->title)}}">
    @error('title')
        <br>
        <small style="color:red">{{$message}}</small>
    @enderror
</label>