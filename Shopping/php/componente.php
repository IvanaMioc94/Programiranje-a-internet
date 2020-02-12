<?php 

function componente($NazivProizvoda, $CijenaProizvoda, $SlikaProizvoda, $productid){
    $element = "
    
    <div class=\"col-md-2 col-sm-2 my-5 my-md-0\">
                <form action=\"kupnja.php\" method=\"post\">
                    <div class = \"card shadow\">
                        <div>
                            <img src=\"$SlikaProizvoda\" alt=\"Slika1\" class=\"img-fluid card-img-top\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$NazivProizvoda</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>

                            <h5>
                                <span class=\"price\">$CijenaProizvoda km/kg</span>
                            </h5>
                            <button type=\"sumbit\" class=\"btn btn-warning my-2\" name=\"add\">Dodaj u korpu <i class=\"fas fa-shopping-cart\"></i></button>
                            <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"Kosara.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                
                                <h5 class=\"pt-2\">$productprice Km/Kg</h5>
                                
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}