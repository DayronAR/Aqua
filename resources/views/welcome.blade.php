<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AquaPure Solutions - Filtros de Agua Ozonizados</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('Css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('Img/Agua_Fondo.mp4') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    .hero {
      position: relative;
      overflow: hidden;
    }

    .bg-video {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      z-index: 0;
      opacity: 0.5; /* Ajusta la opacidad si lo deseas */
      pointer-events: none;
    }

    .hero > *:not(.bg-video) {
      position: relative;
      z-index: 1;
    }

    body {
      min-height: 100vh;
      background: none !important; /* Elimina cualquier fondo anterior */
    }
    body, .hero, .navbar, .hero-content, .footer, .cart-button, .chatbot-button {
      position: relative;
      z-index: 1;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 2.5rem 2rem;
      margin: 2.5rem 0;
      justify-items: center;
    }
    .product-card {
      background: #fff;
      border-radius: 18px;
      box-shadow: 0 2px 16px rgba(33,150,243,0.10);
      border: 1.5px solid #e3e8ee;
      padding: 2.1rem 1.2rem 2.3rem 1.2rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      transition: box-shadow 0.2s, border 0.2s;
      min-width: 220px;
      max-width: 310px;
    }
    .product-card:hover {
      box-shadow: 0 6px 28px rgba(33,150,243,0.18);
      border: 1.5px solid #2196f3;
    }
    .product-image img {
      width: 240px;
      height: 180px;
      object-fit: contain;
      border-radius: 16px;
      margin-bottom: 1.4rem;
      background: #f5f7fa;
      border: 1px solid #e3e8ee;
    }
    .product-badge {
      position: absolute;
      top: 12px;
      right: 12px;
      background: #ff7043;
      color: #fff;
      padding: 0.3em 1.1em;
      border-radius: 1em;
      font-size: 1.22rem;
      font-weight: 700;
      box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    }
    .product-image {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
    }
    .product-info h3 {
      font-size: 1.55rem;
      font-weight: 800;
      margin-bottom: 0.6rem;
      text-align: center;
    }
    .product-info p {
      font-size: 1.18rem;
      color: #555;
      margin-bottom: 0.8rem;
      text-align: center;
    }
    .product-price {
      font-size: 1.45rem;
      font-weight: 700;
      margin-bottom: 1.2rem;
      text-align: center;
    }
    .old-price {
      font-size: 1.18rem;
    }
    @media (max-width: 1100px) {
      .products-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }
    @media (max-width: 700px) {
      .products-grid {
        grid-template-columns: 1fr;
      }
      .product-card {
        max-width: 98vw;
      }
      .product-image img {
        width: 95vw;
        height: auto;
        max-width: 350px;
      }
    }
    .about-image {
      margin: 40px;
    }
  </style>
