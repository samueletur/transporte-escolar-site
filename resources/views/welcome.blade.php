<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Van Confiável</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <meta name="description" content="Sistema completo para gestão, monitoramento e segurança do transporte escolar. Tranquilidade para pais, eficiência para escolas e segurança para todos.">
        <meta name="keywords" content="transporte escolar, van escolar, rastreamento GPS, app pais, segurança escolar">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
            
    </head>
    <body>
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="header-content">
                    <div class="logo">Van Confiável</div>
                    
                    <!-- Desktop Navigation -->
                    <nav class="nav">
                        <a href="#funcionalidades">Funcionalidades</a>
                        <a href="#beneficios">Benefícios</a>
                        <a href="#depoimentos">Depoimentos</a>
                        <a href="#precos">Preços</a>
                    </nav>

                    <div class="nav-buttons">
                        <button class="btn btn-outline">Entrar</button>
                        <button class="btn btn-hero">Teste Grátis</button>
                    </div>

                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="mobile-menu-button btn btn-ghost">
                        <span id="menu-icon" class="icon icon-menu"></span>
                        <span id="close-icon" class="icon icon-close" style="display: none;"></span>
                    </button>
                </div>

                <!-- Mobile Navigation -->
                <div id="mobile-menu" class="mobile-menu">
                    <a href="#funcionalidades">Funcionalidades</a>
                    <a href="#beneficios">Benefícios</a>
                    <a href="#depoimentos">Depoimentos</a>
                    <a href="#precos">Preços</a>
                    <div class="mobile-menu-buttons">
                        <button class="btn btn-outline">Entrar</button>
                        <button class="btn btn-hero">Teste Grátis</button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <div class="hero-grid">
                    <div class="hero-content animate-fade-in-up">
                        <h1 class="hero-title">
                            Revolucione a gestão  
                            <span class="gradient-hero">do Transporte Escolar</span> 
                            com nossa plataforma completa
                        </h1>
                        
                        <p class="hero-description">
                            Sistema completo para gestão, monitoramento e segurança do transporte escolar. 
                            Tranquilidade para pais, eficiência para os proprietários e segurança para todos.
                        </p>

                        @if(false)
                        
                            <div class="hero-buttons">
                                <button class="btn btn-hero btn-lg">
                                    Começar Teste Grátis
                                </button>
                                <button class="btn btn-outline btn-lg">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5 18.9346C5 20.4745 6.66722 21.4367 8.00056 20.6663L20.0028 13.7317C21.3354 12.9618 21.3354 11.0382 20.0028 10.2683L8.00055 3.33363C6.66722 2.56326 5 3.52548 5 5.06537V18.9346ZM19.0022 12L7 18.9346L7 5.06537L19.0022 12Z" fill="white"/>
                                    </svg>
                                    <span class="ms-2">Ver Demonstração</span>
                                </button>
                            </div>

                            <div class="hero-stats">
                                <div class="hero-stat">
                                    <div class="hero-stat-value">98%</div>
                                    <div class="hero-stat-label">Satisfação</div>
                                </div>
                                <div class="hero-stat">
                                    <div class="hero-stat-value">24/7</div>
                                    <div class="hero-stat-label">Monitoramento</div>
                                </div>
                                <div class="hero-stat">
                                    <div class="hero-stat-value">500+</div>
                                    <div class="hero-stat-label">Escolas</div>
                                </div>
                            </div>

                        @endif
                    </div>
                    
                    <div class="hero-image">
                        <img src="{{ asset('assets/images/hero-school-van-with-dashboard.jpg') }}" alt="Van escolar da Van Confiável" class="hero-img">
                        
                        <!-- Floating cards -->
                        <div class="floating-card floating-card-1">
                            <div class="floating-card-content">
                                <div class="floating-card-icon primary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 7.5C11.4477 7.5 11 7.94772 11 8.5V12C11 12.3573 11.1906 12.6874 11.5 12.866L14.9641 14.866C15.0239 14.9005 15.0858 14.9282 15.1488 14.9492C15.5901 15.0963 16.0885 14.9185 16.3301 14.5C16.6063 14.0217 16.4424 13.4101 15.9641 13.134L13 11.4227V8.5C13 7.94772 12.5523 7.5 12 7.5Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="floating-card-text">
                                    <h4>Tempo Real</h4>
                                    <p>GPS Ativo</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="floating-card floating-card-2">
                            <div class="floating-card-content">
                                <div class="floating-card-icon secondary">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_27_265)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7 10.5C9.07107 10.5 10.75 8.82107 10.75 6.75C10.75 4.67893 9.07107 3 7 3C4.92893 3 3.25 4.67893 3.25 6.75C3.25 8.82107 4.92893 10.5 7 10.5ZM7 8.5C7.9665 8.5 8.75 7.7165 8.75 6.75C8.75 5.7835 7.9665 5 7 5C6.0335 5 5.25 5.7835 5.25 6.75C5.25 7.7165 6.0335 8.5 7 8.5Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 6.75C20.75 8.82107 19.0711 10.5 17 10.5C14.9289 10.5 13.25 8.82107 13.25 6.75C13.25 4.67893 14.9289 3 17 3C19.0711 3 20.75 4.67893 20.75 6.75ZM18.75 6.75C18.75 7.7165 17.9665 8.5 17 8.5C16.0335 8.5 15.25 7.7165 15.25 6.75C15.25 5.7835 16.0335 5 17 5C17.9665 5 18.75 5.7835 18.75 6.75Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4587 14.1763C15.9532 14.061 16.4691 14 17 14C18.9818 14 20.7624 14.8517 22 16.2153V18H16C16 18.7286 15.8052 19.4117 15.4649 20H22C23.1046 20 24 19.1046 24 18V16.1668C24 15.7334 23.8649 15.3068 23.5791 14.9811C21.9754 13.1536 19.6224 12 17 12C15.9266 12 14.8983 12.1933 13.948 12.547C14.3532 12.8904 14.7324 13.2632 15.0823 13.6619C15.2263 13.826 15.3513 13.9984 15.4587 14.1763ZM21.9998 16.1618C21.9998 16.1618 21.9998 16.1621 21.9999 16.1624L21.9998 16.162L21.9998 16.1618Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 20C13.1046 20 14 19.1046 14 18V16.1668C14 15.7334 13.8649 15.3068 13.5791 14.9811C13.1123 14.4492 12.582 13.9743 12 13.5684C10.5827 12.5798 8.85906 12 7 12C4.37758 12 2.02461 13.1536 0.420908 14.9811C0.135096 15.3068 0 15.7334 0 16.1668V18C0 19.1046 0.895431 20 2 20H12ZM7 14C8.98184 14 10.7624 14.8517 12 16.2153V18H2V16.2153C3.23758 14.8517 5.01817 14 7 14ZM11.9999 16.1624C11.9998 16.162 11.9998 16.1617 11.9998 16.1617C11.9998 16.1617 11.9998 16.1619 11.9999 16.1624ZM2.0002 16.1617C2.0002 16.1617 2.00017 16.1619 2.00014 16.1624L2.0002 16.1617ZM2.0002 16.1618C2.00019 16.1619 2.00017 16.1621 2.00014 16.1624L2.0002 16.1618Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_27_265">
                                    <rect width="24" height="24" fill="white"/>
                                    </clipPath>
                                    </defs>
                                    </svg>

                                </div>
                                <div class="floating-card-text">
                                    <h4>45 Alunos</h4>
                                    <p>Check-in OK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="funcionalidades" class="features">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Funcionalidades que fazem a diferença</h2>
                    <p class="section-description">
                        Tecnologia avançada para transformar a gestão do transporte escolar, 
                        proporcionando segurança, eficiência e tranquilidade para todos.
                    </p>
                </div>

                <div class="features-grid">
                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 14C14.2091 14 16 12.2091 16 10C16 7.79086 14.2091 6 12 6C9.79086 6 8 7.79086 8 10C8 12.2091 9.79086 14 12 14ZM12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 10C21 14.963 15.7052 20.549 13.238 22.8825C12.5344 23.5479 11.4656 23.5479 10.762 22.8825C8.29483 20.549 3 14.963 3 10C3 5.02944 7.02944 1 12 1C16.9706 1 21 5.02944 21 10ZM19 10C19 11.8435 17.9793 14.0547 16.4111 16.2728C14.9434 18.3488 13.1877 20.1658 12 21.2999C10.8123 20.1658 9.05661 18.3488 7.58891 16.2728C6.02075 14.0547 5 11.8435 5 10C5 6.13401 8.13401 3 12 3C15.866 3 19 6.13401 19 10Z" fill="white"/>
                            </svg>

                        </div>
                        <h3 class="feature-title">Rastreamento GPS em Tempo Real</h3>
                        <p class="feature-description">
                            Monitore a localização exata de cada veículo e acompanhe rotas em tempo real com precisão absoluta.
                        </p>
                    </div>

                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13.25 17.25C13.25 17.9404 12.6904 18.5 12 18.5C11.3096 18.5 10.75 17.9404 10.75 17.25C10.75 16.5596 11.3096 16 12 16C12.6904 16 13.25 16.5596 13.25 17.25Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 4C5.5 2.89543 6.39543 2 7.5 2H16.5C17.6046 2 18.5 2.89543 18.5 4V20C18.5 21.1046 17.6046 22 16.5 22H7.5C6.39543 22 5.5 21.1046 5.5 20V4ZM7.5 4H16.5V20H7.5V4Z" fill="white"/>
                            </svg>

                        </div>
                        <h3 class="feature-title">App Mobile para Pais</h3>
                        <p class="feature-description">
                            Pais recebem notificações sobre embarque, desembarque e localização dos filhos diretamente no smartphone.
                        </p>
                    </div>

                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 6.29971C3 5.50933 3.46547 4.79309 4.18772 4.47209L11.1877 1.36098C11.7049 1.13114 12.2951 1.13114 12.8123 1.36098L19.8123 4.47209C20.5345 4.79309 21 5.50933 21 6.29971V13C21 18.8766 14.6569 21.9341 12.621 22.764C12.2203 22.9274 11.7798 22.9274 11.379 22.764C9.34312 21.9341 3 18.8766 3 13V6.29971ZM12 3.1886L19 6.29971V13C19 15.145 17.8582 16.8748 16.2605 18.2663C14.7314 19.5979 12.9631 20.4531 12 20.8566C11.0369 20.4531 9.26856 19.5979 7.73955 18.2663C6.14184 16.8748 5 15.145 5 13V6.29971L12 3.1886Z" fill="white"/>
                            </svg>

                        </div>
                        <h3 class="feature-title">Segurança Avançada</h3>
                        <p class="feature-description">
                            Sistema de check-in/check-out, alertas de emergência e verificação de identidade para máxima segurança.
                        </p>
                    </div>

                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.73079 5.02758C1.39154 5.46393 1.5215 6.08755 1.98286 6.3919C2.44362 6.69585 3.06011 6.5657 3.40488 6.13463C4.3305 4.9773 5.485 4.01101 6.7998 3.30434C7.28624 3.04289 7.52597 2.45983 7.31018 1.95148C7.09426 1.4428 6.50457 1.20219 6.01422 1.45699C5.9096 1.51135 5.80582 1.56709 5.70289 1.62418C4.15901 2.48063 2.80782 3.64225 1.73079 5.02758Z" fill="white"/>
                            <path d="M22.1743 6.2638C22.5037 5.93457 22.566 5.40939 22.2692 5.02758C21.1204 3.5499 19.6596 2.32675 17.9858 1.45699C17.9245 1.42514 17.8616 1.40103 17.7982 1.38422C17.3538 1.26653 16.8787 1.50639 16.6898 1.95148C16.474 2.45983 16.7138 3.0429 17.2002 3.30435C18.515 4.01101 19.6695 4.9773 20.5951 6.13463C20.9399 6.5657 21.5564 6.69586 22.0171 6.3919C22.0748 6.35386 22.1273 6.31083 22.1743 6.2638Z" fill="white"/>
                            <path d="M11.5 13.866C11.1906 13.6874 11 13.3573 11 13V10C11 9.44772 11.4477 9.00001 12 9.00001C12.5523 9.00001 13 9.44772 13 10V12.4227L15.5311 13.884C16.0094 14.1601 16.1733 14.7717 15.8971 15.25C15.621 15.7283 15.0094 15.8922 14.5311 15.616L11.5 13.866Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21 13C21 17.9706 16.9706 22 12 22C7.02943 22 2.99999 17.9706 2.99999 13C2.99999 8.02944 7.02943 4 12 4C16.9706 4 21 8.02944 21 13ZM19 13C19 16.866 15.866 20 12 20C8.134 20 4.99999 16.866 4.99999 13C4.99999 9.13401 8.134 6 12 6C15.866 6 19 9.13401 19 13Z" fill="white"/>
                            </svg>

                        </div>
                        <h3 class="feature-title">Gestão de Horários</h3>
                        <p class="feature-description">
                            Otimização automática de rotas e horários, reduzindo tempo de viagem e custos operacionais.
                        </p>
                    </div>

                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_27_265)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 10.5C9.07107 10.5 10.75 8.82107 10.75 6.75C10.75 4.67893 9.07107 3 7 3C4.92893 3 3.25 4.67893 3.25 6.75C3.25 8.82107 4.92893 10.5 7 10.5ZM7 8.5C7.9665 8.5 8.75 7.7165 8.75 6.75C8.75 5.7835 7.9665 5 7 5C6.0335 5 5.25 5.7835 5.25 6.75C5.25 7.7165 6.0335 8.5 7 8.5Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.75 6.75C20.75 8.82107 19.0711 10.5 17 10.5C14.9289 10.5 13.25 8.82107 13.25 6.75C13.25 4.67893 14.9289 3 17 3C19.0711 3 20.75 4.67893 20.75 6.75ZM18.75 6.75C18.75 7.7165 17.9665 8.5 17 8.5C16.0335 8.5 15.25 7.7165 15.25 6.75C15.25 5.7835 16.0335 5 17 5C17.9665 5 18.75 5.7835 18.75 6.75Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4587 14.1763C15.9532 14.061 16.4691 14 17 14C18.9818 14 20.7624 14.8517 22 16.2153V18H16C16 18.7286 15.8052 19.4117 15.4649 20H22C23.1046 20 24 19.1046 24 18V16.1668C24 15.7334 23.8649 15.3068 23.5791 14.9811C21.9754 13.1536 19.6224 12 17 12C15.9266 12 14.8983 12.1933 13.948 12.547C14.3532 12.8904 14.7324 13.2632 15.0823 13.6619C15.2263 13.826 15.3513 13.9984 15.4587 14.1763ZM21.9998 16.1618C21.9998 16.1618 21.9998 16.1621 21.9999 16.1624L21.9998 16.162L21.9998 16.1618Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 20C13.1046 20 14 19.1046 14 18V16.1668C14 15.7334 13.8649 15.3068 13.5791 14.9811C13.1123 14.4492 12.582 13.9743 12 13.5684C10.5827 12.5798 8.85906 12 7 12C4.37758 12 2.02461 13.1536 0.420908 14.9811C0.135096 15.3068 0 15.7334 0 16.1668V18C0 19.1046 0.895431 20 2 20H12ZM7 14C8.98184 14 10.7624 14.8517 12 16.2153V18H2V16.2153C3.23758 14.8517 5.01817 14 7 14ZM11.9999 16.1624C11.9998 16.162 11.9998 16.1617 11.9998 16.1617C11.9998 16.1617 11.9998 16.1619 11.9999 16.1624ZM2.0002 16.1617C2.0002 16.1617 2.00017 16.1619 2.00014 16.1624L2.0002 16.1617ZM2.0002 16.1618C2.00019 16.1619 2.00017 16.1621 2.00014 16.1624L2.0002 16.1618Z" fill="white"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_27_265">
                            <rect width="24" height="24" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>

                        </div>
                        <h3 class="feature-title">Gestão de Passageiros</h3>
                        <p class="feature-description">
                            Controle completo de lista de alunos, pontos de parada e responsáveis com interface intuitiva.
                        </p>
                    </div>

                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M22.3119 10.0113C22.5199 11.0961 21.6046 12 20.5 12H14C12.8954 12 12 11.1046 12 10V3.50003C12 2.39546 12.9039 1.48014 13.9887 1.68811C14.5142 1.78886 15.0258 1.92878 15.5203 2.10472C18.9819 3.33628 21.6067 6.33272 22.3119 10.0113ZM20.2638 10C19.5199 6.9135 17.0865 4.48009 14 3.7362V10H20.2638ZM20.5028 9.9998C20.5028 9.9998 20.5022 9.99998 20.5008 10C20.5021 9.99977 20.5028 9.9998 20.5028 9.9998ZM14 3.4992C14.0001 3.49785 14.0002 3.49723 14.0002 3.49723L14.0003 3.49738C14.0003 3.49738 14.0003 3.49753 14.0002 3.49764C14.0002 3.49797 14.0002 3.49849 14 3.4992Z" fill="white"/>
                            <path d="M8.8108 3.04859C9.41051 2.83491 10 3.31126 10 3.9479V4.00826C10 4.45808 9.69662 4.8461 9.2775 5.00945C6.48133 6.09922 4.5 8.81824 4.5 12C4.5 16.1422 7.85787 19.5 12 19.5C15.1818 19.5 17.9008 17.5187 18.9906 14.7225C19.1539 14.3034 19.542 14 19.9918 14H20.0521C20.6888 14 21.1651 14.5895 20.9514 15.1892C19.6409 18.8672 16.1279 21.5 12 21.5C6.7533 21.5 2.5 17.2467 2.5 12C2.5 7.87209 5.1328 4.35908 8.8108 3.04859Z" fill="white"/>
                            </svg>

                        </div>
                        <h3 class="feature-title">Relatórios Detalhados</h3>
                        <p class="feature-description">
                            Analytics completos sobre uso, eficiência de rotas, frequência e indicadores de performance.
                        </p>
                    </div>

                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9C0 10.5545 0.498805 12.0055 1.36191 13.2333L0.494498 16.2693C0.278969 17.0236 0.976393 17.721 1.73074 17.5055L5.58545 16.4042C6.06733 16.5799 6.57016 16.7196 7.08969 16.8194C7.08972 16.8195 7.08966 16.8194 7.08969 16.8194C7.70526 16.9377 8.34435 17.0001 8.99972 17.0001C9.1675 17.0001 9.33421 16.996 9.49973 16.9879C9.49954 16.9879 9.49991 16.9879 9.49973 16.9879C14.2381 16.7577 18 13.2694 18 9C18 4.58172 13.9706 1 9 1C4.02944 1 0 4.58172 0 9ZM3.28496 13.7828C3.45089 13.202 3.34547 12.5773 2.99811 12.0832C2.35542 11.1689 2 10.1153 2 9C2 5.90124 4.90604 3 9 3C13.094 3 16 5.90124 16 9C16 12.0988 13.094 15 9 15C8.02549 15 7.10445 14.8293 6.27081 14.5253C5.87419 14.3806 5.44195 14.3651 5.03601 14.4811L2.91204 15.088L3.28496 13.7828Z" fill="white"/>
                            <path d="M19.5337 6.08789C19.8167 6.94292 19.9783 7.85289 19.9977 8.80484C21.2586 9.92076 21.9997 11.4352 21.9997 13.0001C21.9997 14.1154 21.6443 15.169 21.0016 16.0832C20.6543 16.5774 20.5488 17.2021 20.7148 17.7828L21.0877 19.088L18.9637 18.4812C18.5578 18.3652 18.1255 18.3806 17.7289 18.5253C16.8953 18.8294 15.9742 19.0001 14.9997 19.0001C14.0209 19.0001 13.1101 18.8342 12.2906 18.5395C11.2558 18.8357 10.1641 18.9956 9.0465 19C10.6331 20.2448 12.7172 21.0001 14.9997 21.0001C16.2083 21.0001 17.3613 20.7883 18.4143 20.4042L22.269 21.5056C23.0233 21.7211 23.7208 21.0237 23.5052 20.2693L22.6378 17.2334C23.5009 16.0055 23.9997 14.5546 23.9997 13.0001C23.9997 10.0514 22.2051 7.47537 19.5337 6.08789Z" fill="white"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">Comunicação Integrada</h3>
                        <p class="feature-description">
                            Chat direto entre motoristas, escola e pais para comunicação rápida e eficiente.
                        </p>
                    </div>

                    <div class="feature-card card">
                        <div class="feature-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0002 16C14.2094 16 16.0002 14.2091 16.0002 12C16.0002 9.79086 14.2094 8 12.0002 8C9.79109 8 8.00023 9.79086 8.00023 12C8.00023 14.2091 9.79109 16 12.0002 16ZM12.0002 14C13.1048 14 14.0002 13.1046 14.0002 12C14.0002 10.8954 13.1048 10 12.0002 10C10.8957 10 10.0002 10.8954 10.0002 12C10.0002 13.1046 10.8957 14 12.0002 14Z" fill="white"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1182 1.86489L15.5203 4.81406C15.8475 4.97464 16.1621 5.1569 16.4623 5.35898L19.2185 4.23223C19.6814 4.043 20.2129 4.2248 20.463 4.65787L22.5901 8.34213C22.8401 8.77521 22.7318 9.3264 22.3365 9.63266L19.9821 11.4566C19.9941 11.6362 20.0002 11.8174 20.0002 12C20.0002 12.1826 19.9941 12.3638 19.9821 12.5434L22.3365 14.3673C22.7318 14.6736 22.8401 15.2248 22.5901 15.6579L20.463 19.3421C20.2129 19.7752 19.6814 19.957 19.2185 19.7678L16.4623 18.641C16.1621 18.8431 15.8475 19.0254 15.5203 19.1859L15.1182 22.1351C15.0506 22.6306 14.6274 23 14.1273 23H9.87313C9.37306 23 8.94987 22.6306 8.8823 22.1351L8.48014 19.1859C8.15296 19.0254 7.83835 18.8431 7.53818 18.641L4.78195 19.7678C4.31907 19.957 3.78756 19.7752 3.53752 19.3421L1.41042 15.6579C1.16038 15.2248 1.26869 14.6736 1.66401 14.3673L4.01841 12.5434C4.00636 12.3638 4.00025 12.1826 4.00025 12C4.00025 11.8174 4.00636 11.6362 4.01841 11.4566L1.66401 9.63266C1.26869 9.3264 1.16038 8.77521 1.41041 8.34213L3.53752 4.65787C3.78755 4.2248 4.31906 4.043 4.78195 4.23223L7.53818 5.35898C7.83835 5.1569 8.15296 4.97464 8.48014 4.81406L8.8823 1.86489C8.94987 1.3694 9.37306 1 9.87313 1H14.1273C14.6274 1 15.0506 1.3694 15.1182 1.86489ZM13.6826 6.14004L14.6392 6.60948C14.8842 6.72975 15.1201 6.86639 15.3454 7.01805L16.231 7.61423L19.1674 6.41382L20.4216 8.58619L17.9153 10.5278L17.9866 11.5905C17.9956 11.7255 18.0002 11.8621 18.0002 12C18.0002 12.1379 17.9956 12.2745 17.9866 12.4095L17.9153 13.4722L20.4216 15.4138L19.1674 17.5862L16.231 16.3858L15.3454 16.982C15.1201 17.1336 14.8842 17.2702 14.6392 17.3905L13.6826 17.86L13.2545 21H10.746L10.3178 17.86L9.36131 17.3905C9.11626 17.2702 8.88037 17.1336 8.6551 16.982L7.76954 16.3858L4.83313 17.5862L3.57891 15.4138L6.0852 13.4722L6.01392 12.4095C6.00487 12.2745 6.00024 12.1379 6.00024 12C6.00024 11.8621 6.00487 11.7255 6.01392 11.5905L6.0852 10.5278L3.57891 8.58619L4.83312 6.41382L7.76953 7.61423L8.6551 7.01805C8.88037 6.86639 9.11625 6.72976 9.36131 6.60949L10.3178 6.14004L10.746 3H13.2545L13.6826 6.14004Z" fill="white"/>
                            </svg>
                        </div>
                        <h3 class="feature-title">Configuração Flexível</h3>
                        <p class="feature-description">
                            Sistema adaptável às necessidades específicas de cada escola com configurações personalizáveis.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Benefits Section -->
        <section id="beneficios" class="benefits">
            <div class="container">
                <div class="benefits-grid">
                    <div>
                        <h2 class="section-title">
                            Transforme resultados com nossa 
                            <span class="gradient-hero">tecnologia</span>
                        </h2>
                        
                        @if(false)
                        <p class="section-description" style="text-align: left; margin-bottom: 2rem;">
                            Mais de 300 pais já revolucionaram seu transporte escolar com nossa plataforma. 
                            Veja os benefícios comprovados:
                        </p>
                        @endif

                        <div style="margin-bottom: 2rem;">
                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 10C10.5 10.8284 9.82843 11.5 9 11.5C8.17157 11.5 7.5 10.8284 7.5 10C7.5 9.17157 8.17157 8.5 9 8.5C9.82843 8.5 10.5 9.17157 10.5 10Z" fill="white"/>
                                    <path d="M15 11.5C15.8284 11.5 16.5 10.8284 16.5 10C16.5 9.17157 15.8284 8.5 15 8.5C14.1716 8.5 13.5 9.17157 13.5 10C13.5 10.8284 14.1716 11.5 15 11.5Z" fill="white"/>
                                    <path d="M8.53513 14C9.01319 13.7235 9.61753 13.9048 10.0346 14.2668C10.5616 14.7242 11.2489 15 12 15C12.7511 15 13.4384 14.7242 13.9654 14.2668C14.3825 13.9048 14.9868 13.7235 15.4649 14C15.9429 14.2765 16.1127 14.897 15.7468 15.3107C14.8315 16.3457 13.4926 17 12 17C10.5074 17 9.16846 16.3457 8.2532 15.3107C7.88734 14.897 8.05707 14.2765 8.53513 14Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20Z" fill="white"/>
                                    </svg>


                                </div>
                                <div class="benefit-content">
                                    <h3>Redução de 90% nas reclamações</h3>
                                    <p>Transparência total elimina dúvidas sobre horários e localizações</p>
                                </div>
                            </div>

                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.9377 8L18.5945 8L13.0087 13.5858L9.71586 10.2929C9.52833 10.1054 9.27397 10 9.00876 10C8.74354 10 8.48918 10.1054 8.30165 10.2929L2.00871 16.5858C1.9599 16.6346 1.91719 16.6873 1.88057 16.7427C1.62429 17.1309 1.667 17.6583 2.00871 18.0001C2.39924 18.3906 3.0324 18.3906 3.42293 18.0001L9.00875 12.4142L12.3016 15.7071C12.4892 15.8947 12.7435 16 13.0087 16C13.2739 16 13.5283 15.8947 13.7158 15.7071L20.0087 9.41421L20.0087 13.0711C20.0087 13.6234 20.4565 14.0711 21.0087 14.0711C21.561 14.0711 22.0087 13.6233 22.0087 13.0711L22.0087 7C22.0087 6.44772 21.561 6 21.0087 6L14.9377 6C14.8686 6 14.8012 6.007 14.7361 6.02032C14.2804 6.11356 13.9377 6.51675 13.9377 7C13.9377 7.55229 14.3854 8 14.9377 8Z" fill="white"/>
                                    </svg>


                                </div>
                                <div class="benefit-content">
                                    <h3>Economia de até 30% nos custos</h3>
                                    <p>Otimização de rotas e melhor gestão de combustível</p>
                                </div>
                            </div>

                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4835 3.20764C18.0773 3.20764 19.6061 3.84008 20.7341 4.96612C21.8621 6.09216 22.4972 7.61979 22.5 9.21364C22.5 12.4476 21.3135 13.9911 16.011 18.1806L13.2876 20.2945C12.5299 20.8826 11.4701 20.8826 10.7124 20.2945L7.989 18.1806C2.6865 13.9911 1.5 12.4476 1.5 9.21364C1.50278 7.61979 2.13789 6.09216 3.2659 4.96612C4.39391 3.84008 5.92264 3.20764 7.5165 3.20764C9.14236 3.21536 10.7014 3.85554 11.8635 4.99264L12 5.12142L12.1365 4.99264C13.2986 3.85554 14.8576 3.21536 16.4835 3.20764ZM11.2224 7.21451C11.2414 7.23242 11.2604 7.25032 11.2793 7.26818C11.6839 7.64997 12.316 7.64997 12.7206 7.26818C12.7396 7.25026 12.7586 7.23231 12.7776 7.21433C13.7018 6.34183 14.6791 5.41906 15.9351 5.24697C16.1175 5.22199 16.3022 5.20874 16.4882 5.20764C17.5505 5.20889 18.5692 5.63096 19.3211 6.38157C20.0736 7.13274 20.4975 8.1516 20.5 9.21477C20.4999 10.4993 20.2885 11.2559 19.6287 12.1593C18.8538 13.2205 17.4465 14.4972 14.7778 16.606L12.0613 18.7145C12.0252 18.7425 11.9748 18.7425 11.9387 18.7145L9.22213 16.606C6.55344 14.4972 5.14619 13.2205 4.37123 12.1593C3.71159 11.256 3.5002 10.4996 3.5 9.21549C3.50229 8.15206 3.92623 7.13291 4.67888 6.38157C5.4308 5.63096 6.44945 5.20889 7.51177 5.20764C7.69754 5.20873 7.88202 5.22196 8.06414 5.24688C9.32047 5.41879 10.2981 6.34181 11.2224 7.21451Z" fill="white"/>
                                    </svg>


                                </div>
                                <div class="benefit-content">
                                    <h3>Tranquilidade para os pais</h3>
                                    <p>Monitoramento em tempo real e notificações automáticas</p>
                                </div>
                            </div>

                            <div class="benefit-item">
                                <div class="benefit-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.4714 15.9181L11.8022 17.216C12.1941 17.5981 12.8204 17.5942 13.2075 17.2072L23.0004 7.41426C23.3909 7.02374 23.3909 6.39057 23.0004 6.00005C22.6099 5.60952 21.9767 5.60952 21.5862 6.00005L12.4916 15.0946L11.8857 14.5038L10.4714 15.9181Z" fill="white"/>
                                    <path d="M16.5004 7.41426C16.8909 7.02374 16.8909 6.39057 16.5004 6.00005C16.1099 5.60952 15.4767 5.60952 15.0862 6.00005L5.99603 15.0902L2.4146 11.5532C2.02165 11.1651 1.3885 11.169 1.00042 11.562C0.612332 11.9549 0.616277 12.5881 1.00923 12.9761L5.29773 17.2115C5.68895 17.5979 6.31872 17.596 6.70752 17.2072L16.5004 7.41426Z" fill="white"/>
                                    </svg>
                                </div>
                                <div class="benefit-content">
                                    <h3>Eficiência operacional</h3>
                                    <p>Automação de processos e relatórios inteligentes</p>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-hero btn-lg">
                            Agendar Demonstração Gratuita
                        </button>
                    </div>

                    <div class="benefits-image">
                        <img src="{{ asset('assets/images/dashboard-preview.jpg') }}" alt="Dashboard da Van Confiável" class="benefits-img">
                    </div>
                </div>
            </div>
        </section>

        @if(false)
            <!-- Testimonials Section -->
            <section id="depoimentos" class="features">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">O que nossos clientes dizem</h2>
                        <p class="section-description">
                            Depoimentos reais de escolas e pais que transformaram seu transporte escolar
                        </p>
                    </div>

                    <div class="features-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                        <div class="card">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                                <div style="display: flex; gap: 0.25rem;">
                                    <span style="color: hsl(var(--secondary));">★★★★★</span>
                                </div>
                                <span style="font-size: 2rem; color: hsl(var(--muted-foreground)); opacity: 0.5;">"</span>
                            </div>
                            
                            <p style="color: hsl(var(--muted-foreground)); margin-bottom: 1.5rem; font-style: italic;">
                                "O sistema revolucionou nossa operação. Reduzimos reclamações em 95% e os pais ficaram muito mais tranquilos. A otimização de rotas nos economizou 25% nos custos."
                            </p>
                            
                            <div style="border-top: 1px solid hsl(var(--border)); padding-top: 1rem;">
                                <div style="font-weight: 600;">Maria Santos</div>
                                <div style="font-size: 0.875rem; color: hsl(var(--primary)); font-weight: 500;">Diretora - Colégio São José</div>
                                <div style="font-size: 0.75rem; color: hsl(var(--muted-foreground)); margin-top: 0.25rem;">Colégio São José - SP</div>
                            </div>
                        </div>

                        <div class="card">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                                <div style="display: flex; gap: 0.25rem;">
                                    <span style="color: hsl(var(--secondary));">★★★★★</span>
                                </div>
                                <span style="font-size: 2rem; color: hsl(var(--muted-foreground)); opacity: 0.5;">"</span>
                            </div>
                            
                            <p style="color: hsl(var(--muted-foreground)); margin-bottom: 1.5rem; font-style: italic;">
                                "Implementamos há 6 meses e o resultado foi impressionante. O controle em tempo real e os relatórios detalhados facilitaram muito nossa gestão diária."
                            </p>
                            
                            <div style="border-top: 1px solid hsl(var(--border)); padding-top: 1rem;">
                                <div style="font-weight: 600;">Carlos Oliveira</div>
                                <div style="font-size: 0.875rem; color: hsl(var(--primary)); font-weight: 500;">Coordenador de Transporte</div>
                                <div style="font-size: 0.75rem; color: hsl(var(--muted-foreground)); margin-top: 0.25rem;">Escola Crescer - RJ</div>
                            </div>
                        </div>

                        <div class="card">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                                <div style="display: flex; gap: 0.25rem;">
                                    <span style="color: hsl(var(--secondary));">★★★★★</span>
                                </div>
                                <span style="font-size: 2rem; color: hsl(var(--muted-foreground)); opacity: 0.5;">"</span>
                            </div>
                            
                            <p style="color: hsl(var(--muted-foreground)); margin-bottom: 1.5rem; font-style: italic;">
                                "Como mãe, a tranquilidade que o app me dá é invaluável. Recebo notificações quando meu filho embarca e desembarca, além de poder acompanhar todo o trajeto."
                            </p>
                            
                            <div style="border-top: 1px solid hsl(var(--border)); padding-top: 1rem;">
                                <div style="font-weight: 600;">Ana Paula Silva</div>
                                <div style="font-size: 0.875rem; color: hsl(var(--primary)); font-weight: 500;">Mãe de aluno</div>
                                <div style="font-size: 0.75rem; color: hsl(var(--muted-foreground)); margin-top: 0.25rem;">Usuária do sistema</div>
                            </div>
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 3rem;">
                        <div style="display: inline-flex; align-items: center; gap: 2rem; background: hsl(var(--accent) / 0.5); border-radius: 9999px; padding: 1rem 2rem;">
                            <div style="text-align: center;">
                                <div style="font-size: 1.5rem; font-weight: bold; color: hsl(var(--primary));">4.9/5</div>
                                <div style="font-size: 0.875rem; color: hsl(var(--muted-foreground));">Avaliação média</div>
                            </div>
                            <div style="width: 1px; height: 3rem; background: hsl(var(--border));"></div>
                            <div style="text-align: center;">
                                <div style="font-size: 1.5rem; font-weight: bold; color: hsl(var(--primary));">500+</div>
                                <div style="font-size: 0.875rem; color: hsl(var(--muted-foreground));">Escolas atendidas</div>
                            </div>
                            <div style="width: 1px; height: 3rem; background: hsl(var(--border));"></div>
                            <div style="text-align: center;">
                                <div style="font-size: 1.5rem; font-weight: bold; color: hsl(var(--primary));">98%</div>
                                <div style="font-size: 0.875rem; color: hsl(var(--muted-foreground));">Renovação</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <!-- Pricing Section -->
        <section id="precos" class="benefits">
            <div class="container">
                <div class="section-header">
                    <h2 class="section-title">Planos que se adaptam ao seu tamanho</h2>
                    <p class="section-description">
                        Comece com teste grátis de 30 dias. Sem compromisso, sem cartão de crédito.
                    </p>
                </div>

                <div style="display: grid; gap: 2rem; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); max-width: 72rem; margin: 0 auto;">
                    <!-- Plano Básico -->
                    <div class="card" style="text-align: center; position: relative;">
                        <div style="padding-bottom: 2rem; border-bottom: 1px solid hsl(var(--border));">
                            <div style="width: 4rem; height: 4rem; border-radius: 9999px; background: var(--gradient-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto; color: white;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.99944 6.2225C3.38096 6.57985 3 7.23993 3 7.95423V16.0457C3 16.76 3.38095 17.4201 3.99944 17.7774L10.9994 21.8219C11.6185 22.1796 12.3815 22.1796 13.0006 21.8219L20.0006 17.7774C20.619 17.4201 21 16.76 21 16.0457V7.95423C21 7.23993 20.619 6.57985 20.0006 6.2225L13.0006 2.17806C12.3815 1.82037 11.6185 1.82037 10.9994 2.17806L3.99944 6.2225ZM12 3.90979L18.0017 7.37742L16 8.53393L9.99834 5.06631L12 3.90979ZM7.99945 6.22122L14.0011 9.68885L12 10.845L5.99834 7.37742L7.99945 6.22122ZM5 9.11043L11 12.5771V19.5124L5 16.0457L5 9.11043ZM19 9.11043V16.0457L13 19.5124V12.5771L19 9.11043Z" fill="white"/>
                                </svg>
                            </div>
                            
                            <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Básico</h3>
                            
                            <div style="margin: 1rem 0;">
                                <span style="font-size: 2.5rem; font-weight: bold;">R$ 297</span>
                                <span style="color: hsl(var(--muted-foreground));">/mês</span>
                            </div>
                            
                            <p style="color: hsl(var(--muted-foreground)); margin-bottom: 2rem;">
                                Ideal para gestão de frota com até 3 veículos
                            </p>
                        </div>
                        
                        <div style="padding-top: 2rem;">
                            <button class="btn btn-outline btn-lg" style="width: 100%; margin-bottom: 1.5rem;">
                                Começar Teste Grátis
                            </button>
                            
                            <ul style="list-style: none; padding: 0; text-align: left;">
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Até 3 veículos</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Rastreamento GPS básico</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>App para pais</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Chat integrado</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Otimização de rotas</span>
                                </li>                                
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Suporte por email</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Relatórios mensais</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Plano Profissional -->
                    <div class="card" style="text-align: center; position: relative; border-color: hsl(var(--primary)); box-shadow: var(--shadow-card); transform: scale(1.05);">
                        <div style="position: absolute; top: -1rem; left: 50%; transform: translateX(-50%); background: var(--gradient-hero); color: white; padding: 0.5rem 1.5rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;">
                            Mais Popular
                        </div>
                        
                        <div style="padding-bottom: 2rem; border-bottom: 1px solid hsl(var(--border));">
                            <div style="width: 4rem; height: 4rem; border-radius: 9999px; background: var(--gradient-hero); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto; color: white;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.7878 11.8383C15.8536 12.2387 14.7677 11.8747 14.2635 10.9923L11.9999 7.03116L9.73643 10.9923C9.23218 11.8747 8.14628 12.2387 7.2121 11.8383L3.5247 10.258L4.71578 18L19.2841 18L20.4752 10.258L16.7878 11.8383ZM22.1718 7.35495C22.5325 7.20035 22.9226 7.50264 22.8629 7.89055L21.2608 18.3041C21.1107 19.2798 20.2712 20 19.2841 20H4.71578C3.72864 20 2.88914 19.2798 2.73904 18.3041L1.13695 7.89055C1.07727 7.50264 1.46735 7.20035 1.82809 7.35495L7.99994 10L11.5658 3.75974C11.7578 3.42384 12.2421 3.42384 12.4341 3.75974L15.9999 10L22.1718 7.35495Z" fill="white"/>
                                </svg>

                            </div>
                            
                            <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Profissional</h3>
                            
                            <div style="margin: 1rem 0;">
                                <span style="font-size: 2.5rem; font-weight: bold;">R$ 597</span>
                                <span style="color: hsl(var(--muted-foreground));">/mês</span>
                            </div>
                            
                            <p style="color: hsl(var(--muted-foreground)); margin-bottom: 2rem;">
                                Perfeito para gestão de frota com até 10 veículos
                            </p>
                        </div>
                        
                        <div style="padding-top: 2rem;">
                            <button class="btn btn-hero btn-lg" style="width: 100%; margin-bottom: 1.5rem;">
                                Teste Grátis por 30 dias
                            </button>
                            
                            <ul style="list-style: none; padding: 0; text-align: left;">
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Até 10 veículos</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Rastreamento GPS avançado</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>App para pais + notificações</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Chat integrado</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Otimização de rotas</span>
                                </li>                                
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Relatórios personalizados</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Suporte prioritário</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>API personalizada</span>
                                </li>                                
                            </ul>
                        </div>
                    </div>

                    <!-- Plano Enterprise -->
                    <div class="card" style="text-align: center; position: relative;">
                        <div style="padding-bottom: 2rem; border-bottom: 1px solid hsl(var(--border));">
                            <div style="width: 4rem; height: 4rem; border-radius: 9999px; background: var(--gradient-primary); display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto; color: white;">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11 1.5774L2.70577 6.36608C2.26904 6.61822 2 7.08421 2 7.58851C2 8.36808 2.63197 9.00005 3.41154 9.00005H20.5885C21.368 9.00005 22 8.36808 22 7.58851C22 7.08422 21.731 6.61823 21.2942 6.36608L13 1.5774C12.3812 1.22013 11.6188 1.22013 11 1.5774ZM12 3.30945L5.6077 7.00005H18.3923L12 3.30945Z" fill="white"/>
                                <path d="M12 11.0001C12.5523 11.0001 13 11.4478 13 12.0001V17.0001C13 17.5523 12.5523 18.0001 12 18.0001C11.4477 18.0001 11 17.5523 11 17.0001V12.0001C11 11.4478 11.4477 11.0001 12 11.0001Z" fill="white"/>
                                <path d="M21 22.0001C21.5523 22.0001 22 21.5523 22 21.0001C22 20.4478 21.5523 20.0001 21 20.0001H3C2.44772 20.0001 2 20.4478 2 21.0001C2 21.5523 2.44772 22.0001 3 22.0001H21Z" fill="white"/>
                                <path d="M17.5 11.0001C18.0523 11.0001 18.5 11.4478 18.5 12.0001V17.0001C18.5 17.5523 18.0523 18.0001 17.5 18.0001C16.9477 18.0001 16.5 17.5523 16.5 17.0001V12.0001C16.5 11.4478 16.9477 11.0001 17.5 11.0001Z" fill="white"/>
                                <path d="M6.5 11.0001C7.05229 11.0001 7.5 11.4478 7.5 12.0001L7.5 17.0001C7.5 17.5523 7.05229 18.0001 6.5 18.0001C5.94772 18.0001 5.5 17.5523 5.5 17.0001L5.5 12.0001C5.5 11.4478 5.94772 11.0001 6.5 11.0001Z" fill="white"/>
                                </svg>
                            </div>
                            
                            <h3 style="font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Enterprise</h3>
                            
                            <div style="margin: 1rem 0;">
                                <span style="font-size: 2.5rem; font-weight: bold;">Sob consulta</span>
                            </div>
                            
                            <p style="color: hsl(var(--muted-foreground)); margin-bottom: 2rem;">
                                Solução completa para grandes frotas e necessidades personalizadas
                            </p>
                        </div>
                        
                        <div style="padding-top: 2rem;">
                            <button class="btn btn-outline btn-lg" style="width: 100%; margin-bottom: 1.5rem;">
                                Falar com Especialista
                            </button>
                            
                            <ul style="list-style: none; padding: 0; text-align: left;">
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Veículos ilimitados</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Todas as funcionalidades</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Integração com sistemas</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Suporte 24/7</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Treinamento incluso</span>
                                </li>
                                <li style="display: flex; align-items: center; margin-bottom: 0.75rem;">
                                    <span class="icon icon-check" style="color: hsl(var(--success)); margin-right: 0.75rem;"></span>
                                    <span>Gestor dedicado</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 3rem;">
                    <p style="color: hsl(var(--muted-foreground)); margin-bottom: 1rem;">
                        💳 Teste grátis por 7 dias • 🔒 Sem compromisso • ⚡ Ativação imediata
                    </p>
                    <p style="font-size: 0.875rem; color: hsl(var(--muted-foreground));">
                        Todos os planos incluem migração gratuita de dados e suporte na implementação
                    </p>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="footer-grid">
                    <!-- Company Info -->
                    <div class="footer-section">
                        <h3 style="color: hsl(var(--secondary));">Van Confiável</h3>
                        <p>
                            Revolucionando o transporte escolar com tecnologia, segurança e eficiência. 
                            Conectando escolas, pais e motoristas.
                        </p>
                        @if(false)
                        <div class="social-links">
                            <a href="#" class="social-link icon-facebook">📘</a>
                            <a href="#" class="social-link icon-instagram">📷</a>
                            <a href="#" class="social-link icon-twitter">🐦</a>
                            <a href="#" class="social-link icon-linkedin">💼</a>
                        </div>
                        @endif
                    </div>

                    <!-- Products -->
                    <div class="footer-section">
                        <h3>Produto</h3>
                        <ul>
                            <li><a href="#funcionalidades">Funcionalidades</a></li>
                            <li><a href="#precos">Preços</a></li>
                            <li><a href="#">Integrações</a></li>
                            <li><a href="#">API</a></li>
                            <li><a href="#">Mobile App</a></li>
                        </ul>
                    </div>

                    <!-- Support -->
                    <div class="footer-section">
                        <h3>Suporte</h3>
                        <ul>
                            <li><a href="#">Central de Ajuda</a></li>
                            <li><a href="#">Documentação</a></li>
                            <li><a href="#">Treinamentos</a></li>
                            <li><a href="#">Status do Sistema</a></li>
                            <li><a href="#">Contato</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div class="footer-section">
                        <h3>Contato</h3>
                        <ul>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.25 17.25C13.25 17.9404 12.6904 18.5 12 18.5C11.3096 18.5 10.75 17.9404 10.75 17.25C10.75 16.5596 11.3096 16 12 16C12.6904 16 13.25 16.5596 13.25 17.25Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 4C5.5 2.89543 6.39543 2 7.5 2H16.5C17.6046 2 18.5 2.89543 18.5 4V20C18.5 21.1046 17.6046 22 16.5 22H7.5C6.39543 22 5.5 21.1046 5.5 20V4ZM7.5 4H16.5V20H7.5V4Z" fill="white"/>
                                </svg>
                                (41) 99816-0123
                            </li>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 6V18C2 19.1046 2.89543 20 4 20H20C21.1046 20 22 19.1046 22 18V6C22 4.89543 21.1046 4 20 4H4C2.89543 4 2 4.89543 2 6ZM4 18L4 9.46455L10.9998 13.5069C11.6187 13.8644 12.3813 13.8644 13.0002 13.5069L20 9.46455V18H4ZM12 11.775L4 7.155V6H20V7.155L12 11.775Z" fill="white"/>
                                </svg>
                                contato@vanconfiavel.com.br
                            </li>
                            <li class="flex items-center gap-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9998 8C14.9998 9.65686 13.6567 11 11.9998 11C10.343 11 8.99981 9.65686 8.99981 8C8.99981 6.34315 10.343 5 11.9998 5C13.6567 5 14.9998 6.34315 14.9998 8ZM12.9998 8C12.9998 8.55229 12.5521 9 11.9998 9C11.4475 9 10.9998 8.55229 10.9998 8C10.9998 7.44772 11.4475 7 11.9998 7C12.5521 7 12.9998 7.44772 12.9998 8Z" fill="white"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2408 17.8498C15.2518 15.8779 18.9998 11.7054 18.9998 8C18.9998 4.11 15.8658 1 11.9998 1C8.13381 1 4.9998 4.11 4.9998 8C4.9998 11.7054 8.74784 15.8779 10.7588 17.8498C11.4574 18.5349 12.5422 18.5349 13.2408 17.8498ZM15.219 12.4526C16.3395 10.7999 16.9998 9.24316 16.9998 8C16.9998 5.21904 14.7657 3 11.9998 3C9.23391 3 6.99981 5.21904 6.99981 8C6.99981 9.24316 7.66008 10.7999 8.78059 12.4526C9.80572 13.9646 11.0569 15.3267 11.9998 16.2645C12.9427 15.3267 14.1939 13.9646 15.219 12.4526Z" fill="white"/>
                                <path d="M5.88816 15.3239C5.42322 14.8589 4.64379 14.9616 4.31503 15.531L1.30183 20.75C0.724483 21.75 1.44617 23 2.60087 23H21.4017C22.5564 23 23.2781 21.75 22.7008 20.75L19.6865 15.5291C19.3577 14.9597 18.5783 14.8571 18.1133 15.322C17.7933 15.642 17.7281 16.1371 17.9544 16.5291L20.5357 21H3.4669L6.04708 16.531C6.27338 16.139 6.2082 15.6439 5.88816 15.3239Z" fill="white"/>
                                </svg>

                                Curitiba, PR
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div style="border-top: 1px solid hsl(var(--background) / 0.2); margin-top: 2rem; padding-top: 2rem; text-align: center;">
                    <p style="color: hsl(var(--background) / 0.8); font-size: 0.875rem;">
                        © {{ date('Y') }} Van Confiável. Todos os direitos reservados.
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>
