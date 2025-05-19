                <!DOCTYPE html>
                <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

                <head>
                    <meta charset="utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1" />
                    <title>Hailemariam Eyayu - Portfolio</title>

                    <!-- Fonts -->
                    <link rel="preconnect" href="https://fonts.bunny.net" />
                    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

                    <!-- Styles -->
                    <style>
                        :root {
                            --primary-color: #1D72B8;
                            --secondary-color: #155a8a;
                            --background-color: #f8f9fa;
                            --text-color: #333;
                        }

                        body {
                            font-family: 'Instrument Sans', sans-serif;
                            margin: 0;
                            padding: 0;
                            background-color: var(--background-color);
                            color: var(--text-color);
                            line-height: 1.6;
                        }

                        header {
                            background-color: #1A1A1A;
                            padding: 1rem 0;
                            position: sticky;
                            top: 0;
                            z-index: 100;
                            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                        }

                        nav {
                            display: flex;
                            justify-content: center;
                            gap: 1.5rem;
                            flex-wrap: wrap;
                            align-items: center;
                        }

                        nav a {
                            color: #fff;
                            text-decoration: none;
                            padding: 0.5rem 1rem;
                            font-weight: 500;
                            transition: all 0.3s ease;
                            border-radius: 4px;
                        }

                        nav a:hover {
                            background-color: #3B3B3B;
                        }

                        .header-info {
                            color: #fff;
                            font-size: 0.9rem;
                            margin-left: auto;
                            padding-right: 1rem;
                            font-weight: 400;
                            white-space: nowrap;
                        }

                        main {
                            padding: 2rem 1rem;
                            max-width: 1200px;
                            margin: 0 auto;
                        }

                        .section {
                            padding: 4rem 0;
                            background-color: var(--background-color);
                            color: var(--text-color);
                        }

                        .section-heading {
                            font-size: 2.5rem;
                            font-weight: 600;
                            text-align: center;
                            margin-bottom: 3rem;
                            color: var(--primary-color);
                        }

                        /* About Section */
                        .about-container {
                            display: flex;
                            flex-wrap: wrap;
                            align-items: flex-start;
                            justify-content: center;
                            gap: 2.5rem;
                            max-width: 1000px;
                            margin: 0 auto;
                        }

                        .profile-image {
                            flex: 0 0 220px;
                            border-radius: 50%;
                            overflow: hidden;
                            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
                        }

                        .profile-image img {
                            width: 220px;
                            height: 220px;
                            object-fit: cover;
                            display: block;
                            border-radius: 50%;
                        }

                        .about-content {
                            flex: 1;
                            max-width: 600px;
                        }

                        .about-text {
                            font-size: 1.1rem;
                            line-height: 1.8;
                            margin-bottom: 1.5rem;
                        }

                        .skills-container {
                            display: flex;
                            flex-wrap: wrap;
                            gap: 0.7rem;
                            margin-bottom: 2rem;
                        }

                        .skill-chip {
                            background-color: var(--primary-color);
                            color: #fff;
                            padding: 0.5rem 1rem;
                            border-radius: 20px;
                            font-size: 0.9rem;
                            font-weight: 500;
                        }

                        /* Education Section */
                        .education-section {
                            margin-top: 2rem;
                        }

                        .sub-heading {
                            font-size: 1.8rem;
                            font-weight: 600;
                            color: var(--secondary-color);
                            margin-bottom: 1rem;
                        }

                        .education-info p {
                            margin: 0.3rem 0;
                            font-size: 1rem;
                        }

                        /* Portfolio Section */
                        .portfolio-grid {
                            display: grid;
                            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                            gap: 2rem;
                            padding: 1rem;
                        }

                        .portfolio-card {
                            background: white;
                            border-radius: 12px;
                            padding: 1.5rem;
                            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
                            transition: transform 0.3s ease;
                        }

                        .portfolio-card:hover {
                            transform: translateY(-5px);
                            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
                        }

                        .project-title {
                            color: var(--primary-color);
                            font-size: 1.4rem;
                            margin-bottom: 1rem;
                        }

                        .project-description {
                            color: #666;
                            margin-bottom: 1.5rem;
                        }

                        .project-links {
                            display: flex;
                            gap: 1rem;
                        }

                        /* Contact Section */
                        .contact-info {
                            text-align: center;
                            font-size: 1.1rem;
                            margin: 1rem 0;
                        }

                        .contact-link {
                            color: var(--primary-color);
                            text-decoration: none;
                            transition: color 0.3s ease;
                        }

                        .contact-link:hover {
                            color: var(--secondary-color);
                        }

                        /* Buttons */
                        .btn {
                            display: inline-flex;
                            align-items: center;
                            padding: 0.6rem 1.2rem;
                            border-radius: 25px;
                            text-decoration: none;
                            font-weight: 500;
                            transition: all 0.3s ease;
                        }

                        .btn-primary {
                            background-color: var(--primary-color);
                            color: white;
                        }

                        .btn-primary:hover {
                            background-color: var(--secondary-color);
                            transform: translateY(-2px);
                        }

                        /* Testimonials specific */
                        #testimonials .portfolio-card {
                            display: flex;
                            align-items: center;
                            gap: 1rem;
                        }

                        #testimonials .testimonial-image {
                            flex-shrink: 0;
                            width: 80px;
                            height: 80px;
                            border-radius: 50%;
                            overflow: hidden;
                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                        }

                        #testimonials .testimonial-image img {
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                            display: block;
                        }

                        #testimonials .testimonial-text {
                            font-style: italic;
                            color: #444;
                        }

                        /* Responsive Design */
                        @media (max-width: 768px) {
                            .about-container {
                                flex-direction: column;
                                text-align: center;
                            }

                            .profile-image {
                                flex: 0 0 200px;
                                max-width: 200px;
                            }

                            nav {
                                gap: 1rem;
                                padding: 0 1rem;
                            }

                            .header-info {
                                margin-left: 0;
                                padding-top: 0.5rem;
                                width: 100%;
                                text-align: center;
                                font-size: 0.85rem;
                            }

                            #testimonials .portfolio-card {
                                flex-direction: column;
                                text-align: center;
                            }

                            #testimonials .testimonial-image {
                                margin: 0 auto 1rem;
                            }

                            .section {
                                padding: 3rem 0;
                            }

                            .section-heading {
                                font-size: 2rem;
                            }
                        }
                    </style>

                    <!-- Scripts -->
                    @vite(['resources/css/app.css', 'resources/js/app.js'])
                </head>

                <body>
                    <header>
                        <nav>
                            <a href="#home">Home</a>
                            <a href="#about">About</a>
                            <a href="#portfolio">Portfolio</a>
                            <a href="#skills">Skills</a>
                            <a href="#contact">Contact</a>
                            <div class="header-info">
                                Full-stack Developer & Mobile Specialist | <a href="mailto:hailemariameyayu2012@gmail.com"
                                    style="color:#1D72B8; text-decoration: underline;">Contact Me</a>
                            </div>
                        </nav>
                    </header>

                    <main>
                        <section id="home" class="section">
                            <h1 class="section-heading">Welcome to My Portfolio</h1>
                            <p class="text-center text-lg">Full-stack Developer & Mobile App Specialist</p>
                        </section>

                        <section id="about" class="section">
                            <h2 class="section-heading">About Me</h2>
                            <div class="about-container">
                                <div class="profile-image">
                                    <img src="{{ asset('images/hailemariam.jpg') }}" alt="Hailemariam Eyayu" />
                                </div>
                                <div class="about-content