</head>
<body>

  <header class="hero">
    <video autoplay loop muted playsinline class="bg-video">
      <source src="Img/Agua_Fondo.mp4" type="video/mp4">
    </video>
    <nav class="navbar">
      <div class="logo-container">
        <img src="Img/png-transparent-logo-drinking-water-water-quality-store-revitalized-water-water.png" alt="Logo AquaPure" class="logo">
        <h1>AquaPure Solutions</h1>
      </div>
      <ul class="nav-links">
        <li><a href="#inicio">Inicio</a></li>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#productos">Productos</a></li>
        <li><a href="#nosotros">Nosotros</a></li>
        <li><a href="#contacto">Contacto</a></li>
        <li class="login">
        @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        <span class="separator"></span>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
            </li>


      </ul>
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </nav>
    <div class="hero-content">
      <h2>Agua pura y saludable para tu hogar</h2>
      <p>Filtros de agua ozonizados de última generación que eliminan el 99.9% de impurezas y bacterias</p>
      <div class="hero-buttons">
        <a href="#contacto" class="btn btn-primary">Solicitar cotización</a>
        <a href="#productos" class="btn btn-secondary">Ver productos</a>
      </div>
    </div>
    <div class="scroll-indicator">
      <span></span>
    </div>
  </header>

  <section id="servicios" class="services">
    <div class="section-header">
      <h2>Nuestros Servicios</h2>
      <p>Soluciones integrales para el tratamiento y purificación de agua</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-filter"></i>
        </div>
        <h3>Filtros Ozonizados</h3>
        <p>Sistemas de filtración avanzados que combinan ozono con tecnología de carbón activado para agua cristalina.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-tools"></i>
        </div>
        <h3>Instalación y Mantenimiento</h3>
        <p>Servicio técnico especializado con instalación profesional y mantenimiento preventivo programado.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-home"></i>
        </div>
        <h3>Sistemas Residenciales</h3>
        <p>Filtros para hogares que purifican el agua de toda la casa, desde la cocina hasta el baño.</p>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <i class="fas fa-industry"></i>
        </div>
        <h3>Sistemas Comerciales</h3>
        <p>Soluciones industriales para restaurantes, hoteles y empresas que requieren agua de alta pureza.</p>
      </div>
    </div>
  </section>

  <section id="productos" class="products">
    <div class="section-header">
      <h2>Productos Destacados</h2>
      <p>Descubre nuestra línea premium de filtros de agua ozonizados</p>
    </div>
    <div class="products-grid">
      <!-- Producto 1 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/1.jpg" alt="Filtro Premium AquaPure">
          <div class="product-badge">Oferta</div>
        </div>
        <div class="product-info">
          <h3>Filtro Premium AquaPure</h3>
          <p>Sistema de 5 etapas con ozonización avanzada</p>
          <div class="product-price">
            <span style="color: #e53935; font-weight: bold;">S/ 750</span>
            <span class="old-price" style="text-decoration: line-through; color: #888; margin-left: 8px;">S/ 850</span>
          </div>
          <button class="btn btn-small">Añadir al carrito</button>
        </div>
      </div>
      <!-- Producto 2 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/2.jpg" alt="Filtro Básico AquaPure">
        </div>
        <div class="product-info">
          <h3>Filtro Básico AquaPure</h3>
          <p>Sistema de 3 etapas ideal para hogares pequeños</p>
          <div class="product-price">S/ 450</div>
          <button class="btn btn-small">Añadir al carrito</button>
        </div>
      </div>
      <!-- Producto 3 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/3.jpg" alt="AquaPure Industrial 10000">
        </div>
        <div class="product-info">
          <h3>AquaPure Industrial 10000</h3>
          <p>Sistema industrial de alta capacidad para hoteles y restaurantes</p>
          <div class="product-price">S/ 4,200</div>
          <button class="btn btn-small">Solicitar cotización</button>
        </div>
      </div>
      <!-- Producto 4 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/4.jpg" alt="Kit de Repuestos Premium">
          <div class="product-badge">Oferta</div>
        </div>
        <div class="product-info">
          <h3>Kit de Repuestos Premium</h3>
          <p>Set completo de filtros y repuestos para mantenimiento anual</p>
          <div class="product-price">
            <span style="color: #e53935; font-weight: bold;">S/ 180</span>
            <span class="old-price" style="text-decoration: line-through; color: #888; margin-left: 8px;">S/ 220</span>
          </div>
          <button class="btn btn-small">Añadir al carrito</button>
        </div>
      </div>
      <!-- Producto 5 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/5.jpg" alt="Filtro Compacto AquaPure">
        </div>
        <div class="product-info">
          <h3>Filtro Compacto AquaPure</h3>
          <p>Ideal para departamentos y espacios pequeños. Fácil instalación y mantenimiento.</p>
          <div class="product-price">S/ 390</div>
          <button class="btn btn-small">Añadir al carrito</button>
        </div>
      </div>
      <!-- Producto 6 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/6.jpg" alt="Filtro para Cocina">
        </div>
        <div class="product-info">
          <h3>Filtro para Cocina</h3>
          <p>Purifica el agua directamente en el grifo de tu cocina. Agua segura para cocinar y beber.</p>
          <div class="product-price">S/ 320</div>
          <button class="btn btn-small">Añadir al carrito</button>
        </div>
      </div>
      <!-- Producto 7 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/7.jpg" alt="Filtro para Ducha">
        </div>
        <div class="product-info">
          <h3>Filtro para Ducha</h3>
          <p>Elimina cloro y metales pesados. Cuida tu piel y cabello con agua más pura.</p>
          <div class="product-price">S/ 210</div>
          <button class="btn btn-small">Añadir al carrito</button>
        </div>
      </div>
      <!-- Producto 8 -->
      <div class="product-card">
        <div class="product-image">
          <img src="Img/8.jpg" alt="Filtro Portátil">
        </div>
        <div class="product-info">
          <h3>Filtro Portátil</h3>
          <p>Llévalo a donde quieras. Perfecto para viajes, camping o emergencias.</p>
          <div class="product-price">S/ 150</div>
          <button class="btn btn-small">Añadir al carrito</button>
        </div>
      </div>
    </div>
  </section>

  <section id="nosotros" class="about">
    <div class="about-container">
      <div class="about-image">
        <img src="https://images.unsplash.com/photo-1559827260-dc66d52bef19?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Equipo AquaPure">
      </div>
      <div class="about-content">
        <h2>Sobre Nosotros</h2>
        <p>AquaPure Solutions es una empresa líder en el tratamiento de agua con más de 10 años de experiencia en el desarrollo e implementación de sistemas de filtración ozonizados.</p>
        <p>Nuestro equipo de ingenieros especializados en tratamiento de agua trabaja con las últimas tecnologías para garantizar agua 100% pura y segura para tu familia.</p>
        <div class="stats">
          <div class="stat-item">
            <div class="stat-number" data-count="0">0</div>
            <div class="stat-label">Sistemas instalados</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-count="0">0</div>
            <div class="stat-label">Años de experiencia</div>
          </div>
          <div class="stat-item">
            <div class="stat-number" data-count="0">0</div>
            <div class="stat-label">% de satisfacción</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contacto" class="contact">
    <div class="section-header">
      <h2>Contáctanos</h2>
      <p>Estamos listos para asesorarte en la mejor solución para tu hogar o negocio</p>
    </div>
    <div class="contact-container">
      <div class="contact-info">
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <h3>Dirección</h3>
            <p>Av. Principal 1234, Lima, Perú</p>
          </div>
        </div>
        <div class="info-item">
          <i class="fas fa-phone-alt"></i>
          <div>
            <h3>Teléfono</h3>
            <p>+51 987 654 321</p>
          </div>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <div>
            <h3>Email</h3>
            <p>ventas@aquapure.com</p>
          </div>
        </div>
        <div class="info-item">
          <i class="fas fa-clock"></i>
          <div>
            <h3>Horario</h3>
            <p>Lunes a Viernes: 8:00 - 18:00</p>
            <p>Sábados: 9:00 - 13:00</p>
          </div>
        </div>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <form class="contact-form">
        <div class="form-group">
          <input type="text" placeholder="Nombre completo" required>
        </div>
        <div class="form-group">
          <input type="email" placeholder="Correo electrónico" required>
        </div>
        <div class="form-group">
          <input type="tel" placeholder="Teléfono">
        </div>
        <div class="form-group">
          <select required>
            <option value="" disabled selected>Motivo de contacto</option>
            <option value="cotizacion">Cotización de filtros</option>
            <option value="instalacion">Servicio de instalación</option>
            <option value="mantenimiento">Mantenimiento</option>
            <option value="repuestos">Repuestos</option>
            <option value="otros">Otros</option>
          </select>
        </div>
        <div class="form-group">
          <textarea placeholder="Tu mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section">
        <h3>AquaPure Solutions</h3>
        <p>Agua pura y saludable para tu hogar desde 2008.</p>
        <div class="footer-logo">
          <img src="Img/png-transparent-logo-drinking-water-water-quality-store-revitalized-water-water.png" alt="Logo AquaPure">
        </div>
      </div>
      <div class="footer-section">
        <h3>Enlaces rápidos</h3>
        <ul>
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#servicios">Servicios</a></li>
          <li><a href="#productos">Productos</a></li>
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="#contacto">Contacto</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Productos</h3>
        <ul>
          <li><a href="#">Filtros residenciales</a></li>
          <li><a href="#">Sistemas comerciales</a></li>
          <li><a href="#">Repuestos y accesorios</a></li>
          <li><a href="#">Mantenimiento</a></li>
          <li><a href="#">Instalación</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Suscríbete</h3>
        <p>Recibe nuestras últimas novedades y ofertas especiales.</p>
        <form class="subscribe-form">
          <input type="email" placeholder="Tu correo electrónico" required>
          <button type="submit"><i class="fas fa-paper-plane"></i></button>
        </form>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2023 AquaPure Solutions. Todos los derechos reservados.</p>
      <div class="legal-links">
        <a href="#">Términos y condiciones</a>
        <a href="#">Política de privacidad</a>
      </div>
    </div>
  </footer>

  <!-- Botón flotante del chatbot -->


  <!-- Contenedor del chatbot -->


  <!-- Botón flotante del carrito de compras -->
  <button class="cart-button" aria-label="Abrir Carrito" style="position: fixed; bottom: 100px; right: 30px; z-index: 1001; background: #2196f3; color: #fff; border: none; border-radius: 50%; width: 56px; height: 56px; box-shadow: 0 2px 8px rgba(0,0,0,0.2); display: flex; align-items: center; justify-content: center; font-size: 1.7rem; cursor: pointer;">
    <i class="fas fa-shopping-cart"></i>
    <span id="cart-count" style="position: absolute; top: 8px; right: 8px; background: #e53935; color: #fff; border-radius: 50%; font-size: 0.9rem; width: 22px; height: 22px; display: flex; align-items: center; justify-content: center;">0</span>
  </button>

  <!-- Panel lateral del carrito de compras -->
  <div id="cart-panel" style="position: fixed; top: 0; right: -400px; width: 350px; height: 100vh; background: #fff; box-shadow: -2px 0 8px rgba(0,0,0,0.15); z-index: 2000; transition: right 0.3s; display: flex; flex-direction: column;">
    <div style="display: flex; justify-content: space-between; align-items: center; padding: 1.2rem 1rem; border-bottom: 1px solid #eee;">
      <h3 style="margin: 0; font-size: 1.2rem;">Tu carrito</h3>
      <button id="close-cart" aria-label="Cerrar Carrito" style="background: none; border: none; font-size: 1.5rem; cursor: pointer;">&times;</button>
    </div>
    <div id="cart-items" style="flex: 1; overflow-y: auto; padding: 1rem;">
      <!-- Aquí se mostrarán los productos agregados al carrito -->
      <!-- Ejemplo de producto (puedes duplicar este bloque con JS): -->
      <!--
      <div class="cart-item" style="display: flex; align-items: center; margin-bottom: 1rem;">
        <img src="URL_IMAGEN" alt="Nombre producto" style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px; margin-right: 10px;">
        <div style="flex: 1;">
          <div style="font-weight: 500;">Nombre del producto</div>
          <div style="font-size: 0.95rem; color: #666;">Cantidad: 1</div>
        </div>
        <div style="font-weight: 600; margin-left: 10px;">$Precio</div>
        <button style="background: none; border: none; color: #e53935; font-size: 1.2rem; margin-left: 8px; cursor: pointer;" title="Eliminar">&times;</button>
      </div>
      -->
      <!-- Aquí irá la lógica para mostrar productos del carrito -->
    </div>
    <div style="padding: 1rem; border-top: 1px solid #eee;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
        <span style="font-weight: 500;">Total:</span>
        <span id="cart-total" style="font-weight: 700; font-size: 1.1rem;">S/ 0.00</span>
      </div>
      <button id="checkout-btn" class="btn btn-primary" style="width: 100%;">Finalizar compra</button>
    </div>
  </div>

  <!-- Comentario: Aquí deberás agregar la lógica JS para abrir/cerrar el carrito, agregar productos, actualizar el total, y luego el formulario de entrega al hacer clic en 'Finalizar compra'. -->

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Menú hamburguesa para móviles
      const hamburger = document.querySelector('.hamburger');
      const navLinks = document.querySelector('.nav-links');

      hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
      });

      // Carrusel de productos
      const slideContainer = document.querySelector('.carousel-slide');
      const slides = document.querySelectorAll('.product-card');
      const prevBtn = document.querySelector('.carousel-btn.prev');
      const nextBtn = document.querySelector('.carousel-btn.next');
      let currentIndex = 0;
      const slideWidth = slides[0].clientWidth + 30; // Incluye margen

      function updateCarousel() {
        slideContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % (slides.length - 2);
        updateCarousel();
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + (slides.length - 2)) % (slides.length - 2);
        updateCarousel();
      }

      nextBtn.addEventListener('click', nextSlide);
      prevBtn.addEventListener('click', prevSlide);

      // Animación de números en estadísticas
      const statNumbers = document.querySelectorAll('.stat-number');

      function animateNumbers() {
        statNumbers.forEach(stat => {
          const target = parseInt(stat.getAttribute('data-count'));
          const duration = 2000;
          const step = target / (duration / 16);
          let current = 0;

          const timer = setInterval(() => {
            current += step;
            if (current >= target) {
              clearInterval(timer);
              current = target;
            }
            stat.textContent = Math.floor(current);
          }, 16);
        });
      }

      // Observador para animar números cuando son visibles
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            animateNumbers();
            observer.unobserve(entry.target);
          }
        });
      }, { threshold: 0.5 });

      document.querySelector('.stats').querySelectorAll('.stat-item').forEach(item => {
        observer.observe(item);
      });

      // Chatbot mejorado
      const chatbotButton = document.querySelector('.chatbot-button');
      const chatbotContainer = document.getElementById('chatbot-container');
      const closeChatbotBtn = document.getElementById('close-chatbot');
      const sendBtn = document.getElementById('send-btn');
      const userInput = document.getElementById('user-input');
      const messagesContainer = document.querySelector('.chatbot-messages');
      const suggestionBtns = document.querySelectorAll('.suggestion-btn');

      chatbotButton.addEventListener('click', () => {
        chatbotContainer.classList.toggle('hidden');
        if (!chatbotContainer.classList.contains('hidden')) {
          userInput.focus();
        }
      });

      closeChatbotBtn.addEventListener('click', () => {
        chatbotContainer.classList.add('hidden');
      });

      function addMessage(text, sender = 'bot') {
        const now = new Date();
        const timeString = now.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

        const msgDiv = document.createElement('div');
        msgDiv.classList.add('message', sender);

        const contentDiv = document.createElement('div');
        contentDiv.classList.add('message-content');
        contentDiv.textContent = text;

        const timeDiv = document.createElement('div');
        timeDiv.classList.add('message-time');
        timeDiv.textContent = timeString;

        msgDiv.appendChild(contentDiv);
        msgDiv.appendChild(timeDiv);
        messagesContainer.appendChild(msgDiv);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
      }

      function getBotResponse(userText) {
        const text = userText.toLowerCase();
        if (text.includes('hola') || text.includes('buenas')) {
          return '¡Hola! ¿En qué puedo ayudarte hoy? Puedes preguntarme sobre nuestros filtros de agua ozonizados, servicios de instalación o mantenimiento.';
        }
        if (text.includes('filtro') || text.includes('agua') || text.includes('ozonizado')) {
          return 'Tenemos dos modelos principales: Filtro Básico (S/ 450) y Filtro Premium (S/ 850). Ambos eliminan impurezas y bacterias del agua. ¿Te gustaría más información?';
        }
        if (text.includes('precio') || text.includes('cuesta') || text.includes('valor')) {
          return 'Nuestros precios son: Filtro Básico S/ 450, Filtro Premium S/ 850. También tenemos kits de repuestos desde S/ 120. ¿Te interesa algún modelo?';
        }
        if (text.includes('instalación') || text.includes('instalar')) {
          return 'Ofrecemos servicio de instalación profesional incluido en la compra. Nuestros técnicos certificados instalan y configuran el sistema en tu hogar o negocio. El servicio incluye garantía de 1 año.';
        }
        if (text.includes('mantenimiento') || text.includes('repuesto')) {
          return 'Recomendamos mantenimiento cada 6 meses. Vendemos kits de repuestos y ofrecemos servicio técnico a domicilio. Los filtros tienen garantía de 2 años.';
        }
        if (text.includes('contacto') || text.includes('ubicación') || text.includes('donde')) {
          return 'Estamos en Av. Principal 1234, Lima. Horario: L-V 8am-6pm, Sáb 9am-1pm. Teléfono: +51 987 654 321. También puedes escribirnos a ventas@aquapure.com';
        }
        if (text.includes('horario') || text.includes('hora') || text.includes('atienden')) {
          return 'Nuestro horario de atención es de Lunes a Viernes de 8:00 am a 6:00 pm y Sábados de 9:00 am a 1:00 pm.';
        }
        if (text.trim() === '') {
          return 'Por favor, escribe algo para que pueda ayudarte. También puedes seleccionar una de las opciones rápidas.';
        }
        return 'Entiendo que quieres saber sobre: "' + text + '". Como asistente virtual, aún estoy aprendiendo. ¿Podrías reformular tu pregunta o seleccionar una de estas opciones?\n\n1. Filtros de agua ozonizados\n2. Precios y cotizaciones\n3. Servicio de instalación\n4. Mantenimiento y repuestos';
      }

      function sendMessage() {
        const text = userInput.value.trim();
        if (!text) return;

        addMessage(text, 'user');
        userInput.value = '';

        setTimeout(() => {
          const botReply = getBotResponse(text);
          addMessage(botReply, 'bot');
        }, 700);
      }

      sendBtn.addEventListener('click', sendMessage);
      userInput.addEventListener('keydown', (e) => {
        if (e.key === 'Enter') {
          e.preventDefault();
          sendMessage();
        }
      });

      // Botones de sugerencia
      suggestionBtns.forEach(btn => {
        btn.addEventListener('click', () => {
          userInput.value = btn.textContent;
          sendMessage();
        });
      });

      // Efecto de escritura en el hero
      const heroTitle = document.querySelector('.hero-content h2');
      const originalText = heroTitle.textContent;
      heroTitle.textContent = '';

      let i = 0;
      const typingEffect = setInterval(() => {
        if (i < originalText.length) {
          heroTitle.textContent += originalText.charAt(i);
          i++;
        } else {
          clearInterval(typingEffect);
        }
      }, 100);

      // --- Lógica visual básica para abrir/cerrar el carrito ---
      const cartButton = document.querySelector('.cart-button');
      const cartPanel = document.getElementById('cart-panel');
      const closeCartBtn = document.getElementById('close-cart');

      cartButton.addEventListener('click', () => {
        cartPanel.style.right = '0';
      });
      closeCartBtn.addEventListener('click', () => {
        cartPanel.style.right = '-400px';
      });
      // Aquí deberás agregar la lógica para manejar productos, base de datos, etc.
    });
  </script>
</body>
</html>

