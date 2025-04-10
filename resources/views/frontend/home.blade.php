@extends('frontend.layout')

@section('content')
<div class="container mt-5">

<!-- Hero Section -->
<section class="hero-gradient text-white py-5 mb-5 position-relative overflow-hidden rounded-5 shadow d-flex align-items-center justify-content-center text-center">
    <div class="container position-relative z-2">
        <h1 class="fw-bold display-3 mb-3 animate__animated animate__fadeInDown">Raka Maulana Akbar</h1>
        <p class="lead fw-light mb-4 animate__animated animate__fadeIn animate__delay-1s">
            
        </p>
        <div class="d-flex justify-content-center">
            <a href="#about" class="btn btn-outline-light px-4 py-2 rounded-pill fw-semibold shadow-sm transition-hover animate__animated animate__fadeInUp animate__delay-2s">
                Lebih lanjut
            </a>
        </div>
    </div>

    <!-- Optional background shapes -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at top left, rgba(255,255,255,0.05), transparent), radial-gradient(circle at bottom right, rgba(255,255,255,0.03), transparent); z-index: 1;"></div>
</section>


    <!-- About Me Section -->

<section id="about" class="py-5 fade-in" style="background-color: #f8f9fa;">
    <div class="container d-flex justify-content-center">
        <div class="bg-white rounded-5 shadow p-5" style="max-width: 850px; width: 100%;">
            <div class="text-center mb-5">
                <h2 class="fw-bold text-primary display-5 mb-2">
                    <i class="bi bi-person-circle me-2"></i> About Me
                </h2>
                <p class="text-muted fs-5"></p>
                <hr class="w-25 mx-auto" style="border: 2px solid #0d6efd;">
            </div>

            <div class="text-center">
                <!-- Name -->
                <div class="mb-4">
                    <h5 class="text-secondary fw-semibold mb-1">
                        <i class="bi bi-person-fill me-2"></i> Full Name
                    </h5>
                    <p class="fs-5 text-dark mb-0">{{ $about->name ?? 'Your Full Name' }}</p>
                </div>

                <!-- Title -->
                <div class="mb-4">
                    <h5 class="text-secondary fw-semibold mb-1">
                        <i class="bi bi-briefcase-fill me-2"></i> Title
                    </h5>
                    <p class="fs-5 text-dark mb-0">{{ $about->title ?? 'Your Professional Title' }}</p>
                </div>

                <!-- Description -->
                <div class="mb-5">
                    <h5 class="text-secondary fw-semibold mb-1">
                        <i class="bi bi-chat-left-dots-fill me-2"></i> Description
                    </h5>
                    <p class="fs-5 text-muted" style="line-height: 1.8;">
                        {{ $about->description ?? 'A short paragraph about yourself, your interests, passions, and what drives you professionally.' }}
                    </p>
                </div>

                <!-- Experience -->
                <div class="text-start">
                    <h4 class="fw-bold text-primary mb-4 text-center">
                        <i class="bi bi-award-fill me-2"></i> Experience
                    </h4>

                    @if(!empty($about->experiences))
                        @foreach ($about->experiences as $exp)
                            <div class="mb-4">
                                <h5 class="fw-semibold mb-1">{{ $exp->position ?? 'Position Title' }}</h5>
                                <p class="mb-1 text-muted">{{ $exp->company ?? 'Company Name' }} &bull; {{ $exp->year ?? 'Year' }}</p>
                                <p class="text-muted">{{ $exp->description ?? 'Brief description of your role and responsibilities.' }}</p>
                            </div>
                        @endforeach
                    @else
                        <p class="text-muted text-center">Freshman Partner 2024/25</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-5 bg-light fade-in">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-5 text-primary">
                <i class="bi bi-tools me-2"></i> Skills
            </h2>
            <p class="text-muted fs-5"></p>
            <hr class="w-25 mx-auto" style="border: 2px solid #007bff;">
        </div>

        <div class="row justify-content-center">
            @php
                $skills = ['Figma', 'C'];
            @endphp

            @foreach ($skills as $skill)
                <div class="col-6 col-md-4 col-lg-3 mb-4 text-center">
                    <div class="bg-white shadow-sm rounded-4 py-4 px-2 h-100 d-flex flex-column align-items-center justify-content-center transition-hover">
                        <i class="bi bi-check-circle-fill text-success fs-3 mb-2"></i>
                        <span class="fw-semibold fs-5 text-dark">{{ $skill }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



   <!-- Education Section -->
<section id="education" class="py-5" style="background: linear-gradient(135deg, #1e3c72, #2a5298);">
    <div class="container text-white">
        <div class="text-center mb-5">
            <h2 class="fw-bold display-5">
                <i class="bi bi-mortarboard-fill me-2"></i> Education
            </h2>
            <p class="text-light fs-5"></p>
            <hr class="w-25 mx-auto" style="border: 2px solid white;">
        </div>

        <div class="row justify-content-center">
            @forelse ($education as $edu)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="edu-card bg-white text-dark rounded-4 shadow p-4 h-100 fade-in">
                        <div class="mb-3 d-flex align-items-center gap-2">
                            <i class="bi bi-journal-text text-primary fs-4"></i>
                            <h5 class="fw-bold mb-0">{{ $edu->degree }}</h5>
                        </div>
                        <p class="mb-2">
                            <i class="bi bi-building me-2 text-secondary"></i> {{ $edu->institution }}
                        </p>
                        <p class="text-muted mb-0">
                            <i class="bi bi-calendar-event me-2 text-secondary"></i> {{ $edu->year }}
                        </p>
                    </div>
                </div>
            @empty
                <div class="text-center text-light fs-5">
                    <i class="bi bi-exclamation-circle me-1"></i> No education records available.
                </div>
            @endforelse
        </div>
    </div>
</section>

    <!-- Projects Section -->
    <section id="projects" class="fade-in">
        <h2 class="text-center mb-4">Projects</h2>
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-4 mb-4">
                    <div class="card project-card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text flex-grow-1">{{ $project->description }}</p>
                            @if ($project->url)
                                <a href="{{ $project->url }}" class="btn btn-outline-primary mt-2" target="_blank">Visit Project</a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

</div>

<!-- Styles -->
<style>
    .hero-gradient {
        background: linear-gradient(135deg, #007bff, #00c6ff);
    }

    .typing-text {
        font-size: 1.5rem;
        white-space: nowrap;
        overflow: hidden;
        border-right: 2px solid white;
        max-width: 100%;
        margin: 0 auto;
        display: inline-block;
    }

    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .fade-in.show {
        opacity: 1;
        transform: translateY(0);
    }

    .timeline-item {
        position: relative;
        padding-left: 1.5rem;
        border-left: 2px solid #007bff;
    }

    .timeline-item::before {
        content: "";
        position: absolute;
        left: -8px;
        top: 10px;
        width: 15px;
        height: 15px;
        background-color: #007bff;
        border-radius: 50%;
    }

    .project-card:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }
</style>

<!-- Scripts -->
<script>
    // Typing Effect
    const text = "Discover my skills, education, and projects";
    let i = 0;
    const speed = 60;
    function typeWriter() {
        if (i < text.length) {
            document.querySelector(".typing-text").textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
    document.addEventListener("DOMContentLoaded", typeWriter);

    // Smooth Scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Fade In on Scroll
    document.addEventListener("DOMContentLoaded", function () {
        const fadeElements = document.querySelectorAll(".fade-in");
        function checkScroll() {
            fadeElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 50) {
                    el.classList.add("show");
                }
            });
        }
        window.addEventListener("scroll", checkScroll);
        checkScroll();
    });
</script>
@endsection