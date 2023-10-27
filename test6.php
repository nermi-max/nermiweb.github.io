<?php include('inc-head.php') ?>

<style>
    /* HTML: <div class="ribbon">Your content</div> */
    .ribbon {
        --f: 15px;
        /* control the folded part */

        position: absolute;
        top: 0;
        right: 0;
        padding: .1em 1.8em;
        background: #BD1550;
        /* the main color  */
        border-bottom: var(--f) solid #0007;
        clip-path: polygon(100% calc(100% - var(--f)), 100% 100%, calc(100% - var(--f)) calc(100% - var(--f)), var(--f) calc(100% - var(--f)), 0 100%, 0 calc(100% - var(--f)), 999px calc(100% - var(--f) - 999px), calc(100% - 999px) calc(100% - var(--f) - 999px));
        transform: translate(calc((1 - cos(45deg))*100%), -100%) rotate(45deg);
        transform-origin: 0% 100%;
    }
</style>
<title>Document</title>

</head>

<body>

    <div>
        <?php include('inc-nav.php') ?>

        <header>

            <h2>"We are still the only company in the world that has new redesigned parts and circuit boards...."
                Tom Norment, CEO
            </h2>
            <img src="wie4.png" alt="" />
            <h1 style="position: absolute; left: 60%;">NANOMETRICS NANOSPEC 9300</h1>


        </header>

        <div class="container">

            <div class="box_1">
                <div class="box d">





                    <div class="box f">

                        <?php

                        $random = rand(1, 14);
                        if ($random == 1) {
                            echo '<a href="quote.php?ref=6400&t=KLA TENCOR SURFSCAN 6400" value="1" selected><img src="img/met/1600-3.png" class="img-fluid">TENCOR SURFSCAN 6400</a>';
                        }
                        if ($random == 2) {
                            echo '<a href=""><img src="img/met/p17-s.png" class="img-fluid">TENCOR P-17</a>';
                        }
                        if ($random == 3) {
                            echo '<a href=""><img src="img/met/4500-s.png" class="img-fluid">KLA TENCOR 4500</a>';
                        }
                        if ($random == 4) {
                            echo '<a href="quote.php?ref=6420&t=KLA TENCOR SURFSCAN 6420"><img src="img/met/6420-s.png" class="img-fluid">TENCOR SURFSCAN 6420</a>';
                        }
                        if ($random == 5) {
                            echo '<a href=""><img src="img/met/ADE-s.png" class="img-fluid">KLA ADE</a>';
                        }
                        if ($random == 6) {
                            echo '<a href=""><img src="img/met/ade8300-s3.png" class="img-fluid">KLA ADE 8300</a>';
                        }
                        if ($random == 7) {
                            echo '<a href=""><img src="img/met/ade9700-s.png" class="img-fluid">KLA ADE 8300</a>';
                        }
                        if ($random == 8) {
                            echo '<a href=""><img src="img/met/as500.png" class="img-fluid">TENCOR ALPHASTEP 500</a>';
                        }
                        if ($random == 9) {
                            echo '<a href=""><img src="img/met/dry-s.png" class="img-fluid">DRYDEN QIII</a>';
                        }
                        if ($random == 10) {
                            echo '<a href=""><img src="img/met/flex-s.png" class="img-fluid">TENCOR FLEXUS 2320</a>';
                        }
                        if ($random == 11) {
                            echo '<a href=""><img src="img/met/ade9700-b.png" class="img-fluid">ADE 9700</a>';
                        }
                        if ($random == 12) {
                            echo '<a href=""><img src="img/met/2.png" class="img-fluid">KLA CANDELA CS2</a>';
                        }
                        if ($random == 13) {
                            echo '<a href=""><img src="img/met/20.png" class="img-fluid">KLA CANDELA CS20</a>';
                        }
                        if ($random == 14) {
                            echo '<a href="quote.php?ref=7200&t=ADE / KLA TENCOR 7200 SURFSCAN" value="1" selected><img src="img/met/7200 class="img-fluid">TENCOR SURFSCAN 7200</a>';
                        }
                        ?>
                    </div>
                </div>



                <form>
                    <button style="margin-right: 4%;" type="button" class="btn btn-danger">Refresh</button><button
                        style="margin-right: 4%;" type="button" class="btn btn-success">Bid</button><button
                        type="button" class="btn btn-success">Find</button>
                </form>
                <form>

                    <div style="border: 2px dotted green; padding: 10px; border-radius: 5px;">
                        <div style="margin-top: 8%;"></div><select class="form-select"
                            aria-label="Default select example">
                            <option>Select the Tool:</option>
                            <option value="1" selected>One</option>
                            <option value="2" selected>Two</option>
                            <option value="3" selected>Three</option>
                        </select>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Email:</span>
                            <input type="text" class="form-control" aria-label="Sizing example input"
                                aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="addon-wrapping">Mobile:</span>
                            <input type="text" class="form-control" placeholder="" aria-label="Mobil:"
                                aria-describedby="addon-wrapping">
                        </div>
                        <div style="margin-top: 8%;"></div>
                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>

                </form>
            </div>


        </div>
        <div class="box_2">
            <h2>- KLA TENCOR WAFER INSPECTION TOOLS - ADE COMPLETE STATIONS - TENCOR CANDELA METROLOGY SYSTEM -
                NANOMETRICS NANOSPEC REFURBISHED -</h2>
            <p>KLA's wafer inspection and metrology systems provide data for chip manufacturers to increase yield.
                They also help substrate manufacturers manage quality throughout the wafer. </p>
            <p>Some Of Refurbished Metrology Systems We Offer:</p>

            <ul style="list-style-type: none" ;>
                <li><a href="quote.php?ref=6420&t=KLA TENCOR SURFSCAN 6420&bid=yes" class="img-fluid">KLA TENCOR
                        SURFSCAN
                        6420</a>
                    <div class="ribbon">Your text content</div>
                </li>
                <li><a href="quote.php?ref=6400&t=KLA TENCOR SURFSCAN 6400" class="img-fluid">KLA TENCOR SURFSCAN
                        6400</a></li>

                <li><a href="quote.php?ref=2&t=KLA CANDELA CS2" class="img-fluid">KLA CANDELA CS2</a></li>
                <li><a href="quote.php?ref=20&t=KLA CANDELA CS20" class="img-fluid">KLA CANDELA CS20</a></li>

                <li><a href="quote.php?ref=6200&t=KLA TENCOR SURFSCAN 6200">KLA TENCOR SURFSCAN 6200</a></li>
                <li><a href="quote.php?ref=6220&t=KLA TENCOR SURFSCAN 6220">KLA TENCOR SURFSCAN 6220</a></li>
                <li><a href="quote.php?ref=500&t=PROFILOMETER ALPHASTEP 500">PROFILOMETER ALPHASTEP 500</a></li>
                <li><a href="quote.php?ref=2320&t=KLA FLEXUS 2320 THIN FILM STRESS
                        MEASUREMENT SYSTEM">KLA FLEXUS 2320 THIN FILM STRESS
                        M. SYSTEM</a></li>
                <li><a href="quote.php?ref=p-11&t=KLA TENCOR P-11 LONG SCAN PROFILER">KLA TENCOR P-11 LONG SCAN
                        PROFILER</a></li>
                <li style="
