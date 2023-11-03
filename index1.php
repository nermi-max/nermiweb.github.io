<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Video Background</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', Playfair Display, sans-serif;

        }

        a:hover {
            color: #9AAB61;
        }

        svg {
            opacity: 1;

        }

        .home {
            height: 100vh;
            position: relative;
        }

        video {
            object-fit: cover;
            position: absolute;
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
            position: fixed;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 15%;
            bottom: 0;
            right: 15%;
            z-index: 2;
            background: rgb(12, 8, 8);
            background: -moz-linear-gradient(180deg, rgba(12, 8, 8, 0) 0%, rgba(12, 9, 8, 0.028448879551820738) 86%);
            background: -webkit-linear-gradient(180deg, rgba(12, 8, 8, 0) 0%, rgba(12, 9, 8, 0.028448879551820738) 86%);
            background: linear-gradient(180deg, rgba(12, 8, 8, 0) 0%, rgba(12, 9, 8, 0.028448879551820738) 86%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#0c0808", endColorstr="#0c0908", GradientType=1);
            position: fixed;
        }

        .home-content {
            width: 85%;
            margin: 0 auto;
            padding: 50% auto;
            position: relative;
            top: 320px;
            color: #fff;
            z-index: 3;
        }

        .home-content h1 {
            font-family: 'Poppins', Playfair Display, serif;
            text-align: center;
            text-transform: uppercase;
            font-size: 85px;
            line-height: .9;
            font-weight: 300;
        }

        .middle-line {
            height: 200px;
            width: 2px;
            background: #fff;
            margin: 40px auto;
        }

        .home-content button {
            display: block;
            font-size: 20px;
            border: 1px solid #f1f1f1;
            border-radius: 5px;
            background: transparent;
            color: #fff;
            margin: 50px auto 0;
            padding: 16px 30px;
            cursor: pointer;
        }

        nav {
            height: 170px;
            width: 100%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 1), rgba(0, 0, 0, .2));
        }

        .story {
            width: 100%;
            padding-top: 25%;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6));
            z-index: 10;
        }

        @layer demo {
            .highlighted-text-shadow {
                text-shadow:
                    /* regular text-shadow */
                    0 .15ch 15px var(--shadow),
                    /* text-shadow highlight */
                    0 -2px 0 var(--highlight);
            }
        }



        * {
            box-sizing: border-box;
            margin: 0;
        }





        h1 {
            font-size: 20vi;
            letter-spacing: -.15ch;
            line-height: .75;
            text-align: left;
        }


        }
    </style>
</head>

