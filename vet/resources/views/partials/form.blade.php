 
<form class="form card" method="post">
    <h2 class="card-header">@yield('card-head')</h2>
    <div class="card-body">
    <fieldset>
        <legend>Contact</legend>
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <label for="first_name">First Name *</label>
                    <input type="text"id="first_name" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') ?? ($owner->first_name  ?? '')}}"/>
                    @error('first_name')
                    <p class="invalid-feedback">
                        {{
                            $message
                        }}
                    </p>
                    @enderror
                </div>
                <div class="col">
                    <label for="last_name">Last Name *</label>
                    <input type="text" id="last_name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') ?? ($owner->last_name  ?? '')}}">
                    @error('last_name')
                    <p class="invalid-feedback">
                        {{
                            $message
                        }}
                    </p>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="col">
                    <label for="telephone">Telephone</label>
                    <input type="text" name="telephone" id="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{  old('telephone') ?? ($owner->telephone ?? '')}}">
                    @error('telephone')
                    <p class="invalid-feedback">
                        {{
                            $message
                        }}
                    </p>
                    @enderror
                </div>
                <div class="col">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{  old('email') ?? ($owner->email ?? '')}}">
                    @error('email')
                    <p class="invalid-feedback">
                        {{
                            $message
                        }}
                    </p>
                    @enderror                    
                </div>
            </fieldset>
            <fieldset>
                <legend>Address</legend>
                <div class="form-row">
                    <div class="col">
                        <label for="address_1">Line 1</label>
                        <input type="text" class="form-control @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1') ?? ($owner->address_1 ?? '') }}">
                        @error('address_1')
                        <p class="invalid-feedback">
                            {{
                                $message
                            }}
                        </p>
                        @enderror
                        <label for="address_2">Line 2</label>
                        <input type="text" class="form-control @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2') ?? ($owner->address_2 ?? '') }}">
                        @error('address_2')
                        <p class="invalid-feedback">
                            {{
                                $message
                            }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <label for="town">Town</label>
                        <input type="text" class="form-control @error('town') is-invalid @enderror" name="town" value="{{ old('town') ?? ($owner->town ?? '') }}">
                        @error('town')
                        <p class="invalid-feedback">
                            {{
                                $message
                            }}
                        </p>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="postcode">Postcode</label>
                        <input type="text" class="form-control @error('postcode') is-invalid @enderror" name="postcode" value="{{ old('postcode') ?? ($owner->postcode ?? '') }}">
                        @error('postcode')
                        <p class="invalid-feedback">
                            {{
                                $message
                            }}
                        </p>
                        @enderror
                    </div>
                </div>
        </fieldset>
        <div class="card-footer text-right">
            <button class="btn btn-success"> @yield('b') </button>
                @csrf
        </div>
    </div>
</form>
