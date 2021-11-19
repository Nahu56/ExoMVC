<h1>Commentaire :</h1><br>
<a class="btn btn-primary" href="index.php" role="button">Retour</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Description</th>
        <th scope="col">Created at</th>
    </tr>
    </thead>
    <tbody>

    <?php
        foreach($query as $post){
        //var_dump($post);
        echo "<tr>";
            echo "<th scope='row'>". $post['id'] ."</th>";
            echo "<td>". $post['description'] ."</td>";
            echo "<td>". $post['created_at'] ."</td>";
        echo "</tr>";
        }
    ?>

    

    </tbody>
</table>