<body>


    <div class="home">
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="logo3.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <video autoplay muted loop>
            <source src="vid4.mp4" type="video/mp4" />
        </video>
        <div class="overlay"></div>
        <div class="home-content">
            <h1 class="highlighted-text-shadow">
                <span style="color: #FFEFB8;">One</span> Life,<br> <span style="color: #FFEFB8;">One</span> Design.
            </h1>
            <div style="text-align: center; ">by Nermi Demiro</div>
            <div class="middle-line"></div>
            <button>DISCOVER</button>
            <div class="container">
                <div class="story">
                    <div class="row">
                        <div class="col">
                            <div class="img-fluid"><img src="comm1.png" alt="" /></div>
                        </div>
                        <div class="col">
                            <p>
                                There has been a big old house, inhabited for centuries, mysterious with its
                                secrets,
                                truths
                                and
                                prevaricates;
                                but now empty, a sick silence reigned there, waiting in the shade
                                of
                                tall linden trees, for the children to return.</p>
                            <p>The house was a spacious building, long time ago several families could live
                                comfortably,
                                and on the
                                ground floor there were bathrooms and, in old times, areas for horses. With high
                                ceilings and unusually deep sunken floors, the only miracle was the small iron door
                                that led into that twilight, strange world.

                            </p>
                            <p>While the basement was built of large stones, the living floor was made of
                                <em>cerpic</em>, loam
                                mixed with chaff. Stones in basement, beautifully cut and carved, stood in stark
                                contrast to the
                                ordinary
                                earthen plain dirt floors, which crumbled, beginning to slowly disappear.<!--krov-->
                            </p>
                            <p>My last time that I entered the House was when I visited my <em>amidza</em>, who
                                still
                                lived there permanently.
                                There was a strong wind, smoke was coming out of the old chimney as the only sign of
                                life,
                                and he was slowly peeling some old potatoes for soup, when I walk in.</p>
                            <p>His curly black hair, always beautifully trimmed and combed, was now long and almost
                                gray, and his beard was, in an almost unusual contrast, completely black.</p>
                            <p>"Neno...?", he said almost with relief.
                                That's the nickname my family used to call me.<br>
                                "Came in", and showed the chair with his hand. "What kind of good news are you
                                bringing
                                now"?, he said bringing the little skemlia closer and sitting down by the fire. When
                                he
                                opened the shutters, fire lit up his face. He looked much older and as if time had
                                overtaken him.<br>
                                "I'm afraid they're not that good. The military police started throwing people out
                                of
                                the house and onto
                                the street; nobody asks what they're going to do, it doesn't matter how old they are
                                or
                                whether they're sick..."</p>
                            <p>While I was talking, he was slowly cutting the potatoes into slices. When they are
                                sliced, they are covered with oil, with a small amount of oil, add salt... and put
                                them
                                in the oven.</p>
                            <p><em>"Dilja?"</em>, I asked interestedly.</p>
                            <p>He nodded.</p>
                            <p>"They posted guards in front of every house. They look suspiciously at everyone who
                                comes
                                in and out..."</p>
                            <p>I continued in the same tone, and he took the <em>mašice</em> and worked on the fire. He
                                took another piece of wood and put it there on the fire and closed the
                                shutter. Soon the fire started to crackle. In the semi-dark room, an almost domestic
                                atmosphere, along with the smell of baked potatoes, spread throughout the room. He stood
                                up and retrieved an egg from the old kitchen cabinet, and showed it to me as if it were
                                some kind of elusive prey. </p>
                            <p>"The neighbor lady..", he said absentmindedly, and spilled the egg on the potato, then
                                put it back in the oven.</p>
                        </div>
                        <div class="col">
                            <div style="position: fixed; left: 65%; bottom: 15%;">
                                <svg width="250%" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="450 150 800 300">
                                    <defs id="defs60">
                                        <filter id="water">
                                            <feTurbulence baseFrequency="0.02" numOctaves="1" seed="3" type="turbulence"
                                                result="turbulence">
                                                <animate attributeName="baseFrequency" values="0.02; 0.01; 0.02;"
                                                    repeatCount="indefinite" dur="20s" begin="0"></animate>
                                            </feTurbulence>
                                            <feDisplacementMap in="SourceGraphic" in2="turbulence" xChannelSelector="R"
                                                yChannelSelector="B" scale="20" result="displacement">
                                            </feDisplacementMap>
                                        </filter>
                                        <g id="bonsai">
                                            <path d="m509.21 255.42l9.98-3.669c-5.853 10.179-9.98 3.669-9.98 3.669"
                                                class="leaf" fill="#8a0" fill-rule="evenodd" />
                                            <path
                                                d="m607.32 207.45c-53.36 17.344.966 49.545-1.029 52.45-2.232 9.541-12.926 16.338-20.529 18.564-7.604 2.226-9.981-2.923-9.283-14.09-1.919 7.154-2.291 15.531 3.773 15.967 6.06.436 1.153 5.75-2.309 7.822-3.462 2.072-7.22 3.288-13.195 4.135-.477-7.418-5.383-14.649-5.645-31.14-1.309 12.475 4.054 22.2 3.039 29.35-3.685-4.02-6.972-8.226-30.963-5.521 28.21-.98 29.508 9.318 29.508 9.318 15.464 2.919 27.493-7.898 28.23-11.742 11.717-3 16.353-2.234 18.252 3.369 4.455 11.08 16.972 22.788 15.6 34.527-.837 9.476-33.82 20.869-35.07 30.21.02.353.069.69.139 1.014h-32c0 0-9.1 3.353-10.08 9.04-.98 5.688 10.08 18.527 10.08 18.527h41.35 41.35c0 0 11.06-12.84 10.08-18.527-.98-5.688-10.08-9.04-10.08-9.04h-21.523c5.43-9.146 19.366-20.15 18.771-29.963-.669-7.685-14.198-23.429-17.03-30.611-2.149-7.85 2.493-15.659 8.381-20.473 6.463-4.984 24.91-.438 24.91-.438 0 0 8.28-9.79 11.03-16.256-4.06 8.205-13.742 15.431-23.16 11.969-6.851-2.655-17.848-.58-17.848-.58 0 0-10.649 16.848-13.713 8.547-2.297-5.373 4.072-9.02 3.324-15.316-.748-6.298-54.12-30.941-4.369-51.12"
                                                id="path8" fill="#483e37" fill-rule="evenodd" />
                                            <g id="g12" fill="#8a0" color-rendering="auto"
                                                color-interpolation-filters="linearRGB" shape-rendering="auto"
                                                fill-rule="evenodd" image-rendering="auto" color-interpolation="sRGB"
                                                color="#000">
                                                <path id="path14" isolation="auto" mix-blend-mode="normal"
                                                    d="m546.57 275.03c1.955-1.331 5.145-1.087 5.839 1.546.018 1.726 4.089 2.503.971 4.02-1.776.765-3.424.879-3.971 2.744-2.8 1.607-6.657-.227-9.159 2.132-.948 2.025-3.81-.127-5.707.568-4.12.185-8.115 1.586-12.26 1.431-5.627-2.553-11.934 1.194-17.546-1.366-2.24-1.829-5.261.216-7.755-1.479-2.642-1.157-5.234-2.9-8.246-2.708-.924-1.298 2.986-3.221.043-2.629-2.677.083-.963-3.278 1.154-2.839 1.822.122 2.906-1.839 2.799-2.765 5.6.68 10.513-3.914 16.13-2.575 2.349 1.117 4.385-1.573 6.934-1.126 4.103-.161 8.099 1.284 12.209.998 4.12-1.949 8.311.723 12.378 1.46 2.284 1.052 5.942-1.733 6.624 1.804l-.108.408-.325.374"
                                                    solid-opacity="1" solid-color="#000000" />
                                                <path id="path16" isolation="auto" mix-blend-mode="normal"
                                                    d="m593.85 235.77c-4.577 1.855-8.914 3.8-14.05 1.421-3.462 2.758-7.06 4.684-11.377 5.763-1.361 2.22 0 3.932-3.61 2.984-4.794 1.25 1.893 4.377.735 3.684-3.512 5.058 10.347 2.42 4.363 4.835-5.43 2.584-10.981 3.274-16.8 3.626-4.906.988-8.889.103-12.507 3.639-3.973-.364-9.283 3.89-2.712 4.769 2.987.808 5.31 6.275 8.482 2.713 4.301.333 9.68-3.883 11.916.699 4.354-4.242 6.789 4.996 10.764.784 6.02.812 13.294-4.208 17.521-5.52-.234-2.604 8.306-4.77 2.737-5.748-2.461-.898 5.696-5.118 7.461-2 6.27 1.858 13.07 1.991 19.449 4.127 4.703-.652 9.601-1.47 14.271-2.501 4.525-1.545 9.105 4.418 13.952 2.784 7.836 3.421 15.202-5.061 23.14-3.145 5.079-.874 10.649 6.557 14.451 2.432 4.233-.6 8.04-1.03 10.762-3.86 5.849-1-1.755-10.191-5.34-6.623-2.634-5.284-9.402-2.716-13.196-6.095-4.839.468-10.3-.966-15.212.532-2.842 2.15-5.308 7.212-8.913 2.427-4.376-3.833-9.887-.695-12.709 1.369 1.085.6 1.382-4.786-2.258-3.418-4.197 2.378-2.659-3.874-7.39-3.284-5.171-.963-11.414 1.831-15.766-1.559-4.214-3.73-10.253-.353-14.608-3.84-1.134-.499-2.32-.923-3.554-.992"
                                                    solid-opacity="1" solid-color="#000000" />
                                                <path id="path18" isolation="auto" mix-blend-mode="normal"
                                                    d="m630.21 202.98c1.835-1.619 4.212-.051 3.04 2.219-.074 1.374-1.909 2.762.168 3.151 1.274 2.039-2.682 2.123-4.02 2.587-.501.433-.73 2.585-2.388 1.81-1.737-.855-3.336.55-4.02 1.641-4.24-1.111-8.438-2.639-12.879-2.63-2.338-1.129-5.03-1.031-7.452-.241-2.285.674-4.644-.267-6.473-1.626-3.719 1.276-7.514-.231-11.12-1.146-1.291-.724-3.823.212-4.267-1.103.244-1.037 2.652-2.554.168-1.971-2.062.488-1.367-2.624.512-1.945 1.906-.377 5.207.827 6.068-1.434-.478-1.51 3.501.381 3.133-2.024-.389-3.124 3.281.216 4.499-1.311 4.316-2.081 9.1-.432 13.589-.066 1.981.536 3.752-.635 5.67-.46 2.177.697 2.903 3.831 5.494 3.667 1.998-.564 3.985-.066 6.05-.006 1.185.284 3.767-.169 4.226.889"
                                                    solid-opacity="1" solid-color="#000000" />
                                                <path id="path20" isolation="auto" mix-blend-mode="normal"
                                                    d="m594.19 222.72c1.924-.279 5.296-1.422 6.281.741-.476 1.185-.943 1.699.448.797 1.847.788.147 5.095-1.839 4.839-1.328 1.246-2.046 3.816-4.593 2.781-2.57-.744-4.896.326-6.574 2.14-3.158.273-4.861-3.528-7.985-3.572-3.215-.007-5.67 3.572-9.02 2.392-2.568-.657-5.12-2.986-7.866-1.71-3.05 1.908-7.605 1.966-10.05-.959-2.441-1.429-1.94 5.083-4.54 2.483-1.138-2.059-3.379-3.104-5.442-1.971-2.138.007-2.492-3.31-1.559-3.338-2.156.431-4.445-1.302-5.05-3.308 1.913.3 3.912-1.059 5.03-2.96 1.362-2.396 4.045-2.887 6.543-2.205 2.769.788 3.875-2.224 6.182-2.785 2.467-.624 4.771.864 7.154 1.098 2.697-.864 5.38-.303 7.827 1.151 2.566 1.744 5.27-.162 7.995.143 3.079.227 6.388.801 8.774 2.906 2.044-.259 3.806-3.133 6.378-1.74 1.246.261 2.78 1.786 1.913 3.077"
                                                    solid-opacity="1" solid-color="#000000" />
                                            </g>
                                        </g>
                                    </defs>
                                    <use xlink:href="#bonsai" id="use4201"
                                        transform="matrix(.91364 0 0 .91364 51.06-6.234)" width="1200" height="600" />
                                    <use id="mirror" xlink:href="#bonsai" style="filter: url(#water)"
                                        transform="matrix(1 0 0-.445 51.06 509.91)" width="1200" height="600"
                                        opacity=".5" />
                                </svg>


                                <ul style="text-align: center; list-style-type: none;">
                                    <li><a href="">Web Design</a></li>
                                    <li><a href="">And Who is Nermi?</a></li>
                                    <li><a href="">Contact Me</a></li>
                                </ul>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script>var tl = new TimelineMax({ delay: 0.5, repeat: -1, repeatDelay: 2 });

        tl.set('svg', { opacity: 1 })
            .set('.leaf', { y: 30, opacity: 0 })
            .set('#mirror', { x: -2 })
            .to('.leaf', 1, { y: 32, opacity: 1 }, 0)
            .to('.leaf', 6, { x: -20, rotation: 30, ease: Elastic.easeIn.config(1, 0.4) }, 0)
            .to('.leaf', 3, { y: 120, ease: Sine.easeIn }, 3)
            .to('.leaf', 6, { x: -40, rotation: 60, opacity: 0 })</script>
</body>

</html>