">
                                    <p class="about-text">
                                        I am Hailemariam Eyayu, a dedicated full-stack developer and mobile specialist with
                                        over 4 years of experience. I am passionate about building modern, user-friendly applications
                                        that solve real-world problems.
                                    </p>
                                    <div id="skills">
                                        <h3 class="sub-heading">Skills</h3>

                                        <div>
                                            <strong>Mobile Development</strong>
                                            <div class="skills-container">
                                                <span class="skill-chip">Flutter</span>
                                                <span class="skill-chip">Dart</span>
                                                <span class="skill-chip">Android Studio</span>
                                                <span class="skill-chip">Java</span>
                                            </div>
                                        </div>

                                        <div>
                                            <strong>Web Development</strong>
                                            <div class="skills-container">
                                                <span class="skill-chip">PHP</span>
                                                <span class="skill-chip">Laravel</span>
                                                <span class="skill-chip">JavaScript</span>
                                                <span class="skill-chip">MySQL</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="education-section">
                                        <h3 class="sub-heading">Education</h3>
                                        <div class="education-info">
                                            <p><strong>Degree:</strong> Bachelor of Science (BSc)</p>
                                            <p><strong>Field:</strong> Software Engineering</p>
                                            <p><strong>Institution:</strong> Debre Markos University</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="portfolio" class="section">
                            <h2 class="section-heading">Portfolio</h2>
                            <div class="portfolio-grid">
                                <div class="portfolio-card">
                                    <h3 class="project-title">Dormitory Management System (DMU_DMS)</h3>
                                    <p class="project-description">A comprehensive management system for student housing using Laravel and PHP.</p>
                                    <div class="project-links">
                                        <a href="#" class="btn btn-primary" target="_blank">View Project</a>
                                    </div>
                                </div>

                                <div class="portfolio-card">
                                    <h3 class="project-title">Gitsawe APK</h3>
                                    <p class="project-description">A mobile app developed with Flutter and Dart, focusing on religious content.</p>
                                    <div class="project-links">
                                        <a href="#" class="btn btn-primary" target="_blank">View Project</a>
                                    </div>
                                </div>

                                <div class="portfolio-card">
                                    <h3 class="project-title">Personal Portfolio Website</h3>
                                    <p class="project-description">My own portfolio website built with Laravel, showcasing my projects and skills.</p>
                                    <div class="project-links">
                                        <a href="#" class="btn btn-primary" target="_blank">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="contact" class="section">
                            <h2 class="section-heading">Contact Me Directly</h2>
                            <form action="{{ route('contact.send') }}" method="POST" style="max-width: 600px; margin: auto;">
                                @csrf
                                <div style="margin-bottom: 1rem;">
                                    <label for="name">Name:</label><br />
                                    <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem;" />
                                </div>

                                <div style="margin-bottom: 1rem;">
                                    <label for="email">Email:</label><br />
                                    <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem;" />
                                </div>

                                <div style="margin-bottom: 1rem;">
                                    <label for="message">Message:</label><br />
                                    <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.5rem;"></textarea>
                                </div>

                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>

                            <div class="contact-info" style="margin-top: 2rem;">
                                <p>Email: <a href="mailto:hailemariameyayu2012@gmail.com" class="contact-link">hailemariameyayu2012@gmail.com</a></p>
                                <p>Phone: <a href="tel:+251938169557" class="contact-link">+251 93 816 9557</a></p>
                                <p>Telegram: <a href="https://t.me/HaileEden" class="contact-link" target="_blank">@HaileEden</a></p>
                            </div>
                        </section>
                    </main>

                    <script>
                        // Smooth scroll behavior for older browsers if needed (optional)
                        document.querySelectorAll('nav a[href^="#"]').forEach(anchor => {
                            anchor.addEventListener('click', function(e) {
                                e.preventDefault();
                                document.querySelector(this.getAttribute('href')).scrollIntoView({
                                    behavior: 'smooth'
                                });
                            });
                        });
                    </script>