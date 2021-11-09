{{--Falsificación de peticiones en sitios cruzados--}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Nombre publicación"
    value="{{old('publication', $post -> publication)}}">
</div>
<div class="form-group">
    <select class="custom-select" aria-label="Default" name="category_id" id="category_id">
        <option selected disabled>Selecciona una opción</option>
        @foreach ($categories as $category_name=>$id)
            <option {{$post -> category_id == $id ? 'selected="selected"':''}} value="{{$id}}">
                {{$category_name}}
            </option>
        @endforeach
    </select>
</div>
{{--Lista desplegable estatica ("Hardcode") de estado de la publicacion--}}
<div class="form-group">
    <select class="custom-select" name="state_publication" id="state_publication">
        @include('dashboard.components.state_options', ['val' => $post->state_publication])
    </select>
</div>
{{--Lista desplegable dinamica de categorías--}}
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="5" placeholder="Contenido de la publicación">
        {{old('content_publication', $post -> content_publication)}}
    </textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success btn-sm">Aceptar</button>
    <a class="btn btn-danger btn-sm" href= "{{ URL::previous() }}" >Cancelar</a>
</div>