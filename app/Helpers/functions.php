<?php
function cloudinary ( string $path = null ) : string {
  return 'https://res.cloudinary.com/breef/image/upload/' . $path;
}
