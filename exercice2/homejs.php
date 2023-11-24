<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


</head>
<style>
    header {
    background-color:cornflowerblue;
    color: black;
    padding: 10px;
display: flex; justify-content: space-between;
}
.panier{
    background-color: cornflowerblue;
    width: 100%;
    display: flex;
    justify-content: space-between;
    position: relative;
    height: 60px;
    margin-top: 70px;
    text-align: center;
}
footer{
    background-color: cornflowerblue;
    width: 100%;
    display: flex;
    justify-content: space-between;
    position: relative;
    height: 60px;
    margin-top: 70px;
    text-align: center;
    
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
        <article>       <div class="flexx">
       <div class="container" style="  border: 2px solid black;
    box-shadow: 3px 3px 3px 3px solid grey;
    border-radius: 3px solid black;
    position: absolute;
    left: -2px;
    width: 60%;
    top: 109px;
    height: 527px;"></div></article>
       </section>

       <aside style="  border: 2px solid black;
    box-shadow: 3px 3px 3px 3px solid grey;
    border-radius: 3px solid black;
    position: absolute;
    right: 4px;
    width: 32%;
    top: 109px;
    height: 527px;">      

        <div style="   background-color:darkblue;
    width: 100%;
    color:aliceblue;
  
    position: relative;
    height: 60px;
    margin-top: 30px;
    text-align: center;  margin-bottom:20px;">
             PANIER
            </div>
            <div class="searchefrm" >
                <input type="text" oninput="search(this)" style="width:100%; margin-bottom:20px;">
            </div>
            <div id='total' class="title"  style="margin-bottom:20px;">Total: </div>
            <div class="element"style="display: flex; flex-direction: column;border:none;">
                
            </div>
        </aside>
    <footer style="top: 650px; text-align:center; font-size:larger;">

    Footer
</footer>

    <script src="script.js"></script>

</body>
</html>
