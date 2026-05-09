<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nexus — Connecting Vision to Reality</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
*{
  margin:0;
  padding:0;
  box-sizing:border-box;
  font-family:'Poppins',sans-serif;
}

html{
  scroll-behavior:smooth;
}

body{
  overflow-x:hidden;
  background:#0f172a;
  color:white;
}

/* ===== NAVBAR ===== */
header{
  position:fixed;
  width:100%;
  top:0;
  padding:15px 60px;
  backdrop-filter:blur(15px);
  background:rgba(0,0,0,0.4);
  z-index:1000;
}

nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
}

nav h2{
  color:white;
}

nav ul{
  list-style:none;
  display:flex;
  gap:30px;
}

nav ul li a{
  color:white;
  text-decoration:none;
  font-weight:500;
  transition:0.3s;
}

nav ul li a:hover{
  color:#00eaff;
}

/* ===== HOME SECTION ===== */
#home{
  position:relative;
  height:100vh;
  display:flex;
  align-items:center;
  justify-content:center;
  text-align:center;
  overflow:hidden;
}

#particles-js{
  position:absolute;
  width:100%;
  height:100%;
  top:0;
  left:0;
  z-index:1;
}

.hero-card{
  position:relative;
  z-index:2;
  background:rgba(255,255,255,0.08);
  padding:60px;
  border-radius:30px;
  backdrop-filter:blur(20px);
  box-shadow:0 20px 40px rgba(0,0,0,0.6);
  max-width:850px;
  animation:fadeUp 1.2s ease;
}

@keyframes fadeUp{
  from{ opacity:0; transform:translateY(40px); }
  to{ opacity:1; transform:translateY(0); }
}

.hero-card h1{
  font-size:3.5rem;
  margin-bottom:20px;
}

.hero-card p{
  font-size:1.2rem;
  margin-bottom:35px;
  color:#cbd5e1;
}

.hero-buttons{
  display:flex;
  justify-content:center;
  gap:20px;
  flex-wrap:wrap;
}

.btn-primary{
  padding:14px 35px;
  border:none;
  border-radius:40px;
  background:#00eaff;
  color:black;
  font-weight:600;
  cursor:pointer;
  transition:0.3s;
}

.btn-primary:hover{
  transform:translateY(-5px);
  box-shadow:0 15px 25px rgba(0,0,0,0.4);
}

.btn-secondary{
  padding:14px 35px;
  border:2px solid white;
  border-radius:40px;
  background:transparent;
  color:white;
  font-weight:600;
  cursor:pointer;
  transition:0.3s;
}

.btn-secondary:hover{
  background:white;
  color:black;
}

/* ===== LIGHT MODERN ABOUT SECTION ===== */
#about{
  padding:140px 60px;
  background:linear-gradient(135deg,#f8fafc,#e2e8f0);
  color:#1e293b;
}

#about h2{
  text-align:center;
  font-size:2.8rem;
  margin-bottom:90px;
  font-weight:600;
}

.about-wrapper{
  display:flex;
  align-items:center;
  justify-content:center;
  gap:70px;
  max-width:1200px;
  margin:auto;
}

.about-image img{
  width:450px;
  border-radius:30px;
  box-shadow:0 25px 50px rgba(0,0,0,0.15);
  transition:0.4s;
}

.about-image img:hover{
  transform:scale(1.05);
}

.about-card{
  background:rgba(255,255,255,0.7);
  padding:50px;
  border-radius:30px;
  backdrop-filter:blur(15px);
  box-shadow:0 20px 40px rgba(0,0,0,0.08);
  max-width:600px;
}

.about-intro{
  font-size:1.2rem;
  margin-bottom:30px;
  line-height:1.7;
  color:#334155;
}

.about-features{
  margin-bottom:40px;
}

.feature-item{
  margin-bottom:15px;
  display:flex;
  gap:10px;
  transition:0.3s;
}

.feature-item:hover{
  transform:translateX(8px);
  color:#0077ff;
}

.about-stats{
  display:flex;
  gap:20px;
  flex-wrap:wrap;
}

.stat-box{
  flex:1;
  min-width:120px;
  background:white;
  padding:20px;
  border-radius:20px;
  text-align:center;
  box-shadow:0 10px 25px rgba(0,0,0,0.08);
  transition:0.3s;
}

.stat-box:hover{
  transform:translateY(-8px);
  box-shadow:0 15px 35px rgba(0,0,0,0.12);
}

.stat-box h3{
  font-size:1.8rem;
  color:#0077ff;
}

.stat-box p{
  font-size:0.9rem;
  color:#475569;
}

/* Responsive */
@media(max-width:900px){
  .about-wrapper{
    flex-direction:column;
    text-align:center;
  }

  .about-image img{
    width:100%;
  }

  .hero-card h1{
    font-size:2.5rem;
  }

  .about-stats{
    justify-content:center;
  }
}

/* ===== SERVICES SECTION ===== */
#services{
  padding:120px 60px;
  background:#0f172a;
}

#services h2{
  text-align:center;
  font-size:2.8rem;
  margin-bottom:60px;
  color:white;
}

.services-grid{
  display:flex;
  gap:30px;
  max-width:1200px;
  margin:auto;
  flex-wrap:wrap;
}

