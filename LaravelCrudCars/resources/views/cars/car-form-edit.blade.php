<form method="POST" action="{{ url('cars/' . $car->id) }}">
    @csrf
    @method('PUT')
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Edit Car</h1>
        <div class="form-group">
            <label for="registration">Registration</label>
            <input
                value="{{$car->registration}}"
                type="text"
                id="registration"
                name="registration"
                autocomplete="registration"
                placeholder="Type the registration"
                class="form-control
             @error('name') is-invalid @enderror"
                value="{{ old('registration') }}"
                required
                aria-describedby="nameHelp">
            <p id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</p>
            @error('registration')
            <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="year">Year of Manufacture</label>
            <input
                value="{{ $car->year_of_manufacture }}"
                type="text"
                id="year"
                name="year"
                autocomplete="year"
                placeholder="Type the year of car manufacture"
                class="form-control
            @error('year') is-invalid @enderror"
                value="{{ old('year') }}"
                required
                aria-describedby="nameHelp">
            @error('year')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="color">Color</label>
            <input
                value="{{ $car->color }}"
                type="text"
                id="color"
                name="color"
                autocomplete="color"
                placeholder="Type the car color"
                class="form-control
            @error('color') is-invalid @enderror"
                value="{{ old('color') }}"
                required
                aria-describedby="nameHelp">
            @error('color')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div>
            <form action="/action_page.php">
                <label for="brands">Choose a brand:</label>
                <select name="brand_id" id="brand_id">
                    @foreach($brands as $brand)
                        <option value="{{$brand->id}}" @if($brand->id == $car->brand->id)selected @endif>{{$brand->name}}</option>
                    @endforeach
                </select>
            </form>
        </div>
        <br>
        <button type="update" class="mt-2 mb-5 btn btn-primary">Update</button>
    </div>
</form>
