<?php
    session_start();
    include '../connexion.php';

    // Exécuter la requête pour récupérer le nombre de candidats
    $query = "SELECT COUNT(*) AS total FROM candidature";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $totalCandidats = $row['total'];

    // Fermer la connexion à la base de données
    mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--CSS -->
    <link rel="stylesheet" href="Assets/style.css">

    <title>Admin Dashboard - SAM</title>
</head>
<body>
    
    <!-- NAVIGATION -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"> 
                            <ion-icon name="airplane-sharp"></ion-icon>
                        </span>
                        <span class="title">SAM                         <br>
                        <span class="welcome">Bienvenue, <?php echo $_SESSION["nom"]; ?></span>
                    </span>

                    </a>
                </li>
                
                <li>
                    <a href="index.php">
                        <span class="icon">
                            <ion-icon name="pie-chart-sharp"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="candidature.php">
                        <span class="icon">
                            <ion-icon name="people-sharp"></ion-icon>
                        </span>
                        <span class="title">Candidature</span>
                    </a>
                </li>
                <li>
                    <a href="candidat.php">
                        <span class="icon">
                            <ion-icon name="people-sharp"></ion-icon>
                        </span>
                        <span class="title">Candidat</span>
                    </a>
                </li>
                      <li>
                    <a href="answer.php">
                        <span class="icon">
                            <ion-icon name="send-sharp"></ion-icon>
                        </span>
                        <span class="title">Repondre aux demandes</span>
                    </a>
                </li>
                <li>
                    <a href="reponse.php">
                        <span class="icon">
                        <ion-icon name="receipt-outline"></ion-icon>                        </span>
                        <span class="title">Reponse</span>
                    </a>
                </li>

                <br><br><br><br><br><br><br><br><br>
                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-sharp"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- MAIN -->
    <div class="main">
        <div class="topbar">
            <div class="toggle">
                <ion-icon name="grid-sharp"></ion-icon>
            </div>
            
        </div>
         <!-- CARDS -->
         <div class="cardBox">
            <div class="card">
                <div>
                    <div class="numbers"><?php echo $totalCandidats; ?></div>
                    <div class="cardName">Numero des candidats disponible</div>
                </div>
                <div class="iconBx">
                    <ion-icon name="people-sharp"></ion-icon>
                </div>
            </div>

        </div>
       
          
    </div>































 
   
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>


