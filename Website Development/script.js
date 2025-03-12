// document.addEventListener("DOMContentLoaded", function() {
//     const elements = document.querySelectorAll('.content-section');

//     const observer = new IntersectionObserver(entries => {
//         entries.forEach(entry => {
//             if (entry.isIntersecting) {
//                 entry.target.style.opacity = 1;
//                 entry.target.style.transform = "translateY(0)";
//             }
//         });
//     }, { threshold: 0.5 });

//     elements.forEach(el => {
//         el.style.opacity = 0;
//         el.style.transform = "translateY(50px)";
//         observer.observe(el);
//     });
// });


const canvas = document.getElementById("particleCanvas");
const ctx = canvas.getContext("2d");

let particles = [];
const numParticles = 100;
const maxSpeed = 1.5;

// Resize canvas to fit hero section
function resizeCanvas() {
    canvas.width = canvas.offsetWidth;
    canvas.height = canvas.offsetHeight;
}
window.addEventListener("resize", resizeCanvas);
resizeCanvas();

// Create Particle Object
class Particle {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.size = Math.random() * 3 + 1;
        this.speedX = Math.random() * maxSpeed - maxSpeed / 2;
        this.speedY = Math.random() * maxSpeed - maxSpeed / 2;
    }

    move() {
        this.x += this.speedX;
        this.y += this.speedY;

        // Bounce on edges
        if (this.x <= 0 || this.x >= canvas.width) this.speedX *= -1;
        if (this.y <= 0 || this.y >= canvas.height) this.speedY *= -1;
    }

    draw() {
        ctx.fillStyle = "rgba(255, 255, 255, 0.8)";
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
        ctx.fill();
    }
}

// Initialize particles
function initParticles() {
    particles = [];
    for (let i = 0; i < numParticles; i++) {
        particles.push(new Particle());
    }
}

// Move particles away from cursor
function mouseEffect(event) {
    const mouseX = event.clientX;
    const mouseY = event.clientY;

    particles.forEach(particle => {
        const dx = particle.x - mouseX;
        const dy = particle.y - mouseY;
        const distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < 100) {
            particle.speedX = dx / distance * 2;
            particle.speedY = dy / distance * 2;
        }
    });
}

// Animate particles
function animateParticles() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    particles.forEach(particle => {
        particle.move();
        particle.draw();
    });

    requestAnimationFrame(animateParticles);
}

// Add event listener for mouse movement
canvas.addEventListener("mousemove", mouseEffect);

// Run everything
initParticles();
animateParticles();






// testimonial slider  

document.addEventListener("DOMContentLoaded", function () {
    const sliderContainer = document.querySelector(".slider-container");
    const testimonials = document.querySelectorAll(".testimonial");
    const prevBtn = document.querySelector(".prev-btn");
    const nextBtn = document.querySelector(".next-btn");

    let index = 0;

    function updateSlider() {
        sliderContainer.style.transform = `translateX(${-index * 100}%)`;
    }

    nextBtn.addEventListener("click", function () {
        index = (index + 1) % testimonials.length;
        updateSlider();
    });

    prevBtn.addEventListener("click", function () {
        index = (index - 1 + testimonials.length) % testimonials.length;
        updateSlider();
    });

    setInterval(() => {
        index = (index + 1) % testimonials.length;
        updateSlider();
    }, 5000);
});




// contact form 

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contactForm");
    const formMessage = document.getElementById("formMessage");

    form.addEventListener("submit", function (e) {
        e.preventDefault();
        formMessage.textContent = "Sending...";

        let formData = new FormData(form);

        fetch("contact.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            if (data.trim() === "success") {
                formMessage.textContent = "Message sent successfully! ✅";
                formMessage.style.color = "green";
                form.reset();
            } else {
                formMessage.textContent = "Error sending message. ❌";
                formMessage.style.color = "red";
            }
        })
        .catch(error => {
            formMessage.textContent = "Something went wrong!";
            formMessage.style.color = "red";
        });
    });
});
