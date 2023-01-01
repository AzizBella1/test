<div id="realBody" >
    <div class="gestionform">
        <form class="form "  action="" method="get">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <select class="form-control" name="genre" id="">
                                <option value="">genre</option>
                                
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>titre :</label>
                    <input type="text" value="" class="form-control" placeholder="Titre de film" name="titre">
                </div>
            </div>
            <div class="form-group col-md-6">
                <label>annee :</label>
                <input type="number" class="form-control" value="" name="annee">
                
            </div>
            <div class="form-group col-md-6">
                <label>dure :</label>
                <input type="number" class="form-control" value="" name="dure">
                
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label>resume :</label>
                    <textarea class="form-control" name="resume" cols="30" rows="10"></textarea>
                    
                </div>
                <br>
                <div class="form-group col-md-6">
                    <label>en cours de projection :</label>
                    oui <input type="radio" value="1" name="projection"> non <input type="radio" value="0" name="projection">
                </div>
                <br>
                <div class="form-group col-md-5">
                    <label>date creation :</label>
                    <input class="form-control" type="date" value="" name="dateCreation">
                </div>
            </div>
            <br>
            <div >
                <button type="submit" value="inserer" class="btn btn-primary" name="inserer">inserer</button>
                <button type="submit" value="modifier" name="modifier">modifier</button>
                <button type="submit" value="supprimer" name="supprimer">supprimer</button>
            </div>
        </form>    
        
    </div>
           
</div>