<fieldset disabled>
    <div class="form-group col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
        <h1>Brand Details</h1>
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                autocomplete="name"
                placeholder="Type your name"
                class="form-control"
                value="{{$brand->name}}"
                required
                aria-describedby="nameHelp">
            <p id="nameHelp" class="form-text text-muted">We'll never share your data with anyone else.</p>
        </div>
    </div>

</fieldset>
<div class="button col-xl-5 col-lg-6 col-md-8 col-sm-12 mx-auto text-left form p-4">
    <a class="btn btn-primary" href="{{url('brands')}}" role="button">Back</a>
</div>




