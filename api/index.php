<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noura El Hamioui - Portfolio</title>


    <style>
        /* ================= GENERAL & INTRO CSS ================= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            background: #080407;
            color: white;
            font-family: Georgia, "Times New Roman", serif;
            overflow-x: hidden;
        }

        /* Intro Wrapper */
        #intro-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            background: #080407;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.8s ease, visibility 0.8s ease;
        }

        #intro-wrapper.hide-intro {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        #intro-wrapper::before {
            content: "";
            position: fixed;
            width: 650px;
            height: 500px;
            background: #8b1742;
            filter: blur(150px);
            opacity: 0.35;
            top: 5%;
            left: 25%;
            z-index: -1;
        }

        #intro-wrapper::after {
            content: "";
            position: fixed;
            width: 400px;
            height: 400px;
            background: #4d0b2c;
            filter: blur(130px);
            opacity: 0.3;
            bottom: 0;
            right: 5%;
            z-index: -1;
        }

        /* الكارت الرئيسية */
        .intro {
            width: 78%;
            max-width: 1100px;
            min-height: 430px;
            padding: 32px;
            border-radius: 25px;
            background: linear-gradient(
                135deg,
                rgba(34, 24, 30, 0.96),
                rgba(75, 13, 38, 0.88)
            );
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow:
                0 0 60px rgba(150, 18, 65, 0.25),
                inset 0 0 40px rgba(255, 255, 255, 0.02);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 35px;
            animation: introAppear 1.2s ease;
        }

        @keyframes introAppear {
            from {
                opacity: 0;
                transform: translateY(25px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .left {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .badges {
            display: flex;
            gap: 10px;
            margin-bottom: 28px;
            flex-wrap: wrap;
        }

        .badge {
            padding: 7px 13px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(255, 255, 255, 0.04);
            color: #d6bec8;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: 1px;
        }

        .intro h1 {
            font-size: 48px;
            line-height: 1.05;
            margin-bottom: 20px;
        }

        .intro h1 span {
            color: #d54b78;
        }

        .description {
            max-width: 450px;
            color: #b9aeb3;
            font-family: Arial, sans-serif;
            font-size: 13px;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .status {
            color: #c53d6d;
            font-family: Arial, sans-serif;
            font-size: 10px;
            letter-spacing: 2px;
            margin-bottom: 14px;
        }

        .buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
        }

        .intro .btn {
            text-decoration: none;
            color: #d8c5cd;
            font-family: Arial, sans-serif;
            font-size: 10px;
            padding: 9px 16px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            background: rgba(255, 255, 255, 0.04);
            transition: 0.3s;
        }

        .intro .btn:hover {
            background: #8d1645;
            color: white;
            transform: translateY(-2px);
        }

        .right {
            background: rgba(12, 3, 9, 0.78);
            border-radius: 22px;
            padding: 25px;
            display: flex;
            flex-direction: column;
        }

        .top {
            display: flex;
            justify-content: space-between;
            font-family: Arial, sans-serif;
            font-size: 9px;
            letter-spacing: 1px;
            color: #b9aab1;
        }

        .online {
            color: #8fd29b;
        }

        .circle-area {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .circle {
            width: 190px;
            height: 190px;
            border-radius: 50%;
            border: 1px solid rgba(198, 35, 88, 0.45);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            box-shadow:
                0 0 30px rgba(190, 20, 75, 0.35),
                inset 0 0 45px rgba(190, 20, 75, 0.25);
            animation: pulse 2.5s infinite ease-in-out;
        }

        .circle::before {
            content: "";
            position: absolute;
            width: 115px;
            height: 115px;
            border-radius: 50%;
            background: #c20d45;
            filter: blur(35px);
            opacity: 0.75;
        }

        .welcome {
            position: relative;
            z-index: 2;
            font-family: Arial, sans-serif;
            font-size: 11px;
            letter-spacing: 3px;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 25px rgba(190, 20, 75, 0.3);
            }
            50% {
                transform: scale(1.04);
                box-shadow: 0 0 45px rgba(190, 20, 75, 0.5);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 25px rgba(190, 20, 75, 0.3);
            }
        }

        .stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .stat {
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 12px;
        }

        .number {
            font-size: 19px;
        }

        .label {
            font-family: Arial, sans-serif;
            font-size: 8px;
            color: #968a90;
            margin-top: 3px;
        }

        @media (max-width: 800px) {
            #intro-wrapper {
                padding: 20px;
                overflow: auto;
            }
            .intro {
                width: 100%;
                grid-template-columns: 1fr;
                padding: 25px;
            }
            .intro h1 {
                font-size: 38px;
            }
            .right {
                min-height: 330px;
            }
        }

        /* ================= HOME CSS ================= */
        .home {
            min-height: 100vh;
            position: relative;
            overflow: hidden;
            background:
                radial-gradient(
                    circle at 78% 48%,
                    rgba(190, 20, 75, 0.35),
                    transparent 25%
                ),
                radial-gradient(
                    circle at 90% 10%,
                    rgba(120, 0, 40, 0.35),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #090407 0%,
                    #17060d 45%,
                    #260711 100%
                );
            font-family: Arial, sans-serif;
        }

        .navbar {
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            position: relative;
            z-index: 10;
        }

        .logo {
            font-family: Georgia, serif;
            font-size: 45px;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.15);
        }

        .logo span {
            color: #ff426f;
            text-shadow:
                0 0 10px #ff426f,
                0 0 25px rgba(255, 66, 111, 0.7);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 6px;
            border: 1px solid rgba(255, 55, 105, 0.35);
            border-radius: 40px;
            background: rgba(30, 5, 14, 0.75);
            box-shadow: 0 0 20px rgba(255, 20, 80, 0.08);
        }

        .nav-links a {
            color: #eeeeee;
            text-decoration: none;
            padding: 13px 20px;
            border-radius: 30px;
            font-size: 15px;
            transition: 0.3s;
        }

        .nav-links a:hover {
            color: white;
            background: rgba(255, 40, 95, 0.18);
            box-shadow: 0 0 15px rgba(255, 40, 95, 0.25);
        }

        .nav-links a.active {
            background: linear-gradient(
                135deg,
                #ff3568,
                #c9164e
            );
            color: white;
            box-shadow:
                0 0 12px rgba(255, 45, 100, 0.8),
                0 0 30px rgba(255, 30, 90, 0.45);
        }

        .home-container {
            width: 86%;
            max-width: 1400px;
            margin: auto;
            min-height: calc(100vh - 100px);
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 40px;
        }

        .home-text {
            padding-bottom: 40px;
        }

        .hello {
            color: #ff547b;
            font-size: 17px;
            letter-spacing: 5px;
            font-weight: bold;
            margin-bottom: 22px;
            text-shadow: 0 0 10px rgba(255, 50, 100, 0.5);
        }

        .home-text h1 {
            font-family: Georgia, serif;
            font-size: clamp(60px, 6vw, 95px);
            line-height: 0.9;
            margin-bottom: 28px;
            letter-spacing: -3px;
            color: #ffffff;
        }

        .home-text h1 span {
            color: #ff4c73;
            text-shadow: 0 0 15px rgba(255, 55, 105, 0.25);
        }

        .home-text h2 {
            font-size: 23px;
            margin-bottom: 25px;
            font-weight: 600;
            color: #eeeeee;
        }

        .home .description {
            max-width: 700px;
            color: #cfcfcf;
            font-size: 17px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .home-buttons {
            display: flex;
            gap: 18px;
            margin-bottom: 55px;
        }

        .home .btn {
            text-decoration: none;
            padding: 16px 30px;
            border-radius: 35px;
            font-weight: bold;
            font-size: 15px;
            transition: 0.3s;
            display: inline-block;
        }

        .btn-main {
            color: white;
            background: linear-gradient(
                135deg,
                #ff4b72,
                #d51c53
            );
            box-shadow:
                0 0 12px rgba(255, 55, 105, 0.7),
                0 0 30px rgba(255, 30, 90, 0.35);
        }

        .btn-main:hover {
            transform: translateY(-3px);
            box-shadow:
                0 0 18px rgba(255, 55, 105, 0.9),
                0 0 40px rgba(255, 30, 90, 0.5);
        }

        .btn-outline {
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.02);
        }

        .btn-outline:hover {
            border-color: #ff426f;
            background: rgba(255, 40, 95, 0.08);
            box-shadow: 0 0 18px rgba(255, 50, 100, 0.4);
        }

        .socials {
            display: flex;
            align-items: center;
            gap: 22px;
            font-size: 15px;
        }

        .socials a {
            color: #eeeeee;
            text-decoration: none;
            transition: 0.3s;
        }

        .socials a:hover {
            color: #ff4c73;
            text-shadow: 0 0 10px rgba(255, 55, 105, 0.7);
        }

        .socials span {
            width: 1px;
            height: 25px;
            background: rgba(255, 255, 255, 0.4);
        }

        .home-visual {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .glow-circle {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            border: 1px solid #ff527d;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            display: flex;
            background: radial-gradient(
                circle,
                rgba(255, 40, 100, 0.25),
                rgba(100, 0, 35, 0.15) 50%,
                transparent 70%
            );
            box-shadow:
                0 0 20px rgba(255, 45, 100, 0.65),
                0 0 70px rgba(255, 20, 90, 0.35),
                inset 0 0 50px rgba(255, 30, 90, 0.18);
            animation: glow 3s ease-in-out infinite;
            overflow: hidden;
        }

        .glow-circle::before {
            content: "";
            position: absolute;
            width: 75%;
            height: 75%;
            border-radius: 50%;
            background: rgba(255, 35, 95, 0.12);
            filter: blur(35px);
        }

        .circle-content {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
            font-size: 30px;
            letter-spacing: 9px;
            font-weight: 500;
            color: white;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.25);
        }
        .glow-circle img {
            width: 100%;
            height:100%;
            border-radius:50%;
            object-fit:cover;
        }

        @keyframes glow {
            0%, 100% {
                box-shadow:
                    0 0 20px rgba(255, 45, 100, 0.55),
                    0 0 60px rgba(255, 20, 90, 0.25),
                    inset 0 0 50px rgba(255, 30, 90, 0.15);
            }
            50% {
                box-shadow:
                    0 0 30px rgba(255, 45, 100, 0.9),
                    0 0 90px rgba(255, 20, 90, 0.45),
                    inset 0 0 70px rgba(255, 30, 90, 0.25);
            }
        }

        @media (max-width: 900px) {
            .navbar {
                padding: 20px 5%;
            }
            .nav-links {
                gap: 0;
            }
            .nav-links a {
                padding: 10px 11px;
                font-size: 12px;
            }
            .home-container {
                grid-template-columns: 1fr;
                text-align: center;
                padding-top: 40px;
            }
            .home-text {
                order: 1;
            }
            .home-visual {
                order: 2;
            }
            .home .description {
                margin-left: auto;
                margin-right: auto;
            }
            .home-buttons,
            .socials {
                justify-content: center;
            }
            .glow-circle {
                width: 320px;
                height: 320px;
            }
        }

        @media (max-width: 600px) {
            .navbar {
                flex-direction: column;
                height: auto;
                gap: 20px;
            }
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                border-radius: 20px;
            }
            .home-text h1 {
                font-size: 55px;
            }
            .home-text h2 {
                font-size: 18px;
            }
            .home .description {
                font-size: 15px;
            }
            .home-buttons {
                flex-direction: column;
                align-items: center;
            }
            .glow-circle {
                width: 270px;
                height: 270px;
            }
            .circle-content {
                font-size: 22px;
            }
            .glow-circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    border-radius: 50%;
    position: relative;
    z-index: 2;
}
        }

        /* ================= ABOUT CSS ================= */
        .about-section {
            min-height: 100vh;
            padding: 120px 7% 100px;
            position: relative;
            background:
                radial-gradient(
                    circle at 80% 45%,
                    rgba(190, 20, 75, 0.25),
                    transparent 30%
                ),
                linear-gradient(
                    135deg,
                    #17050d,
                    #320814,
                    #16040b
                );
            overflow: hidden;
            font-family: Arial, sans-serif;
        }

        .about-container {
            max-width: 1400px;
            margin: auto;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 70px;
            align-items: center;
        }

        .about-small-title {
            color: #ff4c73;
            font-size: 14px;
            letter-spacing: 6px;
            margin-bottom: 15px;
        }

        .about-title {
            font-family: Georgia, serif;
            font-size: 70px;
            line-height: 1;
            margin-bottom: 20px;
            color: white;
        }

        .about-title span {
            color: #ff426f;
            text-shadow: 0 0 15px rgba(255, 50, 100, 0.5);
        }

        .about-content > h3 {
            font-size: 22px;
            color: #eeeeee;
            margin-bottom: 25px;
        }

        .about-content > p {
            max-width: 760px;
            color: #d2d2d2;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        .about-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 30px;
        }

        .about-card {
            min-height: 125px;
            padding: 20px;
            border: 1px solid rgba(255, 50, 100, 0.45);
            border-radius: 18px;
            background: rgba(60, 5, 20, 0.5);
            display: flex;
            gap: 15px;
            align-items: flex-start;
            transition: 0.3s;
            box-shadow: 0 0 15px rgba(255, 30, 90, 0.08);
        }

        .about-card:hover {
            transform: translateY(-5px);
            border-color: #ff426f;
            box-shadow: 0 0 20px rgba(255, 40, 100, 0.35);
        }

        .card-icon {
            font-size: 25px;
        }

        .about-card h4 {
            color: #ff4c73;
            margin-bottom: 10px;
            font-size: 15px;
        }

        .about-card p {
            color: #ddd;
            font-size: 13px;
            line-height: 1.6;
        }

        .skills-title {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .skills-title span {
            color: #ff426f;
            font-size: 25px;
        }

        .skills-title h3 {
            font-size: 22px;
        }

        .skill-box {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .skill-name {
            padding: 13px 35px;
            border: 1px solid #ff426f;
            border-radius: 30px;
            color: white;
            background: rgba(255, 30, 90, 0.08);
            box-shadow: 0 0 15px rgba(255, 40, 100, 0.2);
        }

        .skill-box p {
            color: #cfcfcf;
            font-size: 14px;
            margin: 0;
        }

        .about-image-area {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 550px;
        }

        .image-glow {
            width: 430px;
            height: 530px;
            position: relative;
            border-radius: 220px 220px 80px 80px;
            border: 2px solid #ff426f;
            padding: 8px;
            background: rgba(255, 40, 100, 0.08);
            box-shadow:
                0 0 20px rgba(255, 40, 100, 0.7),
                0 0 70px rgba(255, 20, 90, 0.3);
        }

        .image-glow img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            border-radius: 210px 210px 70px 70px;
        }

        .student-badge {
            position: absolute;
            right: -10px;
            bottom: 70px;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 15px 25px;
            border: 1px solid #ff426f;
            border-radius: 18px;
            background: rgba(30, 3, 12, 0.9);
            box-shadow: 0 0 20px rgba(255, 40, 100, 0.35);
        }

        .student-badge span {
            font-size: 25px;
        }

        .student-badge strong {
            display: block;
            color: white;
            font-size: 14px;
        }

        .student-badge small {
            display: block;
            color: #ff426f;
            margin-top: 5px;
        }

        .about-signature {
            position: absolute;
            right: -30px;
            top: 80px;
            color: #ff557c;
            font-family: cursive;
            font-size: 25px;
            transform: rotate(-8deg);
            text-shadow: 0 0 10px rgba(255, 40, 100, 0.5);
        }

        .about-signature span {
            font-size: 22px;
        }

        @media (max-width: 1000px) {
            .about-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
            .about-content > p {
                margin-left: auto;
                margin-right: auto;
            }
            .about-cards {
                grid-template-columns: 1fr;
            }
            .skill-box {
                justify-content: center;
                flex-direction: column;
            }
            .about-image-area {
                margin-top: 30px;
            }
            .student-badge {
                right: 5%;
            }
        }

        @media (max-width: 600px) {
            .about-section {
                padding: 80px 5%;
            }
            .about-title {
                font-size: 50px;
            }
            .about-content > h3 {
                font-size: 18px;
            }
            .image-glow {
                width: 300px;
                height: 390px;
            }
            .about-signature {
                right: 0;
            }
        }
        /* ================= MODULES ================= */

.modules-section {
    min-height: 100vh;
    padding: 110px 7% 90px;

    position: relative;
    overflow: hidden;

    background:
        radial-gradient(
            circle at 85% 15%,
            rgba(255, 45, 100, 0.22),
            transparent 28%
        ),
        radial-gradient(
            circle at 10% 90%,
            rgba(120, 0, 45, 0.25),
            transparent 30%
        ),
        linear-gradient(
            135deg,
            #090407,
            #210611,
            #100309
        );
}

/* العنوان */

.modules-header {
    max-width: 1200px;
    margin: 0 auto 55px;
}

.modules-small-title {
    color: #ff4c73;
    font-size: 13px;
    letter-spacing: 6px;
    margin-bottom: 15px;
}

.modules-title {
    font-family: Georgia, "Times New Roman", serif;
    font-size: clamp(50px, 6vw, 78px);
    line-height: 1;
    color: white;
    margin-bottom: 20px;
}

.modules-title span {
    color: #ff426f;

    text-shadow:
        0 0 15px rgba(255, 50, 100, 0.55);
}

.modules-subtitle {
    color: #cfc5c9;
    font-size: 16px;
    line-height: 1.7;
    max-width: 650px;
}

/* CARDS */

.modules-grid {
    max-width: 1200px;
    margin: auto;

    display: grid;
    grid-template-columns: repeat(3, 1fr);

    gap: 22px;
}

.module-card {
    min-height: 270px;

    padding: 28px;

    border: 1px solid rgba(255, 55, 105, 0.35);
    border-radius: 22px;

    background:
        linear-gradient(
            145deg,
            rgba(55, 8, 25, 0.75),
            rgba(20, 3, 10, 0.8)
        );

    position: relative;
    overflow: hidden;

    transition: 0.35s ease;

    box-shadow:
        0 0 20px rgba(255, 30, 90, 0.07);
}

.module-card::before {
    content: "";

    position: absolute;

    width: 150px;
    height: 150px;

    right: -60px;
    top: -60px;

    border-radius: 50%;

    background: #ff285f;
    filter: blur(70px);

    opacity: 0.18;
}

.module-card:hover {
    transform: translateY(-8px);

    border-color: #ff426f;

    box-shadow:
        0 0 25px rgba(255, 40, 100, 0.25),
        0 0 60px rgba(255, 20, 80, 0.12);
}

/* NUMERO */

.module-number {
    position: absolute;

    top: 22px;
    right: 25px;

    color: #80656e;

    font-size: 13px;
}

/* ICON */

.module-icon {
    width: 55px;
    height: 55px;

    border-radius: 16px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: #ff527d;

    font-size: 24px;

    border: 1px solid rgba(255, 55, 105, 0.5);

    background: rgba(255, 40, 95, 0.08);

    box-shadow:
        0 0 18px rgba(255, 40, 100, 0.15);

    margin-bottom: 25px;
}

/* MODULE NAME */

.module-card h3 {
    font-family: Georgia, "Times New Roman", serif;

    color: white;

    font-size: 24px;

    margin-bottom: 12px;
}

.module-card p {
    color: #bfb3b8;

    font-size: 14px;

    line-height: 1.7;

    margin-bottom: 25px;
}

/* CODE MODULE */

.module-code {
    display: inline-block;

    padding: 7px 13px;

    border-radius: 20px;

    border: 1px solid rgba(255, 55, 105, 0.35);

    color: #ff6388;

    font-size: 11px;

    letter-spacing: 1px;
}

/* BOTTOM */

.modules-footer {
    max-width: 1200px;
    margin: 45px auto 0;

    padding: 25px 30px;

    border-radius: 20px;

    border: 1px solid rgba(255, 55, 105, 0.22);

    background: rgba(255, 255, 255, 0.025);

    display: flex;
    justify-content: space-between;
    align-items: center;

    gap: 20px;
}

.modules-footer h3 {
    color: white;
    font-family: Georgia, serif;
    font-size: 22px;
}

.modules-footer p {
    color: #aaa;
    font-size: 13px;
    margin-top: 6px;
}

.modules-footer span {
    color: #ff4c73;
    font-size: 30px;
}


/* RESPONSIVE */

@media (max-width: 950px) {

    .modules-grid {
        grid-template-columns: repeat(2, 1fr);
    }

}

@media (max-width: 600px) {

    .modules-section {
        padding: 80px 5%;
    }

    .modules-grid {
        grid-template-columns: 1fr;
    }

    .modules-footer {
        flex-direction: column;
        text-align: center;
    }

}
/* ================= PROJECTS ================= */

.projects-section {
    min-height: 100vh;

    padding: 120px 7% 100px;

    background:
        radial-gradient(
            circle at 50% 0%,
            rgba(255, 40, 100, 0.18),
            transparent 35%
        ),
        linear-gradient(
            135deg,
            #18050d,
            #350817,
            #18040c
        );

    color: white;
}


/* ================= HEADER ================= */

.projects-header {
    text-align: center;

    max-width: 750px;

    margin: 0 auto 55px;
}


.projects-small-title {
    color: #ff4c73;

    font-size: 13px;

    letter-spacing: 6px;

    font-weight: bold;

    margin-bottom: 15px;
}


.projects-header h2 {
    font-family: Georgia, serif;

    font-size: 65px;

    line-height: 1;

    margin-bottom: 20px;
}


.projects-header h2 span {
    color: #ff426f;

    text-shadow:
        0 0 15px rgba(255, 50, 100, 0.6);
}


.projects-intro {
    color: #cfcfcf;

    font-size: 15px;

    line-height: 1.7;
}


/* ================= PROJECTS GRID ================= */

.projects-container {
    width: 100%;

    max-width: 1250px;

    margin: auto;

    display: grid;

    grid-template-columns:
        repeat(3, 1fr);

    gap: 25px;
}


/* ================= CARD ================= */

.project-card {
    padding: 15px;

    border-radius: 16px;

    border: 1px solid rgba(255, 60, 110, 0.35);

    background:
        rgba(45, 5, 18, 0.65);

    box-shadow:
        0 0 15px rgba(255, 30, 90, 0.08);

    transition: 0.35s ease;
}


.project-card:hover {
    transform: translateY(-8px);

    border-color: #ff426f;

    box-shadow:
        0 0 20px rgba(255, 40, 100, 0.3),
        0 0 45px rgba(255, 20, 90, 0.12);
}


/* ================= IMAGE ================= */

.project-image {
    width: 100%;

    height: 180px;

    overflow: hidden;

    border-radius: 10px;

    background: #260711;

    margin-bottom: 18px;
}


.project-image img {
    width: 100%;

    height: 100%;

    object-fit: cover;

    display: block;

    transition: 0.4s;
}


.project-card:hover .project-image img {
    transform: scale(1.05);
}


/* ================= TITLE ================= */

.project-card h3 {
    font-family: Georgia, serif;

    font-size: 20px;

    margin-bottom: 10px;

    color: #ffffff;
}


/* ================= DESCRIPTION ================= */

.project-card > p {
    color: #c5b9be;

    font-size: 12px;

    line-height: 1.6;

    min-height: 58px;

    margin-bottom: 15px;
}


/* ================= TAGS ================= */

.project-tags {
    display: flex;

    flex-wrap: wrap;

    gap: 7px;

    margin-bottom: 18px;
}


.project-tags span {
    padding: 5px 10px;

    border-radius: 15px;

    border: 1px solid rgba(255, 70, 115, 0.4);

    color: #ff7695;

    background:
        rgba(255, 40, 100, 0.08);

    font-size: 9px;

    font-family: Arial, sans-serif;
}


/* ================= BUTTONS ================= */

.project-buttons {
    display: flex;

    gap: 8px;
}


.project-btn {
    text-decoration: none;

    padding: 9px 17px;

    border-radius: 20px;

    font-size: 10px;

    font-family: Arial, sans-serif;

    font-weight: bold;

    transition: 0.3s;
}


/* GITHUB */

.github-btn {
    color: white;

    background:
        linear-gradient(
            135deg,
            #ff426f,
            #d5164e
        );

    box-shadow:
        0 0 10px rgba(255, 45, 100, 0.4);
}


.github-btn:hover {
    transform: translateY(-2px);

    box-shadow:
        0 0 18px rgba(255, 45, 100, 0.7);
}


/* LIVE DEMO */

.demo-btn {
    color: white;

    border: 1px solid rgba(255, 255, 255, 0.25);

    background:
        rgba(255, 255, 255, 0.04);
}


.demo-btn:hover {
    border-color: #ff426f;

    background:
        rgba(255, 40, 100, 0.12);
}


/* ================= RESPONSIVE ================= */

@media (max-width: 1000px) {

    .projects-container {
        grid-template-columns:
            repeat(2, 1fr);
    }

}


@media (max-width: 650px) {

    .projects-section {
        padding: 90px 5% 70px;
    }


    .projects-header h2 {
        font-size: 48px;
    }


    .projects-container {
        grid-template-columns: 1fr;
    }


    .project-image {
        height: 200px;
    }

}
/* ================= SKILLS ================= */

.skills-section {
    min-height: 100vh;
    padding: 120px 8% 80px;
    background:
        radial-gradient(circle at 20% 20%, rgba(255, 45, 105, 0.18), transparent 30%),
        radial-gradient(circle at 80% 70%, rgba(255, 20, 90, 0.15), transparent 30%),
        #160812;
    color: white;
    position: relative;
    overflow: hidden;
}

.skills-section::before {
    content: "";
    position: absolute;
    width: 400px;
    height: 400px;
    background: rgba(255, 30, 100, 0.12);
    filter: blur(120px);
    border-radius: 50%;
    top: 10%;
    right: -150px;
}

.skills-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 60px;
    position: relative;
    z-index: 2;
}

