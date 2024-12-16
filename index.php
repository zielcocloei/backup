<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zielco Cloei's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="icon" href="images/Z.png">


    <style>
        html {
            scroll-behavior: smooth;
        }

        .navbar {
            background-color: transparent;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .navbar.scrolled {
            background-color: #eabec3;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .navbar-brand img {
            width: 75px;
            height: auto;
        }

        .navbar-brand:hover {
            color: #032f30 !important;
        }

        .nav-link {
            color: #f3dadf;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #dd868c !important;
        }

        .navbar-nav .nav-link {
            color: #f3dadf;
        }

        .navbar-nav .nav-link.active {
            color: #dd868c!important;
        }

        .navbar-custom.toggled {
            background-color: rgba(138, 175, 210, 0.9) !important;
        }

        .navbar-light .navbar-toggler {
            background-color: #eff1f45e !important;
            border-color: #b2bdc869 !important;
        }

        .home {
            height: calc(100vh - 60px);
            height: 100vh;
            background-color: #d0637c;
        }

        .home h1 {
            color: #edeef3;
        }

        .home p {
            color: #edeef3;
        }

        .btn-circle {
            width: 10px;
            height: 40px;
        }

        .btn-main {
            background-color: #6ba3be !important;
            color: #cbd1e0 !important;
            padding: 15px 30px;
            border-radius: 30px;
        }

        .btn-main:hover {
            background-color: #9a9da1 !important;
            color: #f8f9fa !important;
        }

        .btn-primary {
            background-color: #d0637c !important;
            color: #cbd1e0 !important;
            border-color: transparent;
        }

        .btn-primary:hover {
            background-color: #9a9da1 !important;
            color: #f8f9fa !important;
        }

        .list-group-item:hover {
            background-color: #dd868c!important;
        }

        .modal-backdrop {
            background-color: rgb(8, 20, 33);
        }

        .modal-footer .btn:hover {
            background-color: #255684 !important;
            color: #ccd9f5 !important;
        }

        .socialLinks {
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        .list-group-item.list-group-item {
            border-top-width: 1px;
        }

        @media (max-width: 550px) {
            .btn-main {
                margin-bottom: 10px;
            }

            .btn-outline-light {
                margin-bottom: 10px;
            }

            .home p {
                font-size: 1rem !important;
            }

            .container {
                max-width: 850px;
            }

            .ms-3 {
                margin-left: 0;
            }
        }

        @media (max-width: 980px) {
            .home p {
                font-size: 1.1rem !important;
                ;
            }

            .container {
                max-width: 900px;
            }

            .socialLinks {
                bottom: 10px;
                transform: translateX(-45%);
            }
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom w-100 position-fixed">
        <div class="container py-3">
            <a class="navbar-brand" href="#">
                <img src="images/Z.png" alt="Brand Image" class="d-inline-block align-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-2">
                        <a class="nav-link active" href="#home" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link" href="#about">About </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="home d-flex justify-content-center text-align-center flex-column">
        <div class="container">
            <div class="row justify-content-center text-center ">
                <div class="col-md-8">
                    <h1 class="display-3 display-md-4 display-sm-5 fw-bold">Hi, I'm Zielco Cloei</h1>
                    <p class="pt-2" style="font-size: 18px;">
                        an IT student pursuing a Bachelor of Science in Information Technology with a focus on web
                        development. This site is a showcase of my projects and experiments in creating dynamic and
                        user-friendly websites. Through each project, I explore and refine my skills in front-end,
                        aiming to design responsive, efficient, and visually appealing web solutions. I’m excited to
                        share my progress and contributions to the world of web development!
                    </p>


                    </p>
                    <div class="container mt-4">
                        <div class="row justify-content-center">
                            <div class="col text-center">
                                <a href="#projects" class="btn btn-main" data-bs-toggle="modal"
                                    data-bs-target="#projectsModal">
                                    View Projects
                                </a>
                                <a href="#about" class="btn btn-outline-light ms-3"
                                    style="border: 2px solid #0c969c; color: #cbd1e0; padding: 15px 30px; border-radius: 30px; font-size: 16px; transition: background-color 0.3s ease, color 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#cbd1e0'; this.style.color='#172634';"
                                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#cbd1e0';">
                                    More About Me
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="socialLinks position-absolute text-align-center">
            <a href="https://web.facebook.com/clowieeeee.05/" target="_blank"
                class="btn btn-primary rounded-circle btn-circle p-0 d-inline-flex me-3 align-items-center justify-content-center">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://ph.linkedin.com/in/zielco-cloei-t-malabag-b8a687309" target="_blank"
                class="btn btn-primary rounded-circle btn-circle p-0 d-inline-flex me-3 align-items-center justify-content-center">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://github.com/zielcocloei" target="_blank"
                class="btn btn-primary rounded-circle btn-circle p-0 d-inline-flex me-3 align-items-center justify-content-center">
                <i class="fab fa-github"></i>
            </a>
        </div>
    </section>

    <!-- Modal for Activity List -->
    <div class="modal fade" id="projectsModal" tabindex="-1" aria-labelledby="projectsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #274d60; border-radius: 15px; border: none;">
                <div class="modal-header" style="border-bottom: 1px solid #f3dadf;">
                    <h5 class="modal-title" id="projectsModalLabel" style="color: #0a7075;">Choose Project</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <a href="" target="_blank" class="list-group-item list-group-item-action my-2"
                            style="background-color: #0c969c; color: #cbd1e0; border-radius: 10px; ; transition: background-color 0.3s ease;">
                            PRODUCT
                        </a>
                        <a href="" target="_blank" class="list-group-item list-group-item-action my-2"
                            style="background-color: #0c969c; color: #cbd1e0; border-radius: 10px;  transition: background-color 0.3s ease;">
                            PLACE
                        </a>
                        <a href="" target="_blank" class="list-group-item list-group-item-action my-2"
                            style="background-color: #0c969c; color: #cbd1e0; border-radius: 10px; transition: background-color 0.3s ease;">
                            
                        </a>
                        <a href="" target="_blank" class="list-group-item list-group-item-action my-2"
                            style="background-color: #0c969c; color: #cbd1e0; border-radius: 10px; transition: background-color 0.3s ease;">
                            
                        </a>
                        <a href="" target="_blank" class="list-group-item list-group-item-action my-2"
                            style="background-color: #0c969c; color: #cbd1e0; border-radius: 10px; transition: background-color 0.3s ease;">
                            
                        </a>
                        <a href="" target="_blank" class="list-group-item list-group-item-action my-2"
                            style="background-color: #0c969c; color: #cbd1e0; border-radius: 10px; transition: background-color 0.3s ease;">
                            
                        </a>

                    </div>
                </div>
                <div class="modal-footer" style="border-top: 1px solid #a8bbcf;">
                    <button type="button" class="btn btn-main" data-bs-dismiss="modal"
                        style="background-color: #36577a; color: #36577a; border-radius: 20px; padding: 10px 15px;"
                        onmouseover="this.style.backgroundColor='#9a9da1'; this.style.color='#172634';"
                        onmouseout="this.style.backgroundColor='#36577a'; this.style.color='#36577a';">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section id="about" class="py-5" style="background-color: #0c969c;">
        <div class="container py-5">
            <div class="row align-items-center py-1">
                <div class="col-lg-6 text-center" style="padding: 20px;">
                    <img src="" alt="Profile Photo" class="rounded-circle mb-3 img-fluid"
                        style="max-width: 250px; height: auto; object-fit: cover; border: 3px solid #8794ad;">
                    <h3 class="fw-bold" style="color: #ccd9f5;">Zielco Cloei Tenorio Malabag</h3>
                    <p style="color: #e5e7ed;">IT Student from Polytechnic University of the Philippines.</p>
                </div>
                <div class="col-lg-6">
                    <h4 class="fw-bold" style="color: #ccd9f5;">Skills</h4>
                    <hr class="mb-4" style="width: 60px; height: 3px; background-color: #cbd1e0; border: none;">
                    <div class="mb-3">
                        <h6 style="color: #cbd1e0;">HTML & CSS</h6>
                        <div class="progress" style="height: 8px; background-color: #344a5e;">
                            <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #8794ad;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 style="color: #cbd1e0;">JavaScript</h6>
                        <div class="progress" style="height: 8px; background-color: #344a5e;">
                            <div class="progress-bar" role="progressbar" style="width: 60%; background-color: #8794ad;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 style="color: #cbd1e0;">Java</h6>
                        <div class="progress" style="height: 8px; background-color: #344a5e;">
                            <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #8794ad;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 style="color: #cbd1e0;">UI/UX Design</h6>
                        <div class="progress" style="height: 8px; background-color: #344a5e;">
                            <div class="progress-bar" role="progressbar" style="width: 85%; background-color: #8794ad;">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h6 style="color: #cbd1e0;">C/C++</h6>
                        <div class="progress" style="height: 8px; background-color: #344a5e;">
                            <div class="progress-bar" role="progressbar" style="width: 70%; background-color: #8794ad;">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="images/resume.jpg" class="btn btn-main"
                            style="padding: 10px 30px; background-color: #274d60; color: #cbd1e0; border-radius: 30px; transition: background-color 0.3s;"
                            onmouseover="this.style.backgroundColor='#cbd1e0'; this.style.color='#172634';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#cbd1e0';"
                            target="_blank" rel="noopener noreferrer">
                            View Resume
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-3 " style="background-color: #172634; color: #ccd9f5;">
        <p>&copy; 2024 Zielco Cloei. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        //toggle
        const navbar = document.getElementById('navbar');
        const toggleButton = document.querySelector('.navbar-toggler');

        toggleButton.addEventListener('click', () => {
            navbar.classList.toggle('toggled');
        });
        //navbar-scrolled background-color
        window.addEventListener('scroll', function () {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        //activelink
        document.addEventListener('DOMContentLoaded', function () {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            function changeActiveLink() {
                let index = sections.length;

                while (--index && window.scrollY + 60 < sections[index].offsetTop) { }

                navLinks.forEach((link) => link.classList.remove('active'));
                navLinks[index].classList.add('active');
            }
            window.addEventListener('scroll', changeActiveLink);
            changeActiveLink();
        });

    </script>
</body>

</html>
