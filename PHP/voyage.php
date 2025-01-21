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
                <li><a href="voyage.html" class="active">Voyage</a></li>
                <li><a href="bus.html">Bus</a></li>
                <li><a href="conducteur.html">Conducteur</a></li>
                <li><a href="client.html">Client</a></li>
                <li><a href="ticket.html">Ticket</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="content">
            <header class="header">
                <h1>Voyage</h1>
            </header>
            <section class="section">
                <div class="form-container">
                    <h2>Formulaire de Voyage</h2>
                    <form action="/submit-voyage" method="POST">
                      <div class="form-group">
                        <label for="date">date</label>
                        <input type="date" id="date" name="date" placeholder="Entrer la date" required>
                      </div>
                      <div class="form-group">
                        <label for="heureDepart">heureDepart</label>
                        <input type="teheureDepart" name="heureDepart" placeholder="Entrer l'heureDepart" required>
                      </div>
                      <div class="form-group">
                        <label for="lieuDepart">NomlieuDepart</label>
                        <input type="text" id="lieuDepart" name="lieuDepartt" placeholder="Entrer le lieuDepart" required>
                      </div>
                      <div class="form-group">
                        <label for="lieuArrive">liuArrivet</label>
                        <input type="text" id="lieuArrive" name="lieuArrive" placeholder="Entrer le lieuArrive" required>
                      </div>

                      <div class="form-group">
                        <label for="Duree">Duree</label>
                        <input type="number" id="Duree" name="Duree" placeholder="Entrer le Duree" required>
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