.section-label {
    display: inline-block;
    font-size: 12px;
    letter-spacing: 4px;
    color: #ff6c9b;
    margin-bottom: 15px;
    font-weight: 700;
}

.skills-header h2 {
    font-family: Georgia, serif;
    font-size: 60px;
    margin: 0 0 15px;
}

.skills-header h2 span {
    color: #ff527f;
    text-shadow: 0 0 25px rgba(255, 70, 120, 0.7);
}

.skills-header p {
    color: #d7bfc9;
    line-height: 1.7;
    font-size: 15px;
}


/* GRID */

.skills-container {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    position: relative;
    z-index: 2;
}


/* CATEGORY CARD */

.skill-category {
    background: rgba(45, 14, 29, 0.78);
    border: 1px solid rgba(255, 105, 145, 0.25);
    border-radius: 22px;
    padding: 28px;
    backdrop-filter: blur(15px);
    box-shadow:
        0 15px 40px rgba(0, 0, 0, 0.25),
        inset 0 0 30px rgba(255, 50, 100, 0.03);
    transition: 0.35s ease;
}

.skill-category:hover {
    transform: translateY(-5px);
    border-color: rgba(255, 90, 130, 0.55);
    box-shadow:
        0 20px 50px rgba(0, 0, 0, 0.35),
        0 0 30px rgba(255, 50, 100, 0.12);
}


