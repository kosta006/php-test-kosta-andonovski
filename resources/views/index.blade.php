<html>
    <head>
        <meta name="_token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
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
                    <h3 align="center">Search Results: <span id="total_records"></span></h3>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Property Name</th>
                            <th>Price</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Storeys</th>
                            <th>Garages</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>

                <div class="col-md-6 order-md-1">
                    <h4 class="mb-3">Search Options</h4>
                    <form class="needs-validation" method="POST" action="">
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="name">Property Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="">
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
                                    <option value="">Select Bedrooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Bathrooms</label>
                                <select class="custom-select d-block w-100" id="bathrooms" name="bathrooms">
                                    <option value="">Select Bathrooms</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Storeys</label>
                                <select class="custom-select d-block w-100" id="bedrooms" name="bedrooms">
                                    <option value="">Select storeys</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="col-md-4 mb-3">a
                                <label for="state">Garages</label>
                                <select class="custom-select d-block w-100" id="bathrooms" name="bathrooms">
                                    <option value="">Select garage space</option>
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

        <script>
            $(document).ready(function(){

                fetch_customer_data();

                function fetch_customer_data(name = '')
                {
                    $.ajax({
                        url:"{{ route('search') }}",
                        method:'GET',
                        data:{
                            name: name,
                        },
                        dataType:'json',
                        success:function(data)
                        {
                            $('tbody').html(data.table_data);
                            $('#total_records').text(data.total_data);
                        }
                    })
                }

                $(document).on('keyup', '#name', function(){
                    var name = $(this).val();
                    fetch_customer_data(name);
                });

            });
        </script>
    </body>

</html>