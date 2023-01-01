<form action="" method="get">
    <div class="row navbar2">
        <div class="col-sm-3">
            <select class="form-select" name="ville" id="ville">
                <option value="Entrez votre ville">Listes des Genres</option>
                <option value="Rabat">Action</option>
                <option value="Salé">Drama</option>
                <option value="Temara">Romantic</option>
                <option value="Kénitra">Comédie</option>
            </select>
        </div>
        <div class="col-sm-3">
            <select class="form-select" name="film" id="film">
                <option value="Listes des Films">Listes des films</option>
                <option value="Salé">Remana</option>
                <option value="Temara">Prince of percie</option>
                <option value="Kénitra">priget</option>
            </select>
        </div>
        <div class="col-sm-1">
            <label for=""><B>Programme</B></label>
        </div>
        <div class="col-sm-3">
            <input id="Date" type="date" class="form-control" name="Date">
        </div>
        <div class="col-sm">
            <input id="date" type="button" class="btn btn-danger"  name="Recherche" value="Recherche">
        </div>
    </div>


    <div id="realBody" class="row ">
        <div class="row" >
            <p class="text-center date">
            <?php
            $jours = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
            $mois = [1=>"Janvier", 2=>"Février", 3=>"Mars",4=> "Avril", 5=>"Mai", 6=>"Juin", 7=>"Juillet", 8=>"Août", 9=>"Septembre", 10=>"Octobre", 11=>"Novembre" ,12=>"Décembre"];
            
            $indexJour = date('w');
            $currentJour= $jours[$indexJour];

            $indexMois = date('m');
            $currentMois= $mois[$indexMois];
            
            
        # 
            echo "$currentJour , $currentMois ".date('Y');
            ?>
            </p>
            
    
            
        </div>
        <div class="row">
            <div class="col-sm">
                
                <div class="col-sm">
                    <img class="filmimg" src="res/Inception-2010.jpeg" alt="">
                </div>
                <div class="col-sm centre">
                    Inception
                </div>
                <div class="col-sm centre">
                    12h00 / 20h00    
                </div>
                <br>
                <div class="col-sm">   
                    <button id="btnbuy" name="ticket" class="btn btn-style btn-success btn-lg">TICKET</button> 
                </div>
                
                
            </div>
            <div class="col-sm ">
                
                <div class="col-sm">
                    <img class="filmimg" src="res/Avatar-The-Way-of-Water.jpeg" alt="">
                </div>
                <div class="col-sm centre">
                Avatar The Way of Water
                </div>
                <div class="col-sm centre">
                    16h00   
                </div>
                <br>
                <div class="col-sm">   
                    <button id="btnbuy" name="ticket" class="btn btn-style btn-success btn-lg">TICKET</button> 
                </div>
                
                
            </div>
            <div class="col-sm tse">
                
                <div class="col-sm">
                    <img class="filmimg" src="res/spider_man_homecoming_poster_by_goxiii-da06flq.jpeg" alt="">
                </div>
                <div class="col-sm centre">
                    spider man
                </div>
                <div class="col-sm centre">
                    22h00    
                </div>
                <br>
                <div class="col-sm">   
                    <button id="btnbuy" disabled name="ticket" class="btn btn-style btn-success btn-lg">TICKET</button> 
                </div>
                
                
            </div>
        </div>
        
        
        
        
                
    </div>
</form>



<?php
    if (isset($_GET['ticket'])) {
        
    }
?>



