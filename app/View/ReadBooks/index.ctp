<?php
  // echo print_r($read_books);
  echo '<table>';
  echo '<tr>';
  echo '<th>タイトル</th>';
  echo '<th>著者</th>';
  echo '<th>借りた日</th>';
  echo '</tr>';
  foreach($read_books as $read_book){
    echo '<tr>';
    echo '<td>';
    echo $read_book['ReadBook']['title'];
    echo '</td>';
    echo '<td>';
    echo $read_book['ReadBook']['author'];
    echo '</td>';
    echo '<td>';
    echo $read_book['ReadBook']['rental_day'];
    echo '</td>';
    echo '</tr>';
  }
  echo '</table>';
  
?>