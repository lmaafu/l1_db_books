<div class="box side">
            <h2>Search | <a class="side" href="show_all.php">Show All</a></h2>
           <i>Type part of the title / author name if desired </i>
           <hr />

           <!-- Start of Title Search -->
           

           <form method="post" action="title_search.php" enctype="multipart/form-data">

           <input class="search" type="text" name="title" size="40" value="" required placeholder="Title....."/>
           
           <input class="submit"type="submit" name="find_title" value="Search"/>

           
           </form>
           <!-- End of Title Search -->

            <!-- Start of author Search -->
           

            <form method="post" action="author_search.php" enctype="multipart/form-data">

            <input class="search" type="text" name="author" size="40" value="" required placeholder="Author....."/>

            <input class="submit"type="submit" name="find_author" value="Search"/>

               
            </form>
            <!-- End of author Search -->

                <!-- Start of genre Search -->
           

             <form method="post" action="genre_search.php" enctype="multipart/form-data">

            <select name="genre" required>

            <option value=""disabled selected>Genre.....</option>
            <option value="Sci Fi">Science Fiction</option>
            <option value="Humour">Humour</option>
            <option value="Historical Fiction">Historical Fiction</option>
            <option value="Non Fiction">Non Fiction</option>


               </select>

               <input class="submit" type="submit" name="find_genre" value="Search"  /> 

               
            </form>
            <!-- End of genre Search -->


            <!-- Start of rating form  -->
            <form method="post" action="rating_search.php"
            enctype="multipart/form-data">
            
                <select class="half_width" name="amount">
                    <option value="exactly" >Exactly....</option>
                    <option value="more"selected>At least... </option>
                    <option value="less">At most... </option>  
                </select>

                <select class="half_width" name="stars">
                    <option value=1>&#9733;</option>
                    <option value=2>&#9733;&#9733;</option>
                    <option value=3 selected>&#9733;&#9733;&#9733;</option>
                    <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
                    <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                </select>

                    <input type="submit" class="submit" name="find_rating" value="Search" />
                
            </form>

            <!-- end of rating form  -->


          <hr />
          

        </div>    <!-- / side bar -->      


<div class="box footer">
            Lavinia Ma'afu  2021
        </div>    <!-- / footer -->
    
  
