<ul class="list-unstyled d-flex ml-auto navigation">

<?php foreach ($menus as $menu) {

 echo "<li><a href=\"$menu[slug]\">$menu[title]</a></li>";

}

?>

</ul>
