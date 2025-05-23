<?php
// COMMENCER UNE SESSION
session_start();
require_once "quizz-questions.php";

function QuizzAffichage($questions)
{
    global $options, $reponses, $explications;

    // CALCULER LE SCORE AVEC CHAQUE QUESTION
    $totalQuestions = count($questions);

    //D'ABORD ON VÉRIFIE SI L'INDEX ET LE SCORE EXISTE 
    if (!isset($_SESSION['index'])) {
        $_SESSION['index'] = 0;
        $_SESSION['score'] = 0;
    }

    // RESET THE QUIZZ/ détruire une session et commencer une autre
    if (isset($_POST['reset'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    $index = $_SESSION['index'];

    // AFFICHER LE SCORE À LA FIN DU QUIZZ
    if ($index >= $totalQuestions) {
        echo "<h2>Quiz terminé !</h2>";
        echo "<p>Votre score : " . $_SESSION['score'] . " / $totalQuestions</p>";

        echo "<form method='POST'>
                <button type='submit' name='reset'>Recommencer</button>
              </form>";
        return;
    }

    // LES RÉPONSES ET LES EXPLICATIONS
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reponse'])) {
        $choix = $_POST['reponse'];
        $bonneReponse = $reponses[$index];
        // AFFICHER LE CHOIX QU'ON A CHOISI
        echo "<p><strong>Your response :</strong> $choix</p>";
        //AFFICHAGE DE LA BONNE RÉPONSE + EXPLICATION 
        echo "<p><strong>THE RIGHT CHOICE  :</strong> $bonneReponse</p>";
        echo "<p><em>WHY YOU'RE WRONG? :</em> " . $explications[$index] . "</p>";

        if ($choix === $bonneReponse) {
            $_SESSION['score']++;
            echo "<p style='color:green'><strong>GOOD JOB BUDDY! 😌</strong></p>";
        } else {
            echo "<p style='color:red'><strong>IT'S OK TO NOT BE OK 🙂‍↔️</strong></p>";
        }
        // LE BOUTON NEXT QUESTION
        $_SESSION['index']++;
        echo "<form method='POST'><button type='submit'>NEXT QESTION</button></form>";
        return;
    }

    // AFFICHER LA QUESTION SUIVANTE 
    echo "<form method='POST'>";
    echo "<h3>Question " . ($index + 1) . " :</h3>";
    echo "<p>" . $questions[$index] . "</p>";

    foreach ($options[$index] as $opt) {
        // ÇA CONVERTIT S CARACTÈRES SPÉCIAUX EN ENTITÉS HTML
        $safe = htmlspecialchars($opt);
        echo "<label><input type='radio' name='reponse' value='$safe' required> $safe</label><br>";
    }

    echo "<br><input type='submit' value='Valider'>";
    echo "</form>";
}

QuizzAffichage($questions);