/* CATEGORY TITLE */

.category-title {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
}

.category-icon {
    width: 52px;
    height: 52px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 70, 120, 0.12);
    border: 1px solid rgba(255, 100, 145, 0.25);
    font-size: 23px;
}

.category-title h3 {
    margin: 0;
    font-size: 20px;
}

.category-title p {
    margin: 5px 0 0;
    color: #a98b98;
    font-size: 12px;
}


/* SKILL */

.skill-card {
    margin-bottom: 18px;
}

.skill-card:last-child {
    margin-bottom: 0;
}

.skill-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 8px;
    font-size: 13px;
}

.skill-info span:first-child {
    color: #f5e9ed;
}

.skill-info span:last-child {
    color: #ff719b;
    font-weight: bold;
}


/* PROGRESS */

.progress {
    width: 100%;
    height: 7px;
    background: rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    border-radius: 20px;
    background: linear-gradient(
        90deg,
        #ff315f,
        #ff729d
    );
    box-shadow: 0 0 12px rgba(255, 60, 110, 0.6);
    position: relative;
}

.progress-bar::after {
    content: "";
    position: absolute;
    right: 0;
    top: 0;
    width: 30px;
    height: 100%;
    background: rgba(255,255,255,0.45);
    filter: blur(5px);
}


/* RESPONSIVE */

