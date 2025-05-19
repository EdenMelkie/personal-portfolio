// Smooth scrolling navigation
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute("href"));
        if (target) {
            target.scrollIntoView({ behavior: "smooth" });
        }
    });
});

// Portfolio project filter by category
document.addEventListener("DOMContentLoaded", function () {
    const filterButtons = document.querySelectorAll(".filter-btn");
    const portfolioItems = document.querySelectorAll(".portfolio-item");

    filterButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const category = button.getAttribute("data-category");

            portfolioItems.forEach((item) => {
                if (category === "all" || item.classList.contains(category)) {
                    item.style.display = "";
                } else {
                    item.style.display = "none";
                }
            });

            filterButtons.forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");
        });
    });
});

// Animation effects on scroll (simple fade-in)
const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("fade-in");
                observer.unobserve(entry.target);
            }
        });
    },
    { threshold: 0.1 }
);

document.querySelectorAll(".animate-on-scroll").forEach((el) => {
    observer.observe(el);
});

// Dark mode toggle
const toggleSwitch = document.getElementById("darkModeToggle");
if (toggleSwitch) {
    toggleSwitch.addEventListener("change", () => {
        document.body.classList.toggle("dark-mode", toggleSwitch.checked);
        localStorage.setItem("darkMode", toggleSwitch.checked);
    });

    // Load preference
    if (localStorage.getItem("darkMode") === "true") {
        toggleSwitch.checked = true;
        document.body.classList.add("dark-mode");
    }
}

  AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
    });

document.querySelectorAll(".filter-btn").forEach((btn) => {
    btn.addEventListener("click", () => {
        document
            .querySelectorAll(".filter-btn")
            .forEach((b) => b.classList.remove("active"));
        btn.classList.add("active");
        const filter = btn.getAttribute("data-filter");
        document
            .querySelectorAll("#portfolio-items .portfolio-item")
            .forEach((item) => {
                if (
                    filter === "all" ||
                    item.getAttribute("data-category") === filter
                ) {
                    item.style.display = "block";
                    item.classList.add("fade-in");
                } else {
                    item.style.display = "none";
                }
            });
    });
});

const toggleBtn = document.getElementById("darkModeToggle");
toggleBtn.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode"); // Save preference
    if (document.body.classList.contains("dark-mode")) {
        localStorage.setItem("darkMode", "enabled");
    } else {
        localStorage.setItem("darkMode", "disabled");
    }
}); // Load saved preference
if (localStorage.getItem("darkMode") === "enabled") {
    document.body.classList.add("dark-mode");
}

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
        e.preventDefault();
        const targetID = this.getAttribute("href").substring(1);
        const target = document.getElementById(targetID);
        if (target) {
            target.scrollIntoView({
                behavior: "smooth",
            });
        }
    });
});

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const targetID = this.getAttribute('href').substring(1);
            const target = document.getElementById(targetID);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filter = btn.getAttribute('data-filter');
            document.querySelectorAll('#portfolio-items .portfolio-item').forEach(item => {
                if (filter === 'all' || item.getAttribute('data-category') === filter) {
                    item.style.display = 'block';
                    item.classList.add('fade-in');
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    