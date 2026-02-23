// main.js

document.addEventListener('DOMContentLoaded', () => {
    // --- 1. Логіка меню (Бургер) ---
    const burger = document.querySelector('.header__burger');
    const nav = document.querySelector('.header__nav');
    const body = document.body;

    burger.addEventListener('click', () => {
        burger.classList.toggle('is-active');
        nav.classList.toggle('is-active');
        body.classList.toggle('no-scroll');
    });

    const navLinks = document.querySelectorAll('.header__link');
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            burger.classList.remove('is-active');
            nav.classList.remove('is-active');
            body.classList.remove('no-scroll');
        });
    });

    // 2. Налаштування маски для всіх телефонів
    const maskOptions = {
        mask: '+38 (000) 000-00-00',
        lazy: false // маска буде видна відразу (з підкресленнями)
    };

    const phoneInputs = document.querySelectorAll('input[type="tel"]');
    phoneInputs.forEach(input => {
        IMask(input, maskOptions);
    });

    // --- 3. Універсальна валідація та відправка форм ---
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            const nameInput = form.querySelector('input[type="text"]');
            const phoneInput = form.querySelector('input[type="tel"]');
            const btn = form.querySelector('button[type="submit"]') || form.querySelector('.nav-form__btn');
            let isError = false;

            // Функція для візуалізації помилки
            const markError = (input) => {
                isError = true;
                input.style.borderColor = '#ff3333'; // Червона рамка
                input.style.boxShadow = '0 0 12px rgba(255, 51, 51, 0.4)';
                input.animate([
                    { transform: 'translateX(0)' },
                    { transform: 'translateX(-5px)' },
                    { transform: 'translateX(5px)' },
                    { transform: 'translateX(0)' }
                ], { duration: 300 });
            };

            // Функція для скидання стилів
            const resetInputStyle = (input) => {
                input.style.borderColor = '';
                input.style.boxShadow = '';
            };

            // 1. Перевірка імені (якщо воно є у формі)
            if (nameInput) {
                resetInputStyle(nameInput); // Скидаємо перед перевіркою
                if (nameInput.value.trim().length < 2) {
                    markError(nameInput);
                }
            }

            // 2. Перевірка телефону (маска має бути заповнена повністю)
            if (phoneInput) {
                resetInputStyle(phoneInput); // Скидаємо перед перевіркою
                // Перевіряємо через маску (якщо є "_" або номер коротший за 19 символів)
                if (phoneInput.value.includes('_') || phoneInput.value.length < 19) {
                    markError(phoneInput);
                }
            }

            // Якщо є помилка — зупиняємо відправку
            if (isError) return;

            // --- ЛОГІКА ВІДПРАВКИ НА СЕРВЕР ---
            const originalBtnText = btn.textContent;
            btn.textContent = 'Надсилаємо...';
            btn.disabled = true;

            // Збираємо дані з полів форми (використовує атрибути "name" в HTML)
            const formData = new FormData(form);

            fetch('php/send.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                if (data.trim() === 'success') {
                    // Стан успіху
                    btn.textContent = 'Відправлено!';
                    btn.style.background = '#27ae60';
                    btn.style.borderColor = '#27ae60';
    
                    setTimeout(() => {
                        // Повертаємо форму до ладу
                        btn.textContent = originalBtnText;
                        btn.style.background = '';
                        btn.style.borderColor = '';
                        btn.disabled = false;
    
                        form.reset();
                        form.querySelectorAll('input, textarea').forEach(el => resetInputStyle(el));
    
                        // Закриваємо мобільне меню
                        if (nav && nav.classList.contains('is-active')) {
                            burger.classList.remove('is-active');
                            nav.classList.remove('is-active');
                            body.classList.remove('no-scroll');
                        }
                    }, 2000);
                } else {
                    // Якщо сервер повернув помилку
                    throw new Error('Server error');
                }
            })
            .catch(error => {
                console.error('Помилка:', error);
                btn.textContent = 'Помилка відправки';
                btn.style.background = '#ff3333';
                
                setTimeout(() => {
                    btn.textContent = originalBtnText;
                    btn.style.background = '';
                    btn.disabled = false;
                }, 3000);
            });
        })

        // Видаляємо червону рамку відразу, як користувач починає друкувати
        form.querySelectorAll('input, textarea').forEach(input => {
            input.addEventListener('input', () => {
                input.style.borderColor = '';
                input.style.boxShadow = '';
            });
        });
    });

    // --- 4. Логіка FAQ (Акордеон) ---
    const faqQuestions = document.querySelectorAll('.faq__question');

    faqQuestions.forEach(button => {
        button.addEventListener('click', () => {
            const accordionItem = button.parentElement;
            const answer = button.nextElementSibling;

            // Закриваємо інші відкриті елементи (якщо хочеш, щоб одночасно був відкритий лише один)
            document.querySelectorAll('.faq__item').forEach(item => {
                if (item !== accordionItem) {
                    item.classList.remove('faq__item--active');
                    const otherAnswer = item.querySelector('.faq__answer');
                    if (otherAnswer) otherAnswer.style.maxHeight = null;
                }
            });

            // Тогл активного класу
            accordionItem.classList.toggle('faq__item--active');

            // Анімація висоти
            if (accordionItem.classList.contains('faq__item--active')) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = null;
            }
        });
    });

    // --- 5. Scroll Reveal (анімація як у агентства) ---
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    revealElements.forEach(el => revealObserver.observe(el));
});