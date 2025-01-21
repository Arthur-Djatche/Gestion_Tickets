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
                <li><a href="voyage.html" class="">Voyage</a></li>
                <li><a href="bus.html">Bus</a></li>
                <li><a href="conducteur.html">Conducteur</a></li>
                <li><a href="client.html">Client</a></li>
                <li><a href="ticket.html" class="active">Ticket</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <header class="header">
                <h1>tickets</h1>
            </header>
            <section class="section">
                <div class="form-container">
                    <h2>Formulaire de Voyage</h2>
                    <form action="/submit-voyage" method="POST">
                      <div class="form-group">
                        <label for="prix">Prix</label>
                        <input type="number" id="prix" name="prix" placeholder="Entrer le prix" required>
                      </div>
                      <div class="form-group">
                        <label for="no_voyage">No Voyage</label>
                        <input type="text" id="no_voyage" name="no_voyage" placeholder="Entrer le numéro de voyage" required>
                      </div>
                      <div class="form-group">
                        <label for="nom_client">Nom du Client</label>
                        <input type="text" id="nom_client" name="nom_client" placeholder="Entrer le nom du client" required>
                      </div>
                      <div class="form-group">
                        <label for="paiement">Mode de Paiement</label>
                        <select id="paiement" name="paiement" required>
                          <option value="" disabled selected>Choisir un mode de paiement</option>
                          <option value="carte">Carte Bancaire</option>
                          <option value="espece">Espèces</option>
                          <option value="mobile_money">Mobile Money</option>
                        </select>
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
