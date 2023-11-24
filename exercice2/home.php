<?php   
 session_start(); 
 include_once("bd.php"); $prods=getProducts();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>



    header {
            background-color:cornflowerblue;
            color: black;
            padding: 10px;
display: flex; justify-content: space-between;
        }


footer{
    background-color: cornflowerblue;
    width: 100%;
    display: flex;
    justify-content: space-between;
    position: relative;
    height: 60px;
    margin-top: 300px;
    
    
}

.container{
    border: 2px solid black;
    border-radius: 3px ;
    box-shadow: 2px 2px 2px 2px solid gray;
display: flex;
justify-content: space-between;
flex-wrap: wrap;
width: 60%;
padding: 40px 40px 40px 40px;
}

.prodimg{
 width: 160px;
 height: 160px;
 top: 20px;
}


.produit{
    border: 1px solid black;
border-radius: 4px;
box-shadow: 5px 2px 2px 2px solid rgb(22, 21, 21);


}
.add{
    width: 30px;
    height: 30px;
    position: absolute;
    margin-left: 120px;
}

aside{
    border: 2px solid black;
    box-shadow: 3px 3px 3px 3px solid grey;
    border-radius: 3px solid black;
    position: absolute;
    right: 4px;
    width: 32%;
    top: 109px;
    height: 527px;
}
.flexx{
    display: flex;
   
    justify-content: space-between;
}

.title{
    background-color: cornflowerblue;
    text-align: center;
    height: 45px;

}

.text{
    width: 70%;
    margin-left: 30px;
    top: 30px;
}
.element{
    border: 1px solid black;
    border-radius: 2px ;
    display: flex;
    justify-content: space-around;
    width: 400px;
    margin-left: 30px;
    margin-bottom: 10px;

}


.prodimgin{
    width: 40px;
    height: 40px;
}
.delete{
    width: 25px;
    height: 25px;

}
.colonne{
    
display: flex;
flex-direction: column;
}

.center{

    text-align: center;
}
</style>
<body>
    
<header>
        <h1>Hanouti</h1>
        <nav><a href="login.php" class="login" style="   color: black;
    text-decoration: none;
    border: 1px solid black;
    border-radius: 5px ;
    box-shadow: 2px 2px 2px grey;margin-top:30px;">Login</a></nav>
    </header>
    <section>
        <article> 
<div class="container">
            <?php foreach($prods as $prod) :?>
                <div class="produit">
                    <img src=<?="./".$prod->image ?> alt="" class="prodimg" style="margin-right:40px;">
                    <div class="titre"><?=$prod->titre ?></div>
                    <div class="prix"><?=$prod->prix ?></div>
                    <a href=<?= "add.php?id=".$prod->id ?> ><img src="add.png" style="    position: absolute; margin-top:-190px; margin-right: 50px;"  class="add"></a>
                    <a href=<?="details.php?id=".$prod->id ?>  class="detail">Detail</a>
                </div>
            <?php endforeach ?> 
            </div>
        </article>
        
    </section>

    <aside> 
    <div style="   background-color:darkblue;
    width: 100%;
    color:aliceblue;
  
    position: relative;
    height: 60px;
    margin-top: 30px;
    text-align: center;">
             PANIER
            </div>
            
            <?php if(isset ($_SESSION["cart"])):?>  
                <form action="search.php" method="POST" class="searchefrm" style="width:540px; padding: 20px; margin-left: 80px; ">
                <input type="text" >
                <input type="submit" value="Search" name="search">
            </form>
          
                <div class="title" style="margin-bottom:20px;">Total: <?=$_SESSION["total"] ?></div>
            <?php foreach($_SESSION["cart"] as $p):?>
                <div class="element">
                    <img src=<?="./".$p["image"]?> style="width:40px; height:40px;" class="prodimgmin">
                    <div><?=$p["titre"]?></div>
                    <div><?=$p["qtt"]?></div>
                    <a href="delete.php" ><img src="delete.png" alt=""  class="delete"></a>
                </div>
            <?php endforeach ?>
            <?php endif ?>
        </aside>


    <footer style="top: 50px;">
    
    footer
</footer>

</body>
</html>
