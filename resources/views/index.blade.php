<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="py-5 text-center">
                <h2>Property Search</h2>
                <p class="lead">Find you property by using the form below.</p>
            </div>

            <div class="row">
                <div class="col-md-6 order-md-2 mb-4">
                    <h4 class="mb-3">Search Results</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h5 class="my-0">Property Name: </h5>
                                <br>
                                <p class="text-muted">Price: </p>
                                <p class="text-muted">Bedrooms: </p>
                                <p class="text-muted">Bathrooms: </p>
                                <p class="text-muted">Storeys: </p>
                                <p class="text-muted">Garages: </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 order-md-1">
                    <h4 class="mb-3">Search Options</h4>
                    <form class="needs-validation" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="name">Property Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="">
                            </div>
                            <div class="col-md-8 mb-3">
                                <div data-role="rangeslider">
                                    <label for="price-min">Price (thousand):</label>
                                    <input type="range" name="price-min" id="price-min" value="200" min="0" max="999">
                                    <label for="price-max">Price (k):</label>
                                    <input type="range" name="price-max" id="price-max" value="600" min="0" max="999">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="state">Bedrooms</label>
                                <select class="custom-select d-block w-100" id="bedrooms" name="bedrooms">
                                    <option value="0">any</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Bathrooms</label>
                                <select class="custom-select d-block w-100" id="bathrooms" name="bathrooms">
                                    <option value="0">any</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Storeys</label>
                                <select class="custom-select d-block w-100" id="bedrooms" name="bedrooms">
                                    <option value="0">any</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Garages</label>
                                <select class="custom-select d-block w-100" id="bathrooms" name="bathrooms">
                                    <option value="0">any</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>

</html>