<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M201 - Travaux & Exercices</title>
    <!-- FontAwesome الأيقونات -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #0d060a; /* خلفية داكنة تناسب مشروعك */
            background-image: radial-gradient(circle at top right, rgba(230, 57, 70, 0.15), transparent 40%),
                              radial-gradient(circle at bottom left, rgba(230, 57, 70, 0.1), transparent 40%);
            color: #fff;
            min-height: 100vh;
            padding: 40px 20px;
        }

        /* Container الرئيسي */
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Header الصفحة */
        .header-section {
            margin-bottom: 40px;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #e63946;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .back-btn:hover {
            transform: translateX(-5px);
            color: #ff4d5a;
        }

        .title-sub {
            color: #e63946;
            letter-spacing: 2px;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .title-main {
            font-size: 36px;
            font-weight: 700;
            margin-top: 5px;
            background: linear-gradient(90deg, #fff, #e63946);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* شبكة الـ Cards */
        .cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
        }

        /* Card Single Design */
        .card {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(230, 57, 70, 0.2);
            border-radius: 16px;
            padding: 25px;
            position: relative;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgba(230, 57, 70, 0.6);
            box-shadow: 0 10px 30px rgba(230, 57, 70, 0.2);
        }

        .card-number {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 12px;
            font-weight: 700;
            color: rgba(255, 255, 255, 0.4);
        }

        .card-icon {
            width: 45px;
            height: 45px;
            background: rgba(230, 57, 70, 0.1);
            border: 1px solid rgba(230, 57, 70, 0.3);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #e63946;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #fff;
        }

        .card p {
            font-size: 13px;
            color: #a0a0a0;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        /* الأزرار داخل Card */
        .card-buttons {
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .btn-github {
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-github:hover {
            background: #24292e;
            border-color: #fff;
        }

        .btn-docs {
            background: rgba(230, 57, 70, 0.15);
            color: #e63946;
            border: 1px solid rgba(230, 57, 70, 0.4);
        }

        .btn-docs:hover {
            background: #e63946;
            color: #fff;
            box-shadow: 0 0 15px rgba(230, 57, 70, 0.4);
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- زر العودة -->
        <a href="index.php" class="back-btn"><i class="fas fa-arrow-left"></i> Retour au Portfolio</a>

        <!-- عنوان الصفحة -->
        <div class="header-section">
            <span class="title-sub">MODULE M201</span>
            <h1 class="title-main">Préparation d'un projet web</h1>
        </div>

        <!-- شبكة الكارتات -->
        <div class="cards-grid">

            <!-- Card 1 -->
            <div class="card">
                <span class="card-number">01</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3>Diagramme de Classes - Gestion de Projet</h3>
                    <p>Modélisation UML d'un système de gestion de projets web : gestion des développeurs, tâches, participations et environnements de développement (IDE).</p>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="path-to-file.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Document
                    </a>
                </div>
            </div>

            <!-- Card 2 (تقدر تزيد شحال ما بغيتي ديال الكارتات) -->
            <div class="card">
                <span class="card-number">02</span>
                <div>
                    <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Maquettage & Wireframing</h3>
                    <p>Création des maquettes UI/UX, zonation et prototypes interactifs sous Figma pour l'application.</p>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo2" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="path-to-file2.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Review
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <span class="card-number">03</span>
                <div>
                    <div class="card-icon"><i class="fas fa-tasks"></i></div>
                    <h3>Gestion du Projet Web</h3>
                    <p>Planification des tâches, répartition de la charge de travail et choix des technologies adaptées.</p>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo3" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="path-to-file3.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Document
                    </a>
                </div>
            </div>

        </div>
    </div>

</body>
</html>