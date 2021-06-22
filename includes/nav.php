

<style>
    *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    list-style:none;
      font-family:queen -apple-system, BlinkMacSystemFont,
     'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
     'Open Sans', 'Helvetica Neue', sans-serif ;
}



  
nav {
    font-family:queen -apple-system, BlinkMacSystemFont,
     'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell,
     'Open Sans', 'Helvetica Neue', sans-serif ;
    display: flex;
    justify-content: space-around;
    align-items: center;
 background-color:rgb(0, 0, 0, 0.6);
     line-height: 85px ;
  
}

 
.chef {
    display:flex;
    justify-content:space-between;
    text-align: center;
    color: whitesmoke;
    border:1px;
    text-transform: uppercase;
    font-size: 25px;

}
.chef h1:hover  {
    background-color:rgb(0, 0, 0, 0.14);
    color:whitesmoke;
    
}

    

.fake span{
    padding-left:5px;
    border: 3px solid whitesmoke;
      background-color: red;
}

.life span{
    border: none;
 
    border-top:3px solid whitesmoke ;
 border-bottom: 3px solid whitesmoke;
 border-right: 3px solid whitesmoke;
 padding-right: 10px;

    
}

.make{
    display: flex;
    justify-content: space-around;
    align-items: center;
    width: 30%;


}
.make li a {
    text-decoration:none;
    color:whitesmoke;
   
    text-transform: uppercase;
    margin-left:25px;
    padding: 5px 0;
    font-size:medium;
    
}
.make li a:hover  {
    background-color:rgb(0, 0, 0, 0.10);
    color:whitesmoke;
    border-bottom: 2px solid whitesmoke;
    
   
}


.elijah{
    padding: 10px 20px ;
    border-radius: 5px ;
    font-weight: 400;
    background-color: rgba(43, 43, 223, 0.808);
    color: whitesmoke;
}


</style>















<nav>
            <div class="chef">
        
                        <h1 class="fake"> <span>food</span><h1>
                        <h1 class="life"><span>chef</span></h1>
                  

            </div>
            <ul class="make">
                <li><a href="/">home</a></li>
                <li><a href="#aboutus">about</a></li>
                <li><a href="includes/our-service.php">service</a></li>
                <li><a href="team.php">team</a></li>
                <li><a href="#makefood">our<span>food</span></a></li>
                <li><a href=""><button class='elijah'>Signup</button></a></li>
                <li><a href="login-form.php"><button class='elijah'>login</button></a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line1"></div>
                <div class="line1"></div>
            </div>

        </nav>