@media (max-width: 850px) {

    .skills-section {
        padding: 100px 5% 60px;
    }

    .skills-header h2 {
        font-size: 45px;
    }

    .skills-container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 500px) {

    .skills-header h2 {
        font-size: 38px;
    }

    .skill-category {
        padding: 22px;
    }

    .category-title h3 {
        font-size: 17px;
    }
}
/* ================= CONTACT ================= */

.contact-section {
    min-height: 100vh;
    padding: 120px 8% 80px;

    background:
        radial-gradient(
            circle at 15% 25%,
            rgba(255, 45, 105, 0.18),
            transparent 30%
        ),
        radial-gradient(
            circle at 85% 75%,
            rgba(255, 20, 90, 0.14),
            transparent 30%
        ),
        #160812;

    color: white;
    position: relative;
    overflow: hidden;
}

.contact-header {
    max-width: 700px;
    margin: 0 auto 60px;
    text-align: center;
    position: relative;
    z-index: 2;
}

.contact-header .section-label {
    display: inline-block;
    color: #ff6c9b;
    font-size: 12px;
    letter-spacing: 4px;
    font-weight: 700;
    margin-bottom: 15px;
}

.contact-header h2 {
    font-family: Georgia, serif;
    font-size: 60px;
    margin: 0 0 15px;
}

