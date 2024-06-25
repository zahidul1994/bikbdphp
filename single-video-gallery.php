<?php
require "header.php"

?>

<style>
    .view-more-btn {
        padding: 7px 15px;
        border: 1px solid #3799a7;
        background: #D0312D;
        color: white;
        transition: all .3s linear;
    }

    .view-more-btn:hover {
        background-color: #3799a7;
        text-decoration: none;
        color: #fff;

    }

    .right-separator {
        border-right: 1px solid #ddd;
        padding-right: 10px;
    }

    .verticle-separator {
        border-left: 2px solid #ccc;
        height: 5px;
        padding: 0 4px;

    }

    .nav-tabs .nav-link.active {
        border-color: red;
        border-width: 0 0 2px;
        color: red !important;
    }

    .nav-tabs .nav-link:hover {
        background-color: transparent;
        color: red !important;
    }


    @media (max-width: 500px) {
        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* 16:9 aspect ratio */
        }
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .single-video-details {
            display: block;
            text-align: center;
        }
        .single-video-details .right-separator {
            display: inline-block;
            margin-right: 10px;
        }
        .single-video-details .btn {
            display: block;
            margin-top: 10px;
            text-align: center;
        }

        .mayoffer-left,
        .mayoffer-right {
            flex-wrap: wrap;
            justify-content: center;
        }
        .mayoffer-left img {
            width: 80px;
            height: auto;
            margin-right: 10px;
        }
        .article-bottom {
            justify-content: center;
        }
        .mayoffer-right .article,
        .mayoffer-right .get-me,.article a {
            text-align: center;
            display: block;
        }

        .mayoffer-right {
            flex-direction: column; /* Stack items vertically */
            align-items: flex-start; /* Align items to the start */
            padding-top: 10px; /* Adjust top padding */
            padding-bottom: 10px; /* Adjust bottom padding */
        }
        .article {
            margin-bottom: 10px; /* Add margin below the article */
        }
        .get-me {
            margin-top: 5px; /* Add margin above the button */
        }
        .view-more-btn {
            width: 100%; /* Make button full width */
            text-align: center; /* Center align text */
        }
        .article p{
            margin-bottom: 0.3rem;
        }
        
    }
</style>


