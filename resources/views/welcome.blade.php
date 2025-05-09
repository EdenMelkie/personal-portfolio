<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hailemariam Eyayu - Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
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

        main {
            padding: 2rem 1rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section {
            padding: 4rem 0;
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
            gap: 3rem;
            align-items: center;
            margin: 2rem 0;
        }

        .profile-image {
            flex: 0 0 300px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .profile-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-content {
            flex: 1;
        }

        .about-text {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
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

        /* Skills Section */
        .skills-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            justify-content: center;
        }

        .skill-chip {
            background: white;
            padding: 0.5rem 1.2rem;
            border-radius: 20px;
            border: 1px solid #ddd;
            font-weight: 500;
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
                    <img src="{{ asset('images/hailemariam.jpg') }}" alt="Hailemariam Eyayu">
                </div>
                <div class="about-content">
                    <p class="about-text">
                        I'm a passionate software developer with expertise in web and mobile application development.
                        With over 3 years of professional experience, I specialize in creating robust, scalable solutions
                        using modern technologies.
                    </p>
                    <div class="skills-container">
                        <span class="skill-chip">Laravel/PHP</span>
                        <span class="skill-chip">Flutter/Dart</span>
                        <span class="skill-chip">RESTful APIs</span>
                        <span class="skill-chip">MySQL</span>
                        <span class="skill-chip">Android Development</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="section">
            <h2 class="section-heading">Featured Projects</h2>
            <div class="portfolio-grid">
                <!-- Dormitory Management System -->
                <article class="portfolio-card">
                    <h3 class="project-title">Dormitory Management System</h3>
                    <p class="project-description">
                        Comprehensive management solution with three distinct systems developed using PHP, Laravel,
                        and Servlet, featuring role-based access control.
                    </p>
                    <div class="project-links">
                        <a href="https://github.com/EdenMelkie/dmudms" class="btn btn-primary">
                            View on GitHub
                        </a>
                    </div>
                </article>

                <!-- Gitsawe APK -->
                <article class="portfolio-card">
                    <h3 class="project-title">Gitsawe APK</h3>
                    <p class="project-description">
                        Feature-rich mobile Bible application with Ethiopian calendar integration and daily content updates,
                        built using Flutter.
                    </p>
                    <div class="project-links">
                        <a href="https://github.com/EdenMelkie/gitsawe" class="btn btn-primary">
                            GitHub Repository
                        </a>
                    </div>
                </article>

                <!-- Calendar APK -->
                <article class="portfolio-card">
                    <h3 class="project-title">Calendar APK</h3>
                    <p class="project-description">
                        Android application featuring Ethiopian calendar calculations and Bahirehasab integration,
                        developed with Android Studio.
                    </p>
                    <div class="project-links">
                        <a href="https://github.com/EdenMelkie/Calendar" class="btn btn-primary">
                            Project Source
                        </a>
                    </div>
                </article>
            </div>
        </section>


        <section id="skills" class="section">
            <h2 class="section-heading">Technical Skills</h2>
            <div class="skills-container">
                <span class="skill-chip">Web Development</span>
                <span class="skill-chip">Mobile Development</span>
                <span class="skill-chip">Database Design</span>
                <span class="skill-chip">API Integration</span>
                <span class="skill-chip">UI/UX Design</span>
                <span class="skill-chip">Version Control (Git)</span>
                <span class="skill-chip">Testing & Debugging</span>
                <span class="skill-chip">Agile Methodologies</span>
            </div>
        </section>

        <!-- Add inside the <main> tag, below existing sections -->

        <section id="services" class="section"><!-- NEW -->
            <h2 class="section-heading">What I Offer</h2>
            <div class="skills-container">
                <span class="skill-chip">Custom Web Applications</span>
                <span class="skill-chip">Mobile App Development</span>
                <span class="skill-chip">System Analysis & Design</span>
                <span class="skill-chip">Database Modeling</span>
                <span class="skill-chip">Software Testing & Debugging</span>
                <span class="skill-chip">Documentation & Training</span>
            </div>
        </section>

        <section id="skills-detailed" class="section"><!-- NEW -->
            <h2 class="section-heading">Skills in Detail</h2>
            <div class="portfolio-grid">
                <article class="portfolio-card">
                    <h3 class="project-title">Laravel / PHP</h3>
                    <p class="project-description">Efficient backend development using Laravel's MVC structure, authentication, and REST API support.</p>
                </article>
                <article class="portfolio-card">
                    <h3 class="project-title">Flutter / Dart</h3>
                    <p class="project-description">Cross-platform mobile development with rich UI and native performance for Android applications.</p>
                </article>
                <article class="portfolio-card">
                    <h3 class="project-title">Android Development</h3>
                    <p class="project-description">Hands-on experience building apps in Java with native Android components and SQLite integration.</p>
                </article>
                <article class="portfolio-card">
                    <h3 class="project-title">MySQL / Database Design</h3>
                    <p class="project-description">Designing relational schemas, writing optimized SQL queries, and managing data integrity.</p>
                </article>
                <article class="portfolio-card">
                    <h3 class="project-title">UI/UX & Testing</h3>
                    <p class="project-description">Clean, intuitive interfaces with thorough testing and debugging for performance and reliability.</p>
                </article>
            </div>
        </section>

        <section id="testimonials" class="section"><!-- NEW -->
            <h2 class="section-heading">Testimonials</h2>
            <div class="portfolio-grid">
                <article class="portfolio-card">
                    <p class="project-description">
                        "Hailemariam is highly dedicated and delivers efficient solutions that meet real-world needs."
                        <br><strong>– Eden Melkamu, Collaborator</strong>
                    </p>
                </article>
                <!-- Add more as needed -->
            </div>
        </section>

        <section class="section" id="resume-download"><!-- NEW -->
            <h2 class="section-heading">Download My Resume</h2>
            <div class="contact-info">
                <a href="{{ asset('files/Hailemariam_Eyayu_Resume.pdf') }}" class="btn btn-primary" download>
                    Download PDF
                </a>
            </div>
        </section>


        <!-- Education Section -->
        <section id="education" class="section">
            <h2 class="section-heading">Education</h2>
            <div class="contact-info">
                <p><strong>BSc in Software Engineering</strong></p>
                <p>Debre Markos University, Ethiopia</p>
                <p>2020 – 2025</p>
            </div>
        </section>

        <!-- Certification Section -->
        <section id="certifications" class="section">
            <h2 class="section-heading">Certifications</h2>
            <div class="contact-info">
                <ul>
                    <li>Responsive Web Design – FreeCodeCamp</li>
                    <li>Android Development Fundamentals – Google Africa Developer Scholarship</li>
                    <li>Flutter & Dart – Udemy Course</li>
                    <!-- Add more if needed -->
                </ul>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section id="contact-form" class="section">
            <h2 class="section-heading">Contact Me Directly</h2>
            <form action="{{ route('contact.send') }}" method="POST" style="max-width: 600px; margin: auto;">
                @csrf
                <div style="margin-bottom: 1rem;">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" required style="width: 100%; padding: 0.5rem;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required style="width: 100%; padding: 0.5rem;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label for="message">Message:</label><br>
                    <textarea id="message" name="message" rows="5" required style="width: 100%; padding: 0.5rem;"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
            @if(session('success'))
            <div style="color: green; text-align: center; margin-bottom: 1rem;">
                {{ session('success') }}
            </div>
            @endif

        </section>

        <section id="contact" class="section">
            <h2 class="section-heading">Get in Touch</h2>
            <div class="contact-info">
                <p>Email: <a href="mailto:hailemariameyayu2012@gmail.com" class="contact-link">hailemariameyayu2012@gmail.com</a></p>
                <p>Phone: <a href="tel:+251938169557" class="contact-link">+251 938 169 557</a></p>
                <p>Connect:
                    <a href="https://t.me/HaileEden" class="contact-link">Telegram</a> |
                    <a href="https://github.com/EdenMelkie" class="contact-link">GitHub</a>
                    <a href="https://www.linkedin.com/in/hailemariam-eyayu-a89649235/" class="contact-link">LinkedIn</a>
                </p>
            </div>
        </section>
    </main>
</body>

</html>