text-transform:uppercase;"><a href="quote.php?ref=qIII&t=Dryden Pentagon QIII Surface
                        Particle Detector">Dryden Pentagon QIII Surface
                        P. Detector</a></li>
                <li><a href="quote.php?ref=8300&t=ADE KLA TENCOR 8300">ADE KLA TENCOR 8300</a></li>
                <li><a href="quote.php?ref=9500&t=ADE KLA 9500">ADE KLA 9500</a></li>
                <li><a href="quote.php?ref=9530&t=ADE 9530">ADE KLA 9530 ( 8” super thin w.)</a></li>
                <li><a href="quote.php?ref=9700&t=ADE KLA TENCOR 9700 ULTRAGAGE">ADE KLA TENCOR 9700 ULTRAGAGE</a></li>
                <li><a href="quote.php?ref=7200&t=ADE KLA  TENCOR 7200 SURFSCAN">ADE KLA TENCOR 7200 SURFSCAN</a>
                </li>
            </ul>


            <p>The complete list of Wafer Inspection Equipment we can offer, you can find <a href="">here</a>.</p>
            <div class="wrapper">
                <div class="box a">What is the difference between optical and e-beam inspection?</div>
                <div class="box b">What are the different types of wafer defects?</div>
                <div class="box c">What are the different methods used for silicon wafer manufacturing?</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="box_3">

            <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo tempore tempor.</h2>
            <p>

                Candela Instruments is a company that develops inspection technology for opaque and transparent
                films and substrates. Their technology, called optical surface analysis (OSA), is a
                multi-channel
                laser-based defect inspection system.</p>
            <p> Candela Instruments has installed more than 180 tools.</p>
            <p>
                Candela Instruments' technology has been used in the hard disk drive (HDD) industry to
                characterize
                surface defects. Their technology has also been used in the medical industry to create
                transparent
                film dressings for wound treatments.</p>
            <p>
                Candela Instruments' surface defect inspection systems can detect and classify a wide range of
                critical defects on compound semiconductor substrates and hard disk drives. These systems have
                high
                sensitivity at production throughputs.
            </p>
            <div class="wrapper">
                <div class="box a">What is the difference between optical and e-beam inspection?</div>
                <div class="box b">What are the different types of wafer defects?</div>
                <div class="box c">What are the different methods used for silicon wafer manufacturing?</div>
            </div>
        </div>
        <div class="box_4">

            <div class="box d">

                <div class="box f">
                    <ul style="list-style-type: none" ;>
                        <li><a href="quote.php?ref=9300&t=NANOSPEC 9300">NANOSPEC 9300<img src="9300.png" alt=""
                                    class="img-fluid"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="container">
        <h2 class="section-title">Trending now</h2>

        <div class="media-container">
            <div class="media-scroller">

                <!--   Group 1 -->
                <div class="media-group" id="1">
                    <div class="media-element">

                        <img src="https://brumleysouth.com/sites/default/files/ade-1.png" alt="">
                    </div>

                    <div class="media-element">
                        <img src="/img/met/4500-s.png" alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1641841344411-49dbd02896f4?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1643223723262-7ce785730cf6?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODcyOA&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1640938776314-4d303f8a1380?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <a class="next" href="#2" aria-label="next">
                        <svg>
                            <use href="#next"></use>
                        </svg>
                    </a>
                </div>

                <!-- Group 2   -->
                <div class="media-group" id="2">
                    <a class="previous" href="#1">
                        <svg>
                            <use href="#previous"></use>
                        </svg>
                    </a>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1641259041823-e09935369105?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1642543492481-44e81e3914a7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1641118961077-440391095cdc?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc2Mw&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1640767014413-b7d27c58b058?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1640948612546-3b9e29c23e98?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <a class="next" href="#3" aria-label="next">
                        <svg>
                            <use href="#next"></use>
                        </svg>
                    </a>
                </div>

                <!-- Group 3   -->
                <div class="media-group" id="3">
                    <a class="previous" href="#2">
                        <svg>
                            <use href="#previous"></use>
                        </svg>
                    </a>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1642484865851-111e68695d71?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1642237778207-24985a0bf876?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1642177584449-fa0b017dccc7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODc5NQ&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1643249960396-d39d2a63ce8a?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0Mw&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1641424222187-1c336d21804c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0OA&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <a class="next" href="#4" aria-label="next">
                        <svg>
                            <use href="#next"></use>
                        </svg>
                    </a>
                </div>

                <!--  Group 4  -->
                <div class="media-group" id="4">
                    <a class="previous" href="#3">
                        <svg>
                            <use href="#previous"></use>
                        </svg>
                    </a>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1640998483268-d1faffa789ad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODkwNA&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1642034451735-2a8df1eaa2c0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg4OQ&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1640808238224-5520de93c939?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg4OQ&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1643039952431-38adfa91f320?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0OA&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <div class="media-element">
                        <img src="https://images.unsplash.com/photo-1643148636637-58b3eb95cdad?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHx8MTY0MzM5ODg0OA&ixlib=rb-1.2.1&q=80&w=400"
                            alt="">
                    </div>
                    <a class="next" href="#1" aria-label="next">
                        <svg>
                            <use href="#next"></use>
                        </svg>
                    </a>
                </div>

                <div class="navigation-indicators">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <div style="margin-bottom: 4%"></div>
    <footer>
        <div class="container">
            <div class="rapper">
                <div class="boxx aa">Metrology</div>
                <div class="boxx bb">Advances</div>
                <div class="boxx cc">Customer Service</div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

</body>


</html>