<section id="single-product">


    <div class="container">


        <div class="product-contant mt-4 p-4" style="border: 1px solid #ddd">
            <div class="row">
                <div class="col-md-12">

                    <div class="single-video">
                        <h3 class="product-header mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero!</h3>
                        <!-- <h3 class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quas!</h3> -->
                        <div class="video-container">
                        <iframe width="1000" style="width: 100%;" height="415" src="https://www.youtube.com/embed/EYts5oh6ZA8?si=itR4IRITj5Bc19M5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture;
                            web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="single-video-bottom mt-2 mb-2">
                        <h4 style="color:#616161;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, atque?</>
                            <div class="row">
                                <div class="col-md-10 col-sm-6" style="font-size: 15px;">
                                    <div class="single-video-details d-flex  align-items-center justify-content-start mt-2">
                                        <div class="right-separator"><i class="fas fa-eye" style="font-size:14px;color:#616161"></i>&nbsp; 35,288 &nbsp;</div>
                                        <div class="right-separator">&nbsp; <i class="fas fa-thumbs-up" style="font-size:14px;color:#616161"></i> Likes: 143</div>&nbsp;&nbsp;
                                        <div class="btn btn-sm btn-danger"><i class="fab fa-youtube" style="color:#fff !important;"></i> &nbsp;<a href="" style="color:#fff;">Youtube</a></div>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-6 d-flex align-items-center ">
                                    <p style="font-size:14px;color:#616161">05 May 2023</p>
                                </div>
                            </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="product-contant mt-3 px-4 py-3" style="border: 1px solid #ddd">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mayoffer-left d-flex justify-content-around pt-3 pb-2 m-1 right-separator">
                                    <img style="width:100px; height: 80px;" src="image/pulsar3.jpg" alt="">
                                    <div class="article">
                                        <a class="border-left" href="" style="font-weight:700;color:#3368a2;">Royal Enfiled Himalayen &nbsp;<i class="fas">&#xf105;</i></a>
                                        <div class="article-bottom d-flex justify-content-start mt-3">
                                            <p class="right-separator" style="font-size:14px;color:#616161"><i class="fas fa-cube"></i>&nbsp;44 cc</p>&nbsp;
                                            <p class="right-separator" style="font-size:14px;color:#616161"><i class="fas fa-filter"></i>&nbsp;300 kmpl</p>&nbsp;
                                            <p class="right-separator" style="font-size:14px;color:#616161"><i class="fab fa-superpowers"></i>&nbsp;24.3 bhp</p>&nbsp;
                                            <p style="font-size:14px;color:#616161"><i class="fas fa-weight"></i>&nbsp;199 kg</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mayoffer-right d-flex align-items-center justify-content-around pt-3 pb-2">
                                    <div class="article">
                                        <p style="font-size:17px;color:#616161;font-weight:600">Lorem ipsum dolor sit.</p>
                                        <p><b>Tk: 550000</b></p>
                                    </div>
                                    <div class="get-me pb-2">
                                        <a class="view-more-btn btn-danger" href="" style="font-weight:700;">Get May Offer</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--        More related videos  Start-->

        <div class="product-contant mt-4 p-4" style="border: 1px solid #ddd">

            <div class="row">
                <div class="col-md-12">
                    <div class="heading-area d-flex justify-content-between">
                        <h3 class="product-header">
                            More Related Videos
                        </h3>
                        <button class="btn btn-sm btn-outline-info text-center">View Detail</>
                    </div>
                </div>
            </div>
            <div class="row p-3 mx-2 more-related-video">
                <div class="col-md-12">
                    <div class="card" style="">

                        <a href="https://www.youtube.com/embed/2f1YA0k-5zU" class="p-3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen">
                            <img src="image/pulsar.webp" class="card-img-top" alt="...">
                        </a>


                        <div class="card-body">
                            <div class="d-flex justifiy-content-between">
                                <p class="text-justify" style="font-size:20px; font-weight:700;">Yamaha R15M Tripper Navigation <span class="verticle-separator">
                                    </span>Commuter,Toureor or Off-Roader <span class="verticle-separator"></span>Bike Wala</p>
                            </div>

                            <div class="d-flex justify-content-start text-muted" style="font-size: 14px;">
                                <div class=""><i class="fas fa-calendar-alt" style="font-size:14px;"></i>&nbsp; 05 May 2023 &nbsp;</div>
                                <div><i class="fas fa-eye" style="font-size:14px;"></i>&nbsp; 35,288 &nbsp;</div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card" style="">

                        <a href="https://www.youtube.com/embed/2f1YA0k-5zU" class="p-3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen">
                            <img src="image/pulsar.webp" class="card-img-top" alt="...">
                        </a>


                        <div class="card-body">
                            <div class="d-flex justifiy-content-between">
                                <p class="text-justify" style="font-size:20px; font-weight:700;">Yamaha R15M Tripper Navigation <span class="verticle-separator">
                                    </span>Commuter,Toureor or Off-Roader <span class="verticle-separator"></span>Bike Wala</p>
                            </div>

                            <div class="d-flex justify-content-start text-muted" style="font-size: 14px;">
                                <div class=""><i class="fas fa-calendar-alt" style="font-size:14px;"></i>&nbsp; 05 May 2023 &nbsp;</div>
                                <div><i class="fas fa-eye" style="font-size:14px;"></i>&nbsp; 35,288 &nbsp;</div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card" style="">

                        <a href="https://www.youtube.com/embed/2f1YA0k-5zU" class="p-3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen">
                            <img src="image/pulsar.webp" class="card-img-top" alt="...">
                        </a>


                        <div class="card-body">
                            <div class="d-flex justifiy-content-between">
                                <p class="text-justify" style="font-size:20px; font-weight:700;">Yamaha R15M Tripper Navigation <span class="verticle-separator">
                                    </span>Commuter,Toureor or Off-Roader <span class="verticle-separator"></span>Bike Wala</p>
                            </div>

                            <div class="d-flex justify-content-start text-muted" style="font-size: 14px;">
                                <div class=""><i class="fas fa-calendar-alt" style="font-size:14px;"></i>&nbsp; 05 May 2023 &nbsp;</div>
                                <div><i class="fas fa-eye" style="font-size:14px;"></i>&nbsp; 35,288 &nbsp;</div>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card" style="">

                        <a href="https://www.youtube.com/embed/2f1YA0k-5zU" class="p-3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen">
                            <img src="image/pulsar.webp" class="card-img-top" alt="...">
                        </a>


                        <div class="card-body">
                            <div class="d-flex justifiy-content-between">
                                <p class="text-justify" style="font-size:20px; font-weight:700;">Yamaha R15M Tripper Navigation <span class="verticle-separator">
                                    </span>Commuter,Toureor or Off-Roader <span class="verticle-separator"></span>Bike Wala</p>
                            </div>

                            <div class="d-flex justify-content-start text-muted" style="font-size: 14px;">
                                <div class=""><i class="fas fa-calendar-alt" style="font-size:14px;"></i>&nbsp; 05 May 2023 &nbsp;</div>
                                <div><i class="fas fa-eye" style="font-size:14px;"></i>&nbsp; 35,288 &nbsp;</div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>
        <!--        More related videos  end-->


        <div class="product-contant mt-3 px-4 py-3" style="border: 1px solid #ddd">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="mb-4 product-header">
                            Most Popular Bikes In Bd
                        </h3>
                        <div class="card">
                            <div class="card-header bg-white">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item px-2">
                                        <a class="nav-link active" id="commuter-tab" data-toggle="tab" href="#commuter" role="tab" aria-controls="commuter" aria-selected="true">Commuter</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link" id="sports-tab" data-toggle="tab" href="#sports" role="tab" aria-controls="sports" aria-selected="false">Sports</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link" id="scooters-tab" data-toggle="tab" href="#scooters" role="tab" aria-controls="scooters" aria-selected="false">Scooters</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link" id="cruiser-tab" data-toggle="tab" href="#cruiser" role="tab" aria-controls="cruiser" aria-selected="false">Cruiser</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link" id="electric-tab" data-toggle="tab" href="#electric" role="tab" aria-controls="electric" aria-selected="false">Electric</a>
                                    </li>
                                    <li class="nav-item px-2">
                                        <a class="nav-link" id="mileage-tab" data-toggle="tab" href="#mileage" role="tab" aria-controls="mileage" aria-selected="false">Mileage</a>
                                    </li>

                                </ul>

                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="commuter" role="tabpanel" aria-labelledby="commuter-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="scooters" role="tabpanel" aria-labelledby="scooters-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="cruiser" role="tabpanel" aria-labelledby="cruiser-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="electric" role="tabpanel" aria-labelledby="electric-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="mileage" role="tabpanel" aria-labelledby="mileage-tab">
                                        <div class="row mt-3">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="tab-1">
                                                            <img src="image/pulsar.webp" class="img-fluid" alt="images">
                                                            <p class="card-text mt-1 mb-0">New Yeamaha</p>
                                                            <p class="card-text mt-0">Price: <b>400000</b></p>
                                                            <div class="btn btn-outline-danger btn-block text-center">View Detail</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-white">
                                <a class="text-info font-weight-bold" href=""> View All Commuteer Bike</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>










<?php
require "footer.php"

?>