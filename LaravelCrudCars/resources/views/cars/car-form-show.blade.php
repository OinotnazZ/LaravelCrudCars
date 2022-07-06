<fieldset disabled>
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Car Details</h1>
        <div class="form-group">
            <label for="registration">Registration</label>
            <input
                type="text"
                id="registration"
                name="registration"
                autocomplete="registration"
                placeholder="Type the registration"
                class="form-control"
                value="{{$car->registration}}"
                required
                aria-describedby="nameHelp">
            <p id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</p>
        </div>

        <div class="form-group">
            <label for="year">Year of Manufacture</label>
            <input
                type="text"
                id="year"
                name="year"
                autocomplete="year"
                placeholder="Type the year of car manufacture"
                class="form-control"
                value="{{ $car->year_of_manufacture}}"
                required
                aria-describedby="nameHelp">
        </div>

        <div class="form-group">
            <label for="color">Year of Manufacture</label>
            <input
                type="text"
                id="color"
                name="color"
                autocomplete="color"
                placeholder="Type the car color"
                class="form-control"
                value="{{ $car->color}}"
                required
                aria-describedby="nameHelp">
        </div>

        <div>
            <form action="/action_page.php">
                <label for="brands">Choose a brand:</label>
                <select name="brand_id" id="brand_id">
                        <option value="{{$car->brand->id}}">{{$car->brand->name}}</option>
                </select>
            </form>
        </div>
    </div>

</fieldset>
<div class="button col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
    <a class="btn btn-primary" href="{{url('cars')}}" role="button">Back</a>
</div>




