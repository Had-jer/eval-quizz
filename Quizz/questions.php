<?php
require_once "quizz-questions.php";
  function afficherQuestion( array $questions){
    // LA BOUCLE QUI AFFICHE LES QUESTIONS DU QUIZZ
    foreach ($questions as $key => $value) {
        echo "<p>". $value["question"]. "</p>";
        // IL FAUT RAJOUTER L'ATTRIBUT NAME ET VALUE A MA BALISE INPUT
        // IL FAUT FAIRE UN BOUCLE POUR AFFICHER LES OPTIONS ET QUE POUR CHAQUE QUESTION LE INPUT AURA UN 'NAME DIFFERENT'
        echo "<input type= 'radio' >". $value["option1"]. "</input>";
        echo "<input type= 'radio' >". $value["option2"]. "</input>";
        echo "<input type= 'radio' >". $value["option3"]. "</input>";
        echo "<input type= 'radio' >". $value["option4"]. "</input>";
        
            }
        // echo 'hadjer';
        // LA BOUCLE QUI AFFICHE LES OPTIONS DU QUIZZ
        
    }
    // foreach ($questions as $key => $value) {
    //     }
  
  afficherQuestion($questions);