.service-card{
  flex:1;
  min-width:300px;
  background:rgba(255,255,255,0.05);
  padding:40px;
  border-radius:25px;
  border:1px solid rgba(255,255,255,0.1);
  transition:0.3s;
}

.service-card:hover{
  transform:translateY(-10px);
  background:rgba(255,255,255,0.08);
  border-color:#00eaff;
}

.service-icon{
  font-size:2.5rem;
  margin-bottom:20px;
}

.service-card h3{
  font-size:1.5rem;
  margin-bottom:15px;
  color:#00eaff;
}

.service-card p{
  color:#cbd5e1;
  line-height:1.6;
}

/* ===== CONTACT SECTION ===== */
#contact{
  padding:120px 60px;
  background:linear-gradient(135deg,#0f172a,#1e293b);
}

.contact-card{
  max-width:800px;
  margin:auto;
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(15px);
  padding:60px;
  border-radius:40px;
  text-align:center;
  border:1px solid rgba(255,255,255,0.1);
}

.contact-card h2{
  font-size:2.5rem;
  margin-bottom:20px;
}

.contact-card p{
  margin-bottom:40px;
  color:#cbd5e1;
}

.contact-form{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:20px;
}

.contact-form input, .contact-form textarea{
  width:100%;
  padding:15px 20px;
  border-radius:12px;
  border:1px solid rgba(255,255,255,0.2);
  background:rgba(0,0,0,0.2);
  color:white;
  font-size:1rem;
}

.contact-form textarea{
  grid-column:span 2;
  height:120px;
  resize:none;
}

.contact-form button{
  grid-column:span 2;
  margin-top:10px;
}

footer{
  padding:40px;
  text-align:center;
  background:#020617;
  color:#64748b;
  border-top:1px solid rgba(255,255,255,0.05);
}
</style>
</head>

<body>

<header>
<nav>
  <h2>Nexus</h2>
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="#about">About Us</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>
</header>

<!-- HOME -->
<section id="home">
  <div id="particles-js"></div>

  <div class="hero-card">
    <h1>Innovate. Create. Elevate.</h1>
    <p>
      We build modern, scalable digital solutions that help businesses grow 
      and stand out in today’s competitive world.
    </p>

    <div class="hero-buttons">
      <button class="btn-primary" onclick="scrollToAbout()">Get Started</button>
      <button class="btn-secondary">Learn More</button>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <h2>About Us</h2>

  <div class="about-wrapper">
    <div class="about-image">
      <img src="https://images.unsplash.com/photo-1551434678-e076c223a692" alt="Team">
    </div>

    <div class="about-content">
      <div class="about-card">

        <p class="about-intro">
          We are a forward-thinking digital team delivering scalable,
          high-performance web experiences for modern businesses.
        </p>

        <div class="about-features">
          <div class="feature-item">🚀 Innovative & Scalable Solutions</div>
          <div class="feature-item">🎨 Modern UI/UX Design</div>
          <div class="feature-item">🔒 Secure Architecture</div>
        </div>

        <div class="about-stats">
          <div class="stat-box">
            <h3>150+</h3>
            <p>Projects</p>
          </div>
          <div class="stat-box">
            <h3>100+</h3>
            <p>Clients</p>
          </div>
          <div class="stat-box">
            <h3>5+</h3>
            <p>Years Experience</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <h2>Our Expertise</h2>
  <div class="services-grid">
    <div class="service-card">
      <div class="service-icon">🌐</div>
      <h3>Web Development</h3>
      <p>Custom, high-performance websites built with the latest technologies like React, Next.js, and Node.js.</p>
    </div>
    <div class="service-card">
      <div class="service-icon">📱</div>
      <h3>Mobile Apps</h3>
      <p>Native and cross-platform mobile applications that provide seamless user experiences on iOS and Android.</p>
    </div>
    <div class="service-card">
      <div class="service-icon">🎨</div>
      <h3>UI/UX Design</h3>
      <p>Intuitive and beautiful interfaces designed to engage users and elevate your brand's digital presence.</p>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="contact-card">
    <h2>Ready to start?</h2>
    <p>Have a project in mind? Let's build something extraordinary together.</p>
    <form class="contact-form" onsubmit="return false">
      <input type="text" placeholder="Your Name">
      <input type="email" placeholder="Your Email">
      <textarea placeholder="Tell us about your project"></textarea>
      <button class="btn-primary">Send Message</button>
    </form>
  </div>
</section>

<footer>
  <p>&copy; 2025 Nexus Digital. All rights reserved.</p>
</footer>


<!-- Particles JS -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script>
particlesJS("particles-js", {
  particles: {
    number: { value: 80 },
    size: { value: 3 },
    color: { value: "#00eaff" },
    line_linked: {
      enable: true,
      distance: 150,
      color: "#00eaff",
      opacity: 0.4,
      width: 1
    },
    move: { enable: true, speed: 2 }
  },
  interactivity: {
    events: {
      onhover: { enable: true, mode: "repulse" }
    }
  }
});

function scrollToAbout(){
  document.getElementById("about").scrollIntoView({
    behavior:"smooth"
  });
}
</script>

</body>
</html>