.contact-header h2 span {
    color: #ff527f;
    text-shadow: 0 0 25px rgba(255, 70, 120, 0.7);
}

.contact-header p {
    color: #d7bfc9;
    line-height: 1.7;
    font-size: 15px;
}


/* MAIN CONTAINER */

.contact-container {
    max-width: 1100px;
    margin: auto;

    display: grid;
    grid-template-columns: 0.8fr 1.2fr;
    gap: 30px;

    position: relative;
    z-index: 2;
}


/* LEFT */

.contact-info {
    display: flex;
    flex-direction: column;
    gap: 18px;
}


/* INFO CARD */

.contact-card {
    display: flex;
    align-items: center;
    gap: 18px;

    padding: 22px;

    background: rgba(45, 14, 29, 0.78);
    border: 1px solid rgba(255, 105, 145, 0.25);
    border-radius: 18px;

    backdrop-filter: blur(15px);

    transition: 0.3s ease;
}

.contact-card:hover {
    transform: translateX(5px);
    border-color: rgba(255, 90, 130, 0.6);

    box-shadow:
        0 0 25px rgba(255, 50, 100, 0.12);
}

.contact-icon {
    width: 50px;
    height: 50px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 14px;

    background: rgba(255, 70, 120, 0.12);
    border: 1px solid rgba(255, 100, 145, 0.25);

    font-size: 21px;
}

.contact-card h3 {
    margin: 0 0 6px;
    font-size: 15px;
}

.contact-card p {
    margin: 0;
    color: #bda5b0;
    font-size: 13px;
}


/* SOCIALS */

.contact-socials {
    display: flex;
    gap: 10px;
    margin-top: 8px;
    flex-wrap: wrap;
}

.contact-socials a {
    text-decoration: none;
    color: #f5dfe7;

    padding: 10px 17px;

    border: 1px solid rgba(255, 105, 145, 0.25);
    border-radius: 30px;

    background: rgba(255, 255, 255, 0.04);

    font-size: 12px;

    transition: 0.3s ease;
}

.contact-socials a:hover {
    color: white;
    background: #ff416f;
    border-color: #ff416f;

    box-shadow: 0 0 18px rgba(255, 65, 111, 0.4);
}


/* FORM */

.contact-form-box {
    background: rgba(45, 14, 29, 0.78);

    border: 1px solid rgba(255, 105, 145, 0.25);
    border-radius: 22px;

    padding: 32px;

    backdrop-filter: blur(15px);

    box-shadow:
        0 15px 40px rgba(0, 0, 0, 0.25);
}

.contact-form-box h3 {
    margin: 0 0 25px;
    font-size: 23px;
}


/* FORM ROW */

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}


/* INPUT */

.input-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 18px;
}

.input-group label {
    font-size: 12px;
    color: #e8cbd5;
    margin-bottom: 8px;
}

.input-group input,
.input-group textarea {
    width: 100%;
    box-sizing: border-box;

    padding: 14px 15px;

    border: 1px solid rgba(255, 105, 145, 0.2);
    border-radius: 12px;

    background: rgba(10, 5, 9, 0.45);

    color: white;

    outline: none;

    font-family: inherit;

    transition: 0.3s ease;
}

.input-group input::placeholder,
.input-group textarea::placeholder {
    color: #806b74;
}

