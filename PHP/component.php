<?php

function inputElement($icon, $placeholder, $name, $value)
{


    $element =
        "<div class='input-group mb-3'>
  <div class='input-group-prepend'>
    <span class='input-group-text bg-warning' >$icon</span>
  </div>
  <input type='text' class= 'form-control' placeholder= ' $placeholder ' name='$name' value='$value' autocomplete='off'>
 </div>";

    echo $element;

}

function buttonElement($btnid, $styleclass, $text, $name, $attribute)
{

    $btn = " <button name = '$name' $attribute class ='$styleclass' id = '$btnid'>$text</button>";

    echo $btn;
}

?>