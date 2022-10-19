<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDo Kiosk</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <?php
    $category = array("Burgers", "Chicken", "Drinks", "Fries & Extras");
    $Burgers = array("Big Mac Solo", "Quarter Pounder", "Cheeseburger");
    $Chicken = array("1-pc Chicken Mcdo", "2-pc Chicken Mcdo", "8-pc Chicken Mcdo");
    $Drinks = array("Iced tea", "Coke", "Sprite");
    $extras = array("Fries", "Apple pie");

    $categoryImages =array();
 

    ?>
<div class="header"></div>

    <div class="content">

        


        <form  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="menu">
        <?php
                foreach ($category as $itemCategory) {
                    
                   
                    echo "

                    <input type=\"submit\" value=\"$itemCategory\" 
                    class=\"category-container\"
                    style=\"background-image: url('./img/test.png');
                     border:none; 
                     background-repeat:no-repeat;
                     background-size:80% 80%;
                     padding-top: 120px;
                     background-position: top;
                     margin: 25px;
    
                     \"
                     name=\"item_cat\">
                     ";

                
                    
                }
            
                $foodCategory = $_POST['item_cat'];
                
   
            ?>
            
</form>
       
        <!-- ----------------------divider--------------------------------------- -->
        <!-- vv make the items wrap within the div -->
        <div class="catalog">
        <?php

        if($foodCategory == "Burgers"){
            $foodCategory = $Burgers;
            

        } elseif($foodCategory == "Chicken"){
            $foodCategory = $Chicken;
        } elseif($foodCategory == "Drinks"){
            $foodCategory = $Drinks;
        } elseif($foodCategory == "Fries & Extras"){
            $foodCategory = $extras;
        }

        foreach ($foodCategory as $item) {
                        // echo "<div class=\"card\" style=\"width: 15rem ; height: 250px\">
                        // <img src=\"./img/$item.jpg\" class=\"card-img-top\" alt=\"...\">
                        // <div class=\"card-body\" style=\"height 1em;\">
                        //     <p class=\"card-text\"><b>$item</b></p>
                        //     <p class=\"card-text\"><b>$item</b></p>
                            
                        // </div>
                        // </div>";

                    //     echo "

                    // <input type=\"submit\" value=\"$item \n adklfj\" 
                    // class=\"category-container\"
                    // style=\"background-image: url('./img/test.png');
                    //  border:none; 
                    //  background-repeat:no-repeat;
                    //  background-size:80% 80%;
                    //  padding-top: 180px;
                    //  background-position: top;
                    //  margin: 25px;
                    //  width: 15rem;
                    //  height: 15rem;
                    //  font-weight: bold;
                    //  text-align: left;

                    //  \"
                    //  name=\"test2\">
                    //  ";

                    echo "
                    <div>
                    
      <input type=\"radio\" name=\"selection\" value=\"$item\">
      <label for=\"$item\" style=\"
      padding-left:15px;
      background-image: url('./img/$item.jpg');
      border:1px solid rgba(172, 172, 172, 0.521); 
      background-repeat:no-repeat;
      background-size:65% 65%;
      background-position:50px 15px !important;
      border-radius: 25px;\">$item <br> adfjaldkj</label>
    </div>
                    ";

                $e = $item;   
                        
                }

                echo $e;
        
                
            ?>  
        </div>
        
       

    </div>
    <div class="order-view">
        <div class="total-view">
            <p>MY ORDER - EAT IN</p>
            <P>TOTAL $1000</P>
        </div>
        <div class="order-list">

        </div>

        <div class="button-panel">
        <input type = "submit" value="CANCEL ORDER" class="kiosk-button"/>
        <input type = "submit" value = "DONE" class="kiosk-button"/>
        </div>

    </div>

    <!-- test changes -->


    

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>