<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Залучення клієнтів для автосервісів — CarAds</title>

    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <a href="/" class="header__logo">
                    <svg width="45" height="40" viewBox="120 50 320 350" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" class="header__logo-img">
                        <g transform="translate(0,451) scale(0.1,-0.1)" fill="#FF5F1F"><path d="M4175 3539 c-27 -11 -79 -29 -115 -41 -36 -11 -117 -40 -180 -65 -63-25 -122 -46 -130 -48 -8 -2 -40 -13 -70 -25 -30 -12 -106 -40 -169 -62 -63-21 -121 -44 -128 -50 -7 -6 -13 -8 -13 -5 0 3 -39 -10 -87 -29 -49 -19 -92-34 -97 -34 -6 0 -56 -19 -113 -42 -81 -32 -101 -44 -91 -53 13 -11 238 -104 268 -110 27 -6 70 -24 70 -30 0 -4 -28 -42 -62 -87 -35 -44 -81 -104 -103-133 -105 -138 -161 -209 -249 -320 -123 -154 -164 -206 -266 -340 -46 -60-106 -138 -134 -172 -28 -35 -75 -93 -103 -130 -29 -38 -95 -122 -145 -187-166 -214 -181 -233 -317 -413 -74 -98 -148 -193 -165 -211 l-31 -33 48 28c26 15 79 46 117 68 79 46 95 56 343 220 100 66 185 123 188 128 4 5 15 14 26 20 10 7 34 21 52 32 19 11 48 31 65 45 17 14 83 64 146 110 121 90 201 152 262 204 46 39 86 72 168 137 36 28 84 68 106 88 23 20 70 61 105 91 161 141 286 256 424 393 97 96 154 146 161 140 7 -4 65 -53 129 -108 64 -55 128 -108 141 -118 l24 -19 -2 588 c-2 381 -7 588 -13 590 -5 2 -32 -6 -60 -17z"/><path d="M1303 3079 c-11 -4 -28 -18 -37 -30 -14 -21 -16 -131 -16 -1130 l0-1106 26 -27 c19 -19 37 -26 64 -26 35 0 42 6 111 93 41 50 86 108 99 127 13 19 29 40 36 45 6 6 35 42 65 80 77 102 109 143 159 206 25 31 54 69 65 84 11 16 25 33 30 39 6 6 48 61 95 121 46 61 111 144 144 186 34 41 75 95 91 118 17 24 37 51 45 60 8 9 64 79 124 156 59 77 121 156 137 175 94 116 109 137 109 156 0 18 -23 34 -127 87 -285 143 -709 360 -718 367 -5 4 -21 11 -34 15 -13 4-46 20 -72 36 -90 53 -330 171 -353 173 -12 2 -32 -1 -43 -5z"/></g>
                    </svg>
                    <span>CarAds</span>
                </a>
                
                <nav class="header__nav">
                    <ul class="header__menu">
                        <li><a href="#services" class="header__link">Послуги</a></li>
                        <li><a href="#why-us" class="header__link">Про нас</a></li>
                        <li><a href="#contact" class="header__link">Контакти</a></li>
                    </ul>
                    <div class="header__nav-footer">
                        <a href="tel:+380733962547" class="nav-phone-btn">
                            <span>Зателефонувати</span>
                            <small>+38 (073) 396 25 47</small>
                        </a>

                        <form class="nav-form" novalidate>
                            <p class="nav-form__title">Швидка заявка</p>
                            <input type="tel" name="phone" placeholder="+38 (0__) ___ __ __" required class="nav-form__input">
                            <button type="submit" class="nav-form__btn">Передзвоніть мені</button>
                        </form>
                    </div>
                </nav>
    
                <div class="header__actions">
                    <a href="#contact" class="btn-primary btn-sm">Отримати пропозицію</a>
                </div>
    
                <button class="header__burger" aria-label="Menu">
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero__wrapper">
                    <div class="hero__content">
                        <h1 class="hero__title">Залучаємо клієнтів в <span>автосервіси</span></h1>
                        <p class="hero__subtitle">Розробка сайтів, SEO-просування та цільове залучення трафіку через Google Ads. Створюємо цифрову інфраструктуру для системного розвитку вашого автобізнесу.</p>
                        <div class="hero__btns">
                            <a href="#contact" class="btn-primary">Отримати пропозицію</a>
                            <a href="#services" class="btn-outline">Наші послуги</a>
                        </div>
                    </div>
                    <div class="hero__visual">
                        <div class="hero__monitor">
                            <img src="images/hero-bg.png" alt="Результати реклами">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why-us reveal" id="why-us">
            <div class="container">
                <h2 class="why-us__title">Про нас</h2>
                <p class="why-us__subtitle">Ми спеціалізуємось на цифровій інфраструктурі для автобізнесу. Наш досвід об'єднує технічну розробку, SEO та рекламу в єдину систему для стабільної роботи вашого сервісу в мережі.</p>
                <div class="why-us__grid">
                    <div class="why-us__card">
                        <div class="why-us__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 3h18v18H3V3zm2 2v14h14V5H5z"/>
                                <path d="M7 7h10v2H7V7zm0 4h10v2H7v-2z"/>
                            </svg>
                        </div>
                        <h3 class="why-us__card-title">Проєктування та розробка</h3>
                        <p class="why-us__card-text">Адаптивні сайти, спроєктовані під бізнес-процеси вашого СТО та зручний запис клієнтів.</p>
                    </div>

                    <div class="why-us__card">
                        <div class="why-us__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M3 17h2v-7H3v7zm4 0h2v-12H7v12zm4 0h2v-5h-2v5zm4 0h2v-9h-2v9zm4 0h2v-3h-2v3z"/>
                            </svg>
                        </div>
                        <h3 class="why-us__card-title">Пошуковий маркетинг</h3>
                        <p class="why-us__card-text">Виводимо ваш сервіс у топ Google. Налаштовуємо потік цільових дзвінків через локальне SEO та ефективну рекламу.</p>
                    </div>

                    <div class="why-us__card">
                        <div class="why-us__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm1 15h-2v-2h2zm0-4h-2V7h2z"/>
                            </svg>
                        </div>
                        <h3 class="why-us__card-title">Адміністрування та супровід</h3>
                        <p class="why-us__card-text">Технічний нагляд та безпека. Регулярні оновлення контенту та підтримка швидкості роботи сайту.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services" id="services">
            <div class="container">
                <h2 class="services__title">Цифрові рішення для автосервісів</h2>
                <p class="services__subtitle">Розробка та впровадження інструментів для автоматизації залучення клієнтів та забезпечення присутності бренду в пошукових мережах.
                </p>

                <div class="services__group reveal">
                    <h3 class="services__level">Базові послуги</h3>
                    <div class="services__grid">
                        <div class="service-card">
                            <div class="service-card__icon icon-landing">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="16" rx="2"/>
                                    <line x1="3" y1="9" x2="21" y2="9"/>
                                    <line x1="8" y1="14" x2="16" y2="14"/>
                                </svg>
                            </div>
                            <h4 class="service-card__title">Landing Page</h4>
                            <p class="service-card__text">
                                Односторінковий сайт для реклами та заявок
                            </p>

                            <ul class="service-card__list">
                                <li>Адаптивний дизайн</li>
                                <li>Форма заявки</li>
                                <li>Базова оптимізація</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ 1–2 тижні</span>
                                <strong>12 000 ₴</strong>
                            </div>

                            <a href="#contact" class="btn btn-primary btn-sm">Замовити</a>
                        </div>

                        <div class="service-card">
                            <div class="service-card__icon icon-seo">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="11" cy="11" r="7"/>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"/>
                                </svg>
                            </div>
                            <h4 class="service-card__title">SEO налаштування</h4>
                            <p class="service-card__text">
                                Підготовка сайту до пошукового просування
                            </p>

                            <ul class="service-card__list">
                                <li>Технічне SEO</li>
                                <li>Мета-теги</li>
                                <li>Аналітика</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ 3–5 днів</span>
                                <strong>6 000 ₴</strong>
                            </div>

                            <a href="#contact" class="btn btn-primary btn-sm">Замовити</a>
                        </div>

                        <div class="service-card">
                            <div class="service-card__icon icon-ads">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 11v2a2 2 0 0 0 2 2h1l4 3V6L6 9H5a2 2 0 0 0-2 2z"/>
                                    <line x1="14" y1="8" x2="20" y2="4"/>
                                    <line x1="14" y1="16" x2="20" y2="20"/>
                                </svg>
                            </div>
                            <h4 class="service-card__title">Google Ads запуск</h4>
                            <p class="service-card__text">
                                Налаштування реклами під результат
                            </p>

                            <ul class="service-card__list">
                                <li>Пошукова реклама</li>
                                <li>Аналітика</li>
                                <li>Оптимізація</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ 2–4 дні</span>
                                <strong>5 000 ₴</strong>
                            </div>

                            <a href="#contact" class="btn btn-primary btn-sm">Замовити</a>
                        </div>
                    </div>
                </div>

                <div class="services__group services__group--pro reveal">
                    <h3 class="services__level">PRO рішення</h3>
                    <div class="services__grid">
                        <div class="service-card service-card--pro">
                            <span class="service-card__badge">PRO</span>
                            <div class="service-card__icon icon-pro">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2l3 7 7 .5-5 5 1.5 7L12 18l-6.5 3.5L7 14 2 9.5 9 9z"/>
                                </svg>
                            </div>
                            <h4 class="service-card__title">Landing Page PRO</h4>
                            <p class="service-card__text">
                                Сайт + реклама + аналітика
                            </p>

                            <ul class="service-card__list">
                                <li>Продумана структура</li>
                                <li>Google Ads</li>
                                <li>SEO база</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ 2–3 тижні</span>
                                <strong>від 16 000 ₴</strong>
                            </div>

                            <a href="#contact" class="btn btn-outline btn-sm">Розрахувати</a>
                        </div>

                        <div class="service-card service-card--pro">
                            <span class="service-card__badge">PRO</span>
                            <div class="service-card__icon icon-multi">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="4" width="18" height="6" rx="2"/>
                                        <rect x="3" y="14" width="18" height="6" rx="2"/>
                                    </svg>
                            </div>
                            <h4 class="service-card__title">Сайт 3–5 сторінок</h4>
                            <p class="service-card__text">
                                Повноцінний сайт для бізнесу
                            </p>

                            <ul class="service-card__list">
                                <li>Структура</li>
                                <li>SEO</li>
                                <li>Форми</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ 3–4 тижні</span>
                                <strong>від 24 000 ₴</strong>
                            </div>

                            <a href="#contact" class="btn btn-outline btn-sm">Розрахувати</a>
                        </div>

                        <div class="service-card service-card--pro">
                            <span class="service-card__badge">PRO</span>
                            <div class="service-card__icon icon-growth">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="3"/>
                                    <polyline points="7 14 10 11 13 13 17 8"/>
                                </svg>
                            </div>
                            <h4 class="service-card__title">Комплексне зростання</h4>
                            <p class="service-card__text">
                                Сайт + реклама + супровід
                            </p>

                            <ul class="service-card__list">
                                <li>SEO</li>
                                <li>Google Ads</li>
                                <li>Підтримка</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ довгостроково</span>
                                <strong>за запитом</strong>
                            </div>

                            <a href="#contact" class="btn btn-outline btn-sm">Обговорити</a>
                        </div>
                    </div>
                </div>

                <div class="services__group services__group--pro reveal">
                    <h3 class="services__level">Сервісне обслуговування</h3>
                    <div class="services__grid">
                        <div class="service-card service-card--maintenance">
                            <div class="service-card__icon icon-pro">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <path d="M8 12h2l1-2 2 4 1-2h2"/>
                            </svg>
                            </div>
                            <h4 class="service-card__title">Технічний супровід</h4>
                            <p class="service-card__text">
                                Підтримка стабільності та безпеки вашого проєкту
                            </p>

                            <ul class="service-card__list">
                                <li>Моніторинг та безпека сервера</li>
                                <li>Оновлення контенту та цін</li>
                                <li>Оптимізація швидкості</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ щомісяця</span>
                                <strong>2 000 ₴ <span>/ міс.</span></strong>
                            </div>

                            <a href="#contact" class="btn btn-primary btn-sm">Замовити</a>
                        </div>

                        <div class="service-card service-card--maintenance">
                            <div class="service-card__icon icon-multi">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"/>
                                    <circle cx="12" cy="12" r="6"/>
                                    <circle cx="12" cy="12" r="2"/>
                                </svg>
                            </div>
                            <h4 class="service-card__title">Управління рекламою</h4>
                            <p class="service-card__text">
                                Робота над зниженням ціни ліда та ростом заявок
                            </p>

                            <ul class="service-card__list">
                                <li>Оптимізація запитів та ставок</li>
                                <li>Робота з мінус-словами</li>
                                <li>Тестування оголошень</li>
                                <li>Звітність за результатами</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ щомісяця</span>
                                <strong>4 000 ₴ <span>/ міс.</span></strong>
                            </div>

                            <a href="#contact" class="btn btn-primary btn-sm">Замовити</a>
                        </div>

                        <div class="service-card service-card--maintenance">
                            <div class="service-card__icon icon-growth">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/>
                                    <polyline points="16 7 22 7 22 13"/>
                                </svg>
                            </div>
                            <h4 class="service-card__title">SEO-просування</h4>
                            <p class="service-card__text">
                                Розвиток видимості СТО у пошуковій видачі
                            </p>

                            <ul class="service-card__list">
                                <li>Нарощування посилань</li>
                                <li>Оптимізація контенту</li>
                                <li>Технічний аудит сайту</li>
                                <li>Моніторинг позицій Google</li>
                            </ul>

                            <div class="service-card__meta">
                                <span>⏱ щомісяця</span>
                                <strong>від 8 000 ₴ <span>/ міс.</span></strong>
                            </div>

                            <a href="#contact" class="btn btn-outline btn-sm">Розрахувати</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact reveal" id="contact">
            <div class="container contact__container">
        
                <div class="contact__info">
                    <h2 class="contact__title">Отримайте безкоштовний <span>аудит</span> вашого СТО</h2>
                    <p class="contact__subtitle">Залиште заявку, і ми розберемо вашу ситуацію: від стану сайту до налаштувань реклами конкурентів.</p>
                </div>
        
                <form class="contact__form" novalidate>
                    <div class="contact__group">
                        <label for="name" class="contact__label">Ваше ім’я</label>
                        <input type="text" name="name" id="name" class="contact__input" placeholder="Андрій" required>
                    </div>

                    <div class="contact__group">
                        <label for="phone" class="contact__label">Телефон</label>
                        <input type="tel" name="phone" id="phone" class="contact__input" placeholder="+38 (0__)" required>
                    </div>

                    <div class="contact__group contact__group--full">
                        <label for="message" class="contact__label">Ваш запит (необов'язково)</label>
                        <textarea id="message" name="message" class="contact__textarea" placeholder="Наприклад: Потрібно більше клієнтів на малярні роботи"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary contact__btn">Замовити консультацію</button>
                </form>
            </div>
        </section>

        <section class="faq reveal" id="faq">
            <div class="container">
                <h2 class="faq__title">Популярні <span>запитання</span></h2>
                <div class="faq__list">
            
                    <div class="faq__item">
                        <button class="faq__question">
                            Який рекламний бюджет мені потрібно виділити крім оплати ваших послуг?
                            <span class="faq__icon"></span>
                        </button>
                        <div class="faq__answer">
                            <p>Для старту ми рекомендуємо від 400-600 грн на день для одного міста. Це дозволить отримувати цільові дзвінки, а не просто "кліки". Бюджет можна гнучко коригувати: якщо бокси забиті на тиждень вперед — рекламу можна поставити на паузу одним кліком.</p>
                        </div>
                    </div>

                    <div class="faq__item">
                        <button class="faq__question">
                            У мене вже є сайт, але він "висить" і не приносить клієнтів. Ви працюєте з готовими проектами?
                            <span class="faq__icon"></span>
                        </button>
                        <div class="faq__answer">
                            <p>Так. Ми проведемо аудит і скажемо чесно: чи можна його "реанімувати", чи дешевше зробити новий конверсійний лендінг. Часто проблема не в сайті, а в тому, що на нього ведуть нецільову аудиторію.</p>
                        </div>
                    </div>

                    <div class="faq__item">
                        <button class="faq__question">
                            Як я зрозумію, що реклама спрацювала?
                            <span class="faq__icon"></span>
                        </button>
                        <div class="faq__answer">
                            <p>Ми налаштовуємо відстеження дзвінків та заявок. Ви будете бачити чітку статистику: скільки було переходів, скільки коштував один дзвінок і яка послуга цікавила клієнта найбільше.</p>
                        </div>
                    </div>

                    <div class="faq__item">
                        <button class="faq__question">
                            Чи можна поєднувати SEO та Google Ads?
                            <span class="faq__icon"></span>
                        </button>
                        <div class="faq__answer">
                            <p>Так, це оптимальний підхід: реклама дає швидкі заявки, а SEO забезпечує стабільний органічний трафік.</p>
                        </div>
                    </div>

                    <div class="faq__item">
                        <button class="faq__question">
                            Який сайт підійде для автосервісу: Landing Page чи багатосторінковий?
                            <span class="faq__icon"></span>
                        </button>
                        <div class="faq__answer">
                            <p>Для SEO та розвитку краще багатосторінковий сайт — його легше просувати за окремими послугами. Але для швидкого старту невеликого СТО підійде Landing Page, щоб оперативно тестувати рекламу.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container footer__container">
            <div class="footer__brand">
                <a href="/" class="footer__logo">
                    <svg width="45" height="40" viewBox="120 50 320 350" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg" class="footer__logo-img">
                        <g transform="translate(0,451) scale(0.1,-0.1)" fill="#FF5F1F"><path d="M4175 3539 c-27 -11 -79 -29 -115 -41 -36 -11 -117 -40 -180 -65 -63-25 -122 -46 -130 -48 -8 -2 -40 -13 -70 -25 -30 -12 -106 -40 -169 -62 -63-21 -121 -44 -128 -50 -7 -6 -13 -8 -13 -5 0 3 -39 -10 -87 -29 -49 -19 -92-34 -97 -34 -6 0 -56 -19 -113 -42 -81 -32 -101 -44 -91 -53 13 -11 238 -104 268 -110 27 -6 70 -24 70 -30 0 -4 -28 -42 -62 -87 -35 -44 -81 -104 -103-133 -105 -138 -161 -209 -249 -320 -123 -154 -164 -206 -266 -340 -46 -60-106 -138 -134 -172 -28 -35 -75 -93 -103 -130 -29 -38 -95 -122 -145 -187-166 -214 -181 -233 -317 -413 -74 -98 -148 -193 -165 -211 l-31 -33 48 28c26 15 79 46 117 68 79 46 95 56 343 220 100 66 185 123 188 128 4 5 15 14 26 20 10 7 34 21 52 32 19 11 48 31 65 45 17 14 83 64 146 110 121 90 201 152 262 204 46 39 86 72 168 137 36 28 84 68 106 88 23 20 70 61 105 91 161 141 286 256 424 393 97 96 154 146 161 140 7 -4 65 -53 129 -108 64 -55 128 -108 141 -118 l24 -19 -2 588 c-2 381 -7 588 -13 590 -5 2 -32 -6 -60 -17z"/><path d="M1303 3079 c-11 -4 -28 -18 -37 -30 -14 -21 -16 -131 -16 -1130 l0-1106 26 -27 c19 -19 37 -26 64 -26 35 0 42 6 111 93 41 50 86 108 99 127 13 19 29 40 36 45 6 6 35 42 65 80 77 102 109 143 159 206 25 31 54 69 65 84 11 16 25 33 30 39 6 6 48 61 95 121 46 61 111 144 144 186 34 41 75 95 91 118 17 24 37 51 45 60 8 9 64 79 124 156 59 77 121 156 137 175 94 116 109 137 109 156 0 18 -23 34 -127 87 -285 143 -709 360 -718 367 -5 4 -21 11 -34 15 -13 4-46 20 -72 36 -90 53 -330 171 -353 173 -12 2 -32 -1 -43 -5z"/></g>
                    </svg>
                    <span>CarAds</span>
                </a>
                <p class="footer__description">
                    Професійний маркетинг для СТО. <br>
                    Налаштовуємо стабільний потік клієнтів та записів на сервіс.
                </p>
            </div>

            <div class="footer__nav">
                <h4 class="footer__title">Навігація</h4>
                <ul class="footer__list">
                    <li><a href="#services" class="footer__link">Послуги</a></li>
                    <li><a href="#why-us" class="footer__link">Про нас</a></li>
                    <li><a href="#contact" class="footer__link">Контакти</a></li>
                </ul>
            </div>

            <div class="footer__contacts">
                <h4 class="footer__title">Зв’язок</h4>
                <ul class="footer__list">
                    <li><a href="tel:+380733962547" class="footer__link footer__link--phone">+38 (073) 396 25 47</a></li>
                    <li><a href="mailto:carads.info@gmail.com" class="footer__link">carads.info@gmail.com</a></li>
                    <li><span class="footer__link">Пн-Пт: 09:00 — 18:00</span></li>
                </ul>
            </div>

            <div class="footer__social">
                <h4 class="footer__title">Ми в соцмережах</h4>
                <div class="footer__social-icons">
                    <a href="https://t.me/carads_info" class="social-icon" target="_blank" aria-label="Telegram">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm4.64 6.8c-.15 1.58-.8 5.42-1.13 7.19-.14.75-.42 1-.68 1.03-.58.05-1.02-.38-1.58-.75-.88-.58-1.38-.94-2.23-1.5-.99-.65-.35-1.01.22-1.59.15-.15 2.71-2.48 2.76-2.69a.2.2 0 00-.05-.18c-.06-.05-.14-.03-.21-.02-.09.02-1.49.95-4.22 2.79-.4.27-.76.41-1.08.4-.36-.01-1.04-.2-1.55-.37-.63-.2-1.12-.31-1.08-.66.02-.18.27-.36.74-.55 2.92-1.27 4.86-2.11 5.83-2.51 2.78-1.16 3.35-1.36 3.73-1.36.08 0 .27.02.39.12.1.08.13.19.14.27-.01.06.01.24 0 .38z"/>
                        </svg>
                    </a>

                    <a href="https://instagram.com/carads.agency" class="social-icon" target="_blank" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" width="24" height="24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.332 3.608 1.308.975.975 1.245 2.242 1.308 3.608.058 1.266.07 1.646.07 4.85s-.012 3.584-.07 4.85c-.062 1.366-.332 2.633-1.308 3.608-.975.975-2.242 1.245-3.608 1.308-1.266.058-1.646.07-4.85.07s-3.584-.012-4.85-.07c-1.366-.062-2.633-.332-3.608-1.308-.975-.975-1.245-2.242-1.308-3.608-.058-1.266-.07-1.646-.07-4.85s.012-3.584.07-4.85c.062-1.366.332-2.633 1.308-3.608.975-.975 2.242-1.245 3.608-1.308 1.266-.058 1.646-.07 4.85-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948s.014 3.667.072 4.947c.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072s3.667-.014 4.947-.072c4.358-.2 6.78-2.618 6.98-6.98.058-1.281.072-1.689.072-4.948s-.014-3.667-.072-4.947c-.2-4.358-2.618-6.78-6.98-6.98-1.281-.058-1.689-.072-4.948-.072zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container footer__bottom-container">
                <p class="footer__copy">© 2026 CarAds. Всі права захищені.</p>
                <a href="policy.php" class="footer__policy">Політика конфіденційності</a>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/imask"></script>
    <script src="js/main.js" defer></script>

</body>

</html>