.input-group input:focus,
.input-group textarea:focus {
    border-color: #ff527f;

    box-shadow:
        0 0 15px rgba(255, 60, 110, 0.15);
}

.input-group textarea {
    resize: vertical;
}


/* BUTTON */

.send-btn {
    width: 100%;

    padding: 14px 20px;

    border: none;
    border-radius: 30px;

    background: linear-gradient(
        90deg,
        #ff315f,
        #ff729d
    );

    color: white;

    font-size: 13px;
    font-weight: 700;

    cursor: pointer;

    box-shadow:
        0 0 20px rgba(255, 55, 105, 0.25);

    transition: 0.3s ease;
}

.send-btn span {
    margin-left: 8px;
}

.send-btn:hover {
    transform: translateY(-2px);

    box-shadow:
        0 0 30px rgba(255, 55, 105, 0.5);
}


/* RESPONSIVE */

@media (max-width: 850px) {

    .contact-section {
        padding: 100px 5% 60px;
    }

    .contact-header h2 {
        font-size: 45px;
    }

    .contact-container {
        grid-template-columns: 1fr;
    }
}


@media (max-width: 550px) {

    .contact-header h2 {
        font-size: 38px;
    }

    .contact-form-box {
        padding: 22px;
    }

    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }
}
    </style>
</head>
<body>

    <!-- ================= INTRO ================= -->
    <div id="intro-wrapper">
        <div class="intro">
            <!-- LEFT -->
            <div class="left">
                <div class="badges">
                    <span class="badge">● SYSTEM READY</span>
                    <span class="badge">PORTFOLIO 2026</span>
                    <span class="badge">UI LOADING</span>
                </div>

                <h1>
                    Welcome to<br>
                    my Portfolio<br>
                    <span>Website</span>
                </h1>

                <p class="description">
                    Je suis Noura El Hamioui,
                    étudiante en développement digital.
                    Bienvenue dans mon espace personnel
                    où je présente mes compétences et mes projets.
                </p>

                <div class="status">LIVE STATUS</div>

                <div class="buttons">
                    <a href="#" class="btn">&lt;/&gt; CODE</a>
                    <a href="#" class="btn">👤 PROFILE</a>
                    <a href="#" class="btn">● SOURCE</a>
                    <a href="#" class="btn">🌐 PORTFOLIO</a>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="right">
                <div class="top">
                    <span>CORE UI</span>
                    <span class="online">ONLINE</span>
                </div>

                <div class="circle-area">
                    <div class="circle">
                        <span class="welcome">WELCOME</span>
                    </div>
                </div>

                <div class="stats">
                    <div class="stat">
                        <div class="number">01</div>
                        <div class="label">PORTFOLIO</div>
                    </div>

                    <div class="stat">
                        <div class="number">100%</div>
                        <div class="label">READY</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ================= HOME ================= -->
    <section id="home" class="home">
        <!-- NAVBAR -->
        <nav class="navbar">
            <div class="logo">
                <span>.</span>
            </div>

            <div class="nav-links">
                <a href="#home" class="active">Home</a>
                <a href="#about">About</a>
                <a href="#modules">Modules</a>
                <a href="#projects">Projects</a>
                <a href="#skills">Skills</a>
                <a href="#contact">Contact</a>
            </div>
        </nav>

        <!-- HOME CONTENT -->
        <div class="home-container">
            <!-- LEFT -->
            <div class="home-text">
                <p class="hello">HELLO, I'M</p>

                <h1>
                    Noura<br>
                    <span>El Hamioui</span>
                </h1>

                <h2>
                    Étudiante en Développement Digital Full Stack
                </h2>

                <p class="description">
                    Bienvenue sur mon portfolio. Je suis étudiante en
                    développement digital et je m'intéresse à la création
                    de sites web modernes, interactifs et responsives.
                </p>

                <!-- BUTTONS -->
                <div class="home-buttons">
                    <a href="#projects" class="btn btn-main">
                        Voir mes projets
                    </a>

                    <a href="#contact" class="btn btn-outline">
                        Me contacter
                    </a>
                </div>

                <!-- SOCIAL -->
                <div class="socials">
                    <a href="#" target="_blank">
                        GitHub
                    </a>

                    <span></span>

                    <a href="#" target="_blank">
                        LinkedIn
                    </a>
                </div>
            </div>

            <!-- RIGHT -->
            <div class="home-visual">
                <div class="glow-circle">
                    <img src="../public/images/image1.jpeg" alt="Noura El Hamioui">
                </div>
            </div>
        </div>
    </section>


    <!-- ================= ABOUT ================= -->
    <section id="about" class="about-section">
        <div class="about-container">
            <!-- LEFT SIDE -->
            <div class="about-content">
                <p class="about-small-title">
                    GET TO KNOW ME
                </p>

                <h2 class="about-title">
                    About <span>Me</span>
                </h2>

                <h3>
                    Étudiante en Développement Digital Full Stack
                </h3>

                <p>
                    Je m'appelle Noura El Hamioui, étudiante en 2ème année
                    en Développement Digital Full Stack à ISMONTIC Tanger.
                </p>

                <p>
                    Je suis passionnée par la création de sites web modernes
                    et j'aime particulièrement découvrir et explorer le monde
                    du développement digital.
                </p>

                <p>
                    Je suis encore en phase d'apprentissage et je cherche
                    constamment à développer mes compétences, ma créativité
                    et ma façon de concevoir des projets web.
                </p>

                <p>
                    Mon objectif est de continuer à apprendre, intégrer le
                    monde professionnel et développer mes propres projets
                    dans le futur.
                </p>

                <!-- INFOS -->
                <div class="about-cards">
                    <div class="about-card">
                        <div class="card-icon">🎓</div>
                        <div>
                            <h4>Formation</h4>
                            <p>
                                Développement Digital<br>
                                Full Stack<br>
                                ISMONTIC Tanger
                            </p>
                        </div>
                    </div>

                    <div class="about-card">
                        <div class="card-icon">📍</div>
                        <div>
                            <h4>Localisation</h4>
                            <p>
                                Tanger, Maroc
                            </p>
                        </div>
                    </div>

                    <div class="about-card">
                        <div class="card-icon">🎯</div>
                        <div>
                            <h4>Objectif</h4>
                            <p>
                                Travailler et développer
                                mes propres projets
                            </p>
                        </div>
                    </div>
                </div>

                
            </div>

            <!-- RIGHT SIDE -->
            <div class="about-image-area">
                <div class="image-glow">
                    <img
                        src="../public/images/noura.jpeg"
                        alt="Noura El Hamioui"
                    >
                </div>

                <div class="student-badge">
                    <span>🎓</span>
                    <div>
                        <strong>2ème année</strong>
                        <small>ISMONTIC Tanger</small>
                    </div>
                </div>

                <div class="about-signature">
                    Noura<br>
                    <span>El Hamioui</span>
                </div>
            </div>
        </div>
    </section>
    <!-- ================= MODULES ================= -->

