<nav class="navbar navbar-expand-lg navbar-dark" id="up">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1>Ask-It</h1></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Les questions</a>
        </li>
        
       
        <?php 
          if(isset($_SESSION['auth'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="publish-question.php">Publier une question</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="my-questions.php">Mes questions</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="actions/users/logoutAction.php">Déconnexion</a>
            </li>
            <?php
          } else {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="/login.php">Inscription/Connexion</a>
            </li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>
<a href="#up"><div class="go-up">Go-up</div></a>
<script async defer>
        // Fonction pour le défilement fluide
        function scrollToElement(elementId) {
            var element = document.getElementById(elementId);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        // Exemple : Appel de la fonction lorsque vous cliquez sur un lien
        document.getElementById('linkToSection2').addEventListener('click', function() {
            scrollToElement('section2');
        });
</script>