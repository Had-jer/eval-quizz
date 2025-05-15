<?php

// $quizz_id = 0;
// $totalCorrect;
// $correct = 0;
// function VerifyResponse(){
//     $response = false ;

//    if($response === true ){
//     echo "Bravo, YOU'RE SMART";
// } else {
//     echo "SHIT, U LOOSER!";
// } 
// }


// fonction qui conteint la boucle qui affiche les questions de quizz
function QuizzAffichage($questions){



echo "<form method='POST'>";
    // QuizzAffichage($questions);
    echo "<input type='submit' value='Soumettre'>";
    echo "</form>";
// foreach ($questions as $key => $value ) {
    // foreach ($questions as $index => $q) {
    //     echo "<p><strong>Question " . ($key + 1) . ":</strong> " . $value['question'] . "</p>";
    //     foreach ($questions['options'] as $option) {
    //         echo "<input type='radio' name='q$key' value='$option'> $option<br>";
    //     }
    // }
    // for ($i=0; $i < $questions; $i++) { 
    //     echo "<p><strong>Question " . ($questions + 1) . ":</strong> " . $questions['question'] . "</p>";
    // }
for ($i=0; $i < $questions ; $i++) { 
    echo "<p>". $questions["quesion"]. "</p>";

    
}
}
// }
QuizzAffichage($questions = [
    [
        'question' => 'Saturne est la seule planète du système solaire à posséder des anneaux!',
        'opetions' => 'Vraie / ou Faux',
        'reponse' => 'FAUX',
        'explication' => 'uranus aussi possède des anneaux, c juste que les anneaux de Saturn sont très visibles et colorés'
    ],
    [
        'question' => 'La planète Saturne est la plus grande planète du système solaire!',
        'options' => 'Vrai / Faux',
        'reponse' => 'FAUX',
        'explication' => 'La plus grande planète du Système solaire est Jupiter '
    ],
    [
        'question' => 'La planète Saturne est une planète tellurique!',
        'options' => 'Vrai / ou Faux',
        'reponse' => 'FAUX',
        'explication' => ' C’est une géante gazeuse est composée essentiellement d’hydrogène et d’hélium. Une planète tellurique possède une surface solide constituée principalement de roches et de métaux comme la Terre d’où le nom.'
    ]
    ]);
// le bouton pour valider la réponse
// le bouton pour accéder au score
// l'affichage des explications après la réponse

