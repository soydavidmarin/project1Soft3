{{--'published', 'reject', 'in_review'--}}
<option value="En revisión">
    En revisión
</option>
<option value="Rechazado" {{$val == 'Rechazado' ? 'selected = "selected"':''}}>
    Rechazado
</option>
<option value="Publicado" {{$val == 'Publicado' ? 'selected = "selected"':''}}>
    Publicado
</option>