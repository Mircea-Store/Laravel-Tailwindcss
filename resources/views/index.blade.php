<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('web-icons/web-icons.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.min.css')}}" rel="stylesheet">
    <style>
        #menu-toggle:checked+#menu {
            display: block;
        }

        @font-face {
            font-family: 'OpenExtraBold';
            src: url("../fonts/OpenSans-ExtraBold.ttf");
        }

        @font-face {
            font-family: 'OpenBold';
            src: url("../fonts/OpenSans-Bold.ttf");
        }

        @font-face {
            font-family: 'OpenRegular';
            src: url("../fonts/OpenSans-Regular.ttf");
        }

        @font-face {
            font-family: 'OpenLight';
            src: url("../fonts/OpenSans-Light.ttf");
        }

        @font-face {
            font-family: 'OpenSemiBold';
            src: url("../fonts/OpenSans-SemiBold.ttf");
        }

        .tit_black {
            font-family: TitBlack;
        }

        .sans_bold {
            font-family: OpenBold;
        }

        .sans_extrabold {
            font-family: OpenExtraBold;
        }

        .sans_regular {
            font-family: OpenRegular;
        }

        .sans_light {
            font-family: OpenLight;
        }

        .sans_semibold {
            font-family: OpenSemiBold;
        }

        /* Animation */

        @keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        @-webkit-keyframes fadeInUp {
            from {
                transform: translate3d(0, 40px, 0)
            }

            to {
                transform: translate3d(0, 0, 0);
                opacity: 1
            }
        }

        .animated {
            animation-duration: 2s;
            animation-fill-mode: both;
            -webkit-animation-duration: 2s;
            -webkit-animation-fill-mode: both
        }

        .animatedFadeInUp {
            opacity: 0
        }

        .fadeInUp {
            opacity: 0;
            animation-name: fadeInUp;
            -webkit-animation-name: fadeInUp;
        }

        .custom-maxwidth {
            max-width: 1200px;
        }

        .bar1,
        .bar2,
        .bar3 {
            width: 35px;
            height: 5px;
            margin: 6px 0;
            transition: 0.4s;
        }

        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }

        .change .bar2 {
            opacity: 0;
        }

        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }

        /* @import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"; */

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class=" antialiased  leading-none relative " style="background-image: none;" onresize="auto_padding()">
    <!-- back to top floating button -->
    <a href="javascript:void(0)" class="hidden fixed bg-gray-700 hover:bg-blue-400 text-center bottom-10 right-12 w-10 h-10 text-white rounded-sm text-lg" onclick="topFunction()" id="floatBT" title="Go to top">
        <!-- <img src="{{asset('images/bottom-top button@2x.png')}}" class="align-middle my-auto" /> -->
        <div class="relative">
            <i class=" absolute top-2 icon wb-chevron-up"></i>
        </div>
    </a>
    <div class="z-50 lg:bg-custom_header bg-sm_header mx-auto flex justify-between items-center w-full absolute top-0  ">

        <header class="custom-maxwidth w-full  mx-auto bg-none flex flex-wrap items-center justify-between py-2 lg:px-14 md:px-7 sm:px-5 px-5">
            <div class=" flex justify-start items-center h-16 py-12">
                <a href="#">
                    <img class="h-20 w-40" src="{{asset('images/Blockage-Busters-Logo.png')}}">
                </a>
            </div>
            <label for="menu-toggle" class="pointer-cursor lg:hidden block">
                <div class=" child_toggle hover:text-white" onclick="myFunction(this)">
                    <div class="bar1 bg-custom_hover"></div>
                    <div class="bar2 bg-custom_hover"></div>
                    <div class="bar3 bg-custom_hover"></div>
                </div>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />
            <div class="custom-toggle hidden lg:flex lg:items-center lg:w-auto text-center w-full lg:py-0 py-20 " id="menu">
                <nav>
                    <ul class="lg:flex items-center justify-between text-xl  text-white pt-4 md:pt-0 lg:pt-0 sans_regular leading-10">
                        <li><a class="lg:px-4 md:px-4 py-1 px-0 block  text-white border-b-2 border-transparent hover:text-custom_hover capitalize" href="#about-us">about us</a></li>
                        <li><a class=" lg:px-4 md:px-4 py-1 px-0 block  text-white border-b-2 border-transparent hover:text-custom_hover capitalize" href="#services">services</a></li>
                        <li><a class=" lg:px-4 md:px-4 py-1 px-0 block border-b-2  text-white border-transparent hover:text-custom_hover capitalize" href="#locations">locations</a></li>
                        <li><a class=" lg:px-4 md:px-4 py-1 px-0 block border-b-2  text-white border-transparent hover:text-custom_hover lg:mb-0 md:mb-0 mb-2 capitalize" href="#get-a-quote">get a quote</a></li>
                        <li><a class=" lg:border-solid lg:border-2 lg:border-white rounded-md  text-white  px-3 block hover:text-teal-400 capitalize" href="tel:07476 019 943">call:07476 019 943</a></li>
                    </ul>
                </nav>

            </div>
        </header>
    </div>
    <section class="bg-none" id="custom-image">
        <div class="relative lg:mt-0 pt-28 lg:pt-0">
            <img class="object-cover " src="{{asset('images/Background-2.jpg')}}" style="width: 100%; max-height:800px">
            <div class="absolute top-0 inset-0 custom-maxwidth w-full mx-auto ">
                <img class="pt-24 lg:pt-0 animated animatedFadeInUp fadeInUp object-cover" src="{{asset('images/Blockage-Busters-Van.png')}}">
            </div>
        </div>

    </section>
    <section class="bg-none" id="about-us">
        <div class="bg-black w-full">
            <div class="mx-auto custom-maxwidth lg:px-14 md:px-7 px-5 text-center text-white py-20">
                <div class="fusion-title title fusion-title-2 fusion-sep-none fusion-title-center fusion-title-highlight fusion-loop-off fusion-highlight-circle fusion-title-size-one fusion-border-below-title" style="margin-top:10px;margin-bottom:15px;" data-highlight="circle">
                    <h1 class=" fusion-responsive-typography-calculated text-6xl" style="margin: 0px; --fontSize:54; line-height: 1.16;" data-fontsize="54" data-lineheight="62.64px">
                        <span class="fusion-highlighted-text-prefix">The Drainage</span>
                        <span class="fusion-highlighted-text-wrapper">
                            <span class="fusion-highlighted-text">Experts</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                                <path d="M344.6,40.1c0,0-293-3.4-330.7,40.3c-5.2,6-3.5,15.3,3.3,19.4c65.8,39,315.8,42.3,451.2-3 c6.3-2.1,12-6.1,16-11.4C527.9,27,242,16.1,242,16.1"></path>
                            </svg>
                        </span>
                        <span class="fusion-highlighted-text-postfix"></span>
                    </h1>
                </div>
                <p class="text-xl py-4 leading-10 text-gray-300 font-medium sans_regular">For over 10 years, <b>Blockage Busters</b> have been saving the public from the terrors of blocked drains and other nightmarish plumbing
                    problems. Our friendly call center staff are on hand 24 hours a day to help assist you with any drainage or blockage problems as we; as a
                    numbers of other essential services including CCTV surveys and utility connections. Our skilled workers offer a fast and friendly service that gets
                    quick results at extremely competitive prices. So if you're having a drainage nightmare of your own, get in touch and call Blockage to the rescue!
                </p>
                <p class="text-lg sans_light">See our 7 reviews on <i class="icon wb-star text-green-500"></i> Trustpilot</p>
            </div>
        </div>
    </section>
    <section class="bg-white" id="services">
        <div class=" mx-auto custom-maxwidth lg:px-14 md:px-7 px-5 text-center py-20">
            <p class="mx-1 text-6xl py-5 sans_semibold default-color border-default_color border-b-2 text-default_color">What we do</p>
            <div class="grid lg:grid-cols-3 grid-cols-1 md:grid-cols-2 sm:gird-cols-2 py-10">
                <div class="bg-cat_color mx-1 mb-10">
                    <div class="px-5 text-center  py-8">
                        <img class="mx-auto" src="{{asset('images/Jet-Gun.png')}}">
                        <p class="text-teal-500 sans_semibold py-2 text-4xl">Blocked Drains</p>
                        <p class="text-xl sans_regular pt-2 leading-7 text-gray-500">We're experts in unblocking toilets, sinks, bathss, showers and any other type of drain quickly and cleanly with <b>prices starting at just £60</b></p>
                    </div>
                </div>
                <div class="bg-cat_color mx-1 mb-10">
                    <div class="px-5 text-center  py-8">
                        <img class="mx-auto" src="{{asset('images/CCTV-Logo.png')}}">
                        <p class="text-teal-500 sans_semibold py-2 text-4xl">CCTV Surveys</p>
                        <p class="text-xl sans_regular pt-2 leading-7 text-gray-500">If the problem isn't obvious, a CCTV survey is the perfection solution to pin pointing exact problems within pipework with <b>prices starting at £250</b></p>
                    </div>
                </div>
                <div class="bg-cat_color mx-1 mb-10">
                    <div class="px-5 text-center  py-8">
                        <img class="mx-auto" src="{{asset('images/Washing-Machine-1.png')}}">
                        <p class="text-teal-500 sans_semibold py-2 text-4xl">Installation</p>
                        <p class="text-xl sans_regular pt-2 leading-7 text-gray-500">We don't just unblock. We also install!
                            From washing machines and dishwashers to new kitchen taps, we can get it installed in no time at all!
                        </p>
                    </div>
                </div>
                <div class="bg-cat_color mx-1 mb-10">
                    <div class="px-5 text-center  py-8">
                        <img class="mx-auto" src="{{asset('images/Descaling.png')}}">
                        <p class="text-teal-500 sans_semibold py-2 text-4xl">Pipe Descaling</p>
                        <p class="text-xl sans_regular pt-2 leading-7 text-gray-500">
                            The high mineral content in London water means that limescale can often accumulate and block your pipes. We offer a full descaling service that will restore your system to good health
                        </p>
                    </div>
                </div>
                <div class="bg-cat_color mx-1 mb-10">
                    <div class="px-5 text-center  py-8">
                        <img class="mx-auto" src="{{asset('images/Broek-Pipe.png')}}">
                        <p class="text-teal-500 sans_semibold py-2 text-4xl">Patch Lining</p>
                        <p class="text-xl sans_regular pt-2 leading-7 text-gray-500">
                            Our professional Patch Lining & Dig Up team use the latest technology and industry techniques to patch repair broken and cracked pipework without the need to remove the pipe
                        </p>
                    </div>
                </div>
                <div class="bg-cat_color mx-1 mb-10">
                    <div class="px-5 text-center  py-8">
                        <img class="mx-auto" src="{{asset('images/Clock.png')}}">
                        <p class="text-teal-500 sans_semibold py-2 text-4xl">24/7 Response</p>
                        <p class="text-xl sans_regular pt-2 leading-7 text-gray-500">
                            Our rapid response team are on call 24hours a day to assist with any drainage emergencies you may be experiencing.
                            Use our live chat feature or call us for a quote
                        </p>
                    </div>
                </div>
            </div>
            <div class="py-10 text-center bg-teal-300 px-5">
                <img class="mx-auto" src="{{asset('images/disinfection.png')}}">
                <p class="text-teal-500 sans_semibold py-2 text-4xl">Deep Cleaning & Disinfecting</p>
                <p class="text-xl sans_regular pt-2 leading-7 text-white">
                    Blockage Busters also offer a full disinfect and deep clean service to ensure the best levels of cleaningess in either residential or commercial properties. Our disinefection service is perfect for likking any lurking virusers and other potential health hazards.
                </p>
            </div>
        </div>
    </section>
    <section class="bg-black" id="locations">
        <div class=" mx-auto custom-maxwidth lg:px-14 md:px-7 px-5 py-20">
            <div class="grid lg:grid-cols-2 md:grid-cols-2 grid-cols-1gap-2">
                <div class="text-left">
                    <p class="text-white sans_regualr text-6xl border-b-2 border-gray-400 py-5">Locations we serve</p>
                    <p class="text-xl text-regular sans_regular text-gray-300 pt-8 pb-12 leading-8">
                        We serve a wide are in cluding most of London and surrounding areas. We regularly carry out works in:
                        <br>
                        <br>
                        Enfield, Palmers Green, Winchmore Hill, Barnet, Edomonton, Highgate, Finchley, Hampstead, Potters Bar, chase Side, Finsbury Park, Manor House, Camden Town, Kentish Town, Holloway, Walthamstow, Wood Green, Canning Town, Leyton, Essex, Chingford, Cheshunt, Barking, Tottenham, Swiss Cottage, Wembley,
                        Arnos Grove, Southgate, Stoke Newington, Stamford Hill, East Ham, clapton, Hackney, Newham, Lewisham, Peckham, Kensington & chelsea, Brixton, Hyde Park, Haringey, Epping, Greys, Harlow,
                        Hertfordshire, Broxbourne, Hatfield, Watfor, Milton Keynes, Boreham Wood, Hendon, oakwood, Rye, Cockfosters, Southwark, Croydon, Orpington, New Addington, Windsor, Kent, Woolwich, Wantstead, Putney, Parsons Green, Southend & More
                    </p>
                    <a class="rounded-md py-6 px-12 border-2 border-white hover:bg-cool-gray-500 hover:text-white text-xl text-white" href="tel:07476 019 943">Call : 07476 019 943</a>
                </div>
                <img class="max-h-10/12 mt-20 mx-auto" src="{{asset('images/Map.png')}}">
            </div>
        </div>
    </section>
    <section class="bg-default_color" id="get-a-quote">
        <div class="sm:w-full mx-auto custom-maxwidth lg:px-14 md:px-7 px-5 py-20 lg:flex md:flex ">
            <div class="grid lg:grid-cols-5 md:grid-cols-3 grid-cols-1 gap-4">
                <div class="col-span-2">
                    <div class=" w-full text-white text-left">
                        <p class="text-6xl sans_regular">
                            Get a quote
                        </p>
                        <p class="text-xl leading-8 py-5 sans_regular">
                            If you need a quote for any plumbing or drainage works, feel free to call us on <b>07476 019 943</b> or fill out the contact form for a quick, no obligation quote.
                            <br>
                            <br>
                            You can also email us at
                            <a class="text-white hover:text-white" href="javascript:void(0)"><b>info@blockagebusters.co.uk</b></a>
                        </p>

                    </div>
                </div>
                <div class="col-span-3">
                    <form class="w-full mb-10 lg:float-right md:float-right float-left">
                        <div class="flex flex-wrap lg:-mx-3 md:-mx-3 mx-0  py-5">
                            <div class="w-full lg:px-3 md:px-3 px-0 mb-3 ">
                                <label class="block sans_regular tracking-wide text-gray-300 text-xl font-bold mb-2" for="grid-first-name">
                                    Your Name(required)
                                </label>
                                <input id="username" class="appearance-none block w-full bg-white text-gray-700 border border-white rounded py-3 px-4 mb-1 leading-tight  focus:bg-white" type="text" required>
                                <p class="text-lg text-red-600 sans_regular hidden username">The field is required</p>
                                <!-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> -->
                            </div>
                            <div class="w-full lg:px-3 md:px-3 px-0 mb-3">
                                <label class="block sans_regular tracking-wide text-gray-300 text-xl font-bold mb-2" for="grid-last-name">
                                    Your Email(required)
                                </label>
                                <input id="useremail" class="appearance-none block w-full bg-white text-gray-700 border border-white rounded py-3 px-4 mb-1 leading-tight  focus:bg-white focus:border-white" required type="email">
                                <p class="text-lg text-red-600 sans_regular hidden useremail">The field is required</p>

                            </div>
                        </div>
                        <div class="flex flex-wrap lg:-mx-3 md:-mx-3  py-5">
                            <div class="w-full lg:px-3 md:px-3 px-0">
                                <label class="block sans_regular tracking-wide text-gray-300 text-xl font-bold mb-2" for="grid-password">
                                    Your Message
                                </label>
                                <textarea id="usermessage" class="appearance-none block w-full bg-white text-gray-700 border border-white rounded py-3 px-4 mb-3 leading-tight  focus:bg-white focus:border-white" required type="text"></textarea>
                                <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
                            </div>
                        </div>
                        <div class="flex flex-wrap lg:-mx-3 md:-mx-3 mb-2">
                            <div class="w-full lg:w-1/3 md:w-1/3 lg:px-3 md:px-3 px-0 mb-6 md:mb-0">
                                <a href="javascript:postmessage()" class="border-2 hover:text-white rounded-md py-3 border-white px-6 text-xl text-white">send</a>
                            </div>
                        </div>

                    </form>
                    <div class="my-10 mb-2 hidden posted w-full">
                        <div class="w-full mx-auto">
                            <button class="bg-green-400 mx-auto border-1 text-center hover:text-white rounded-md py-3 border-white px-6 text-xl text-white notice w-full">Message is Sent.
                                <!-- <i class="icon wb-remove text-white float-right"></i> -->
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer class="bg-teal-600">
        <div class="mx-auto custom-maxwidth lg:px-14 md:px-7 px-5 text-center py-5 w-full">
            <p class="text-sm sans_regular text-teal-400">Copyright 2020 | Blockage Busters Ltd. | Site by<span class="text-md  sans_regular"><a class="text-white hover:text-white" href="#">PerfectWebDesign</a></span></p>

        </div>
    </footer>


    <!-- <img src="{{asset('images/Screenshot_2020-09-11 Blockage Busters 24 7 Emergency Drainage (London).png')}}"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("floatBT");


        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };
        $('.custom-toggle').click(function() {
            // alert("OK");
            $('.child_toggle').click();
        });

        function myFunction(x) {
            x.classList.toggle("change");
        }


        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
        // alert(document.getElementById("custom-image").clientHeight + 7);
        $(document).ready(function() {
            auto_padding();
        });

        function auto_padding() {
            // document.getElementById("about-us").style.paddingTop = (document.getElementById("custom-image").clientHeight) + "px";
        }
    </script>
    <script>
        function postmessage() {
            var username = $('#username').val();
            var useremail = $('#useremail').val();
            var usermessage = $('#usermessage').val();
            if (username == "") {
                $('.username').removeClass("hidden");
            } else {
                $('.username').addClass("hidden");
            }
            if (useremail == "") {
                $('.useremail').removeClass("hidden");
            } else {
                $('.useremail').addClass("hidden");
            }
            if (username != "" || useremail != "") {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '<?= csrf_token() ?>'
                    }
                });
                $.ajax({
                    url: "{{url('postmessage')}}",
                    method: "post",
                    data: {
                        username: username,
                        useremail: useremail,
                        usermessage: usermessage
                    },
                    success: function(result) {
                        var obj = JSON.parse(result);
                        if (obj == "success") {
                            $('.posted').show();
                            $('#username').val("");
                            $('#useremail').val("");
                            $('#usermessage').val("");
                        }
                    }
                })
            }

        }
        $(".notice").click(function() {
            $('.posted').hide();
        });
    </script>

</body>

</html>