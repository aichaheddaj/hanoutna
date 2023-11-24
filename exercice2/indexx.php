<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hanoutna</title>
 
</head>
<body>
     
<header>
        <h1>Hanouti</h1>
        <nav><a href="login.php" class="login"style="   color: black;
    text-decoration: none;
    border: 1px solid black;
    border-radius: 5px ;
    box-shadow: 2px 2px 2px grey;">Login</a></nav>
    </header>

   <?php  
   $jsoninfo='Produit.json';

   $data=file_get_contents($jsoninfo);

   $prods=json_decode($data,true);

  
   ?> 

<section>
    <article>
    <div class="flexx">
    <div class="container">
    <?php foreach($prods as $prod) :?>
        <div class="produit"> 
        <a href=<?= "add.php?id=".$prod['id'] ?>><img src="add.png" class="add"></a>


                    <img src="<?php echo $prod['image']; ?>" class="prodimg">
                    <div class="center">
                    <div class="titre"><?php echo $prod['titre']; ?></div>
                    <div class="prix"><?php echo $prod['prix']; ?></div>
                    <a href=<?="details.php?id=".$prod['id'] ?>  class="detail"><input type="submit" value="Detail"></a>
                    </div>

                </div>
            <?php endforeach ?> 
            </div>

                </div>
    </article>
</section>


<aside>
    <br> 
    <form action="add.php" method="post">
        <input type="text" class="text"> <input type="button" value="Search" name="search">

    </form>
<br> 
    <div class="title">Total: 2345DH</div>
 <br> 
 <div class="colonne">
<div class="element">
    <img src="1.jpeg" class="prodimgin">
 <div class="info">hp victus</div>
 <div class="nbr">3</div>
 <a href="delete.php" ><img src="delete.png" class="delete"></a>
</div>


<div class="element">
    <img src="1.jpeg" class="prodimgin">
 <div class="info">hp victus</div>
 <div class="nbr">3</div>
 <a href="delete.php" ><img src="delete.png" class="delete"></a>
</div>


<div class="element">
    <img src="1.jpeg" class="prodimgin">
 <div class="info">hp victus</div>
 <div class="nbr">3</div>
 <a href="delete.php" ><img src="delete.png" class="delete"></a>
</div>


<div class="element">
    <img src="1.jpeg" class="prodimgin">
 <div class="info">hp victus</div>
 <div class="nbr">3</div>
 <a href="delete.php" ><img src="delete.png" class="delete"></a>
</div>

</div>


</aside>
</div>

<footer style=" text-align: center;">
    
    footer
</footer>

</body>
</html>

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