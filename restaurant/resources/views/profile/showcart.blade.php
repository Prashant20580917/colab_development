<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>One Byte Foods - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                        <!-- <img src="assets/images/onebyte2-logo.png" alt="Klassy Cafe HTML Template" style="width: 240px; height: 200px; position: relative; top: -70px;"> -->

                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 

                            <li class="scroll-to-section" style="background-color:red;">
                                @auth
                                <a href="{{url('/showcart',Auth::user()->id)}}">
                            Cart{{$count}}
                        </a>
                            @endauth

                            @guest
                            Cart[0]
                            @endguest
                        </a></li> 
                        

                            <li>
    @if (Route::has('login'))
    <div class="-mx-3 flex flex-1 justify-end">
        @auth
        <li>
        <x-app-layout>

</x-app-layout>

        </li>
        @else
           <li style="margin-top: -10px;"> <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Log in
            </a></li>

            @if (Route::has('register'))
               <li style="margin-top: -10px;"> <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    Register
                </a></li>
            @endif
        @endauth
    </div>
    @endif
</li>


                            
                        </ul>        
                        <a class='menu-trigger'>
                           
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    <div id="top">
    <table align="center" bgcolor="yellow">
        <tr>
            <th style="padding:30px;">Food Name</th>
            <th style="padding:30px;">Price</th>
            <th style="padding:30px;">Quantity</th>
            <th style="padding:30px;">Image</th>
            <th style="padding:30px;">Action</th>
            

        </tr>

       
    </table>

    <div align="center" style="padding:10px;">
    <button class="btn btn-primary" type="button" id="order">Order Now</button>

    </div>

    <div id="appear" align="center" style="padding:10px; display:none;">
        <div style="padding:10px;">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>

        <div style="padding:10px;">
            <label>Phone</label>
            <input type="number" name="phone" placeholder="Phone Number">
        </div>

        <div style="padding:10px;">
            <label>Address</label>
            <input type="text" name="address" placeholder="Address">
        </div>

        <div style="padding:10px;">
            <input class="btn btn-success" type="submit" value="Order Confirm">

            <button id="close" type="button" class="btn btn-danger">Close</button>
        </div>
        
    </div>

    </form>

    </div>

    <script type="text/javascript">
        $("#order").click(

            function()
            {
                $("#appear").show();
            }
        );

        $("#close").click(

function()
{
    $("#appear").hide();
}
);

    </script>

    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>