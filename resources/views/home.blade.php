@extends('layouts.app')

@section('title', 'Home | Hailemariam Eyayu Portfolio')

@section('content')

<section id="about" class="container my-5" data-aos="fade-up">
    <div class="card shadow-lg p-4 border-0">
        <div class="row align-items-center">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <img src="{{ asset('images/HME.png') }}" alt="Hailemariam Eyayu" class="rounded-circle shadow" style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #0d6efd;" />
                <h4 class="mt-3 fw-bold">Hailemariam Eyayu</h4>
                <p class="text-muted">Full-Stack & Mobile Developer</p>
            </div>
            <div class="col-md-8">
                <p class="lead">
                    Passionate and experienced software engineer skilled in mobile and web development.
                    I enjoy turning ideas into real-world apps with modern design and clean architecture.
                </p>
                <hr />
                <h5 class="fw-semibold">Collaborator</h5>
                <div class="d-flex align-items-center mt-2">
                    <img src="{{ asset('images/eden_melkamu.png') }}" alt="Eden Melkamu" class="rounded-circle me-3 shadow" style="width: 60px; height: 60px; object-fit: cover; border: 3px solid #198754;" />
                    <div>
                        <h6 class="mb-0">Eden Melkamu</h6>
                        <small class="text-muted">Project Collaborator</small>
                    </div>
                </div>

                <hr />
                <h5 class="fw-semibold">Education</h5>
                <p class="mb-1"><strong>Degree:</strong> Bachelor of Science (BSc)</p>
                <p class="mb-1"><strong>Field:</strong> Software Engineering</p>
                <p><strong>Institution:</strong> Debre Markos University</p>
            </div>
        </div>
    </div>
</section>

<div id="skills" class="mt-5 p-4 bg-light rounded shadow-sm" data-aos="fade-up">
  <h3 class="fw-bold mb-4 text-primary text-center">Skills</h3>

  <div class="mb-4">
    <strong class="fs-5 text-dark d-block text-center">Mobile Development</strong>
    <div class="mt-3 d-flex flex-wrap justify-content-center gap-2">
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">Flutter</span>
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">Dart</span>
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">Android Studio</span>
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">Java</span>
    </div>
  </div>

  <div class="mb-4">
    <strong class="fs-5 text-dark d-block text-center">Web Development</strong>
    <div class="mt-3 d-flex flex-wrap justify-content-center gap-2">
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">PHP</span>
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">Laravel</span>
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">JavaScript</span>
      <span class="badge bg-primary text-white py-2 px-3 rounded-pill">MySQL</span>
    </div>
  </div>
</div>


