<!--this page works with the pagination app from app/src/pagination_app-->

<div class="paging inner_container mt-1 mb-1">

  <ul class="pagination m-0">
      <!-- if the current page is page 1 add the bootstrap disable class to
   the li. if current page is greater than one add href to previous link -->
    <li class='page-item<?php if($page_no <= 1){echo " disabled'";}else{echo "'";}?>>
      <a class='page-link' <?php if($page_no > 1){
      echo " href='?page_no=$previous_page'";
      } ?>>Previous</a>
    </li>
    <?php
    /*when the number of pages are 10 or less,
   all 10 pages should be displayed on the pagination*/
    if ($total_no_of_pages <= 10){
        for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
            if ($counter == $page_no) {
                // the current page is $counter then no href
                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
            }
            else {

                //if current page not $counter the add href
              echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";

            }
        }
    /*when the current page is greater than 4 and less than the total number of pages -4,
   we add ... after page 2 and start from current page - adjacent (which we set to 2) and
   add another ...current page + adjacent */
    }elseif($total_no_of_pages > 10){
        if($page_no <= 4) {
            for ($counter = 1; $counter < 8; $counter++){
                  if ($counter == $page_no) {
                      // the current page is $counter then no href
                     echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
                    }else{
                      //if current page not $counter the add href
                           echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
                    }
            }
            echo "<li class='page-item'><a class='page-link'>...</a></li>";
            echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
            echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
        }
    }elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {
        echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
        echo "<li class='page-item'><a class='page-link'>...</a></li>";
        for (
             $counter = $page_no - $adjacents;
             $counter <= $page_no + $adjacents;
             $counter++
             ) {
             if ($counter == $page_no) {
                echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
            }else{
                  echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
              }
        }
        echo "<li class='page-item'><a class='page-link'>...</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page_no=$second_last'>$second_last</a></li>";
        echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    }else{/*when the current page number is greater than 4 but not less than the total number of pages -4
      we add .. after page 2 and again from total page number - 6*/
      echo "<li class='page-item'><a class='page-link' href='?page_no=1'>1</a></li>";
      echo "<li class='page-item'><a class='page-link' href='?page_no=2'>2</a></li>";
      echo "<li class='page-item'><a class='page-link'>...</a></li>";
      for (
           $counter = $total_no_of_pages - 6;
           $counter <= $total_no_of_pages;
           $counter++
           ) {
           if ($counter == $page_no) {
               // the current page is $counter then no href
               echo "<li class='page-item active'><a class='page-link'>$counter</a></li>";
            }else{
               //if current page not $counter the add href
                echo "<li class='page-item'><a class='page-link' href='?page_no=$counter'>$counter</a></li>";
            }
        }
    }
    ?>
    <li class='page-item<?php if($page_no >= $total_no_of_pages){
        //if current page is last page add bootstrap disable class to next
            echo " disabled'";
          }else{echo "'";} ?>>
            <a class='page-link'<?php if($page_no < $total_no_of_pages) {
            echo " href='?page_no=$next_page'";
            } ?>>Next</a>
    </li>

            <?php if($page_no < $total_no_of_pages){
                //display last if current page is less than total page otherwise it doesn't show
            echo "<li class='page-item'><a class='page-link' href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
            }
        ?>
  </ul>
</div>
