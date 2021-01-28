<?php

function inputElement($id, $name, $value, $className)
{
    $ele = "      
              <input type=\"text\" id='$id' name='$name' value='$value' autocomplete=\"off\" class='$className' >
    ";

    echo $ele;
}

function buttonElement($btnid, $styleclass, $btntype, $text, $name, $attr)
{
    $btn = "
       <button name='$name' '$attr' class='$styleclass' type='$btntype' id='$btnid' >$text</button>
    ";
    echo $btn;
}

