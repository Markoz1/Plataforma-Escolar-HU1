<input type={{$type}} class="form-control {{$errors->has($name)? "is-invalid":""}}" name={{$name}} id={{$name}} value={{old($name)}}>
    <div class="invalid-feedback">{{ $errors->first($name) }}
    </div>