@csrf
{{-- //CAMPO TITULO --}}
<label class="uppercase text-gray-700 text-xs"text>Título</label>
<span class="text-xs text-red-600" >@error('title')
    {{$message}}
@enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{
old('title', @$post->title)}}">

{{-- //CAMPO SLUG --}}
<label class="uppercase text-gray-700 text-xs"text>Slug</label>
<span class="text-xs text-red-600" >@error('slug')
    {{$message}}
@enderror</span>
<input type="text" name="slug" class="rounded border-gray-200 w-full mb-4" value="{{
old('slug', @$post->slug)}}">

{{-- //CAMPO BODY --}}
<label class="uppercase text-gray-700 text-xs">Contenido</label>
<span class="text-xs text-red-600" >@error('body')
    {{$message}}
@enderror</span>
<textarea name="body" cols="30" rows="10" class="rounded border-gray-200 w-full mb-4">{{
old('body', @$post->body)  }}</textarea>

{{-- //BOTON Enviar --}}
<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>  
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>