<div id="downloads" class="mt-5" data-aos="fade-up">
    <h3 class="fw-bold mb-4">Download CV & Certificates</h3>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- CV -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title fw-semibold">My CV</h5>
                    <p class="card-text text-muted">Full curriculum vitae (PDF)</p>
                    <a href="{{ asset('downloads/cv_hailemariam.pdf') }}" download class="btn btn-primary mt-auto">
                        <i class="bi bi-download"></i> Download CV
                    </a>
                </div>
            </div>
        </div>

        <!-- DMU Students Union Certificate -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">DMU Students Union</h5>
                    <p class="card-text text-muted">Leadership certificate</p>
                    <a href="{{ asset('downloads/dmu_union_cert.pdf') }}" download class="btn btn-success">
                        Download Certificate
                    </a>
                </div>
            </div>
        </div>

        <!-- edX Certificate -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">edX Course</h5>
                    <p class="card-text text-muted">Completed online course</p>
                    <a href="{{ asset('downloads/edx_course_cert.pdf') }}" download class="btn btn-secondary">
                        Download Certificate
                    </a>
                </div>
            </div>
        </div>

        <!-- 5 Million Coders Certificate -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">5 Million Coders</h5>
                    <p class="card-text text-muted">Coding initiative participation</p>
                    <a href="{{ asset('downloads/five_million_coders_cert.pdf') }}" download class="btn btn-warning text-white">
                        Download Certificate
                    </a>
                </div>
            </div>
        </div>

        <!-- SSH Certificate -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <h5 class="card-title">SSH Training</h5>
                    <p class="card-text text-muted">Security & server hosting</p>
                    <a href="{{ asset('downloads/ssh_cert.pdf') }}" download class="btn btn-dark">
                        Download Certificate
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section id="portfolio" class="mb-5" data-aos="fade-up">
    <h2>Portfolio</h2>
    <div class="mb-4">
        <button class="btn btn-outline-primary me-2 filter-btn active" data-filter="all">All</button>
        <button class="btn btn-outline-primary me-2 filter-btn" data-filter="web">Web</button>
        <button class="btn btn-outline-primary me-2 filter-btn" data-filter="mobile">Mobile</button>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4" id="portfolio-items">
        <div class="col portfolio-item" data-category="web">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Dormitory Management System (DMU_DMS)</h5>
                    <p class="card-text">A comprehensive management system for student housing using Laravel and PHP.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary" target="_blank">View Project</a>
                </div>
            </div>
        </div>
        <div class="col portfolio-item" data-category="mobile">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Gitsawe APK</h5>
                    <p class="card-text">A mobile app developed with Flutter and Dart, focusing on religious content.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary" target="_blank">View Project</a>
                </div>
            </div>
        </div>
        <div class="col portfolio-item" data-category="web">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Personal Portfolio Website</h5>
                    <p class="card-text">My own portfolio website built with Laravel, showcasing my projects and skills.</p>
                </div>
                < class="card-footer">
                    <a href="#" class="btn btn-primary" target="_blank">View Project</a>
            </div>
        </div>
    </div>
    </div>
</section>
<section id="contact" class="mb-5" data-aos="fade-up">
    <h2>Contact Me</h2>
    <form action="#" method="POST" class="mt-3">
        <div class="mb-3"> <label for="name" class="form-label">Name</label> <input id="name" name="name" type="text" class="form-control" placeholder="Your full name" required /> </div>
        <div class="mb-3"> <label for="email" class="form-label">Email</label> <input id="email" name="email" type="email" class="form-control" placeholder="you@example.com" required /> </div>
        <div class="mb-3"> <label for="message" class="form-label">Message</label> <textarea id="message" name="message" rows="4" class="form-control" placeholder="Write your message here..." required></textarea> </div> <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
    <div class="mt-4 text-center">
        <p class="mb-1">Email: <a href="mailto:hailemariameyayu2012@gmail.com" class="text-decoration-none text-dark fw-bold">hailemariameyayu2012@gmail.com</a></p>
        <p class="mb-1">Phone: <a href="tel:+251938169557" class="text-decoration-none text-dark fw-bold">+251 93 816 9557</a></p>
        <p>Telegram: <a href="https://t.me/HaileEden" class="text-decoration-none text-dark fw-bold">@HaileEden</a></p>
    </div>
    </div>
</section>
<style>
    .skill-chip {
        display: inline-block;
        background-color: #0d6efd;
        color: white;
        border-radius: 16px;
        padding: 0.3em 0.9em;
        margin-right: 0.5em;
        margin-bottom: 0.5em;
        font-size: 0.875rem;
        font-weight: 600;
        user-select: none;
    }

    .filter-btn.active {
        background-color: #0d6efd;
        color: white;
    }
</style>
<script>
    // Portfolio filtering 
    document.querySelectorAll('.filter-btn').forEach(button => {
        button.addEventListener('click', () => {
            const filter = button.getAttribute('data-filter');
            document.querySelectorAll('.portfolio-item').forEach(item => {
                item.style.display = filter === 'all' || item.getAttribute('data-category') === filter ? '' : 'none';
            });
            document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        });
    }); // Dark mode toggle 
</script>
@endsection