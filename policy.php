<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Політика конфіденційності | CarAds</title>
    
    <link rel="stylesheet" href="css/style.css"> 
    
    <style>
        body {
            background-color: #030307; /* $bg-dark */
            margin: 0;
            padding: 0;
            font-family: sans-serif; /* Тут автоматично підтягнеться шрифт із style.css */
        }

        .policy-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 20px;
        }

        .policy-card {
            max-width: 800px;
            width: 100%;
            /* Використовуємо твій градієнт $bg-card */
            background: linear-gradient(180deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            padding: 50px;
            /* Твій радіус $radius-main */
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.05);
            /* Твій ефект світіння $shadow-glow */
            box-shadow: 0 0 20px rgba(255, 95, 31, 0.1); 
            backdrop-filter: blur(10px);
        }

        .policy-card h1 {
            font-size: 32px;
            margin-bottom: 30px;
            color: #FFFFFF; /* $text-white */
            font-weight: 700;
        }

        .policy-card h1 span {
            color: #FF5F1F; /* $accent-orange */
        }

        .policy-card h2 {
            font-size: 20px;
            color: #FF753F; /* $accent-light */
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .policy-card p {
            font-size: 16px;
            line-height: 1.7;
            color: #A0A0A0; /* $text-gray */
            margin-bottom: 20px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            color: #7D7D7D; /* $text-muted */
            text-decoration: none;
            margin-bottom: 30px;
            font-size: 14px;
            /* Твоя транзиція $transition */
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            color: #FF5F1F; /* $accent-orange */
            transform: translateX(-5px);
        }

        @media (max-width: 576px) {
            .policy-card {
                padding: 30px 20px;
            }
            .policy-card h1 {
                font-size: 26px;
            }
        }
    </style>
</head>
<body class="policy-page">

    <article class="policy-card">
        <a href="index.php" class="back-btn">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 8px;">
                <line x1="19" y1="12" x2="5" y2="12"></line>
                <polyline points="12 19 5 12 12 5"></polyline>
            </svg>
            Назад на сайт
        </a>

        <h1>Політика <span>конфіденційності</span></h1>
        
        <p>Ми з повагою ставимося до вашої приватності. Ця політика пояснює, як <strong>CarAds</strong> збирає та використовує дані для надання послуг маркетингу для СТО.</p>

        <h2>1. Збір інформації</h2>
        <p>Ми отримуємо персональні дані (ім'я та номер телефону) лише тоді, коли ви добровільно заповнюєте форми на нашому сайті для отримання консультації чи аудиту вашого бізнесу.</p>

        <h2>2. Використання даних</h2>
        <p>Ваші контактні дані використовуються виключно для зворотного зв'язку, обговорення вашого запиту та надання персоналізованих пропозицій щодо просування вашого сервісу.</p>

        <h2>3. Захист та конфіденційність</h2>
        <p>Ваша інформація зберігається в безпеці та ні за яких умов не передається третім сторонам, окрім випадків, прямо передбачених законодавством України.</p>

        <h2>4. Згода користувача</h2>
        <p>Залишаючи заявку на сайті, ви підтверджуєте свою згоду на обробку наданих даних відповідно до умов цієї Політики.</p>
    </article>

</body>
</html>