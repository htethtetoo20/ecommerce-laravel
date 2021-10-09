<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
{{View::make("header")}}
@yield("content")
{{View::make("footer")}}
</body>
<style>
     .custom-login{
        height: 500px;
        padding-top: 120px;
    }
     .slider-img{
         height: 400px;
         width:300px;
     }
     .custom-product {
         height: 600px;
     }
     .slider-text{
         background-color: #35443585;
     }
     .carousel-control-prev-icon{
         background-image: url("https://pic.onlinewebfonts.com/svg/img_320104.png");
     }
     .carousel-control-next-icon {

         background-image: url("https://pic.onlinewebfonts.com/svg/img_98761.png");
     }
     .trending-img{
         height: 100px;
     }
     .trending-item{
         float: left;

     }
     .detail-img{
         height: 400px;

     }
     .search-box{
         width: 300px;
     }
     .search-items{
         height: 300px;
     }
     .cart-items{
         height: 200px;
     }

     @media only screen and (max-width: 600px) {
         .cart-items{
             height: 90px;
         }
     }
     .search-img{
         height: 500px;
     }
     @media only screen and (max-width:600px) {
         .font-size{
             font-size: large;
         }
     }

     .colgap{
         column-gap: 20px;
     }
     @media only screen and (max-width:600px) {
         .colgap{
             column-gap: 0px;
         }
     }
     .border{
         border: 1px solid;
     }



</style>
</html>
