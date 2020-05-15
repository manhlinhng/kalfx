<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
        <title>Kalfx</title>
        <link rel="stylesheet" href="{{ url('css/main.css') }}">

    </head>
    <body>

        
        <div class="main_container container animate__animated animate__zoomIn">
            <!-- Content here -->
            <div class="row">

                <!-- Aside left -->
                <div class="col-md-4">

                    <!-- form_symbol -->
                    <div class="form-control form_symbol">
                        <label for="">Pair Forex</label>
                        <select class="symbol" name="state">
                            <option value="gbpusd">GBPUSD</option>                   
                            <option value="gbpjpy">GBPJPY</option>
                            <option value="eurusd">EURUSD</option>
                            <option value="xauusd">XAUUSD</option>
                        </select>
                    </div>
                    <!-- form_symbol -->

                    <!-- form_summary -->
                    <div class="form-control form_symbol form_summary">
                        <label for="">Summary</label>
                        <div class="text_summary" id='text_summary'>
                            <p>
                                <span>[Order Limit] </span>
                                - 
                                <span>GBPUSD</span>
                            </p>
                            <p>
                                <span>Entry </span>
                                : 
                                <span>1.293333</span>
                            </p>
                            <p>
                                <span>Stoploss </span>
                                : 
                                <span>1.190000</span>
                            </p>
                            <p>
                                <span>Target </span>
                                : 
                                <span>1.393333</span>
                            </p>
                            <p>
                                <span>Volume</span>
                                : 
                                <span>0.3 (lot)</span>
                            </p>
                        </div>
                        <button class="form-control btn btn-primary btn_summary_copy">Copy This Text</button>
                    </div>
                    <!-- form_total -->
                
                </div>
                <!-- Aside left -->
                
                <!-- Aside right -->
                <div class="col-md-8">

                     <!-- form_kal -->
                     <div class="form-control form_symbol form_kal">
                        <label for="">Calculator</label>
                        
                    </div>
                    <!-- form_kal -->

                </div>
                <!-- Aside right -->
            </div>

        </div>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

        <!-- Init select2 -->
        <script>
            $(document).ready(function() {
                $('.symbol').select2();
            });
            $('body').on('click','.btn_summary_copy', function(e){
                e.preventDefault();
                
                alert('Copied Success!');
            });
           
        </script>
    </body>
</html>
