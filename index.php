<?php
include "controller.php";
        function Afficher($creer){
            echo"$creer";
        }
        function lireVariable(){
            return trim(fgets(STDIN));
        }
        function menu(){  
            $menu =  "\n**Menu distributeur** \n"; 
            Afficher($menu);
            $Creer = "> 1.Creer Wallet \n";
            Afficher($Creer);
            $depot = "> 2.Faire Depot \n";
            Afficher($depot);
            $retrait = "> 3.Faire retrait \n";
            Afficher($retrait);
            $trans = "> 4.Lister les transactions\n";
            Afficher($trans);
            $quitter = "> 0.Quitter\n";
            Afficher($quitter);
            $choixMenu = "Faites un choix";
            Afficher($choixMenu);
            
        }
        do{
            menu();
            $choix =lireVariable();
            Afficher($choix);
            controller($choix);
        }while($choix != 0)
?> 
