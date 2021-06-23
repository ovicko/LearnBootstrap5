<?php
?>
<?php

$showcase = "https://raw.githubusercontent.com/bradtraversy/bootstrap-bootcamp-website/7656406f5e7b5cb1ac5879df8fd93f1182e215bf/img/showcase.svg";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <title>Shop from Video</title>
    <link href="swiper/custom.css" rel="stylesheet">

</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        .demo {
            margin: 0 auto;
            max-width: 960px;
            font-family: sans-serif;
        }

        .demo-inner {
            position: relative;
            padding: 50px;
        }

        .demo-body {
            position: relative;
            border: 1px solid #009688;
            border-top: none;
            padding: 30px;
        }

        .demo-body:first-child {
            border-top: 1px solid #009688;
        }

        .demo-header {
            position: absolute;
            top: -10px;
            left: 30px;
            background: #fff;
            padding: 0 3px;
            display: inline-block;
            font-weight: bold;
            color: #009688;
            text-transform: uppercase;
        }

        .demo-row {
            display: flex;
            margin-left: -20px;
            margin-right: -20px;
            margin-bottom: 40px;
            justify-content: space-between;
        }

        .demo-col {
            padding-left: 20px;
            padding-right: 20px;
            flex-grow: 1;
            max-width: 40%;
        }

        :root {
            --color-primary: #00A5B4;
            --color-primary-darker: #0f7d87;
            --color-secondary: #C9DC08;
            --color-secondary-darker: #acbc04;
            --color-primary-text: #3f465e;
            --color-border: #e1e3ea;
            --color-border-input: #e5e5e5;
            --color-red: #e41919;
            --color-black: #000;
            --color-orange: #f47631;
            --color-yellow: #ffce02;
            --color-cyan: #27c5c3;
            --color-blue: #43a5de;
            --color-green: #65B044;
            --color-facebook: #3F5C99;
            --color-twitter: #1DA0F2;
            --color-google: #DC4A38;
            --color-instagram: #A4785B;
            /** GRAY */
            --color-gray-100: #F7FAFC;
            --color-gray-200: #EDF2F7;
            --color-gray-300: #E2E8F0;
            --color-gray-400: #CBD5E0;
            --color-gray-500: #A0AEC0;
            --color-gray-600: #718096;
            --color-gray-700: #4A5568;
            --color-gray-800: #2D3748;
            --color-gray-900: #1A202C;
        }

        .demo {
            margin: 0 auto;
            max-width: 960px;
            font-family: sans-serif;
        }

        .demo-inner {
            position: relative;
            padding: 50px;
        }

        .demo-body {
            position: relative;
            border: 1px solid #009688;
            border-top: none;
            padding: 30px;
        }

        .demo-body:first-child {
            border-top: 1px solid #009688;
        }

        .demo-header {
            position: absolute;
            top: -10px;
            left: 30px;
            background: #fff;
            padding: 0 3px;
            display: inline-block;
        }

        .demo-row {
            display: flex;
            margin-left: -20px;
            margin-right: -20px;
            margin-bottom: 40px;
            justify-content: space-between;
        }

        .demo-col {
            padding-left: 20px;
            padding-right: 20px;
            flex-grow: 1;
            max-width: 40%;
        }

        /*
1. BREAKPOINTS: https://codepen.io/luckyluu/pen/ZEzxLxR
2. COLORS: https://codepen.io/luckyluu/pen/bGbLzXe
*/
        html {
            font-size: 1rem;
        }

        body {
            color: var(--color-primary-text);
            text-rendering: optimizelegibility;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            font-family: Arial, sans-serif;
        }

        img {
            max-width: 100%;
        }

        a {
            color: var(--color-link);
            text-decoration: none;
            outline: none;
            cursor: pointer;
        }

        a:hover,
        a:focus {
            color: var(--color-link-hover);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        h1,
        .heading1 {
            font-size: 3rem;
            line-height: 1.1;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {

            h1,
            .heading1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 600px) {

            h1,
            .heading1 {
                font-size: 2rem;
            }
        }

        h2,
        .heading2 {
            font-size: 2.5rem;
            line-height: 1.1;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {

            h2,
            .heading2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 600px) {

            h2,
            .heading2 {
                font-size: 1.8rem;
            }
        }

        h3,
        .heading3 {
            font-size: 2.2rem;
            line-height: 1.1;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {

            h3,
            .heading3 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 600px) {

            h3,
            .heading3 {
                font-size: 1.6rem;
            }
        }

        h4,
        .heading4 {
            font-size: 1.8rem;
            line-height: 1.2;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {

            h4,
            .heading4 {
                font-size: 1.6rem;
            }
        }

        @media (max-width: 600px) {

            h4,
            .heading4 {
                font-size: 1.4rem;
            }
        }

        h5,
        .heading5 {
            font-size: 1.4rem;
            line-height: 1.2;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        @media (max-width: 768px) {

            h5,
            .heading5 {
                font-size: 1.1rem;
            }
        }

        h6,
        .heading6 {
            font-size: 1rem;
            text-transform: uppercase;
            line-height: 1.2;
            margin-bottom: 1rem;
            color: rgba(0, 0, 0, 0.7);
            font-weight: bold;
        }

        .font-size-xs {
            font-size: 0.9rem;
        }

        .font-size-s {
            font-size: 1rem;
        }

        .font-size-m {
            font-size: 1.2rem;
        }

        .font-size-l {
            font-size: 1.6rem;
        }

        .font-size-xl {
            font-size: 2.2rem;
        }

        .font-size-xxl {
            font-size: 3rem;
        }

        @media (min-width: 600px) {
            .xs_font-size-xs {
                font-size: 0.9rem;
            }

            .xs_font-size-s {
                font-size: 1rem;
            }

            .xs_font-size-m {
                font-size: 1.2rem;
            }

            .xs_font-size-l {
                font-size: 1.6rem;
            }

            .xs_font-size-xl {
                font-size: 2.2rem;
            }

            .xs_font-size-xxl {
                font-size: 3rem;
            }
        }

        @media (min-width: 768px) {
            .s_font-size-xs {
                font-size: 0.9rem;
            }

            .s_font-size-s {
                font-size: 1rem;
            }

            .s_font-size-m {
                font-size: 1.2rem;
            }

            .s_font-size-l {
                font-size: 1.6rem;
            }

            .s_font-size-xl {
                font-size: 2.2rem;
            }

            .s_font-size-xxl {
                font-size: 3rem;
            }
        }

        @media (min-width: 1024px) {
            .m_font-size-xs {
                font-size: 0.9rem;
            }

            .m_font-size-s {
                font-size: 1rem;
            }

            .m_font-size-m {
                font-size: 1.2rem;
            }

            .m_font-size-l {
                font-size: 1.6rem;
            }

            .m_font-size-xl {
                font-size: 2.2rem;
            }

            .m_font-size-xxl {
                font-size: 3rem;
            }
        }

        @media (min-width: 1280px) {
            .l_font-size-xs {
                font-size: 0.9rem;
            }

            .l_font-size-s {
                font-size: 1rem;
            }

            .l_font-size-m {
                font-size: 1.2rem;
            }

            .l_font-size-l {
                font-size: 1.6rem;
            }

            .l_font-size-xl {
                font-size: 2.2rem;
            }

            .l_font-size-xxl {
                font-size: 3rem;
            }
        }

        @media (min-width: 1366px) {
            .xl_font-size-xs {
                font-size: 0.9rem;
            }

            .xl_font-size-s {
                font-size: 1rem;
            }

            .xl_font-size-m {
                font-size: 1.2rem;
            }

            .xl_font-size-l {
                font-size: 1.6rem;
            }

            .xl_font-size-xl {
                font-size: 2.2rem;
            }

            .xl_font-size-xxl {
                font-size: 3rem;
            }
        }

        @media (min-width: 1440px) {
            .xxl_font-size-xs {
                font-size: 0.9rem;
            }

            .xxl_font-size-s {
                font-size: 1rem;
            }

            .xxl_font-size-m {
                font-size: 1.2rem;
            }

            .xxl_font-size-l {
                font-size: 1.6rem;
            }

            .xxl_font-size-xl {
                font-size: 2.2rem;
            }

            .xxl_font-size-xxl {
                font-size: 3rem;
            }
        }

        /*-----------------------------
# IMPORTS

1. COLORS: https://codepen.io/luckyluu/pen/bGbLzXe
2. BREAKPOINTS: https://codepen.io/luckyluu/pen/ZEzxLxR
3. TYPO: https://codepen.io/luckyluu/pen/eYOMgXQ
----------------------------- */
        body {
            background: #f4f4f4;
        }

        .mystyle-products {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
        }

        @media (max-width: 600px) {
            .mystyle-products {
                display: block;
            }
        }

        .mystyle-products.slider-products .product {
            width: auto;
            margin-bottom: 0;
        }

        .mystyle-products .product {
            width: 25%;
            margin-bottom: 20px;
            position: relative;
            padding: 20px;
            background: #fff;
        }

        @media (max-width: 768px) {
            .mystyle-products .product {
                width: 50%;
            }
        }

        @media (max-width: 600px) {
            .mystyle-products .product {
                width: auto;
            }
        }

        .mystyle-products .product:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            z-index: 7;
        }

        .mystyle-products .product:hover .btn-circle {
            transform: translateY(0);
            visibility: visible;
            opacity: 1;
        }

        .mystyle-products .product h3 {
            font-size: 12px;
            line-height: 20px;
            margin-top: 10px;
            height: 39px;
            overflow: hidden;
        }

        @media (max-width: 600px) {
            .mystyle-products .product h3 {
                height: auto;
            }
        }

        .mystyle-products .product>a {
            position: relative;
            display: block;
            color: #333;
        }

        .mystyle-products .product>a:hover {
            text-decoration: none;
        }

        .mystyle-products .product .add_to_cart_button {
            display: none;
        }

        .mystyle-products .product .attachment-shop_catalog {
            display: block;
            margin: 0 auto;
        }

        .mystyle-products .product .btn-circle {
            border-radius: 50%;
            width: 30px;
            height: 30px;
            line-height: 30px;
            display: block;
            padding: 0;
            position: absolute;
            top: 20%;
            left: 0;
            right: 0;
            margin-left: auto;
            margin-right: auto;
            z-index: 2;
            color: #fff;
            -webkit-transform: translateY(-20px);
            -moz-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
            -o-transform: translateY(-20px);
            transform: translateY(-20px);
            opacity: 0;
            visibility: hidden;
            /* Effect */
            -webkit-transition: color 0.5s 0.001s ease-out, background 0.3s 0.001s ease-out, visibility 0.5s 0.25s ease-out, opacity 0.5s 0.25s ease-out, -webkit-transform 0.5s 0.25s ease-out;
            -moz-transition: color 0.5s 0.001s ease-out, background 0.3s 0.001s ease-out, visibility 0.5s 0.25s ease-out, opacity 0.5s 0.25s ease-out, -moz-transform 0.5s 0.25s ease-out;
            -ms-transition: color 0.5s 0.001s ease-out, background 0.3s 0.001s ease-out, visibility 0.5s 0.25s ease-out, opacity 0.5s 0.25s ease-out, -ms-transform 0.5s 0.25s ease-out;
            -o-transition: color 0.5s 0.001s ease-out, background 0.3s 0.001s ease-out, visibility 0.5s 0.25s ease-out, opacity 0.5s 0.25s ease-out, -o-transform 0.5s 0.25s ease-out;
            transition: color 0.5s 0.001s ease-out, background 0.3s 0.001s ease-out, visibility 0.5s 0.25s ease-out, opacity 0.5s 0.25s ease-out, transform 0.5s 0.25s ease-out;
        }

        .mystyle-products .product .price {
            font-size: 14px;
        }

        .mystyle-products .product .price ins {
            text-decoration: none;
            font-weight: 700;
            white-space: nowrap;
        }

        .mystyle-products .product .price del {
            color: #666;
            font-size: 11px;
            padding-right: 7px;
            white-space: nowrap;
        }

        .mystyle-products .product .price .sale-tag {
            color: red;
            font-size: 12px;
            padding-left: 7px;
            font-weight: 700;
        }

        .mystyle-products .onsale {
            z-index: 6;
            position: absolute;
            top: 15px;
            left: -20px;
            padding: 2px 10px;
            background: var(--red, red);
            color: #fff;
            box-shadow: -1px 2px 3px rgba(0, 0, 0, 0.3);
            border-radius: 0 5px 5px 0;
            height: 25px;
            line-height: 25px;
            font-size: 0.8rem;
            font-weight: normal;
            padding-top: 0;
            padding-bottom: 0;
            min-height: 0;
        }

        .mystyle-products .onsale:before,
        .mystyle-products .onsale:after {
            content: "";
            position: absolute;
        }

        .mystyle-products .onsale:before {
            width: 7px;
            height: 33px;
            top: 0;
            left: -6.5px;
            padding: 0 0 7px;
            background: inherit;
            border-radius: 5px 0 0 5px;
        }

        .mystyle-products .onsale:after {
            width: 5px;
            height: 5px;
            bottom: -5px;
            left: -4.5px;
            border-radius: 5px 0 0 5px;
            background: #800;
        }
    </style>

    <div class="container">

        <div class="row">


            <div class="col-sm-6">
                <div class="row">
                    <iframe width="420" height="320" class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                </div>
                <ul class="mystyle-products">
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">Sale!</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/v/e/vet%20vang%20(1).u2470.d20160606.t122127.jpg" />
                            <h3>Chuột Không Dây Logitech M238 Party</h3>
                            <span class="price">
                                <del> <span class="amount"> $399.00</span> </del>
                                <ins> <span class="amount"> $269.00</span> </ins>
                                <span class="sale-tag sale-tag-square">-33%</span>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">Sale!</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/a/n/anker%202%20cong%20power%2024w_white%20(1).u2470.d20160609.t094609.jpg" />
                            <h3>Adapter Sạc Anker PowerPort 2 Cổng USB -...</h3>
                            <span class="price">
                                <ins> <span class="amount"> $439.00</span> </ins>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">24h</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/e/x/ex200-1.u425.d20170309.t162916.175240.jpg" />
                            <h3>
                                Totolink EX200 - Bộ Mở Rộng Sóng Wifi Chuẩn N Tốc Độ 300Mbps
                            </h3>
                            <span class="price">
                                <del> <span class="amount"> $299.00</span> </del>
                                <ins> <span class="amount"> $233.00</span> </ins>
                                <span class="sale-tag sale-tag-square">-22%</span>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">Sale!</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/4/5/450bt_black_angle_03-1606x1606px.u2769.d20170512.t164639.178330.jpg" />
                            <h3>Tai Nghe JBL T450BT</h3>
                            <span class="price">
                                <del> <span class="amount"> $1.600.00</span> </del>
                                <ins> <span class="amount"> $1.466.00</span> </ins>
                                <span class="sale-tag sale-tag-square">-7%</span>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">Sale!</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/d/s/dsc_0212.u425.d20160408.t134929.jpg" />
                            <h3>Phụ Kiện Số/Loa nghe nhạc/Loa Bluetooth</h3>
                            <span class="price">
                                <ins> <span class="amount"> $750.00</span> </ins>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">Sale!</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/d/i/divoom-airbeat-10-black-4_1.jpg" />
                            <h3>Loa Di Động Divoom Airbeat 10 3.5W</h3>
                            <span class="price">
                                <del> <span class="amount"> $639.00</span> </del>
                                <ins> <span class="amount"> $760.00</span> </ins>
                                <span class="sale-tag sale-tag-square">-16%</span>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">Sale!</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/1/4/1454517182000_img_582809_1.jpg" />
                            <h3>Máy Ảnh Sony Alpha A6300 + Kit 16-50mm</h3>
                            <span class="price">
                                <del> <span class="amount"> $21.990.00</span> </del>
                                <ins> <span class="amount"> $27.490.00</span> </ins>
                                <span class="sale-tag sale-tag-square">-20%</span>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                    <li class="product">
                        <a href="14-single-product.html">
                            <span class="onsale">Sale!</span>
                            <img alt="" class="attachment-shop_catalog " src="https://vcdn.tikicdn.com/cache/200x200/media/catalog/product/1/4/1419_02_mypassportformac_hero_png_imgw_1000_1000.u689.d20161214.t120338.15169.jpg" />
                            <h3>Ổ Cứng Di Động WD My Passport 1TB (ver 2016)</h3>
                            <span class="price">
                                <del> <span class="amount"> $1.699.00</span> </del>
                                <ins> <span class="amount"> $1.890.00</span> </ins>
                                <span class="sale-tag sale-tag-square">-11%</span>
                            </span>
                        </a>
                        <a class="button add_to_cart_button product_type_simple" rel="nofollow" href="#">
                            Mua ngay
                        </a>
                        <a href="#" class="btn btn-dark btn-circle btn-review" data-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion ion-ios-move"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <script>
            // var mySwiper = new Swiper('.swiper-container', {
            //     spaceBetween: 10,
            //     slidesPerView: 3,
            //     initialSlide: 1,
            //     navigation: {
            //         nextEl: '.swiper-button-next',
            //         prevEl: '.swiper-button-prev'
            //     },
            //     pagination: {
            //         el: '.swiper-pagination',
            //         type: 'bullets',
            //         clickable: true
            //     }
            // });
        </script>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>