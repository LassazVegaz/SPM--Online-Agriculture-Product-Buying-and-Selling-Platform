@extends('order_management.layout')
@section('title', 'Contact Us')
@section('content')


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Untitled</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <style>
            /* Left column */
            .leftcolumn {
                float: left;
                width: 75%;
            }

            /* Right column */
            .rightcolumn {
                float: left;
                width: 25%;
                padding-left: 20px;
            }

            .rate {
                float: left;
                height: 46px;
                padding: 0 10px;
            }

            .rate:not(:checked)>input {
                position: absolute;
                display: none;
            }

            .rate:not(:checked)>label {
                float: right;
                width: 1em;
                overflow: hidden;
                white-space: nowrap;
                cursor: pointer;
                font-size: 30px;
                color: #ccc;
            }

            .rate:not(:checked)>label:before {
                content: '★ ';
            }

            .rate>input:checked~label {
                color: #ffc700;
            }

            .rate:not(:checked)>label:hover,
            .rate:not(:checked)>label:hover~label {
                color: #deb217;
            }

            .rate>input:checked+label:hover,
            .rate>input:checked+label:hover~label,
            .rate>input:checked~label:hover,
            .rate>input:checked~label:hover~label,
            .rate>label:hover~input:checked~label {
                color: #c59b08;
            }

            .rating-container .form-control:hover,
            .rating-container .form-control:focus {
                background: #fff;
                border: 1px solid #ced4da;
            }

            .rating-container textarea:focus,
            .rating-container input:focus {
                color: #000;
            }
        </style>
    </head>

    <body>
        <center>
            <div class="col-sm-8 card" style="background-color: #F4F7F8; margin-top:40px">
                <div class="row g-3">
                    <div class="col">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="/contactus" style="width: 100%">
                            @csrf
                            <h2 class="text-left">Contact Us</h2>
                            <p class="text-left">Reach us at anytime.</p>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="text"
                                    name="name" placeholder="Name">
                            </div>
                            <div class="form-group" style="margin-top: 10px"><input class="form-control" type="email"
                                    name="email" placeholder="Email">
                            </div>
                            <div class="form-group"><input class="form-control" type="text" name="message"
                                    placeholder="Message" style="height: 80px; padding-bottom: 80px; ">
                            </div>
                            <div class="form-group"><button class="btn btn-block" type="submit"
                                    style="background-color:#6EBD6C; color: white;">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col" style="margin-top: 10px">
                        <br />
                        <svg class="animated" id="freepik_stories-contact-us" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500" version="1.1"
                            xmlns:svgjs="http://svgjs.com/svgjs">
                            <style>
                                svg#freepik_stories-contact-us:not(.animated) .animable {
                                    opacity: 0;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--background-simple--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--Floor--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--Plants--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--Building--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--Mail--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--Device--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--character-1--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                svg#freepik_stories-contact-us.animated #freepik--character-2--inject-159 {
                                    animation: 1.5s Infinite linear floating;
                                    animation-delay: 0s;
                                }

                                @keyframes floating {
                                    0% {
                                        opacity: 1;
                                        transform: translateY(0px);
                                    }

                                    50% {
                                        transform: translateY(-10px);
                                    }

                                    100% {
                                        opacity: 1;
                                        transform: translateY(0px);
                                    }
                                }
                            </style>
                            <g id="freepik--background-simple--inject-159" class="animable animator-active"
                                style="transform-origin: 250.324px 243.415px;">
                                <path
                                    d="M92.16,138c70.07-79.73,190.37-93,244-67.39a235.56,235.56,0,0,1,57.21,38.23q3.36,3,6.53,6.17a223.63,223.63,0,0,1,18.53,20.67A217.54,217.54,0,0,1,437,163.22a202.64,202.64,0,0,1,18.53,43.47,153.78,153.78,0,0,1,5.78,30.51c1.53,19.41.2,39-2.41,58.25q-.36,2.76-.78,5.52c-.07.51-.14,1-.22,1.53-2.87,19.17-6.93,38.51-16,55.23C432,376,397.46,426.69,360,428c-19.43.69-36.59-12-54.2-21-28-14.28-59.69-17.08-90.59-17.91s-62.18.06-92.29-7.6S63.29,356.24,47.9,327c-5.23-9.94-9.2-24.26-9.21-35.72,0-33.81,5.52-63.38,15.16-89.07a209.81,209.81,0,0,1,10.69-23.93,203.54,203.54,0,0,1,20.92-32.17Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 250.324px 243.415px;" id="elncrjvsms61"
                                    class="animable"></path>
                                <g id="elfk2dzh4qx67">
                                    <g style="opacity: 0.7; transform-origin: 250.324px 243.415px;" class="animable">
                                        <path
                                            d="M92.16,138c70.07-79.73,190.37-93,244-67.39a235.56,235.56,0,0,1,57.21,38.23q3.36,3,6.53,6.17a223.63,223.63,0,0,1,18.53,20.67A217.54,217.54,0,0,1,437,163.22a202.64,202.64,0,0,1,18.53,43.47,153.78,153.78,0,0,1,5.78,30.51c1.53,19.41.2,39-2.41,58.25q-.36,2.76-.78,5.52c-.07.51-.14,1-.22,1.53-2.87,19.17-6.93,38.51-16,55.23C432,376,397.46,426.69,360,428c-19.43.69-36.59-12-54.2-21-28-14.28-59.69-17.08-90.59-17.91s-62.18.06-92.29-7.6S63.29,356.24,47.9,327c-5.23-9.94-9.2-24.26-9.21-35.72,0-33.81,5.52-63.38,15.16-89.07a209.81,209.81,0,0,1,10.69-23.93,203.54,203.54,0,0,1,20.92-32.17Z"
                                            style="fill: rgb(255, 255, 255); transform-origin: 250.324px 243.415px;"
                                            id="elle96ytddhid" class="animable"></path>
                                    </g>
                                </g>
                            </g>
                            <g id="freepik--Floor--inject-159" class="animable"
                                style="transform-origin: 253.715px 426.84px;">
                                <line x1="38.69" y1="426.84" x2="468.74" y2="426.84"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 253.715px 426.84px;"
                                    id="el0d608j932wa" class="animable"></line>
                            </g>
                            <g id="freepik--Plants--inject-159" class="animable"
                                style="transform-origin: 265.022px 304.845px;">
                                <path
                                    d="M369.65,281.77a0,0,0,0,0,0,0l0,.11q0,.27.12.57a65,65,0,0,1,1,6.63c.19,1.91.34,4.09.38,6.52A98.68,98.68,0,0,1,370,312.38c-.22,1.46-.48,3-.79,4.54-.49,2.54-1.09,5.2-1.83,7.95-.33,1.28-.71,2.59-1.11,3.91l-.47,1.61c-.18.65-.36,1.3-.53,2v0a132.49,132.49,0,0,0-2.75,13.48c-.85,5.65-1.38,11.26-1.67,16.57-.39,7.08-.37,13.62-.2,19a2.44,2.44,0,0,0,0,.27c.18,5.47.52,9.76.75,12.2.13,1.43.22,2.24.23,2.29"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 365.849px 338.985px;"
                                    id="elpcgisxbywlm" class="animable"></path>
                                <path d="M369.68,281.91l0,0,0,0a12.1,12.1,0,0,0-5.25-2.73"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 367.055px 280.545px;"
                                    id="el2r88kotes9d" class="animable"></path>
                                <line x1="370.8" y1="289.11" x2="373.46" y2="286.7"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 372.13px 287.905px;"
                                    id="elokr42qni7vf" class="animable"></line>
                                <path
                                    d="M367.41,324.88h0a11,11,0,0,0-.62-2.05,10.6,10.6,0,0,0-1.59-2.69,10.43,10.43,0,0,0-1.67-1.65"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 365.47px 321.685px;"
                                    id="eliebxsqz8om" class="animable"></path>
                                <path d="M365.28,332.38a7.36,7.36,0,0,1,4.17-4.11"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 367.365px 330.325px;"
                                    id="ell5pykp81os" class="animable"></path>
                                <path d="M360.66,369.58c.89-1.08,1.56-5.17,1.92-7.37.09-.52.16-1,.23-1.29"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 361.735px 365.25px;"
                                    id="el8jcqaradhms" class="animable"></path>
                                <path d="M353.81,377a4.42,4.42,0,0,1,.89,0,7.25,7.25,0,0,1,6,4.45"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 357.255px 379.214px;"
                                    id="elbcagelc08r" class="animable"></path>
                                <path d="M369.24,317s.47-16.23-8.44-22.12"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 365.022px 305.94px;"
                                    id="eluexgmp1hc6" class="animable"></path>
                                <path
                                    d="M370,351.79c1.17,3.79-7,11-7,11s-10.79-1.35-12-5.13,1.56-10,6.8-11.6S368.87,348,370,351.79Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 360.417px 354.228px;"
                                    id="elf8c7aujhv75" class="animable"></path>
                                <path
                                    d="M379.09,305.86c-1,4-8.76,6.87-8.76,6.87S365,306.5,366,302.48s5.31-8.44,8.93-7.51S380.13,301.84,379.09,305.86Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 372.64px 303.787px;"
                                    id="elb100wi3m51k" class="animable"></path>
                                <path
                                    d="M348.1,365.93c4.85,1.88,7.82,10.46,7.82,10.46s-8,4.31-12.84,2.42-10-7.21-8.6-10.76S343.25,364,348.1,365.93Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 345.083px 372.053px;"
                                    id="el8kh7j9ltmpl" class="animable"></path>
                                <path
                                    d="M358.73,318.73a10.43,10.43,0,0,0,3.32,1.88,3.49,3.49,0,0,0,3.53-.84c1-1.19.76-3,.11-4.49-1.3-2.85-6.08-7.7-9.75-6.31C350.64,311,356.37,317,358.73,318.73Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 360.007px 314.752px;"
                                    id="elzunmaqpxmqo" class="animable"></path>
                                <path
                                    d="M369.58,326c-.7.86-1.44,1.95-1.05,3a2.23,2.23,0,0,0,2.44,1.2,6.56,6.56,0,0,0,2.62-1.29c1.87-1.3,5.71-4,3.26-6.57S371,324.19,369.58,326Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 373.032px 325.9px;" id="ele64cdz59nc"
                                    class="animable"></path>
                                <path
                                    d="M353.93,289.73a1.93,1.93,0,0,0-1.75,1.42c-.16.93.61,1.74,1.35,2.31,1.86,1.44,7.45,5.3,8.69,1.57C363.4,291.51,356.39,289.46,353.93,289.73Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 357.256px 293.158px;"
                                    id="ela9v5eo9v61" class="animable"></path>
                                <path
                                    d="M364.22,277.47c-1.15.11-2.3-.31-3.46-.24s-2.43,1-2.18,2.14,1.54,1.39,2.6,1.45a20.77,20.77,0,0,0,5.45-.37,1.68,1.68,0,0,0,1.1-.56c.47-.69-.27-1.61-1.07-1.85a11.94,11.94,0,0,1-2.41-.58Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 363.213px 279.042px;"
                                    id="ely99shd5iasg" class="animable"></path>
                                <path
                                    d="M375.48,285.4c1.15,0,2.27-.46,3.43-.47s2.5.84,2.31,2-1.43,1.49-2.49,1.62a20.79,20.79,0,0,1-5.46,0,1.66,1.66,0,0,1-1.14-.49c-.51-.65.17-1.62.94-1.92a10.88,10.88,0,0,0,2.37-.73Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 376.596px 286.83px;"
                                    id="elptndaz4y09r" class="animable"></path>
                                <path
                                    d="M374.34,370.62a1.62,1.62,0,0,1,1-.49,1.11,1.11,0,0,1,1,1,3.17,3.17,0,0,1-.18,1.46c-.79,2.63-9.59,21.62-11.62,18.21-1.19-2,1.75-8.69,2.62-10.58A27.57,27.57,0,0,1,374.34,370.62Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 370.31px 380.669px;"
                                    id="ellqhqkd92h1k" class="animable"></path>
                                <path d="M370.05,283s-.53-4.61.58-5"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 370.277px 280.5px;"
                                    id="el6sznqddm55s" class="animable"></path>
                                <path
                                    d="M369.07,278.19a10,10,0,0,1,2.84-4.22c1.39-1,3.62-1.08,4.63.31,1.13,1.55,0,3.9-1.73,4.73s-3.77.58-5.67.31c0-.28,0-.56,0-.84Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 373.032px 276.402px;"
                                    id="elyplgfws1ois" class="animable"></path>
                                <path d="M373.81,426.61h0a85.62,85.62,0,0,1-28.48,0h0l-11.08-32.69h50.64Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 359.57px 410.861px;"
                                    id="elcxpjv3ut29q" class="animable"></path>
                                <path
                                    d="M180.55,190.43a0,0,0,0,0,0,0l0,.11q.06.27.12.57a61.83,61.83,0,0,1,1,6.63c.19,1.91.33,4.09.38,6.52A98.68,98.68,0,0,1,180.93,221c-.22,1.46-.48,3-.79,4.54-.49,2.54-1.1,5.2-1.83,7.95-.34,1.28-.71,2.59-1.11,3.91-.16.54-.32,1.07-.47,1.61s-.37,1.3-.54,2a0,0,0,0,1,0,0,133,133,0,0,0-2.75,13.48c-.85,5.65-1.37,11.26-1.66,16.57-.39,7.08-.38,13.62-.2,19v.27c.19,5.47.52,9.76.76,12.21.12,1.42.22,2.23.22,2.28"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 176.763px 247.625px;"
                                    id="el44xdmmx0apo" class="animable"></path>
                                <path d="M180.57,190.57l0,0s0,0,0,0a12.91,12.91,0,0,0-2.34-1.63,12.54,12.54,0,0,0-2.92-1.1"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 177.94px 189.205px;"
                                    id="elqrthu46qqs" class="animable"></path>
                                <line x1="181.69" y1="197.77" x2="184.36" y2="195.36"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 183.025px 196.565px;"
                                    id="el749v47ap5kv" class="animable"></line>
                                <path
                                    d="M178.31,233.54h0a11,11,0,0,0-.63-2.05,10.6,10.6,0,0,0-1.59-2.69,10.43,10.43,0,0,0-1.67-1.65"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 176.365px 230.345px;"
                                    id="elfm2a5u4pik" class="animable"></path>
                                <path d="M176.18,241a7.31,7.31,0,0,1,4.16-4.11"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 178.26px 238.945px;"
                                    id="elbbzfz0r009r" class="animable"></path>
                                <path d="M171.55,278.24c.89-1.08,1.57-5.17,1.93-7.37.08-.52.16-1,.22-1.29"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 172.625px 273.91px;"
                                    id="elf0p9fbrpp3l" class="animable"></path>
                                <path d="M164.7,285.62a4.52,4.52,0,0,1,.9,0,7.28,7.28,0,0,1,6,4.45"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 168.15px 287.834px;"
                                    id="el46wbswg1ihi" class="animable"></path>
                                <path d="M180.13,225.62s.48-16.23-8.44-22.12"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 175.912px 214.56px;"
                                    id="elnk5hj4ok74p" class="animable"></path>
                                <path
                                    d="M180.94,260.45c1.16,3.79-7,11-7,11s-10.8-1.35-12-5.13,1.57-10,6.8-11.6S179.77,256.67,180.94,260.45Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 171.358px 262.888px;"
                                    id="elburwm5hp4dq" class="animable"></path>
                                <path
                                    d="M190,214.52c-1,4-8.76,6.87-8.76,6.87s-5.39-6.23-4.35-10.25,5.3-8.44,8.92-7.51S191,210.5,190,214.52Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 183.526px 212.447px;"
                                    id="elgohl1zkjpc" class="animable"></path>
                                <path
                                    d="M159,274.59c4.85,1.89,7.83,10.46,7.83,10.46s-8,4.31-12.85,2.42-10-7.21-8.59-10.76S154.14,272.7,159,274.59Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 155.992px 280.722px;"
                                    id="elcf9oojcev9v" class="animable"></path>
                                <path
                                    d="M169.63,227.39a10.39,10.39,0,0,0,3.31,1.88,3.49,3.49,0,0,0,3.53-.84c1-1.19.76-3,.11-4.49-1.3-2.85-6.07-7.7-9.75-6.31C161.54,219.64,167.26,225.64,169.63,227.39Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 170.899px 223.412px;"
                                    id="elq0ahpym5xvk" class="animable"></path>
                                <path
                                    d="M180.47,234.67c-.69.86-1.43,2-1.05,3a2.23,2.23,0,0,0,2.44,1.2,6.5,6.5,0,0,0,2.62-1.29c1.87-1.29,5.71-4,3.26-6.57S181.94,232.85,180.47,234.67Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 183.925px 234.569px;"
                                    id="elnj9rqj0fi6" class="animable"></path>
                                <path
                                    d="M164.82,198.39a1.94,1.94,0,0,0-1.75,1.42c-.16.93.61,1.74,1.36,2.31,1.86,1.44,7.44,5.3,8.69,1.57C174.29,200.17,167.29,198.12,164.82,198.39Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 168.15px 201.818px;"
                                    id="el3lrmotowxp2" class="animable"></path>
                                <path
                                    d="M175.11,186.13c-1.15.11-2.3-.31-3.45-.24s-2.44,1-2.18,2.14,1.53,1.39,2.6,1.45a20.7,20.7,0,0,0,5.44-.37,1.7,1.7,0,0,0,1.11-.56c.46-.69-.28-1.61-1.07-1.85a12,12,0,0,1-2.42-.58Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 174.109px 187.702px;"
                                    id="eli831v7zjy1" class="animable"></path>
                                <path
                                    d="M186.37,194.06c1.16,0,2.28-.46,3.43-.47s2.5.84,2.32,2-1.44,1.49-2.5,1.62a20.79,20.79,0,0,1-5.46,0,1.66,1.66,0,0,1-1.14-.49c-.51-.65.17-1.62.95-1.92a11.23,11.23,0,0,0,2.37-.73Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 187.49px 195.49px;"
                                    id="elx8znrko07wm" class="animable"></path>
                                <path
                                    d="M185.23,279.28a1.64,1.64,0,0,1,1-.49,1.14,1.14,0,0,1,1,1,3.18,3.18,0,0,1-.19,1.46c-.78,2.63-9.59,21.62-11.61,18.21-1.2-2,1.74-8.69,2.61-10.58A27.57,27.57,0,0,1,185.23,279.28Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 181.197px 289.329px;"
                                    id="el679nepsk4ag" class="animable"></path>
                                <path d="M180.94,191.68s-.53-4.61.59-5"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 181.172px 189.18px;"
                                    id="el9f7ciyxhqxj" class="animable"></path>
                                <path
                                    d="M180,186.85a9.82,9.82,0,0,1,2.84-4.22c1.39-1,3.61-1.08,4.62.31,1.13,1.55,0,3.9-1.73,4.73s-3.76.58-5.66.31c0-.28,0-.56,0-.84Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 183.957px 185.062px;"
                                    id="elrniwbkc79kl" class="animable"></path>
                            </g>
                            <g id="freepik--Building--inject-159" class="animable"
                                style="transform-origin: 256.365px 186.675px;">
                                <line x1="53.85" y1="300.97" x2="53.85" y2="202.16"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 53.85px 251.565px;"
                                    id="eln8ma4xg19sn" class="animable"></line>
                                <line x1="362.35" y1="300.97" x2="350.14" y2="300.97"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 356.245px 300.97px;"
                                    id="elunul9wu8i9" class="animable"></line>
                                <line x1="458.1" y1="300.97" x2="433.23" y2="300.97"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 445.665px 300.97px;"
                                    id="elcm91mem0fob" class="animable"></line>
                                <polyline points="349.02 150.86 393.09 150.86 393.09 108.88"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 371.055px 129.87px;"
                                    id="els1is3lzdzel" class="animable"></polyline>
                                <polyline points="92.16 138.04 138.98 138.04 138.98 172.19 190.3 172.19"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 141.23px 155.115px;"
                                    id="eleqho0bw1zr9" class="animable"></polyline>
                                <line x1="64.54" y1="253.69" x2="64.54" y2="178.23"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 64.54px 215.96px;"
                                    id="elxibpsa3jag" class="animable"></line>
                                <line x1="85.46" y1="145.48" x2="85.46" y2="204.62"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 85.46px 175.05px;"
                                    id="elr9wfxfjj99" class="animable"></line>
                                <line x1="106.37" y1="145.48" x2="106.37" y2="197.76"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 106.37px 171.62px;"
                                    id="elqwwksekuzxc" class="animable"></line>
                                <line x1="127.28" y1="145.48" x2="127.28" y2="236.93"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 127.28px 191.205px;"
                                    id="elm3ys2b3ojd" class="animable"></line>
                                <polyline points="227.45 132.51 227.45 72.38 312.58 72.38 312.58 132.51"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 270.015px 102.445px;"
                                    id="eluv2uag6091p" class="animable"></polyline>
                                <polyline points="233.69 102.25 233.69 79.52 249.43 79.52"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.56px 90.885px;"
                                    id="eltdkde3qtm7d" class="animable"></polyline>
                                <polyline points="252.89 102.25 252.89 79.52 268.63 79.52"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 260.76px 90.885px;"
                                    id="el5bulgviex4d" class="animable"></polyline>
                                <polyline points="272.09 102.25 272.09 79.52 287.83 79.52"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 279.96px 90.885px;"
                                    id="eloylw6a9lg5" class="animable"></polyline>
                                <polyline points="291.29 102.25 291.29 79.52 307.03 79.52"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 299.16px 90.885px;"
                                    id="el7qj69llrqei" class="animable"></polyline>
                                <polyline points="233.69 132.51 233.69 109.78 249.43 109.78"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 241.56px 121.145px;"
                                    id="elb8y9vy02bc" class="animable"></polyline>
                                <polyline points="252.89 132.51 252.89 109.78 268.63 109.78"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 260.76px 121.145px;"
                                    id="el8fz2dq9lkfl" class="animable"></polyline>
                                <polyline points="272.09 132.51 272.09 109.78 287.83 109.78"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 279.96px 121.145px;"
                                    id="el6znzpwsz0cl" class="animable"></polyline>
                                <polyline points="291.29 132.51 291.29 109.78 307.03 109.78"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 299.16px 121.145px;"
                                    id="elbfpt39rtmb9" class="animable"></polyline>
                                <line x1="399.91" y1="114.08" x2="399.91" y2="189.43"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 399.91px 151.755px;"
                                    id="elqbh8btavmfr" class="animable"></line>
                                <line x1="430.82" y1="295.45" x2="433.23" y2="295.45"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 432.025px 295.45px;"
                                    id="ell8cpdg7p3x" class="animable"></line>
                                <line x1="418.44" y1="135.72" x2="418.44" y2="220.08"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 418.44px 177.9px;"
                                    id="elq32gz9ecaf" class="animable"></line>
                                <polyline points="436.98 273.91 436.98 295.45 451.77 295.45"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 444.375px 284.68px;"
                                    id="el7i28s19zdbe" class="animable"></polyline>
                                <line x1="436.98" y1="163.22" x2="436.98" y2="220.51"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 436.98px 191.865px;"
                                    id="elr7ojhm10mq" class="animable"></line>
                                <polyline points="455.51 206.69 455.51 295.45 458.88 295.45"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 457.195px 251.07px;"
                                    id="elh5di57ylhyb" class="animable"></polyline>
                            </g>
                            <g id="freepik--Mail--inject-159" class="animable"
                                style="transform-origin: 134.45px 364.81px;">
                                <rect x="38.69" y="302.78" width="191" height="124.06"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 134.19px 364.81px;"
                                    id="el3mnqij7keiq" class="animable"></rect>
                                <polygon points="38.69 302.78 134.19 364.81 229.69 302.78 38.69 302.78"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 134.19px 333.795px;"
                                    id="eld786wgxdagk" class="animable"></polygon>
                                <line x1="105.48" y1="346.16" x2="38.69" y2="426.84"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 72.085px 386.5px;"
                                    id="eldtlbz3sxywb" class="animable"></line>
                                <line x1="163.42" y1="346.16" x2="230.21" y2="426.84"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 196.815px 386.5px;"
                                    id="elo5728stu6ja" class="animable"></line>
                            </g>
                            <g id="freepik--Device--inject-159" class="animable"
                                style="transform-origin: 270.225px 282.42px;">
                                <path
                                    d="M331.9,144.48H287.5a7.16,7.16,0,0,0-6.26,3.7l0,0a12.61,12.61,0,0,1-22.06,0h0a7.15,7.15,0,0,0-6.29-3.75H208.54a9.27,9.27,0,0,0-9.39,9.15V404a9.28,9.28,0,0,0,9.39,9.15H331.9a9.29,9.29,0,0,0,9.4-9.15V153.63A9.28,9.28,0,0,0,331.9,144.48Z"
                                    style="fill: rgb(68, 217, 65); transform-origin: 270.225px 278.79px;"
                                    id="eldk7xdllx7w" class="animable"></path>
                                <path
                                    d="M345.63,150.86A12.82,12.82,0,0,0,332.81,138H207.64a12.81,12.81,0,0,0-12.82,12.81h0V414a12.81,12.81,0,0,0,12.81,12.81H332.81A12.82,12.82,0,0,0,345.63,414h0ZM341.3,404a9.29,9.29,0,0,1-9.4,9.15H208.54a9.28,9.28,0,0,1-9.39-9.15V153.63a9.27,9.27,0,0,1,9.39-9.15h44.37a7.13,7.13,0,0,1,6.28,3.75h0a12.61,12.61,0,0,0,22.06,0l0,0a7.14,7.14,0,0,1,6.26-3.7h44.4a9.27,9.27,0,0,1,9.39,9.15Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 270.225px 282.405px;"
                                    id="el7hofzv7paqw" class="animable"></path>
                                <g id="elnkppz9j0jf">
                                    <polygon points="303.1 138.04 219.95 426.83 252.97 426.8 333.04 138.04 303.1 138.04"
                                        style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 276.495px 282.435px;"
                                        class="animable"></polygon>
                                </g>
                                <g id="eljkjlh0izmve">
                                    <polygon points="290.7 138.04 202.79 426.84 207.6 426.81 293.86 138.04 290.7 138.04"
                                        style="fill: rgb(255, 255, 255); opacity: 0.2; transform-origin: 248.325px 282.44px;"
                                        class="animable"></polygon>
                                </g>
                                <path
                                    d="M292.65,352.73a21.46,21.46,0,0,1-21.53,21.92,22.39,22.39,0,0,1-22.3-21.92,21.46,21.46,0,0,1,21.53-21.91A22.38,22.38,0,0,1,292.65,352.73Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 270.735px 352.735px;"
                                    id="eli8kg24xllo" class="animable"></path>
                                <path
                                    d="M263.55,369.09a16.42,16.42,0,0,1-5.49-3.38,15,15,0,0,1-3.63-5.49,19.54,19.54,0,0,1-1.31-7.3,17.46,17.46,0,0,1,1.11-6.23,15.67,15.67,0,0,1,3-5,20,20,0,0,1,9.57-5.82,21.18,21.18,0,0,1,5.54-.73,18.88,18.88,0,0,1,4.61.55,14.78,14.78,0,0,1,4.13,1.71,13.76,13.76,0,0,1,3.37,2.85,12.58,12.58,0,0,1,2.26,4.1,16.43,16.43,0,0,1,.82,5.29A14.68,14.68,0,0,1,284,359.1a13.09,13.09,0,0,1-3.4,2.75,7.55,7.55,0,0,1-3.62,1,4,4,0,0,1-2.44-.79,2.84,2.84,0,0,1-1.15-2.26,7,7,0,0,1-6.05,3.15,6.3,6.3,0,0,1-5-2.12,7.66,7.66,0,0,1-1.85-5.23,14,14,0,0,1,.81-4.62,16,16,0,0,1,2.21-4.18,11,11,0,0,1,3.5-3.05,9.06,9.06,0,0,1,4.49-1.17,6.59,6.59,0,0,1,3.14.76,5.16,5.16,0,0,1,2.18,2.23l.2-.67a1.87,1.87,0,0,1,2.37-1.17,2,2,0,0,1,.51.26,1.2,1.2,0,0,1,.45,1,1.71,1.71,0,0,1-.09.55l-3.24,10.78a10.72,10.72,0,0,0-.55,2.54,1,1,0,0,0,1.19,1.16,4.47,4.47,0,0,0,3-1.43,10.27,10.27,0,0,0,2.43-3.79,13.26,13.26,0,0,0,.94-4.9,14.3,14.3,0,0,0-.64-4.36,10.65,10.65,0,0,0-1.72-3.37,10.19,10.19,0,0,0-2.61-2.33,11.34,11.34,0,0,0-3.22-1.39,14,14,0,0,0-3.58-.46,16.52,16.52,0,0,0-4.53.64,16.09,16.09,0,0,0-4.29,1.93,16.74,16.74,0,0,0-3.6,3.06,13.4,13.4,0,0,0-2.48,4.24,14.89,14.89,0,0,0-.93,5.29,16.33,16.33,0,0,0,1.14,6.25,11.94,11.94,0,0,0,3.12,4.5,14,14,0,0,0,4.52,2.63,16.08,16.08,0,0,0,5.45.92,19.67,19.67,0,0,0,5.85-.89,1.7,1.7,0,0,1,.59-.1,1.33,1.33,0,0,1,1,.43,1.4,1.4,0,0,1,.39,1,1.21,1.21,0,0,1-.94,1.28,25.65,25.65,0,0,1-7.28,1.12A19.56,19.56,0,0,1,263.55,369.09Zm8.26-10.37a5.65,5.65,0,0,0,2.09-2.88l2.09-7.35-.14-.3a3.51,3.51,0,0,0-.47-.67,6.88,6.88,0,0,0-.82-.8,4.24,4.24,0,0,0-1.25-.69,5,5,0,0,0-3.63.13,5.85,5.85,0,0,0-1.71,1.11,9.31,9.31,0,0,0-1.38,1.62,11.05,11.05,0,0,0-1,1.95,12,12,0,0,0-.65,2.11,9.84,9.84,0,0,0-.23,2.09,8.59,8.59,0,0,0,.08,1.35,5.82,5.82,0,0,0,.26,1.17,4,4,0,0,0,.47,1,2.74,2.74,0,0,0,.68.72,2.86,2.86,0,0,0,.95.45,4,4,0,0,0,1.23.16,5.64,5.64,0,0,0,3.47-1.14Z"
                                    style="fill: rgb(68, 217, 65); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 270.325px 352.715px;"
                                    id="eldpknr6t76bp" class="animable"></path>
                                <path
                                    d="M292.16,277.6a21.46,21.46,0,0,1-21.53,21.91,22.38,22.38,0,0,1-22.3-21.91,21.45,21.45,0,0,1,21.53-21.92A22.39,22.39,0,0,1,292.16,277.6Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 270.245px 277.595px;"
                                    id="elno64p4x06ut" class="animable"></path>
                                <path
                                    d="M284,275.6c-6.87-4.5-20.34-4.5-26.89,0a5.08,5.08,0,0,0-4.14,5.19c.1,2.91,12.19,2.91,12.09,0a5.45,5.45,0,0,0-1.32-3.3,32.57,32.57,0,0,1,13.76,0,5.06,5.06,0,0,0-1.08,3.3c.1,2.91,12.19,2.91,12.08,0A5.54,5.54,0,0,0,284,275.6Z"
                                    style="fill: rgb(68, 217, 65); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 270.733px 277.599px;"
                                    id="el7snvg9tg37v" class="animable"></path>
                                <path
                                    d="M292.16,204.62c.12,5.39-2.82,10.21-7.54,13.42v13.09l-9.39-9.4a25.64,25.64,0,0,1-4.6.4c-12.1,0-22.09-7.84-22.3-17.51s9.42-17.5,21.53-17.5S292,195,292.16,204.62Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 270.245px 209.125px;"
                                    id="el5xqdk6kq4tu" class="animable"></path>
                                <path d="M260.91,204.62a2.84,2.84,0,1,1-2.84-2.83A2.84,2.84,0,0,1,260.91,204.62Z"
                                    style="fill: rgb(68, 217, 65); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 258.07px 204.63px;"
                                    id="elfxrk69cy8z" class="animable"></path>
                                <path d="M273.06,204.62a2.84,2.84,0,1,1-2.84-2.83A2.84,2.84,0,0,1,273.06,204.62Z"
                                    style="fill: rgb(68, 217, 65); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 270.22px 204.63px;"
                                    id="el6nkx3cwr3y7" class="animable"></path>
                                <path d="M285.21,204.62a2.84,2.84,0,1,1-2.84-2.83A2.84,2.84,0,0,1,285.21,204.62Z"
                                    style="fill: rgb(68, 217, 65); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 282.37px 204.63px;"
                                    id="el52a1c5bhxy3" class="animable"></path>
                            </g>
                            <g id="freepik--character-1--inject-159" class="animable"
                                style="transform-origin: 109.966px 248.405px;">
                                <path
                                    d="M147.8,244.53a4.58,4.58,0,0,1-1.49,1.64q-6.92,5.52-14.16,10.59c-1.77,1.24-3.61,2.52-5.32,3.91-10.28,6.88-4,8.56-10.28,23.12v0c-1.48,3.48-1.21,20.53-1.21,20.53h-.51A39.23,39.23,0,0,0,111,301h0a5.38,5.38,0,0,0-.58-.34h0a1.87,1.87,0,0,0-.6-.19c-1-.06-4.81.4-8.66.15l-1-.08c-.56-.06-1.11-.13-1.66-.23s-1.08-.21-1.59-.35a99.3,99.3,0,0,1-10.73-4.14h0l-1.74-.75-.86-.37-.78-.34-.56-.24-.54-.23h0c-.91-.38-1.76-.73-2.54-1a11.3,11.3,0,0,0-1.09-.33c0,.82-.13,1.66-.24,2.48-.48,3.91-1.55,7.52-3.46,8a.24.24,0,0,1-.12,0,2.94,2.94,0,0,1-.51.05h-.15a3.88,3.88,0,0,1-1.24-.23h0a8,8,0,0,1-4-3.75,5.26,5.26,0,0,1-.62-2.3c0-2.91-.81-20.08-.81-25.08s1-13.75,3.49-17a13.16,13.16,0,0,1,3.62-3.47,19.07,19.07,0,0,1,6.17-3.44c2.66-.87,8.61-3.09,12.76-4.66v0l-6.27,2.42c1.59,2.72,5,7,11.15,7.55,5.78.49,9.36-4.74,11.19-8.56.16.06,10.22-1.85,12.55-1.74,7.59.33,13.78-3.78,16.58-5.41a6.53,6.53,0,0,1,9.57,3.62l0,.09A4.8,4.8,0,0,1,147.8,244.53Z"
                                    style="fill: rgb(68, 217, 65); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 107.499px 270.408px;"
                                    id="eljryxm34n2g" class="animable"></path>
                                <path d="M108.92,244.63h0l-.46-.16Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 108.69px 244.55px;"
                                    id="ele2xics0xf8e" class="animable"></path>
                                <path
                                    d="M117.45,308.72a.5.5,0,0,1,0,.12.7.7,0,0,1-1.05.3c-.46-.26-1.17-1.93-1.17-1.93l-.79-.82-.52-.55h0c.08.2.71,1.73.38,2.44a.35.35,0,0,1-.08.13,2.37,2.37,0,0,1-1.9.95h0c-.43,0-1.69.15-2.79.22h-.12a9,9,0,0,1-1,0,6.78,6.78,0,0,1-2.52-.85,30.54,30.54,0,0,1-5.18-1.23l-.3-.16-.27-.16a2.67,2.67,0,0,1-.49-.38A6.92,6.92,0,0,1,98.12,305l0,0h0s-4.06-.17-9.51-.59c-2-.15-4.16-.34-6.4-.56-3.44-.35-6.28-.33-8.51-.64l-.16,0c-.44-.06-.85-.14-1.24-.23h0a5.16,5.16,0,0,1-4-3.75,12.83,12.83,0,0,1-.32-1.35l1.74-3a11.57,11.57,0,0,1,3-1.74,8.9,8.9,0,0,1,5.31-.49,11.3,11.3,0,0,1,1.09.33c.78.3,1.63.65,2.54,1l.55.23.56.24.78.34C88,296.63,93.31,299,96.86,300a20.78,20.78,0,0,0,3.25.58l1,.08c3.85.25,7.65-.21,8.66-.15s3.48,2.41,5.06,3.86c.43.4.81.73,1.07.93l.12.1.09.08a4.5,4.5,0,0,1,1.16,2.12s0,0,0,0a4.49,4.49,0,0,1,.16.82A1.31,1.31,0,0,1,117.45,308.72Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 92.7168px 301.022px;"
                                    id="elymycxkuqo7f" class="animable"></path>
                                <path
                                    d="M117.45,308.72a.5.5,0,0,1,0,.12.7.7,0,0,1-1.05.29,6.82,6.82,0,0,1-1.17-1.93l-.79-.81-.52-.54h0c.07.16.72,1.72.39,2.44a.35.35,0,0,1-.08.13,2.4,2.4,0,0,1-.38.4,2.45,2.45,0,0,1-1.52.54h0c-.44,0-1.69.14-2.78.22h-.14a9,9,0,0,1-1,0,7,7,0,0,1-2.51-.84,30.89,30.89,0,0,1-5.18-1.24l-.29-.14-.27-.16a4,4,0,0,1-.49-.38A6.92,6.92,0,0,1,98.12,305l0,0h0s-3.94-.17-9.28-.58c-2-.15-4.31-.35-6.63-.58-3.16-.31-5.77-.4-7.88-.73l-.65-.12-.75-.17a7.65,7.65,0,0,1,.37-3.64A7.14,7.14,0,0,1,77.76,295h0a28.41,28.41,0,0,1,3.83-1.11h0l.54.23.56.24.78.34c4.53,1.95,9.78,4.31,13.34,5.28a19.68,19.68,0,0,0,3.25.57l1,.08c3.85.26,7.65-.2,8.66-.14s3.47,2.4,5,3.85a14.12,14.12,0,0,0,1.09.94l.12.09.09.08a4.25,4.25,0,0,1,1.16,2.12s0,0,0,0a4.49,4.49,0,0,1,.16.82A1.31,1.31,0,0,1,117.45,308.72Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 95.1543px 301.742px;"
                                    id="elnsh9l4lgigf" class="animable"></path>
                                <path d="M105.48,306.06s2.27,1.18,3.17,1.59.82,2.06.82,2.06"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 107.476px 307.885px;"
                                    id="ell4k5w0x99pf" class="animable"></path>
                                <path d="M107.91,304.46a51.57,51.57,0,0,1,4.12,3.27,1.59,1.59,0,0,1,.25,1.66"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 110.16px 306.925px;"
                                    id="elviv1muwtgy8" class="animable"></path>
                                <path d="M113.89,305.83a47.38,47.38,0,0,0-3.75-3.6"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 112.015px 304.03px;"
                                    id="el0kduaa9t099p" class="animable"></path>
                                <path
                                    d="M108.91,244.65c-1.81,3.81-5.4,9-11.18,8.55-6.12-.52-9.56-4.83-11.15-7.56,2.2-.84,4.43-1.7,6.26-2.42v0c0-1.86-.06-4.09-.26-6.3,0-.48-.1-1-.15-1.45s-.11-.77-.17-1.14h11.63s-.07.46-.16,1.23a0,0,0,0,1,0,0c-.07.69-.16,1.61-.23,2.65-.09,1.38-.15,3-.11,4.53.56.19,1.13.4,1.7.62l1.1.38c.44.16.87.3,1.33.45l1,.3A3.34,3.34,0,0,1,108.91,244.65Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 97.745px 243.779px;"
                                    id="el721pprp81l9" class="animable"></path>
                                <path
                                    d="M92.43,235.43s2.17,5.64,5.32,6.6,6-6.47,6-6.47-4.44,4.74-6.09,4-5.21-4.09-5.21-4.09"
                                    style="fill: rgb(38, 50, 56); transform-origin: 98.09px 238.773px;" id="elzb1vw68fe7g"
                                    class="animable"></path>
                                <path
                                    d="M90.56,204.28a27.35,27.35,0,0,0-6.83,9.53c-1.43,3-2.64,6.45-1.54,9.59a14.22,14.22,0,0,0,2.75,4.22c2.16,2.59,5.19,9.82,7.35,12.41.14-4.61-3.72-12.06-3.31-15.93a27.75,27.75,0,0,1,2.91-8.55,43.93,43.93,0,0,1,5.66-9.82c1.31-1.58,5.52-4.39,1.27-4.73C96,200.77,92.69,202.53,90.56,204.28Z"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 91.2182px 220.505px;"
                                    id="ely8rwmmde12" class="animable"></path>
                                <path d="M87.84,220s-1.49-2.89-3.06-.15c-1.13,2,.5,5.15,1.2,6.32a2.35,2.35,0,0,0,2.09,1Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 86.2311px 222.923px;"
                                    id="eli7bqtegauos" class="animable"></path>
                                <path
                                    d="M107.42,230.44a20.3,20.3,0,0,1-3.69,5.12l-.9.93c-1.86,1.84-3.87,3.3-5.19,3-1.15-.23-2.65-1.41-4.12-2.92-.37-.37-.73-.77-1.09-1.17h0a28.31,28.31,0,0,1-4.09-5.79,9.06,9.06,0,0,1-.59-2.45,57.26,57.26,0,0,1-.26-7.54c0-.89,0-1.6,0-2,0-1.74,6.52-7.79,6.52-7.79a1.15,1.15,0,0,1,.55-.06,10.52,10.52,0,0,1,3.2,1.14c3.95,1.92,9.46,5.73,9.86,7.18C108.23,220.2,108,228.56,107.42,230.44Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 97.7211px 224.644px;"
                                    id="el400z0j2t6p8" class="animable"></path>
                                <path
                                    d="M94.47,222.42c0,.7-.26,1.27-.55,1.27s-.58-.55-.58-1.27.26-1.29.58-1.29S94.47,221.72,94.47,222.42Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 93.905px 222.41px;" id="elf3qnlcy2u6g"
                                    class="animable"></path>
                                <path
                                    d="M101.92,221.14c.32,0,.58.57.58,1.28s-.26,1.27-.58,1.27-.58-.57-.58-1.27S101.6,221.14,101.92,221.14Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 101.92px 222.415px;"
                                    id="eltyp8alc0t27" class="animable"></path>
                                <path d="M90.75,219.27s1-2,4.54-1.39"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 93.02px 218.517px;"
                                    id="el1fwf7e71mjf" class="animable"></path>
                                <path d="M105.21,219.27s-1-2-4.54-1.39"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 102.94px 218.517px;"
                                    id="elggmt7ad770h" class="animable"></path>
                                <path d="M98.66,227.31a1.68,1.68,0,0,0,1.53-1.29s-1.94-3-1.35-5.94"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 99.425px 223.695px;"
                                    id="eld6do8p957lq" class="animable"></path>
                                <path d="M86.58,213a11.69,11.69,0,0,0-1.8,3.62"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 85.68px 214.81px;"
                                    id="elscgwtpyvp0g" class="animable"></path>
                                <path d="M94.94,205s-1.11,1.84-6,5.59a9.32,9.32,0,0,0-.9.74"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 91.49px 208.165px;"
                                    id="el412a5eafbdj" class="animable"></path>
                                <path d="M79.26,263.63q-1,14.26-2,28.54v-.73"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 78.26px 277.9px;"
                                    id="elyh03mtsrusj" class="animable"></path>
                                <path
                                    d="M142.43,232.24a5.94,5.94,0,0,1,5.53.64,8.57,8.57,0,0,1,3.29,4.65,8.16,8.16,0,0,1-.18,5.74,5.42,5.42,0,0,1-4.53,3.25,6.47,6.47,0,0,1-4-1.45C138.8,242.27,136.93,234.61,142.43,232.24Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 145.333px 239.176px;"
                                    id="el8fgvyc5f2lv" class="animable"></path>
                                <path
                                    d="M150.71,200.31c0,.12,0,.91.07,1.05.35,1.54,1.09,5.39-.78,6.17.71,2.53,2.45,19.06,2.22,27.49-.06,2.52-.5,5.51-2.76,6.59-3.81,1.81-7.43-2.6-7-6.05.67-4.71.44-9.51,1-14.27.61-4.94,1.73-10,.5-14.83-.3-.33-2.22-4.14-2.85-5.19a6,6,0,0,1-.66-1.44,35.94,35.94,0,0,1-.36-5.21c.57-1.08,1.31-.08,1.7.63a5.87,5.87,0,0,1,.32,2.71,1.13,1.13,0,0,0,.09.66.82.82,0,0,0,.75.34c1.23-.18,1.18-1.21,1.16-2,0-2.65,0-5.3,0-7.93,0-.44.14-1.63.56-1.67s1.05.3,1.11,1.71c.07,1.59.07,6.49.07,6.49a.33.33,0,0,0,.31.09c.1,0,.14-.18.18-.28.59-2.46,1.19-4.92,1.78-7.38.07-.29.5-.89.81-.89.74,0,.76.86.8,1.11.26,1.32-1.59,6.76-1.9,8,0,.22,0,.55.23.49l2.9-5.85a2.38,2.38,0,0,1,1.57-1.42.25.25,0,0,1,.15,0,.3.3,0,0,1,.12.13c.28.5,0,1.19-.16,1.74s-2.33,4.59-3.1,6.22c-.11.23-.29.75-.07,1s.62-.23.78-.56c.49-1,.95-1.94,1.4-2.92.14-.29.35-.7.68-.63C154.28,194.83,151.51,198.92,150.71,200.31Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 146.551px 214.565px;"
                                    id="el9l5f83p5osr" class="animable"></path>
                                <path
                                    d="M145.33,199.45a12.17,12.17,0,0,1,2.59,2.82,4.63,4.63,0,0,1,.6,3.68,2.72,2.72,0,0,1-.19.47"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 146.999px 202.935px;"
                                    id="ele0yxcng5i6" class="animable"></path>
                                <path d="M117.16,261.92a22.47,22.47,0,0,1,2.11,6.78c.29,2.36.38,4.21-1.23,10.84"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 118.299px 270.73px;"
                                    id="el8nkk1w6kias" class="animable"></path>
                                <path
                                    d="M94.59,208.33a2.63,2.63,0,0,0-.1,1.27,2.78,2.78,0,0,0,1,1.33,45.21,45.21,0,0,0,10.62,6.94,2,2,0,0,1,1.47,2.26l0,7.73a7.55,7.55,0,0,1-.23,2.37c-.56,1.8-1.8,3.25-2.7,4.91a9.91,9.91,0,0,0-1.34,5.19c-.25-1.91,6.43-5.61,8.24-13.13.25-1.06,5.45-7.37,2.33-14.78-3-7.11-7.72-10.17-9.31-10.54a7.08,7.08,0,0,0-6.35,1.22A10,10,0,0,0,94.59,208.33Z"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 104.664px 220.963px;"
                                    id="elv7afnbdp3w" class="animable"></path>
                                <path
                                    d="M101.14,230c-.57.12-1.15.23-1.73.3-2,.25-4.14-.06-5.45-1.52.1,1.31,1,6.26,3.69,6.4S101.14,230,101.14,230Z"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 97.55px 231.981px;"
                                    id="eljecvahqd2r" class="animable"></path>
                                <path
                                    d="M98.54,205.31a15.92,15.92,0,0,0,5.32,6.54c1.69,1.21,3.62,2.08,5.17,3.46,2,1.83,3.31,4.73,2.54,7.36"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 105.167px 213.99px;"
                                    id="el121na02jabvq" class="animable"></path>
                                <path d="M119.44,245.71a9.76,9.76,0,0,0-3.55,6.21,11.34,11.34,0,0,0,.75,6.25"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 117.591px 251.94px;"
                                    id="ellz7ajclvlur" class="animable"></path>
                                <path d="M82.19,262.21c-.16,2.62-1.79,4.89-3.37,7"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 80.505px 265.71px;"
                                    id="el9y7mc4cu5sb" class="animable"></path>
                                <path d="M78.29,282.24a11.13,11.13,0,0,0,7.34,5.2"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 81.96px 284.84px;"
                                    id="eldkgrrzfeddp" class="animable"></path>
                                <path d="M116.55,283.8s-2.69,4-11.83,4.84"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 110.635px 286.22px;"
                                    id="elwzetfkvrzq" class="animable"></path>
                            </g>
                            <g id="freepik--character-2--inject-159" class="animable"
                                style="transform-origin: 402.6px 308.528px;">
                                <path
                                    d="M384.3,248.75s-34.85,10.8-41.41,2.27l.89-43.51h5.29l6.22,30.65,28.56-5.23S387.51,244.27,384.3,248.75Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 364.254px 230.905px;"
                                    id="elt6fmpc58um" class="animable"></path>
                                <g style="clip-path: url(&quot;#freepik--clip-path--inject-159&quot;); transform-origin: 372.312px 249.345px;"
                                    id="el47nw4utc4pl" class="animable">
                                    <path
                                        d="M369.62,250.27a30.17,30.17,0,0,0-5.69,3c2.36.75,4.88-.2,7.24-.95a73.39,73.39,0,0,1,9.51-2.24c.15-.89-1-2.92-1.45-3.71-.82-1.38-1-1.5-2.38-.82C374.34,246.81,372.2,249,369.62,250.27Z"
                                        style="fill: rgb(68, 217, 65); transform-origin: 372.312px 249.345px;"
                                        id="el2l3jmvhl9l8" class="animable"></path>
                                </g>
                                <path
                                    d="M384.3,248.75s-34.85,10.8-41.41,2.27l.89-43.51h5.29l6.22,30.65,28.56-5.23S387.51,244.27,384.3,248.75Z"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 364.254px 230.905px;"
                                    id="elmpkzf5bj0d" class="animable"></path>
                                <path
                                    d="M380.88,249.89,387,287.57c-.16,24.42,11.49,20.75,19.58,20.68,9.35-.08,23.54-9.35,16.58-23.78l2.68-52.23L409.55,231c-5.37-.42-27.37.27-29.12,3.08C375.89,241.37,380.88,249.89,380.88,249.89Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 402.181px 269.686px;"
                                    id="eltqq36mngqsp" class="animable"></path>
                                <g style="clip-path: url(&quot;#freepik--clip-path-2--inject-159&quot;); transform-origin: 403.094px 275.786px;"
                                    id="ela6q2hvx4cwb" class="animable">
                                    <path
                                        d="M381.84,253a56.15,56.15,0,0,0,24.39,33.18,16.05,16.05,0,0,1-3.79-1.09,5.6,5.6,0,0,0-3.86-.21,2.48,2.48,0,0,0-1.49,3.18,3.54,3.54,0,0,0,1.16,1.15,26,26,0,0,0,6.45,3.3,16.92,16.92,0,0,0-6,.46c-.36,1.74,1.58,3,3.11,3.85a19.11,19.11,0,0,1,6.12,5.75,146.3,146.3,0,0,0-16.07.92,3.4,3.4,0,0,1-2.1-.2,3.34,3.34,0,0,1-1.3-2.13,54.73,54.73,0,0,1-2.06-12.77c-.1-2.43,0-4.88-.32-7.29a56.78,56.78,0,0,0-1.06-5.65q-2.33-10.82-3.57-21.81C381.08,253.67,381.84,253,381.84,253Z"
                                        style="fill: rgb(68, 217, 65); transform-origin: 394.639px 278.286px;"
                                        id="elzxhq7o6x8sk" class="animable"></path>
                                    <path
                                        d="M423.15,250a11.52,11.52,0,0,1-3.71-2c.31,1.5,2.55,4.09,3.86,4.89.27.17.66.31.9.08s.4-.82.64-1Z"
                                        style="fill: rgb(68, 217, 65); transform-origin: 422.14px 250.545px;"
                                        id="elxk0y9y9225h" class="animable"></path>
                                </g>
                                <path
                                    d="M380.88,249.89,387,287.57c-.16,24.42,11.49,20.75,19.58,20.68,9.35-.08,23.54-9.35,16.58-23.78l2.68-52.23L409.55,231c-5.37-.42-27.37.27-29.12,3.08C375.89,241.37,380.88,249.89,380.88,249.89Z"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 402.181px 269.686px;"
                                    id="ela1hl9kf3px" class="animable"></path>
                                <path
                                    d="M392.79,230.23a20.09,20.09,0,0,0-2.44,10.49,2.41,2.41,0,0,0,.18.93c.45.89,1.68.89,2.67,1,3.85.49,6.24,4.55,9.87,5.91a1.11,1.11,0,0,0,1.55-.4c1.58-2,2.14-4.81,4.3-6.1.94-.56,2.13-.79,2.78-1.67.74-1,.41-2.44.05-3.66-.59-2-1.25-4.08-2.78-5.47a9.45,9.45,0,0,0-5.7-2,26,26,0,0,0-9,.84C394.31,230.48,392.79,230.23,392.79,230.23Z"
                                    style="fill: rgb(68, 217, 65); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 401.238px 238.949px;"
                                    id="elz6uxgwewddh" class="animable"></path>
                                <path
                                    d="M441.19,255.8a36.9,36.9,0,0,1-5.32-11.7,30.51,30.51,0,0,0-1.82-6.11,11,11,0,0,0-7.89-5.85,4.16,4.16,0,0,0-2.16.1c-1.45.55-2.09,2.22-2.38,3.74a20.26,20.26,0,0,0,.54,9.81c.67,2.16,8.72,17.82,14,23.89C435.7,266.62,439.22,256.39,441.19,255.8Z"
                                    style="fill: rgb(255, 255, 255); transform-origin: 431.223px 250.861px;"
                                    id="el9w79v7c7ed" class="animable"></path>
                                <g style="clip-path: url(&quot;#freepik--clip-path-3--inject-159&quot;); transform-origin: 427.594px 255.04px;"
                                    id="eli75ban117is" class="animable">
                                    <path
                                        d="M425.4,252.73l4.94,9.31c.71,1.33,1.51,2.75,2.89,3.33a39.69,39.69,0,0,1-1.47-9.44,16.16,16.16,0,0,0-.55-4.76c-.2.17-.41-.55-.41-.55-.22.41-.8.42-1.25.33-3.23-.68-5.45-3.56-7.37-6.24a6.07,6.07,0,0,0,1,5.28S425.24,252.42,425.4,252.73Z"
                                        style="fill: rgb(68, 217, 65); transform-origin: 427.594px 255.04px;"
                                        id="el7lvjx671suu" class="animable"></path>
                                </g>
                                <path
                                    d="M441.19,255.8a36.9,36.9,0,0,1-5.32-11.7,30.51,30.51,0,0,0-1.82-6.11,11,11,0,0,0-7.89-5.85,4.16,4.16,0,0,0-2.16.1c-1.45.55-2.09,2.22-2.38,3.74a20.26,20.26,0,0,0,.54,9.81c.67,2.16,8.72,17.82,14,23.89C435.7,266.62,439.22,256.39,441.19,255.8Z"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 431.223px 250.861px;"
                                    id="elt0u8rm2isdl" class="animable"></path>
                                <path
                                    d="M434.25,267c-5.38-10.31-2.78-34.07-2.94-37.89l7.1-.38c.71,0,4,20.26,6.24,28.67,2,7.66.08,15.41-3.46,15.41C438.25,272.81,435.38,269.17,434.25,267Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 438.139px 250.77px;"
                                    id="elrybkm8iadcg" class="animable"></path>
                                <path d="M370.14,240.23c5-7.3,14.81-7.88,14.81-7.88"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 377.545px 236.29px;"
                                    id="el7mbbtlunn47" class="animable"></path>
                                <path d="M350.85,244.32a13.88,13.88,0,0,0,3.47-5"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 352.585px 241.82px;"
                                    id="ela8uq3vc2vg5" class="animable"></path>
                                <path d="M388,278.82c2.85,4.67,21.31,9.66,28.67,8.59"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 402.335px 283.188px;"
                                    id="el0wc65w5de5mi" class="animable"></path>
                                <path d="M393.22,292a38.68,38.68,0,0,0,16-.61"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 401.22px 291.975px;"
                                    id="elb5dki795ai" class="animable"></path>
                                <path d="M417.71,246.69l3.52,4.77c.48.65,1.15,1.38,1.94,1.2"
                                    style="fill: none; stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 420.44px 249.689px;"
                                    id="elfq7ohas00vv" class="animable"></path>
                                <path
                                    d="M443.87,427.63c-.31,1.27-.41,2.78.5,3.73s2.23.93,3.46.91l4.23-.08a11.9,11.9,0,0,0,4.79-.75,4,4,0,0,0,2.55-3.81,6.18,6.18,0,0,0-.6-1.82c-.38-.82-.76-1.65-1.13-2.47C453,413.05,445.87,419.31,443.87,427.63Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 451.525px 425.128px;"
                                    id="elev6p5jddl6a" class="animable"></path>
                                <path
                                    d="M437.91,415.5a61.61,61.61,0,0,1-1.18,14.08c-.22,1.05,0,2.64,1,2.54a1.61,1.61,0,0,0,1-.57,28.69,28.69,0,0,0,7.61-13.17,4.19,4.19,0,0,0-.11-3.23,4.54,4.54,0,0,0-1-1.06C441.84,411.38,437.6,408.69,437.91,415.5Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 441.632px 421.667px;"
                                    id="el5bba2qgpmyc" class="animable"></path>
                                <path
                                    d="M426.3,294.63s5.27,9.16,6.4,11.29,25,33.5,29.58,56.34c.86,4.34-16.75,52.88-16.75,52.88l-4-2.26s2.78-44.27,2.1-47.95-18.25-30.84-18.25-30.84-9.81-7.21-13.85-15.59Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 436.92px 354.885px;"
                                    id="elzrmaadwfv9p" class="animable"></path>
                                <path
                                    d="M426.87,317.58s-3,6.68-3,7.64,16.5,53.1,21.35,65.16q4.6,11.65,8.11,23.84s1.88,2.47.46,5-7.07,4.19-8.23,1.93-12.59-14-17.41-25.68S416.55,364.27,412.69,357a261.79,261.79,0,0,1-13.44-28.71c-4.85-12.41-9.81-25.79-9.81-25.79a49.07,49.07,0,0,0,6.06.17,50.5,50.5,0,0,0,14-2.48c10.54-3.54,15.1-10.32,15.1-10.32s2.61,7.07,3.29,8.44Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 421.88px 356.043px;"
                                    id="el1sxg2rkuufi" class="animable"></path>
                                <path d="M460.52,366.73a14.79,14.79,0,0,1-4.08,4.51"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 458.48px 368.985px;"
                                    id="elztgv28k30za" class="animable"></path>
                                <path d="M461.81,363.82a12.34,12.34,0,0,1-.54,1.43"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 461.54px 364.535px;"
                                    id="elzal5uzyaks" class="animable"></path>
                                <path d="M417.34,302c2.66,4.58,5.15,11.17,4.75,16.45a11.53,11.53,0,0,1-1,2.76"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 419.736px 311.605px;"
                                    id="elz3s0wdfu7kf" class="animable"></path>
                                <path d="M401.24,307.09c.29,2.55.68,6.79.12,9.29a9.83,9.83,0,0,1-4.08,6.3"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 399.462px 314.885px;"
                                    id="elgqvn4wgtbw" class="animable"></path>
                                <path d="M423.92,297.44a9.5,9.5,0,0,1,1.4,2.39,10,10,0,0,0,6.52,4.94"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 427.88px 301.105px;"
                                    id="elonvh99yzdd" class="animable"></path>
                                <path d="M415.43,307.66c3.53,7.72,6.23,15.46,11.71,28.58"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 421.285px 321.95px;"
                                    id="elihm1m5u9i5" class="animable"></path>
                                <path d="M413.55,303.71c.3.6.59,1.2.88,1.8"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 413.99px 304.61px;"
                                    id="elqhms2bzcww" class="animable"></path>
                                <path d="M442.93,362.77a36.67,36.67,0,0,0,6.11,8.52"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 445.985px 367.03px;"
                                    id="elwvvgo4jj01s" class="animable"></path>
                                <path d="M444.6,365.65a41.58,41.58,0,0,0,5.71,13.76"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 447.455px 372.53px;"
                                    id="elqcs71su7tj" class="animable"></path>
                                <path d="M419.74,365.9c-7.79-16.62-16.1-33.11-26.31-58.24"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 406.585px 336.78px;"
                                    id="elq28qu9goga" class="animable"></path>
                                <path d="M421.5,370.73c-.19-.58-.39-1.16-.6-1.75"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 421.2px 369.855px;"
                                    id="elwd1fr07hep" class="animable"></path>
                                <path d="M448.43,421.83c-2-2.61-16.58-23-20.2-32.24-2.41-6.16-4.23-10.51-6-16.65"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 435.33px 397.385px;"
                                    id="elwm8vknk7stc" class="animable"></path>
                                <line x1="442.93" y1="382.59" x2="449.86" y2="402.96"
                                    style="fill: none; stroke: rgb(255, 255, 255); stroke-linecap: round; stroke-linejoin: round; transform-origin: 446.395px 392.775px;"
                                    id="elzyoggv0s6d" class="animable"></line>
                                <path
                                    d="M438.26,228.74l-2.1.17a18.18,18.18,0,0,1-8-.37c-1.67-.41-5.54-1.61-6-1.69a34.51,34.51,0,0,0-3.48-.56c-3.53-.21-1.74-1.53-.27-1.47,1.94.09,2.59.05,4.08.16-.18-.1-.73-.21-.74-.64,0-1.05,1.38-1,1.38-1s-1.51-.64-1.3-1.43,1.22-1,1.86-.94c0,0-.85-.41-.81-.85.18-1.7,3.67-1.82,3.67-1.82a10.44,10.44,0,0,1-2.35-1.45,2.19,2.19,0,0,1-.53-1,1,1,0,0,1,1.44-1,31.45,31.45,0,0,1,2.61,1.94c1.08.77,2.33,1.26,3.47,1.95a10.33,10.33,0,0,1,2.63,3.45C434,222.47,438.26,228.74,438.26,228.74Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 427.444px 221.968px;"
                                    id="el7t7xayzu1br" class="animable"></path>
                                <path
                                    d="M343.78,207.51V202a27.47,27.47,0,0,1,1.2-8.16c.46-1.46,1-2.73,1.49-2.92.91-.33,1.31,3.36,1.31,3.36a55.07,55.07,0,0,1-1.31-9c0-3.21,4.32,10.12,4.32,10.12l-1.72,12.11Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 347.285px 196.146px;"
                                    id="el2b02htvsgwa" class="animable"></path>
                                <path d="M349,198.55a3.31,3.31,0,0,0,1.12-1.58"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 349.56px 197.76px;"
                                    id="el1gjx1y8m54x" class="animable"></path>
                                <path
                                    d="M390.88,219a21.45,21.45,0,0,1,3,10.37c.18,6.08,7.22,14.59,9.23,15s3.87-9.6,3.78-12.63-1.21-11.4-1.21-11.4S396.05,213.06,390.88,219Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 398.887px 230.525px;"
                                    id="el0mqv9tjsh7yj" class="animable"></path>
                                <path d="M393.71,227.05s9.23,12.59,12.85-.21S396.41,230.34,393.71,227.05Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 400.436px 227.221px;"
                                    id="el2u9spq2ldxx" class="animable"></path>
                                <path
                                    d="M409.29,218c-.49,7.47-3.9,11.67-7.83,12.41-3.59.66-8.84-3-11.46-8.43h0c-.2-.13-3.39-2.34-4.15-2.88a3,3,0,0,1-1.28-2.47,2.33,2.33,0,0,1,1.58-2.08l.09,0a2.38,2.38,0,0,1,1.35.1c-.66-2.55-1.2-5.14-1.61-7.75.19-6,2.18-10.9,8.58-11.38s11.75,3.1,12,5.68c.18,2,.83,7.29,1.41,12.76C408.13,215.38,409.4,216.32,409.29,218Z"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 396.933px 212.982px;"
                                    id="elopppgxjbnfo" class="animable"></path>
                                <path d="M406.56,209.36s-4.12-1.89-3.42,4.25c.14,1.21,2.39,3,2.39,3s-.58,1.81-1.65,1.81"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 404.81px 213.753px;"
                                    id="elmklutybwhe" class="animable"></path>
                                <path d="M398.6,211.46s-2.1-1.28-3.54-.49a4.21,4.21,0,0,0-1.84,1.55"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 395.91px 211.616px;"
                                    id="el3e7uv8v48zp" class="animable"></path>
                                <path
                                    d="M397.4,215c.16.74,0,1.4-.43,1.49s-.85-.45-1-1.19,0-1.4.44-1.49S397.25,214.25,397.4,215Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 396.687px 215.15px;"
                                    id="el58clu8jc2fw" class="animable"></path>
                                <path
                                    d="M405.52,212.84c.16.74,0,1.4-.43,1.49s-.85-.45-1-1.18,0-1.41.43-1.49S405.37,212.11,405.52,212.84Z"
                                    style="fill: rgb(38, 50, 56); transform-origin: 404.807px 212.996px;"
                                    id="el8v2qsyjiecj" class="animable"></path>
                                <path
                                    d="M385.5,199.15a5.28,5.28,0,0,0-1.46,2.63,16.6,16.6,0,0,0,1.53,12.71,6.2,6.2,0,0,1,2,.08c.7.18,1.6,1.38,1.93,2a5.92,5.92,0,0,1,.49,2.09c-.16-1.9-.31-3.79-.47-5.69a6.23,6.23,0,0,1,.1-2.28v0c.49-1.56-.05-5.24.09-8.53,4.15,5.07,10.18,4.17,12.18,4,3-.25,5.56-3.32,5.4-5.51s-.75-7.83-10.64-8.41a10.46,10.46,0,0,0-6.28,1.31,5.12,5.12,0,0,0-2.25,3.54c-.14.92.21,1-.49,1.45S386.19,198.56,385.5,199.15Z"
                                    style="fill: rgb(38, 50, 56); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 395.354px 205.421px;"
                                    id="el2r6t70z0qfj" class="animable"></path>
                                <path d="M398.6,221.94s1.47,1.62,4.54.55"
                                    style="fill: rgb(255, 255, 255); stroke: rgb(38, 50, 56); stroke-linecap: round; stroke-linejoin: round; transform-origin: 400.87px 222.398px;"
                                    id="el17olvqrbk9b" class="animable"></path>
                            </g>
                            <defs>
                                <filter id="active" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                    </feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                </filter>
                                <filter id="hover" height="200%">
                                    <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2">
                                    </feMorphology>
                                    <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
                                    <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE">
                                    </feComposite>
                                    <feMerge>
                                        <feMergeNode in="OUTLINE"></feMergeNode>
                                        <feMergeNode in="SourceGraphic"></feMergeNode>
                                    </feMerge>
                                    <feColorMatrix type="matrix"
                                        values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
                                    </feColorMatrix>
                                </filter>
                            </defs>
                            <defs>
                                <clipPath id="freepik--clip-path--inject-159">
                                    <path
                                        d="M384.3,248.75s-34.85,10.8-41.41,2.27l.89-43.51h5.29l6.22,30.65,28.56-5.23S387.51,244.27,384.3,248.75Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                                </clipPath>
                                <clipPath id="freepik--clip-path-2--inject-159">
                                    <path
                                        d="M380.88,249.89,387,287.57c-.16,24.42,11.49,20.75,19.58,20.68,9.35-.08,23.54-9.35,16.58-23.78l2.68-52.23L409.55,231c-5.37-.42-27.37.27-29.12,3.08C375.89,241.37,380.88,249.89,380.88,249.89Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                                </clipPath>
                                <clipPath id="freepik--clip-path-3--inject-159">
                                    <path
                                        d="M441.19,255.8a36.9,36.9,0,0,1-5.32-11.7,30.51,30.51,0,0,0-1.82-6.11,11,11,0,0,0-7.89-5.85,4.16,4.16,0,0,0-2.16.1c-1.45.55-2.09,2.22-2.38,3.74a20.26,20.26,0,0,0,.54,9.81c.67,2.16,8.72,17.82,14,23.89C435.7,266.62,439.22,256.39,441.19,255.8Z"
                                        style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round"></path>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </center>

        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
