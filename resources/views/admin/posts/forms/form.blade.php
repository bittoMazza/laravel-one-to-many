<div class="form-group">
    <label class="text-light">TITOLO</label>
    <input type="text" class="form-control" value="{{ old('title',$post->title) }}" name="title" placeholder="Inserire titolo" required>
</div>

@error('title')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label class="text-light">CONTENUTO POST</label>
    <textarea class="form-control" name="post_content" cols="30" rows="5">{{ old('post_content',$post->post_content) }}</textarea>
</div>

@error('post_content')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<div class="form-group">
    <label class="text-light">IMMAGINE POST</label>
    <input type="text" class="form-control" value="{{ old('thumb',$post->thumb) }}" name="thumb" placeholder="Inserire immagine" required>
</div>

@error('thumb')
<div class="alert alert-warning">
    {{ $message }}
</div>
@enderror

<button type="submit" class="btn btn-primary my-3">Salva il post</button>
