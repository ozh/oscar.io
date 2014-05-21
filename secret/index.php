<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CODE SECRET</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Anonymous+Pro:400,700' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <style>
    * {font-family: 'Anonymous Pro'; font-size:120%}
    #result img {
        height:30px;
    }
    #result a {color:white;text-decoration:underline;}
    </style>
</head>
<body>

    <div class="container">
    <h1><code>$;; ENIGME  &nbsp;  : DIVISION DE LA MUERTE</code></h1>
    <h2><code class="bg-success">$;; DIFFICULTY : EXPLOSION DE CERVEAU</code></h2>

    <?php 
        $post = isset( $_POST['code'] ) ? $_POST['code'] : '';
    ?>

    <hr/>

    <?php if( $post ) { ?>

        <code class="bg-primary" style="font-size:30px" id="result">...</code>
        
        <script>
        var messages = [
        'VERIFICATION DE LA SAISIE',
        'RECHERCHE DE FORMULE',
        'CALCUL DES VARIABLES',
        'INTERPRETATION BINOCULAIRE',
        'SYNTHESE EXTRAPOLATOIRE',
        'PARAMETRAGE SYNAPTIQUE',
        'CONFIGURATION FINALE',
        'PREPARATION DE L\'AFFICHAGE',
        ];
        
        var answer = '<?php if( $post == '0.5' or $post == '0,5' ) { echo "CORRECT !!<br>PROCHAINE ENIGME DANS<br>ULTRA COMPUTER 5000"; } else { echo "INCORRECT !! <a href=?>RE-ESSAYER</a>"; } ?>';
        
        var i = 0;
        var delay = 4500;
        
        window.setTimeout("Tick()", 1000);
        function Tick() {
            $('#result').html( messages[i] + ' ... &nbsp;<img src="716.gif"/>' );
            i++;
            if( i <= messages.length ) {
                 window.setTimeout("Tick()", delay);
            } else {
                $('#result').html( answer );
            }
        }
        
        
        </script>
        


    <?php } else { ?>
    

        <form role="form" method="post">
            <div class="form-group">
            
                <div class="form-group">
                    <label>Quel nombre divisé par lui-même donne son double ?</label>
                    <br>
                    <label for="code">Réponse :</label>
                    <input type="number" class="form-control" id="code" name="code" placeholder="entrez réponse">
                </div>            
                
            </div>

        <button type="submit" class="btn btn-success">Vérifier</button>
        </form>

 
    <?php } ?>
    
    </div>

</body>
</html>