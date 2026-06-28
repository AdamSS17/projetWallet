<?php
    function controller($val){
            switch($val){
                case 1 :
                    creerWallet();
                break;
                case 2 :
                    faireDepot();
                break;
                case 3 :
                    faireRetrait();
                break;
                case 4 :
                    listerTransactions();
                break;
                case 0 :
                    quitter();
                break;
                default:
                    $choice= "Choix Invalide\n";
                    Afficher($choice); 
            }
    }
?> 