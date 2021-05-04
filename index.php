<?php
require_once("render_functions.php");
$content = getHtml("views/createView.php");
$html = render("views/template.html", $content, "create form");

echo $html;


echo "This is a file change....from github";
