@extends('layouts.app')
@section('content')
    <style>
        .number-input input[type="number"] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }

        .number-input input[type=number]::-webkit-inner-spin-button,
        .number-input input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        .number-input {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .number-input button {
            -webkit-appearance: none;
            background-color: transparent;
            border: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin: 0;
            position: relative;
        }

        .number-input button:before,
        .number-input button:after {
            display: inline-block;
            position: absolute;
            content: '';
            height: 2px;
            transform: translate(-50%, -50%);
        }

        .number-input button.plus:after {
            transform: translate(-50%, -50%) rotate(90deg);
        }

        .number-input input[type=number] {
            text-align: center;
        }

        .number-input.number-input {
            border: 1px solid #ced4da;
            width: 10rem;
            border-radius: .25rem;
        }

        .number-input.number-input button {
            width: 2.6rem;
            height: .7rem;
        }

        .number-input.number-input button.minus {
            padding-left: 10px;
        }

        .number-input.number-input button:before,
        .number-input.number-input button:after {
            width: .7rem;
            background-color: #495057;
        }

        .number-input.number-input input[type=number] {
            max-width: 4rem;
            padding: .5rem;
            border: 1px solid #ced4da;
            border-width: 0 1px;
            font-size: 1rem;
            height: 2rem;
            color: #495057;
        }

        @media not all and (min-resolution: .001dpcm) {
            @supports (-webkit-appearance: none) and (stroke-color:transparent) {

                .number-input.def-number-input.safari_only button:before,
                .number-input.def-number-input.safari_only button:after {
                    margin-top: -.3rem;
                }
            }
        }
    </style>
    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            <!--Section: Block Content-->
            <section class="mb-5">

                <div class="row">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <div class="view overlay">
                            <img src="{{ asset('storage/' . $product->image) }}"
                                 class="img-fluid" alt="Sample image with waves effect.">
                            <a>
                                <div class="mask waves-effect waves-light rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <h5>{{ $product->name }}</h5>
                        <p class="mb-2 text-muted text-uppercase small">Sneakers</p>
                        {{--                        TODO: Add a relationship between products and categories. --}}
                        <ul class="rating">
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="far fa-star fa-sm text-primary"></i>
                            </li>
                        </ul>
                        <p><span class="mr-1">
                                <strong class="text-success">
                                    $ {{ $product->price }} USD
                                </strong>
                            </span>
                        </p>
                        <p class="pt-1">
                            {{ $product->desc }}
                        </p>
                        <div class="table-responsive">
                            <table class="table table-sm table-borderless mb-0">
                                <tbody>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Model</strong></th>
                                    <td>CJ5378-800</td>
{{--                                    TODO: Add a model field to products table in database--}}
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Colorway</strong></th>
                                    <td>Bright Ceramic/Green Spark</td>
{{--                                    TODO: Add a colorway field to products table in database--}}
                                </tr>
                                <tr>
                                    <th class="pl-0 w-25" scope="row"><strong>Delivery</strong></th>
                                    <td>USA, Europe</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-responsive mb-2">
                            <table class="table table-sm table-borderless">
                                <tbody>
                                <tr>
                                    <td class="pl-0 pb-0 w-25">Quantity</td>
                                    <td class="pb-0">Select size</td>
                                </tr>
                                <tr>
                                    <td class="pl-0">
                                        <div class="def-number-input number-input safari_only">
                                            <button
                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                class="minus"></button>
                                            <input class="quantity" min="0" name="quantity" value="1" type="number">
                                            <button
                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                class="plus"></button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="mt-1">
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="small"
                                                       name="materialExampleRadios" checked>
                                                <label class="form-check-label small text-uppercase card-link-secondary"
                                                       for="small">9</label>
                                            </div>
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="medium"
                                                       name="materialExampleRadios">
                                                <label class="form-check-label small text-uppercase card-link-secondary"
                                                       for="medium">10</label>
                                            </div>
                                            <div class="form-check form-check-inline pl-0">
                                                <input type="radio" class="form-check-input" id="large"
                                                       name="materialExampleRadios">
                                                <label class="form-check-label small text-uppercase card-link-warning"
                                                       for="large">12</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="button" class="btn btn-warning btn-md mr-1 mb-2">Buy now</button>
                        <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
                                class="fas fa-shopping-cart pr-2"></i>Add to
                            cart
                        </button>
                    </div>
                </div>

            </section>
            <!--Section: Block Content-->

            <!-- Classic tabs -->
            <div class="classic-tabs">

                <ul class="nav tabs-warning nav-justified" id="advancedTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" id="description-tab" data-toggle="tab" href="#description"
                           role="tab"
                           aria-controls="description" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info"
                           aria-selected="false">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                           aria-controls="reviews"
                           aria-selected="false">Reviews (1)</a>
                    </li>
                </ul>
                <div class="tab-content" id="advancedTabContent">
                    <div class="tab-pane fade show active" id="description" role="tabpanel"
                         aria-labelledby="description-tab">
                        <h5>Product Description</h5>
                        <p class="small text-muted text-uppercase mb-2">Shirts</p>
                        <ul class="rating">
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="fas fa-star fa-sm text-primary"></i>
                            </li>
                            <li>
                                <i class="far fa-star fa-sm text-primary"></i>
                            </li>
                        </ul>
                        <h6>12.99 $</h6>
                        <p class="pt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, sapiente illo.
                            Sit
                            error voluptas repellat rerum quidem, soluta enim perferendis voluptates laboriosam.
                            Distinctio,
                            officia quis dolore quos sapiente tempore alias.</p>
                    </div>
                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                        <h5>Additional Information</h5>
                        <table class="table table-striped table-bordered mt-3">
                            <thead>
                            <tr>
                                <th scope="row" class="w-150 dark-grey-text h6">Weight</th>
                                <td><em>0.3 kg</em></td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" class="w-150 dark-grey-text h6">Dimensions</th>
                                <td><em>50 × 60 cm</em></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                        <h5><span>1</span> review for <span>Fantasy T-shirt</span></h5>
                        <div class="media mt-3 mb-4">
                            <img class="d-flex mr-3 z-depth-1"
                                 src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg"
                                 width="62" alt="Generic placeholder image">
                            <div class="media-body">
                                <div class="d-flex justify-content-between">
                                    <p class="mt-1 mb-2">
                                        <strong>Marthasteward </strong>
                                        <span>– </span><span>January 28, 2020</span>
                                    </p>
                                    <ul class="rating mb-0">
                                        <li>
                                            <i class="fas fa-star fa-sm text-primary"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-primary"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-primary"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-star fa-sm text-primary"></i>
                                        </li>
                                        <li>
                                            <i class="far fa-star fa-sm text-primary"></i>
                                        </li>
                                    </ul>
                                </div>
                                <p class="mb-0">Nice one, love it!</p>
                            </div>
                        </div>
                        <hr>
                        <h5 class="mt-4">Add a review</h5>
                        <p>Your email address will not be published.</p>
                        <div class="my-3">
                            <ul class="rating mb-0">
                                <li>
                                    <a href="#!">
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fas fa-star fa-sm text-primary"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="far fa-star fa-sm text-primary"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <!-- Your review -->
                            <div class="md-form md-outline">
                                <textarea id="form76" class="md-textarea form-control pr-6" rows="4"></textarea>
                                <label for="form76">Your review</label>
                            </div>
                            <!-- Name -->
                            <div class="md-form md-outline">
                                <input type="text" id="form75" class="form-control pr-6">
                                <label for="form75">Name</label>
                            </div>
                            <!-- Email -->
                            <div class="md-form md-outline">
                                <input type="email" id="form77" class="form-control pr-6">
                                <label for="form77">Email</label>
                            </div>
                            <div class="text-right pb-2">
                                <button type="button" class="btn btn-primary">Add a review</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Classic tabs -->

            <hr>

            <!--Section: Block Content-->
            <section class="text-center">

                <h4 class="text-center my-5"><strong>Related products</strong></h4>

                <!-- Grid row -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-3 mb-5">

                        <!-- Card -->
                        <div class="">

                            <div class="view zoom overlay z-depth-2 rounded">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                                     alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12.jpg">
                                        <div class="mask rgba-black-slight"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="pt-4">

                                <h5>Blue denim shirt</h5>
                                <p><span><strong>$17.99</strong></span></p>

                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-3 mb-5">

                        <!-- Card -->
                        <div class="">

                            <div class="view zoom overlay z-depth-2 rounded">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                                     alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13.jpg">
                                        <div class="mask rgba-black-slight"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="pt-4">

                                <h5>Red hoodie</h5>
                                <p><span><strong>$35.99</strong></span></p>

                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-3 mb-5">

                        <!-- Card -->
                        <div class="">

                            <div class="view zoom overlay z-depth-2 rounded">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                                     alt="Sample">
                                <h4 class="mb-0"><span class="badge badge-primary badge-pill badge-news">Sale</span>
                                </h4>
                                <a href="#!">
                                    <div class="mask">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg">
                                        <div class="mask rgba-black-slight"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="pt-4">

                                <h5>Grey sweater</h5>
                                <p><span class="text-danger mr-1"><strong>$21.99</strong></span><span
                                        class="text-grey"><strong><s>$36.99</s></strong></span></p>

                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-3 mb-5">

                        <!-- Card -->
                        <div class="">

                            <div class="view zoom overlay z-depth-2 rounded">
                                <img class="img-fluid w-100"
                                     src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                                     alt="Sample">
                                <a href="#!">
                                    <div class="mask">
                                        <img class="img-fluid w-100"
                                             src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14.jpg">
                                        <div class="mask rgba-black-slight"></div>
                                    </div>
                                </a>
                            </div>

                            <div class="pt-4">

                                <h5>Black denim jacket</h5>
                                <p><strong>$99.99</strong></p>

                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!--Section: Block Content-->

        </div>
    </main>
    <!--Main layout-->
@endsection

<!-- SCRIPTS -->
<!-- jQuery -->
<script type="text/javascript" src="../../js/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<!-- MDB eCommerce -->
<script type="text/javascript" src="../../js/mdb.ecommerce.min.js"></script>
<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    $(document).ready(function () {
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../mdb-addons/mdb-lightbox-ui.html");
        });
    });
</script>
</body>

</html>
