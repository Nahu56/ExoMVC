
<h1>Bonjour, je m'appelle Thimothé</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Created at</th>
      <th scope="col">Commentaires</th>
    </tr>
  </thead>
  <tbody>

    <?php
      foreach($query as $post){
        //var_dump($post);
        echo "<tr>";
        echo "<th scope='row'>". $post['id'] ."</th>";
        echo "<td>". $post['title'] ."</td>";
        echo "<td>". $post['description'] ."</td>";
        echo "<td>". $post['created_at'] ."</td>";
        echo "<td> <a href='index.php?action=comments-list&post_id=". $post['id'] ."'>voir</a> </td>";
        echo "</tr>";
      }
    ?>

    

  </tbody>
</table>