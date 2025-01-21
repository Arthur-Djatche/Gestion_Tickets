<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voyage</title>
    <link rel="stylesheet" href="../CSS/stylemenu.css">
</head>
<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar">
            <h2 class="sidebar-title">Dashboard</h2>
            <ul class="menu">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="voyage.php" >Voyage</a></li>
                <li><a href="bus.php" class="active">Bus</a></li>
                <li><a href="conducteur.php">Conducteur</a></li>
                <li><a href="client.php">Client</a></li>
                <li><a href="ticket.php">Ticket</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <header class="header">
                <h1>Bus</h1>
            </header>
            <section class="section">
                <div class="form-container">
                    <h2>Formulaire de bus</h2>
                    <form action="/submit-voyage" method="POST">
                      <div class="form-group">
                        <label for="nom">capacite</label>
                        <input type="number" id="nom" name="nom" placeholder="Entrer la capacite" required>
                      </div>
                      <div class="form-group">
                        <label for="no_voyage">modele</label>
                        <input type="text" id="Prenom" name="Prenom" placeholder="Entrer le modele" required>
                      </div>
                      <div class="form-group">
                        <button type="submit">Soumettre</button>
                      </div>
                    </form>
                  </div>
            </section>
        </div>
    </div>
</body>
</html>