<section id="modules" class="modules-section">

    <div class="modules-header">

        <p class="modules-small-title">
            MY LEARNING PATH
        </p>

        <h2 class="modules-title">
            My <span>Modules</span>
        </h2>

        <p class="modules-subtitle">
            Les modules techniques que j'étudie cette année
            dans ma formation en Développement Digital Full Stack
            à ISMONTIC Tanger.
        </p>

    </div>


    <div class="modules-grid">

        <!-- M201 -->

        <div class="module-card">

            <span class="module-number">01</span>

            <div class="module-icon">
                &lt;/&gt;
            </div>

            <h3>
                Préparation d'un projet web
            </h3>

            <p>
                Préparation et organisation d'un projet
                dans le domaine du développement web.
            </p>

            <a href="M201.php" class="module-code">Voir Les Details</a>

        </div>


        <!-- M202 -->

        <div class="module-card">

            <span class="module-number">02</span>

            <div class="module-icon">
                ⚡
            </div>

            <h3>
                Approche agile
            </h3>

            <p>
                Découverte des méthodes et principes
                de travail liés à l'approche agile.
            </p>

            <span class="module-code">
                M202
            </span>

        </div>


        <!-- M203 -->

        <div class="module-card">

            <span class="module-number">03</span>

            <div class="module-icon">
                ◉
            </div>

            <h3>
                Gestion des données
            </h3>

            <p>
                Étude et gestion des données dans le cadre
                des applications informatiques.
            </p>

            <span class="module-code">
                M203
            </span>

        </div>


        <!-- M204 -->

        <div class="module-card">

            <span class="module-number">04</span>

            <div class="module-icon">
                &lt;/&gt;
            </div>

            <h3>
                Développement front-end
            </h3>

            <p>
                Création de l'interface et développement
                de la partie visible des applications web.
            </p>

            <span class="module-code">
                M204
            </span>

        </div>


        <!-- M205 -->

        <div class="module-card">

            <span class="module-number">05</span>

            <div class="module-icon">
                { }
            </div>

            <h3>
                Développement back-end
            </h3>

            <p>
                Découverte du développement côté serveur
                et de la logique des applications web.
            </p>

            <span class="module-code">
                M205
            </span>

        </div>


        <!-- M206 -->

        <div class="module-card">

            <span class="module-number">06</span>

            <div class="module-icon">
                ☁
            </div>

            <h3>
                Application Cloud native
            </h3>

            <p>
                Découverte de la création et du développement
                d'applications Cloud native.
            </p>

            <span class="module-code">
                M206
            </span>

        </div>

    </div>


    <!-- FOOTER -->

    <div class="modules-footer">

        <div>

            <h3>
                En constante évolution
            </h3>

            <p>
                Chaque module représente une nouvelle étape
                dans mon parcours d'apprentissage.
            </p>

        </div>

        <span>
            ✦
        </span>

    </div>

</section>
<!-- ================= PROJECTS ================= -->

<section id="projects" class="projects-section">

    <div class="projects-header">

        <p class="projects-small-title">
            MY WORK
        </p>

        <h2>
            Featured <span>Projects</span>
        </h2>

        <p class="projects-intro">
            A showcase of my recent projects demonstrating my skills
            in web development, modern interfaces and creative problem-solving.
        </p>

    </div>


    <div class="projects-container">


        <!-- PROJECT 1 -->
        <div class="project-card">

            <div class="project-image">
                <img src="../public/images/project1.png"
                     alt="E-Commerce Website">
            </div>

            <h3>
                E-Commerce Website
            </h3>

            <p>
                Modern online store with product filtering,
                cart and a simple shopping experience.
            </p>

            <div class="project-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>JavaScript</span>
            </div>

            <div class="project-buttons">

                <a href="https://github.com/TON-COMPTE/TON-PROJET"
                   target="_blank"
                   class="project-btn github-btn">
                    GitHub
                </a>

                <a href="#"
                   target="_blank"
                   class="project-btn demo-btn">
                    Live Demo
                </a>

            </div>

        </div>


        <!-- PROJECT 2 -->
        <div class="project-card">

            <div class="project-image">
                <img src="../public/images/project2.png"
                     alt="Portfolio Website">
            </div>

            <h3>
                Portfolio Website
            </h3>

            <p>
                Personal portfolio website to showcase my
                projects, skills and digital development journey.
            </p>

            <div class="project-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>Bootstrap</span>
            </div>

            <div class="project-buttons">

                <a href="https://github.com/TON-COMPTE/TON-PROJET"
                   target="_blank"
                   class="project-btn github-btn">
                    GitHub
                </a>

                <a href="#"
                   target="_blank"
                   class="project-btn demo-btn">
                    Live Demo
                </a>

            </div>

        </div>


        <!-- PROJECT 3 -->
        <div class="project-card">

            <div class="project-image">
                <img src="../public/images/project3.png"
                     alt="Weather App">
            </div>

            <h3>
                Weather App
            </h3>

            <p>
                Responsive weather application showing
                real-time weather information using an API.
            </p>

            <div class="project-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>API</span>
            </div>

            <div class="project-buttons">

                <a href="https://github.com/TON-COMPTE/TON-PROJET"
                   target="_blank"
                   class="project-btn github-btn">
                    GitHub
                </a>

                <a href="#"
                   target="_blank"
                   class="project-btn demo-btn">
                    Live Demo
                </a>

            </div>

        </div>


        <!-- PROJECT 4 -->
        <div class="project-card">

            <div class="project-image">
                <img src="../public/images/project4.png"
                     alt="Student Management">
            </div>

            <h3>
                Student Management
            </h3>

            <p>
                A simple application for managing students,
                information and data.
            </p>

            <div class="project-tags">
                <span>PHP</span>
                <span>MySQL</span>
                <span>HTML</span>
            </div>

            <div class="project-buttons">

                <a href="https://github.com/TON-COMPTE/TON-PROJET"
                   target="_blank"
                   class="project-btn github-btn">
                    GitHub
                </a>

                <a href="#"
                   target="_blank"
                   class="project-btn demo-btn">
                    Live Demo
                </a>

            </div>

        </div>


        <!-- PROJECT 5 -->
        <div class="project-card">

            <div class="project-image">
                <img src="../public/images/project5.png"
                     alt="Book Rental Website">
            </div>

            <h3>
                Book Rental Website
            </h3>

            <p>
                A web interface for discovering and renting
                books with a clean and simple design.
            </p>

            <div class="project-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>PHP</span>
            </div>

            <div class="project-buttons">

                <a href="https://github.com/TON-COMPTE/TON-PROJET"
                   target="_blank"
                   class="project-btn github-btn">
                    GitHub
                </a>

                <a href="#"
                   target="_blank"
                   class="project-btn demo-btn">
                    Live Demo
                </a>

            </div>

        </div>


        <!-- PROJECT 6 -->
        <div class="project-card">

            <div class="project-image">
                <img src="../public/images/project6.png"
                     alt="Digital Project">
            </div>

            <h3>
                Digital Project
            </h3>

            <p>
                A creative digital project developed during
                my Full Stack development training.
            </p>

            <div class="project-tags">
                <span>JavaScript</span>
                <span>PHP</span>
                <span>MySQL</span>
            </div>

            <div class="project-buttons">

                <a href="https://github.com/TON-COMPTE/TON-PROJET"
                   target="_blank"
                   class="project-btn github-btn">
                    GitHub
                </a>

                <a href="#"
                   target="_blank"
                   class="project-btn demo-btn">
                    Live Demo
                </a>

            </div>

        </div>

    </div>

