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
                <li><a href="dashboard.html">Dashboard</a></li>
                <li><a href="voyage.html">Voyage</a></li>
                <li><a href="bus.html">Bus</a></li>
                <li><a href="conducteur.html" class="active">Conducteur</a></li>
                <li><a href="client.html">Client</a></li>
                <li><a href="ticket.html">Ticket</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <header class="header">
                <h1>Conducteur</h1>
            </header>
            <section class="section">
                <div class="form-container">
                    <h2>Formulaire de Conducteur</h2>
                    <form action="/submit-voyage" method="POST">
                      <div class="form-group">
                        <label for="nom">Nom</label>
                        <input type="number" id="nom" name="nom" placeholder="Entrer le nom" required>
                      </div>
                      <div class="form-group">
                        <label for="no_voyage">Prenom</label>
                        <input type="text" id="Prenom" name="Prenom" placeholder="Entrer le Prenom" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="telephone">telephone</label>
                        <input type="text" id="telephone" name="telephone" placeholder="Entrer telephone client" required>
                      </div>
                      <div class="form-group">
                        <label for="adresse">Adresse</label>
                        <input type="text" id="adresse" name="adresse" placeholder="Entrer l'adresse conducteur" required>
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
