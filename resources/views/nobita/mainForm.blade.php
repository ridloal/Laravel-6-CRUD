<div class="form-group row">
    <label for="full_name" class="col-sm-2 col-form-label">Full Name</label>
    <div class="col-sm-5">
        <input type="text" name="first_name" value="{{ old('first_name') ?? $nobita->first_name }}" class="form-control" id="full_name" placeholder="Nobi" 
        @if (request()->route()->getActionMethod() == 'show')
            readonly 
        @endif>
        @error('first_name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-sm-5">
        <input type="text" name="last_name" value="{{old('last_name') ?? $nobita->last_name }}" class="form-control" id="full_name" placeholder="Nobita"
        @if (request()->route()->getActionMethod() == 'show')
            readonly 
        @endif>
        @error('last_name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="full_name_kana" class="col-sm-2 col-form-label">Full Name Kana</label>
    <div class="col-sm-5">
        <input type="text" name="first_name_kana" value="{{old('first_name_kana') ?? $nobita->first_name_kana }}" class="form-control" id="full_name_kana" placeholder="のび"
        @if (request()->route()->getActionMethod() == 'show')
            readonly 
        @endif>
        @error('first_name_kana')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <div class="col-sm-5">
        <input type="text" name="last_name_kana" value="{{old('last_name_kana') ?? $nobita->last_name_kana}}" class="form-control" id="full_name_kana" placeholder="のび太"
        @if (request()->route()->getActionMethod() == 'show')
            readonly 
        @endif>
        @error('last_name_kana')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="username" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
        <input type="text" name="username" value="{{old('username') ?? $nobita->username}}" class="form-control" id="username" placeholder="nobita"
        @if (request()->route()->getActionMethod() == 'show')
            readonly 
        @endif>
        @error('username')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="text" name="email" value="{{old('email') ?? $nobita->email}}" class="form-control" id="email" placeholder="nobita@doraemon.com"
        @if (request()->route()->getActionMethod() == 'show')
            readonly 
        @endif>
        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="website" class="col-sm-2 col-form-label">Website</label>
    <div class="col-sm-10">
        <input type="text" name="website" value="{{old('website') ?? $nobita->website}}" class="form-control" id="website" placeholder="http://www.nobita.com"
        @if (request()->route()->getActionMethod() == 'show')
            readonly 
        @endif>
        @error('website')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
</div>

@if (request()->route()->getActionMethod() != 'show')
    <div class="form-group row">
        <label for="hobby" class="col-sm-2 col-form-label">Hobby</label>
        <div class="col-sm-10">
            <label>
                <input type="checkbox" name="hobby[]" value="Playing Baseball"> Playing Baseball
            </label>
        </div>
        <div class="col-sm-10 offset-2">
            <label>
                <input type="checkbox" name="hobby[]" value="Reading Comics"> Reading Comics
            </label>
        </div>
        <div class="col-sm-2 offset-2">
            <label>
                <input type="checkbox" name="" id="otherHobby" value=""> Other
            </label>
        </div>
        <div class="col-sm-8">
            <input type="text" name="hobby_custom" value="{{old('hobby_custom')}}" class="form-control" id="hobbyCustom" placeholder="Sleeping" disabled>
        </div>
    </div>

    <div class="form-group row">
        <label for="picture" class="col-sm-2 col-form-label">Picture</label>
        <div class="col-sm-10">
            <input type="file" name="picture">
        <p class="text-danger">{{ $errors->first('picture') }}</p>
        </div>
    </div>
@else
    <div class="form-group row">
        <label for="hobby" class="col-sm-2 col-form-label">Hobby</label>
        <div class="col-sm-10">
            <input type="text" name="hobby" value="{{$nobita->hobby . ' ' . $nobita->hobby_custom}}" class="form-control" id="hobby" readonly>
        </div>
    </div>

    @if ($nobita->picture)
        <div class="row">
            <img src="{{ asset('storage/' . $nobita->picture) }}" height="250px" alt="">
        </div>
    @endif
@endif