</section>
<!-- ================= SKILLS SECTION ================= -->
<section id="skills" class="skills-section">

    <div class="skills-header">
        <span class="section-label">MY EXPERTISE</span>
        <h2>My <span>Skills</span></h2>
        <p>
            Les compétences que je développe au cours de ma formation
            en Développement Digital Full Stack.
        </p>
    </div>

    <div class="skills-container">

        <!-- DEVELOPMENT -->
        <div class="skill-category">
            <div class="category-title">
                <div class="category-icon">💻</div>
                <div>
                    <h3>Développement</h3>
                    <p>Web & Programming</p>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>HTML</span>
                    <span>90%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:90%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>CSS</span>
                    <span>85%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:85%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Bootstrap</span>
                    <span>80%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:80%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>JavaScript</span>
                    <span>65%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:65%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>PHP</span>
                    <span>60%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:60%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Python</span>
                    <span>70%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:70%"></div>
                </div>
            </div>
        </div>


        <!-- DATABASE -->
        <div class="skill-category">
            <div class="category-title">
                <div class="category-icon">🗄️</div>
                <div>
                    <h3>Database & Modélisation</h3>
                    <p>Data & UML</p>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>SQL</span>
                    <span>65%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:65%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>MySQL</span>
                    <span>65%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:65%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>MCD / MLD</span>
                    <span>70%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:70%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>UML</span>
                    <span>70%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:70%"></div>
                </div>
            </div>
        </div>


        <!-- TOOLS -->
        <div class="skill-category">
            <div class="category-title">
                <div class="category-icon">🛠️</div>
                <div>
                    <h3>Outils</h3>
                    <p>Software & Productivity</p>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Git</span>
                    <span>60%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:60%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>GitHub</span>
                    <span>65%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:65%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>VS Code</span>
                    <span>85%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:85%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Microsoft Word</span>
                    <span>85%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:85%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Microsoft Excel</span>
                    <span>75%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:75%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>PowerPoint</span>
                    <span>85%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:85%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Canva</span>
                    <span>85%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:85%"></div>
                </div>
            </div>
        </div>


        <!-- LANGUAGES -->
        <div class="skill-category">
            <div class="category-title">
                <div class="category-icon">🌍</div>
                <div>
                    <h3>Langues</h3>
                    <p>Languages</p>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>العربية</span>
                    <span>100%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:100%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Français</span>
                    <span>65%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:65%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>English</span>
                    <span>55%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:55%"></div>
                </div>
            </div>
        </div>


        <!-- SOFT SKILLS -->
        <div class="skill-category">
            <div class="category-title">
                <div class="category-icon">🤝</div>
                <div>
                    <h3>Soft Skills</h3>
                    <p>Personal Skills</p>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Travail en équipe</span>
                    <span>85%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:85%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Communication</span>
                    <span>75%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:75%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Organisation</span>
                    <span>80%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:80%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Gestion du temps</span>
                    <span>70%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:70%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Adaptabilité</span>
                    <span>80%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:80%"></div>
                </div>
            </div>

            <div class="skill-card">
                <div class="skill-info">
                    <span>Résolution de problèmes</span>
                    <span>70%</span>
                </div>
                <div class="progress">
                    <div class="progress-bar" style="width:70%"></div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- ================= CONTACT SECTION ================= -->
<section id="contact" class="contact-section">

    <div class="contact-header">
        <span class="section-label">GET IN TOUCH</span>
        <h2>Contact <span>Me</span></h2>
        <p>
            Vous avez un projet, une question ou simplement envie
            d'échanger ? N'hésitez pas à me contacter.
        </p>
    </div>

    <div class="contact-container">

        <!-- LEFT SIDE -->
        <div class="contact-info">

            <div class="contact-card">
                <div class="contact-icon">✉</div>
                <div>
                    <h3>Email</h3>
                    <p>norahamioui761@gmail.com</p>
                </div>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📱</div>
                <div>
                    <h3>Téléphone</h3>
                    <p>+212 7 02 28 99 33</p>
                </div>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📍</div>
                <div>
                    <h3>Location</h3>
                    <p>Tanger, Maroc</p>
                </div>
            </div>

            <div class="contact-socials">
                <a href="#" target="_blank">GitHub</a>
                <a href="#" target="_blank">LinkedIn</a>
                <a href="#" target="_blank">Instagram</a>
            </div>

        </div>


        <!-- RIGHT SIDE - FORM -->
        <div class="contact-form-box">

            <h3>Send me a message</h3>

            <form action="#" method="post">

                <div class="form-row">

                    <div class="input-group">
                        <label>Nom</label>
                        <input
                            type="text"
                            name="name"
                            placeholder="Votre nom"
                            required
                        >
                    </div>

                    <div class="input-group">
                        <label>Email</label>
                        <input
                            type="email"
                            name="email"
                            placeholder="Votre email"
                            required
                        >
                    </div>

                </div>

                <div class="input-group">
                    <label>Sujet</label>
                    <input
                        type="text"
                        name="subject"
                        placeholder="Sujet du message"
                    >
                </div>

                <div class="input-group">
                    <label>Message</label>
                    <textarea
                        name="message"
                        rows="6"
                        placeholder="Écrivez votre message..."
                        required
                    ></textarea>
                </div>

                <button type="submit" class="send-btn">
                    Envoyer le message
                    <span>➜</span>
                </button>

            </form>

        </div>

    </div>

</section>

    <!-- ================= SCRIPT INTRO TIMER ================= -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const introWrapper = document.getElementById('intro-wrapper');
                if (introWrapper) {
                    introWrapper.classList.add('hide-intro');
                }
            }, 3000); // 3 seconds timeout
        });
    </script>
</body>
</html>