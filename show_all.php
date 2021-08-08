<?php 
    include "topbit.php"; 

    $showall_sql="SELECT * FROM `book_reviews` ORDER BY `book_reviews`.`Title` ASC";
    $showall_query=mysqli_query($dbconnect, $showall_sql);
    $showall_rs=mysqli_fetch_assoc($showall_query);
    $count=mysqli_num_rows($showall_query);
 ?>
        
        <div class="box main">
            <h2>All items</h2>
            <?php

Welcome

Reading is one of life's simple pleasures. Please search the database by using the tools in the side bar. Hopefully you will find something that appeals.

I must confess to having a love of Science Fiction so many of the books that I have reviewed are from that genre. The plan is to add more reviews to this site as time allows.

If you'd like to suggest a book for review, please feel free to get in touch.

---


            if ($count<1) 

            {

            ?>

            <div class="error">
                Sorry! There are no results that match your search.
                Please use the search box in the sidebar to try again.
                
            </div>


            <?php 


            } // end cunt 'if'

            // if there aree not results, ouput an error 
            else {

                do {

                ?>

            <!-- Results go here -->
            <div class="results">
            <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span>
            </p>

            <p>Author: <span class="sub_heading"><?php echo $showall_rs['Author']; ?></span>
            </p>

            <p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre']; ?></span>
            </p>

            <p>Rating: <span class="sub_heading">
            
                <?php 
                for ($x=0; $x < $showall_rs['Rating']; $x++)
                
                {
                    echo "&#9733;";

                }

                ?>
                
            </span></p>

            

            <p><span class="sub_heading">Review / Response</span></p>

            <p>
                
                <?php echo $showall_rs['Review']; ?>
     
            </p>
            
            </div> <!-- / end results -->

            <br />
        

            <?php


                } // end of 'do' 

                while($showall_rs=mysqli_fetch_assoc($showall_query));


            } // end else 

            // if ther are results,  diaplay them 

            ?>

        </div>    <!-- / main -->
        
<?php 
    include "footer.php"; 
 ?>
