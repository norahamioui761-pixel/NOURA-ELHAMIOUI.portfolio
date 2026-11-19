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
            background-color: #F8F3EF;
            background-image: radial-gradient(circle at top right, rgba(232, 197, 204, 0.42), transparent 40%),
                              radial-gradient(circle at bottom left, rgba(216, 195, 181, 0.38), transparent 40%);
            color: #514541;
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
            color: #9B6874;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 20px;
            transition: 0.3s;
        }

        .back-btn:hover {
            transform: translateX(-5px);
            color: #80545F;
        }

        .title-sub {
            color: #9B6874;
            letter-spacing: 2px;
            font-size: 12px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .title-main {
            font-size: 36px;
            font-weight: 700;
            margin-top: 5px;
            background: linear-gradient(90deg, #514541, #9B6874);
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
            background: rgba(255, 255, 255, 0.78);
            border: 1px solid rgba(169, 149, 138, 0.38);
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
            border-color: #D9AEB8;
            box-shadow: 0 10px 30px rgba(169, 149, 138, 0.2);
        }

        .card-number {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 12px;
            font-weight: 700;
            color: #8B7770;
        }

        .card-icon {
            width: 45px;
            height: 45px;
            background: rgba(232, 197, 204, 0.38);
            border: 1px solid rgba(169, 149, 138, 0.35);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #80545F;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .card h3 {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
            color: #514541;
        }

        .card p {
            font-size: 13px;
            color: #6E625D;
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
            background: #F1E8E2;
            color: #514541;
            border: 1px solid rgba(169, 149, 138, 0.35);
        }

        .btn-github:hover {
            background: #A9958A;
            border-color: #A9958A;
            color: #fff;
        }

        .btn-docs {
            background: rgba(217, 174, 184, 0.24);
            color: #80545F;
            border: 1px solid rgba(155, 104, 116, 0.42);
        }

        .btn-docs:hover {
            background: #9B6874;
            color: #fff;
            box-shadow: 0 0 15px rgba(155, 104, 116, 0.25);
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
                <span class="card-number">UML</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3> Diagramme de class </h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/EX1.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Document
                    </a>
                </div>
            </div>
           
            <!-- Card 2  -->
            <div class="card">
                <span class="card-number">UML</span>
                <div>
                    <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3> Diagramme use case </h3>
                </div>
                <div class="card-buttons">
                    <a href="/docs/M201/EX2.mdj" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Doc 1
                    </a>
                    <a href="/docs/M201/TD1.png" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Doc 2
                    </a>
                    <a href="/docs/M201/TD2.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Doc 3
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <span class="card-number">UML</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3> Diagramme de sequences </h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/TD4.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Document
                    </a>
                </div>
            </div>

            <!-- Card 4  -->
            <div class="card">
                <span class="card-number">UML</span>
                <div>
                    <div class="card-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3> Diagramme d'etats-transition</h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo2" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/TD5.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Document
                    </a>
                </div>
            </div>

            <!-- Card 5-->
            <div class="card">
                <span class="card-number">UML</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3> Diagramme des activites </h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/TD6.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Document
                    </a>
                </div>
            </div>

            <!-- Card 6-->
            <div class="card">
                <span class="card-number">UML</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3>Les Diagramme </h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/Diagramme.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Documents
                    </a>
                </div>
            </div>

            <!-- Card 7-->
            <div class="card">
                <span class="card-number">FIGMA</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3>FIGMA-OUTILS DE BASE</h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/Atelier Figma-1.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Atelier 1
                    </a>
                </div>
            </div>

            <!-- Card 8-->
            <div class="card">
                <span class="card-number">FIGMA</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3>FIGMA-OUTILS AVANCES</h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/atelier2figma.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Atelier 2
                    </a>
                </div>
            </div> 
            <!-- Card 9-->
            <div class="card">
                <span class="card-number">FIGMA</span>
                <div>
                    <div class="card-icon"><i class="fas fa-code"></i></div>
                    <h3>FIGMA-Prototypage et animations</h3>
                </div>
                <div class="card-buttons">
                    <a href="https://github.com/ton-username/repo1" target="_blank" class="btn btn-github">
                        <i class="fab fa-github"></i> GitHub
                    </a>
                    <a href="/docs/M201/atelier3.pdf" target="_blank" class="btn btn-docs">
                        <i class="fas fa-file-alt"></i> Atelier 3
                    </a>
                </div>
            </div> 


             

            

        </div>
    </div>


           
            

            

        
    

</body>
</html>
